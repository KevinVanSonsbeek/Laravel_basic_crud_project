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
    <div style="position:absolute; bottom: 0;">
        <form action="{{ route('authors.books.destroy', [$author->slug, $book->slug]) }}" method="post">
            @csrf
            @method("delete")
            <input type="submit" style="color:red;cursor: pointer" value="Boek verwijderen">
        </form>
    </div>
@endsection
