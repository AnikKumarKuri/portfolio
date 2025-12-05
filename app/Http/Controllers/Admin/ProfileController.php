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
            'cv_link' => 'nullable|url',
            'email' => 'nullable|email',
            'phone' => 'nullable|max:50',
            'location' => 'nullable|max:255',
            'github' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',

            // new validation for image
            'profile_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->except('profile_image');

        // handle image upload
        if ($request->hasFile('profile_image')) {

            // delete old image if exists
            if ($profile->profile_image && Storage::disk('public')->exists($profile->profile_image)) {
                Storage::disk('public')->delete($profile->profile_image);
            }

            $data['profile_image'] = $request->file('profile_image')->store('profile', 'public');
        }

        $profile->update($data);

        return redirect()->back()->with('success', 'Profile updated!');
    }
}
