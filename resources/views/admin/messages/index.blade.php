@extends('layouts.app')
@section('title','Messages')

@section('content')
<div class="max-w-5xl mx-auto px-4 py-10">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Messages</h1>
    </div>

    @if(session('success'))
        <div class="mb-4 p-3 rounded bg-green-500/20 text-green-300 border border-green-500/30">
            {{ session('success') }}
        </div>
    @endif

    <div class="space-y-4">
        @forelse($messages as $msg)
            <div class="p-5 rounded-xl bg-white/5 border border-white/10">
                <div class="flex justify-between items-start">
                    <div>
                        <h2 class="font-bold text-lg">{{ $msg->name }}</h2>
                        <p class="text-sm text-gray-400">{{ $msg->email }}</p>
                        <p class="mt-3 text-gray-200">{{ $msg->message }}</p>
                        <p class="mt-2 text-xs text-gray-500">
                            Sent: {{ $msg->created_at->format('d M Y, h:i A') }}
                        </p>
                    </div>

                    <form action="{{ route('admin.messages.destroy', $msg->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Delete this message?')"
                                class="px-3 py-1 bg-red-500/20 text-red-300 rounded">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <p class="text-gray-400">No messages yet.</p>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $messages->links() }}
    </div>
</div>
@endsection
