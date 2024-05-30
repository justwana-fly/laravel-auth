@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Project</h1>
    <form method="POST" action="{{ route('admin.projects.update', $project->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required>{{ $project->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Project</button>
    </form>
</div>
@endsection
