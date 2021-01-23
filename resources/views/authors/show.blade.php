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
@endsection
