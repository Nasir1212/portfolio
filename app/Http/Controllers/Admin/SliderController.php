<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        'title' => 'required|string|max:255',
        'slug' => 'required|string|max:255',
        'slider_img' => 'required|image|mimes:jpg,jpeg,png'
    ]);

    $imagePath = $request->file('slider_img')->store('sliders', 'public');

    Slider::create([
        'title' => $validated['title'],
        'slug' => $validated['slug'],
        'slider_img' => $imagePath,
    ]);

    return redirect()->route('admin.sliders.index')->with('success', 'Slider created!');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    
     public function update(Request $request, Slider $slider)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'slug' => 'required|string|max:255',
        'slider_img' => 'nullable|image|mimes:jpg,jpeg,png'
    ]);

    // If a new image is uploaded
    if ($request->hasFile('slider_img')) {
        // Delete old image if exists
        if ($slider->slider_img && \Storage::disk('public')->exists($slider->slider_img)) {
            \Storage::disk('public')->delete($slider->slider_img);
        }

        // Upload new image
        $imagePath = $request->file('slider_img')->store('sliders', 'public');
        $validated['slider_img'] = $imagePath;
    }

    $slider->update($validated);

    return redirect()->route('admin.home_page')->with('success', 'Slider updated!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
