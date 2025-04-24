<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        return view('pages.admin.blogs',['blog'=> Blog::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'type' => 'required|string',
        'title' => 'required|string|max:255',
        'image' => 'nullable|file|mimes:jpg,jpeg,png', // if you’re uploading
        'video' => 'nullable|string',
        'blog'  => 'required|string',
    ]);

    // Handle video link (if type is YouTube)
    if ($validated['type'] == '0' && !empty($validated['video'])) {
        // Extract video ID from various formats
        $videoUrl = $validated['video'];
        preg_match('%(?:youtube\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $videoUrl, $matches);
        $videoId = $matches[1] ?? null;

        if ($videoId) {
            $validated['video'] = "https://www.youtube.com/embed/$videoId";
        } else {
            return back()->withErrors(['video' => 'Invalid YouTube URL.']);
        }
    }
    if ($request->hasFile('image') && $validated['type'] == '1') {
        $path = $request->file('image')->store('blogs', 'public');
        $validated['image'] = '/storage/' . $path;
    }
    Blog::create($validated);

    return redirect()->back()->with('success', 'Blog created successfully.');
}

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        // dd( $blog->type == $request->type);
        $validated = $request->validate([
            'type' => 'required|string',
            'title' => 'required|string|max:255',
            'image' => 'nullable|file|mimes:jpg,jpeg,png', // if you’re uploading
            'video' => 'nullable|string',
            'blog'  => 'required|string',
        ]);
    
        // Handle video link (if type is YouTube)
        if ($validated['type'] == '0' && !empty($validated['video'])) {
            // Extract video ID from various formats
            $videoUrl = $validated['video'];
            preg_match('%(?:youtube\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $videoUrl, $matches);
            $videoId = $matches[1] ?? null;
    
            if ($videoId) {
                $validated['video'] = "https://www.youtube.com/embed/$videoId";
            } else {
                return back()->withErrors(['video' => 'Invalid YouTube URL.']);
            }
        }
        if($blog->type != $request->type){
            $this->deleteBlogImageIfExists($blog->image);

        }
        if ($request->hasFile('image') && $validated['type'] == '1') {
            $path = $request->file('image')->store('blogs', 'public');
            $validated['image'] = '/storage/' . $path;

            $this->deleteBlogImageIfExists($blog->image);

        }
        $blog->update($validated);
    
        return redirect()->back()->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
{
    // Delete old image if exists
   
$this->deleteBlogImageIfExists($blog->image);
    // Delete blog entry
    $blog->delete();

    return redirect()->back()->with('success', 'Blog deleted successfully.');
}
function deleteBlogImageIfExists($path) {
    $imagePath = str_replace('/storage/', '', $path);
    if ($path && \Storage::disk('public')->exists($imagePath)) {
        \Storage::disk('public')->delete($imagePath);
    }
}
}
