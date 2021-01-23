@extends('base')

@section('title', $author->name)

@section('content')
    <div>
        <a href="{{ route('authors.index') }}">Terug naar auteurs</a>
    </div>
    <hr>
    <div>
        <a href="{{ route('authors.edit', $author->slug) }}" style="float:right;">Auteur updaten</a>
        <h2>{{ $author->name }}</h2>
    </div>
    <div style="position:absolute; bottom: 0;">
        <form action="{{ route('authors.destroy', $author->slug) }}" method="post">
            @csrf
            @method("delete")
            <input type="submit" style="color:red;cursor: pointer" value="Auteur verwijderen">
        </form>
    </div>
@endsection
