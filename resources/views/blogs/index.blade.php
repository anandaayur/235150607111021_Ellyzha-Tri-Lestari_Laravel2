@extends('layouts.app')

@section('title', 'All Blogs')

@section('content')
<div class="container">
    <h1>All Blogs</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        @foreach ($blogs as $blog)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if ($blog->image)
                        <img src="{{ asset('storage/' . $blog->image) }}" class="card-img-top" alt="{{ $blog->judul }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->judul }}</h5>
                        <p class="card-text">{{ Str::limit($blog->isi, 100) }}</p>
                        <small class="text-muted">By {{ $blog->pembuat }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection


