@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Create a New Comic</h1>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-control" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumbnail URL</label>
                <input type="url" id="thumb" name="thumb" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" id="price" name="price" class="form-control" required step="0.01">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" id="series" name="series" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" id="sale_date" name="sale_date" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" id="type" name="type" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Comic</button>
        </form>
    </div>
@endsection

