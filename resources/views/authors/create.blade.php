@extends('base')

@section('title', 'Auteur aanmaken')

@section('content')
    <div>
        <a href="{{ route('authors.index') }}">Terug naar auteurs</a>
    </div>
    <hr>
    <form action="{{ route('authors.store') }}" method="post">
        <label style="display:block;" for="name">Naam auteur</label>
        <input type="text" name="name" id="name" minlength="5" maxlength="255" required>
        @error('name')
            <span style="color: red;">{{ $message }}</span>
        @enderror
        @csrf
        <br>
        <br>
        <input type="submit" value="Auteur aanmaken">
    </form>
@endsection
