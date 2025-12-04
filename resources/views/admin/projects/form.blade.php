@csrf

<div class="space-y-4">
    <div>
        <label class="block mb-1 text-sm text-gray-300">Title</label>
        <input name="title" value="{{ old('title', $project->title ?? '') }}"
               class="w-full p-3 rounded-lg bg-white/5 border border-white/10">
        @error('title') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block mb-1 text-sm text-gray-300">Description</label>
        <textarea name="description" rows="4"
                  class="w-full p-3 rounded-lg bg-white/5 border border-white/10">{{ old('description', $project->description ?? '') }}</textarea>
        @error('description') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block mb-1 text-sm text-gray-300">Thumbnail Image</label>
        <input type="file" name="image"
               class="w-full p-2 rounded-lg bg-white/5 border border-white/10">
        @if(!empty($project?->image))
            <img src="{{ asset('storage/'.$project->image) }}" class="mt-2 h-20 rounded">
        @endif
    </div>

    <div>
        <label class="block mb-1 text-sm text-gray-300">Live Link</label>
        <input name="live_link" value="{{ old('live_link', $project->live_link ?? '') }}"
               class="w-full p-3 rounded-lg bg-white/5 border border-white/10">
    </div>

    <div>
        <label class="block mb-1 text-sm text-gray-300">GitHub Link</label>
        <input name="github_link" value="{{ old('github_link', $project->github_link ?? '') }}"
               class="w-full p-3 rounded-lg bg-white/5 border border-white/10">
    </div>

    <button class="px-6 py-3 bg-indigo-500 rounded-lg hover:bg-indigo-600 font-semibold">
        Save Project
    </button>
</div>
