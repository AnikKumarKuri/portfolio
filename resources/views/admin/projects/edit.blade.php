@extends('layouts.app')
@section('title','Edit Project')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold mb-6">Edit Project</h1>

    <form action="{{ route('projects.update',$project->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('admin.projects.form')
    </form>
</div>
@endsection
