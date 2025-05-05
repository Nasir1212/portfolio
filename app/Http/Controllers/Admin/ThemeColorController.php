<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ThemeColor;
use Illuminate\Http\Request;

class ThemeColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $themes = ThemeColor::all();
        return view('pages.admin.theme_color', compact('themes'));
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
        $request->validate([
            'name' => 'nullable|string|max:255',
            'primary' => 'required|string',
            'secondary' => 'required|string',
            'base' => 'required|string',
            'accent' => 'nullable|string',
        ]);
    
        ThemeColor::create($request->all());
    
        return back()->with('success', 'Theme added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ThemeColor $themeColor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ThemeColor $themeColor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ThemeColor $themeColor)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'primary' => 'required|string',
            'secondary' => 'required|string',
            'base' => 'required|string',
            'accent' => 'required|string',
        ]);
    
        $themeColor->update($request->all());
    
        return back()->with('success', 'Theme updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ThemeColor $themeColor)
    {
        $themeColor->delete();
    return back()->with('success', 'Theme deleted!');
    }
}
