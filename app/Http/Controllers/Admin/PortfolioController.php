<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('pages.admin.portfolio',['portfolios'=>$portfolios]);
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
            'title' => 'nullable|string|max:255',
            'target_link' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
        ]);
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('portfolios', 'public'); // 'portfolios' folder inside storage/app/public
            $validated['image'] = $imagePath;
        }
    
        $portfolio = Portfolio::create($validated);
    
        return redirect()->back()->with('success', 'Portfolio created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
       
            // $portfolio = Portfolio::findOrFail($portfolio);
        
            $validated = $request->validate([
                'title' => 'nullable|string|max:255',
                'target_link' => 'nullable|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'description' => 'nullable|string',
            ]);
        
            if ($request->hasFile('image')) {
                // Delete old image if exists
                if ($portfolio->image && \Storage::disk('public')->exists($portfolio->image)) {
                    \Storage::disk('public')->delete($portfolio->image);
                }
        
                // Upload new image
                $imagePath = $request->file('image')->store('portfolios', 'public');
                $validated['image'] = $imagePath;
            }
        
            $portfolio->update($validated);
        
            return redirect()->back()->with('success', 'Portfolio Update successfully.');
        
    }

    /**
     * Remove the specified resource from storage.
     */
//     public function destroy(Portfolio $portfolio)
    
// {
//     $portfolio = Portfolio::findOrFail($portfolio);

//     // Delete image if exists
//     if ($portfolio->image && \Storage::disk('public')->exists($portfolio->image)) {
//         \Storage::disk('public')->delete($portfolio->image);
//     }

//     // Delete the portfolio record from database
//     $portfolio->delete();

//     return response()->json(['message' => 'Portfolio deleted successfully']);
// }

    
public function destroy($id)
{
    $portfolio = Portfolio::findOrFail($id);

    // Delete image if exists
    if ($portfolio->image && \Storage::disk('public')->exists($portfolio->image)) {
        \Storage::disk('public')->delete($portfolio->image);
    }

    $portfolio->delete();

    return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio deleted successfully.');
}
}
