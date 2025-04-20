<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
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
        $request->validate([
            'title' => 'required|string|max:255',
            'sub_title_or_time' => 'nullable|string|max:255',
            'details' => 'required|string',
        ]);
    
        Experience::create([
            'title' => $request->title,
            'sub_title_or_time' => $request->sub_title_or_time,
            'details' => $request->details,
        ]);
    
        return redirect()->back()->with('success', 'Experience added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'sub_title_or_time' => 'nullable|string|max:255',
            'details' => 'required|string',
        ]);
    
        $experience->update([
            'title' => $request->title,
            'sub_title_or_time' => $request->sub_title_or_time,
            'details' => $request->details,
        ]);
    
        return redirect()->back()->with('success', 'Experience updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
{
    $experience->delete();

    return redirect()->back()->with('success', 'Experience deleted successfully.');
}
}
