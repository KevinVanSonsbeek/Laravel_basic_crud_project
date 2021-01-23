@extends('base')

@section('title', 'Boek updaten')

@section('content')
    <div>
        <a href="{{ route('authors.books.show', [$author->slug, $book->slug]) }}">Terug naar boek</a>
    </div>
    <hr>
    <form action="{{ route('authors.books.update', [$author->slug, $book->slug]) }}" method="post">
        <label style="display:block;" for="name">Naam boek</label>
        <input type="text" name="name" id="name" minlength="5" maxlength="255" value="{{ old("name") ?? $book->name }}" required>
        @error('name')
        <span style="color: red;">{{ $message }}</span>
        @enderror
        @csrf
        @method('PUT')
        <br>
        <br>
        <input type="submit" value="Boek updaten">
    </form>
@endsection
