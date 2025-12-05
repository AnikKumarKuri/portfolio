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

    <form action="{{ route('admin.profile.update') }}" method="POST" class="space-y-5">
        @csrf

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
            <label class="block text-sm text-gray-300 mb-1">Subtitle (Hero short line)</label>
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

        <div>
            <label class="block text-sm text-gray-300 mb-1">CV Link (Google Drive / PDF link)</label>
            <input name="cv_link" value="{{ old('cv_link',$profile->cv_link) }}"
                   class="w-full p-3 rounded-lg bg-white/5 border border-white/10">
        </div>

        <button class="px-6 py-3 bg-indigo-500 rounded-lg hover:bg-indigo-600 font-semibold">
            Save Profile
        </button>
    </form>
</div>
@endsection
