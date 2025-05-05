<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteInfo;
use Illuminate\Support\Facades\Storage; // ✅ Add this

class SiteInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siteInfos = SiteInfo::all();
        return view('pages.admin.site_info', compact('siteInfos'));
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
        $data = $request->validate([
            'name' => 'required|string',
            'slug' => 'nullable|string|unique:site_infos,slug',
            'profile_img' => 'nullable|image',
            'description' => 'nullable|string',
            'logo' => 'nullable|image',
            'status' => 'required|boolean',
        ]);

        $data['slug'] = $data['slug'] ?? Str::slug($data['name']);

        if ($request->hasFile('profile_img')) {
            $data['profile_img'] = $request->file('profile_img')->store('siteinfo', 'public');
        }

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('siteinfo', 'public');
        }

        SiteInfo::create($data);

        return redirect()->back()->with('success', 'Site Info created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(SiteInfo $siteInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SiteInfo $siteInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SiteInfo $siteInfo)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'slug' => 'nullable',
            'profile_img' => 'nullable|image',
            'description' => 'nullable|string',
            'logo' => 'nullable|image',
            'status' => 'required|boolean',
        ]);

        $data['slug'] = $data['slug'] ?? Str::slug($data['name']);

        if ($request->hasFile('profile_img')) {
           $this->deleteBlogImageIfExists($siteInfo->profile_img);
            // if ($siteInfo->profile_img && \Storage::disk('public')->exists($siteInfo->profile_img)) {
            //     \Storage::disk('public')->delete($siteInfo->profile_img);
            // }
            $data['profile_img'] = $request->file('profile_img')->store('siteinfo', 'public');
        }
        
        if ($request->hasFile('logo')) {
            $this->deleteBlogImageIfExists($siteInfo->logo);
            // if ($siteInfo->logo && \Storage::disk('public')->exists($siteInfo->logo)) {
            //     \Storage::disk('public')->delete($siteInfo->logo);
            // }
            $data['logo'] = $request->file('logo')->store('siteinfo', 'public');
        }

        $siteInfo->update($data);

        return redirect()->back()->with('success', 'Site Info updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SiteInfo $siteInfo)
    {
        $siteInfo->delete();
        if ($siteInfo->profile_img && \Storage::disk('public')->exists($siteInfo->profile_img)) {
            \Storage::disk('public')->delete($siteInfo->profile_img);
        }
        
        if ($siteInfo->logo && \Storage::disk('public')->exists($siteInfo->logo)) {
            \Storage::disk('public')->delete($siteInfo->logo);
        }
        return redirect()->back()->with('success', 'Site Info deleted!');
    }
}
