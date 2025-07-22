@extends('layouts.app')

@section('title', 'New Post')

@section('content')
<h2 class="mb-4">Create a New Blog Post</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ url('/save') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
        <input type="text" id="title" name="title" class="form-control" maxlength="50" value="{{ old('title') }}" required>
    </div>

    <div class="mb-3">
        <label for="content" class="form-label">Content <span class="text-danger">*</span></label>
        <textarea id="content" name="content" class="form-control" rows="5" required>{{ old('content') }}</textarea>
    </div>

    <div class="mb-3">
        <label for="is_active" class="form-label">Active Status</label>
        <select name="is_active" id="is_active" class="form-select">
            <option value="Yes" {{ old('is_active') == 'Yes' ? 'selected' : '' }}>Yes</option>
            <option value="No" {{ old('is_active') == 'No' ? 'selected' : '' }}>No</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit Post</button>
</form>
@endsection
