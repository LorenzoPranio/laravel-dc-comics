@extends('layouts.app')

@section('content')
    <h1>All Comics</h1>
    <a href="{{ route('comics.create') }}">Add New Comic</a>

    <ul>
        @foreach($comics as $comic)
            <li>
                <a href="{{ route('comics.show', $comic->id) }}">
                    {{ $comic->title }} - ${{ $comic->price }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection