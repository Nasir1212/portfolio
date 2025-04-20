<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Specialty;
use Illuminate\Http\Request;

class SpecialtyController extends Controller
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
    public function create(Request $request)
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'skill_name' => 'required|string|max:255',
        'skill_range' => 'required|string|max:3',
        'skill_color' => 'required|string',
    ]);
    $data = json_encode([
        $request['skill_name'],
        $request['skill_range'],
        $request['skill_color'],
    ]);

    Specialty::create([
        'content' => $data // store as JSON
    ]);

    return redirect()->back()->with('success', 'Skill saved successfully!');
}

    /**
     * Display the specified resource.
     */
    public function show(Specialty $specialty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Specialty $specialty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Specialty $specialty)
    {
      
        $validated = $request->validate([
            'content' => 'required|string',
            
        ]);   
        
       
        $specialty->update($validated);
        return redirect()->route('home_page')->with('success', 'Slider updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Specialty $specialty)
    {
        //
    }
}
