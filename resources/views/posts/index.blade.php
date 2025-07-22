@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>All Blog Posts</h2>
        <a href="/create" class="btn btn-primary">+ Create Post</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Active</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->is_active }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>
                        <a href="/edit/{{ $post->id }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="/delete/{{ $post->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">No posts found.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection