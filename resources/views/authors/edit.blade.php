@extends('base')

@section('title', $author->name . 'updaten')

@section('content')
    <div>
        <a href="{{ route('authors.show', $author->slug) }}">Terug naar auteur</a>
    </div>
    <hr>
    <form action="{{ route('authors.update', $author->slug) }}" method="post">
        <label style="display:block;" for="name">Naam auteur</label>
        <input type="text" name="name" id="name" minlength="5" maxlength="255" value="{{ old("name") ?? $author->name }}" required>
        @error('name')
        <span style="color: red;">{{ $message }}</span>
        @enderror
        @csrf
        @method('PUT')
        <br>
        <br>
        <input type="submit" value="Auteur updaten">
    </form>
@endsection
