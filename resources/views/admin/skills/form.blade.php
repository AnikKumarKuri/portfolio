@csrf

<div class="space-y-4">
    <div>
        <label class="block text-sm text-gray-300 mb-1">Skill Name</label>
        <input name="name"
               value="{{ old('name', $skill->name ?? '') }}"
               class="w-full p-3 rounded-lg bg-white/5 border border-white/10">
        @error('name')
            <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block text-sm text-gray-300 mb-1">Level (0–100 optional)</label>
        <input type="number"
               name="level"
               value="{{ old('level', $skill->level ?? '') }}"
               class="w-full p-3 rounded-lg bg-white/5 border border-white/10">
        @error('level')
            <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <button class="px-6 py-3 bg-indigo-500 rounded-lg hover:bg-indigo-600 font-semibold">
        Save Skill
    </button>
</div>
