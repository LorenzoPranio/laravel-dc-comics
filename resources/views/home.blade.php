@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mb-5">All Comics</h1>
                <a href="{{ route('comics.create') }}" class="btn btn-primary mb-5">Add New Comic</a>
            </div>
        </div>
        <div class="row">
            @foreach($comics as $comic)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text">{{ Str::limit($comic->description, 100) }}</p>
                            <p><strong>Price:</strong> ${{ number_format($comic->price, 2) }}</p>
                            <p><strong>Series:</strong> {{ $comic->series }}</p>
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-info mt-auto">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
