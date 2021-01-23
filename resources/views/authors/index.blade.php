@extends('base')

@section('title', "Autheurs")

@section('content')
    @forelse($authors as $author)
        <div>
            <h4>{{ $author->name }}</h4>
        </div>
    @empty
        <h4>Er zijn op dit moment nog geen autheurs!</h4>
    @endforelse
@endsection
