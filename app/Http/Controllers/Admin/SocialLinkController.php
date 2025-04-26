<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{
    public function index()
    {
        $socialLinks = SocialLink::all();
        return view('pages.admin.social_links', compact('socialLinks'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'facebook' => 'nullable|string|max:255',
            'whatsapp' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:255',
            'address' => 'nullable|string',
        ]);

        SocialLink::create($data);

        return redirect()->back()->with('success', 'Social Link Added Successfully.');
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'facebook' => 'nullable|string|max:255',
            'whatsapp' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:255',
            'address' => 'nullable|string',
        ]);

        $socialLink = SocialLink::findOrFail($id);
        $socialLink->update($data);

        return redirect()->back()->with('success', 'Social Link Updated Successfully.');
    }

    public function destroy($id)
    {
        $socialLink = SocialLink::findOrFail($id);
        $socialLink->delete();

        return redirect()->back()->with('success', 'Social Link Deleted Successfully.');
    }
}
