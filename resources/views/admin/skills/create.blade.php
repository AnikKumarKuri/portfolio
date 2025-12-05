@extends('layouts.app')
@section('title','Add Skill')

@section('content')
<div class="max-w-2xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold mb-6">Add Skill</h1>

    <form action="{{ route('admin.skills.store') }}" method="POST">
        @include('admin.skills.form')
    </form>
</div>
@endsection
