@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Projects</h1>
    <a href="{{ route('admin.projects.create') }}" class="btn btn-success mb-2">Create New Project</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">Project List</div>
        <div class="card-body">
            @if($projects->isEmpty())
                <p>No projects found.</p>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->description }}</td>
                                <td>
                                    <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
@endsection
