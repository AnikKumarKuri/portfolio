@extends('layouts.app')
@section('title','Edit Profile')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold mb-6">Edit Profile</h1>

    @if(session('success'))
        <div class="mb-4 p-3 rounded bg-green-500/20 text-green-300 border border-green-500/30">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf

        <!-- PROFILE IMAGE -->
        <div class="p-5 rounded-2xl bg-white/5 border border-white/10">
            <label class="block text-sm text-gray-300 mb-2">Profile Picture</label>

            @if($profile->profile_image)
                <img src="{{ asset('storage/'.$profile->profile_image) }}"
                     class="w-28 h-28 rounded-full object-cover border border-white/10 mb-3">
            @endif

            <input type="file" name="profile_image"
                   class="w-full p-3 rounded-lg bg-white/5 border border-white/10">
        </div>

        <!-- CV UPLOAD -->
        <div class="p-5 rounded-2xl bg-white/5 border border-white/10">
            <label class="block text-sm text-gray-300 mb-2">Upload Resume / CV (PDF/DOC)</label>

            @if($profile->cv_link)
                <a target="_blank"
                   class="text-indigo-400 underline text-sm"
                   href="{{ str_starts_with($profile->cv_link,'cv/') ? asset('storage/'.$profile->cv_link) : $profile->cv_link }}">
                    View Current CV
                </a>
            @endif

            <input type="file" name="cv_file"
                   class="mt-3 w-full p-3 rounded-lg bg-white/5 border border-white/10">

            <p class="text-xs text-gray-500 mt-2">Or use a CV URL below:</p>
            <input name="cv_link" value="{{ old('cv_link',$profile->cv_link) }}"
                   class="mt-2 w-full p-3 rounded-lg bg-white/5 border border-white/10"
                   placeholder="https://drive.google.com/...">
        </div>

        <div>
            <label class="block text-sm text-gray-300 mb-1">Name</label>
            <input name="name" value="{{ old('name',$profile->name) }}"
                   class="w-full p-3 rounded-lg bg-white/5 border border-white/10">
        </div>

        <div>
            <label class="block text-sm text-gray-300 mb-1">Title</label>
            <input name="title" value="{{ old('title',$profile->title) }}"
                   class="w-full p-3 rounded-lg bg-white/5 border border-white/10">
        </div>

        <div>
            <label class="block text-sm text-gray-300 mb-1">Subtitle</label>
            <input name="subtitle" value="{{ old('subtitle',$profile->subtitle) }}"
                   class="w-full p-3 rounded-lg bg-white/5 border border-white/10">
        </div>

        <div>
            <label class="block text-sm text-gray-300 mb-1">About</label>
            <textarea name="about" rows="5"
                      class="w-full p-3 rounded-lg bg-white/5 border border-white/10">{{ old('about',$profile->about) }}</textarea>
        </div>

        <div class="grid md:grid-cols-3 gap-4">
            <div>
                <label class="block text-sm text-gray-300 mb-1">Email</label>
                <input name="email" value="{{ old('email',$profile->email) }}"
                       class="w-full p-3 rounded-lg bg-white/5 border border-white/10">
            </div>

            <div>
                <label class="block text-sm text-gray-300 mb-1">Phone</label>
                <input name="phone" value="{{ old('phone',$profile->phone) }}"
                       class="w-full p-3 rounded-lg bg-white/5 border border-white/10">
            </div>

            <div>
                <label class="block text-sm text-gray-300 mb-1">Location</label>
                <input name="location" value="{{ old('location',$profile->location) }}"
                       class="w-full p-3 rounded-lg bg-white/5 border border-white/10">
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm text-gray-300 mb-1">GitHub</label>
                <input name="github" value="{{ old('github',$profile->github) }}"
                       class="w-full p-3 rounded-lg bg-white/5 border border-white/10">
            </div>
            <div>
                <label class="block text-sm text-gray-300 mb-1">LinkedIn</label>
                <input name="linkedin" value="{{ old('linkedin',$profile->linkedin) }}"
                       class="w-full p-3 rounded-lg bg-white/5 border border-white/10">
            </div>
            <div>
                <label class="block text-sm text-gray-300 mb-1">Facebook</label>
                <input name="facebook" value="{{ old('facebook',$profile->facebook) }}"
                       class="w-full p-3 rounded-lg bg-white/5 border border-white/10">
            </div>
            <div>
                <label class="block text-sm text-gray-300 mb-1">Twitter</label>
                <input name="twitter" value="{{ old('twitter',$profile->twitter) }}"
                       class="w-full p-3 rounded-lg bg-white/5 border border-white/10">
            </div>
        </div>

        <button class="px-6 py-3 bg-indigo-500 rounded-lg hover:bg-indigo-600 font-semibold">
            Save Profile
        </button>
    </form>
</div>
@endsection
