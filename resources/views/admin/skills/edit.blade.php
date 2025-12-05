@extends('layouts.app')
@section('title','Edit Skill')

@section('content')
<div class="max-w-2xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold mb-6">Edit Skill</h1>

    <form action="{{ route('admin.skills.update', $skill->id) }}" method="POST">
        @method('PUT')
        @include('admin.skills.form')
    </form>
</div>
@endsection
