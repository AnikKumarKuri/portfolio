<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit()
    {
        $profile = Profile::first() ?? Profile::create([]);
        return view('admin.profile.edit', compact('profile'));
    }

    public function update(Request $request)
    {
        $profile = Profile::first() ?? Profile::create([]);

        $request->validate([
            'name' => 'required|max:255',
            'title' => 'required|max:255',
            'subtitle' => 'nullable|max:255',
            'about' => 'nullable',
            'email' => 'nullable|email',
            'phone' => 'nullable|max:50',
            'location' => 'nullable|max:255',
            'github' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',

            'profile_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            // ✅ CV upload (pdf/doc/docx)
            'cv_file' => 'nullable|mimes:pdf,doc,docx|max:5120',
            'cv_link' => 'nullable|url',
        ]);

        $data = $request->except(['profile_image','cv_file']);

        // profile image upload
        if ($request->hasFile('profile_image')) {
            if ($profile->profile_image && Storage::disk('public')->exists($profile->profile_image)) {
                Storage::disk('public')->delete($profile->profile_image);
            }
            $data['profile_image'] = $request->file('profile_image')->store('profile', 'public');
        }

        // ✅ CV file upload (store path in cv_link)
        if ($request->hasFile('cv_file')) {
            if ($profile->cv_link && str_starts_with($profile->cv_link, 'cv/') && Storage::disk('public')->exists($profile->cv_link)) {
                Storage::disk('public')->delete($profile->cv_link);
            }
            $data['cv_link'] = $request->file('cv_file')->store('cv', 'public');
        }

        $profile->update($data);

        return redirect()->back()->with('success', 'Profile updated!');
    }
}
