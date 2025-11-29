@extends('layouts.app')
@section('title','Manage Projects')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Projects</h1>
        <a href="{{ route('projects.create') }}"
           class="px-4 py-2 bg-indigo-500 rounded-lg hover:bg-indigo-600">
            + Add Project
        </a>
    </div>

    <div class="overflow-x-auto bg-white/5 border border-white/10 rounded-xl">
        <table class="w-full text-left">
            <thead class="bg-white/5">
                <tr>
                    <th class="p-4">Title</th>
                    <th class="p-4">Links</th>
                    <th class="p-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                <tr class="border-t border-white/10">
                    <td class="p-4 font-semibold">{{ $project->title }}</td>
                    <td class="p-4 text-sm text-gray-400">
                        @if($project->live_link) Live ✅ @endif
                        @if($project->github_link) GitHub ✅ @endif
                    </td>
                    <td class="p-4 flex gap-2">
                        <a href="{{ route('projects.edit', $project->id) }}"
                           class="px-3 py-1 bg-yellow-500/20 text-yellow-300 rounded">
                            Edit
                        </a>

                        <form action="{{ route('projects.destroy',$project->id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button class="px-3 py-1 bg-red-500/20 text-red-300 rounded"
                                    onclick="return confirm('Delete this project?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach

                @if($projects->count() == 0)
                    <tr><td class="p-4 text-gray-400" colspan="3">No projects yet.</td></tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
