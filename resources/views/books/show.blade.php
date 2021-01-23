@extends('base')

@section('title', $book->name)

@section('content')
    <div>
        <a href="{{ route('authors.show', $author->slug) }}">Terug naar auteur</a>
    </div>
    <hr>
    <div>
        <a href="{{ route('authors.books.edit', [$author->slug, $book->slug]) }}" style="float:right;">Boek updaten</a>
        <h2>{{ $book->name }}</h2>
    </div>
@endsection
