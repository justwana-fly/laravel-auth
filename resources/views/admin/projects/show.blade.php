@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Project Details</h1>
    <div class="card">
        <div class="card-header">
            <h2>{{ $project->title }}</h2>
        </div>
        <div class="card-body">
            <p>{{ $project->description }}</p>
        </div>
    </div>
    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary mt-3">Back to Projects</a>
</div>
@endsection
