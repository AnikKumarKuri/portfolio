@extends('layouts.app')
@section('title','Manage Skills')

@section('content')
<div class="max-w-5xl mx-auto px-4 py-10">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Skills</h1>
        <a href="{{ route('admin.skills.create') }}"
           class="px-4 py-2 bg-indigo-500 rounded-lg hover:bg-indigo-600">
            + Add Skill
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 p-3 rounded bg-green-500/20 text-green-300 border border-green-500/30">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white/5 border border-white/10 rounded-xl overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-white/5">
                <tr>
                    <th class="p-4">Name</th>
                    <th class="p-4">Level</th>
                    <th class="p-4">Actions</th>
                </tr>
            </thead>
            <tbody>
            @forelse($skills as $skill)
                <tr class="border-t border-white/10">
                    <td class="p-4 font-semibold">{{ $skill->name }}</td>
                    <td class="p-4 text-gray-400">{{ $skill->level ?? '—' }}</td>
                    <td class="p-4 flex gap-2">
                        <a href="{{ route('admin.skills.edit', $skill->id) }}"
                           class="px-3 py-1 bg-yellow-500/20 text-yellow-300 rounded">
                            Edit
                        </a>

                        <form action="{{ route('admin.skills.destroy', $skill->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="px-3 py-1 bg-red-500/20 text-red-300 rounded"
                                    onclick="return confirm('Delete this skill?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="p-4 text-gray-400">No skills added yet.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
