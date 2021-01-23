@extends('base')

@section('title', 'Boek aanmaken')

@section('content')
    <div>
        <a href="{{ route('authors.show', $author->slug) }}">Terug naar auteur</a>
    </div>
    <hr>
    <form action="{{ route('authors.books.store', $author->slug) }}" method="post">
        <label style="display:block;" for="name">Naam boek</label>
        <input type="text" name="name" id="name" maxlength="255" required>
        @error('name')
        <span style="color: red;">{{ $message }}</span>
        @enderror
        @csrf
        <br>
        <br>
        <input type="submit" value="Boek aanmaken">
    </form>
@endsection
