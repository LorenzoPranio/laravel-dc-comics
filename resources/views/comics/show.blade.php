@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-6">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid rounded shadow-sm mb-4">
        </div>

        <div class="col-md-6">
            <h1 class="mb-3">{{ $comic->title }}</h1>
            <p class="lead">{{ $comic->description }}</p>
            <hr>

            <p><strong>Price:</strong> ${{ number_format($comic->price, 2) }}</p>
            <p><strong>Series:</strong> {{ $comic->series }}</p>
            <p><strong>Sale Date:</strong> {{ \Carbon\Carbon::parse($comic->sale_date)->format('F d, Y') }}</p>
            <p><strong>Type:</strong> {{ $comic->type }}</p>

            <a href="{{ route('comics.index') }}" class="btn btn-secondary mt-3">Back to List</a>
        </div>
    </div>
</div>
@endsection
