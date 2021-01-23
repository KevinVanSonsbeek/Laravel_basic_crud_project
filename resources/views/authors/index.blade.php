@extends('base')

@section('title', "Auteurs")

@section('content')
    <div>
        <a href="{{ route('authors.create') }}">Auteur aanmaken</a>
    </div>
    <hr>
    @forelse($authors as $author)
        <div>
            <h4>{{ $author->name }}</h4>
        </div>
    @empty
        <h4>Er zijn op dit moment geen auteurs!</h4>
    @endforelse
@endsection
