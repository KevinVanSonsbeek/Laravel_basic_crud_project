@extends('base')

@section('title', $book->name)

@section('content')
    <div>
        <a href="{{ route('authors.show', $author->slug) }}">Terug naar auteur</a>
    </div>
    <hr>
    <div>
        <h2>{{ $book->name }}</h2>
    </div>
@endsection
