<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\WorkFlow;
use Illuminate\Http\Request;

class WorkFlowController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WorkFlow $workFlow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WorkFlow $workFlow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WorkFlow $workflow)
    {
        $request->validate([
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'got_tips' => 'nullable|string|max:255',
            'projects' => 'nullable|string|max:100',
            'clients' => 'nullable|string|max:100',
            'partners' => 'nullable|string|max:100',
        ]);
    
        if ($request->hasFile('banner')) {
            if ($workflow->banner && \Storage::disk('public')->exists($workflow->banner)) {
                \Storage::disk('public')->delete($workflow->banner);
            }
    
            $imagePath = $request->file('banner')->store('banners', 'public');
            $workflow->banner = $imagePath;
        }
    
        $workflow->got_tips = $request->got_tips;
        $workflow->projects = $request->projects;
        $workflow->clients = $request->clients;
        $workflow->partners = $request->partners;
        $workflow->save();
    
        return redirect()->route('home_page')->with('success', 'Workflow updated successfully!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WorkFlow $workFlow)
    {
        //
    }
}
