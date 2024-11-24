@extends('layouts.app')

@section('title', $post->exists ? 'Edit Post' : 'Create Post')

@section('content')
<h1>{{ $post->exists ? 'Edit Post' : 'Create New Post' }}</h1>
<form method="POST" action="{{ $post->exists ? route('posts.update', $post) : route('posts.store') }}" enctype="multipart/form-data">
    @csrf
    @if($post->exists)
        @method('PUT')
    @endif

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $post->title) }}" required>
    </div>

    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea name="content" id="content" class="form-control" rows="5" required>{{ old('content', $post->content) }}</textarea>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" name="image" id="image" class="form-control">
        @if($post->image)
            <img src="{{ Storage::url($post->image) }}" class="img-thumbnail mt-2" width="200">
        @endif
    </div>

    <button type="submit" class="btn btn-success">{{ $post->exists ? 'Update Post' : 'Create Post' }}</button>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
