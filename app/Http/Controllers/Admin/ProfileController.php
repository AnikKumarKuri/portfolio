<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        // Always keep only one profile record
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
        ]);

        $profile->update($request->all());

        return redirect()->back()->with('success', 'Profile updated!');
    }
}
