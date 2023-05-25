@extends('layouts.app')

@section('content')
    <section class="container text-center">
        <h1>{{ $movie->title }}</h1>
        <p>Titolo originale: {{ $movie->original_title }}</p>
        <p>Nazione: {{ $movie->nationality }}</p>
        <p>Data di uscita: {{ $movie->date }}</p>
        <p>Voto: {{ $movie->vote }}</p>
        <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
    </section>
@endsection
