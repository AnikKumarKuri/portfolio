@extends('layouts.app')
@section('title','Add Project')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold mb-6">Add Project</h1>

    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
        @include('admin.projects.form')
    </form>
</div>
@endsection
