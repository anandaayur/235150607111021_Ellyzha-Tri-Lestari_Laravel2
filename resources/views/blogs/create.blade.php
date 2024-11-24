@extends('layouts.app')

@section('title', 'Create New Blog')

@section('content')
<div class="container">
    <h1>Create New Blog</h1>
    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <textarea class="form-control" id="isi" name="isi" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label for="pembuat" class="form-label">Pembuat</label>
            <input type="text" class="form-control" id="pembuat" name="pembuat" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection



