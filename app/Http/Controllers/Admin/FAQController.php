<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\FAQ;
use Illuminate\Http\Request;

class FAQController extends Controller
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
        // dd($request->all());
        $request->validate([
            'question' => 'required|string|max:255',
            'ans'   => 'required|string',
        ]);
    
        FAQ::create([
            'question' => $request->question,
            'ans'   => $request->ans,
        ]);
    
        return redirect()->back()->with('success', 'FAQ added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(FAQ $fAQ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FAQ $fAQ)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FAQ $faq)
    {
       
        $request->validate([
            'question' => 'required|string|max:255',
            'ans'  => 'required|string',
        ]);
    
        $faq->update([
            'question' => $request->question,
            'ans'=> $request->ans,
        ]);
    
        return redirect()->back()->with('success', 'FAQ updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FAQ $faq)
    {
        $faq->delete();
    
        return redirect()->back()->with('success', 'FAQ deleted successfully.');
    }
}
