@extends('layouts.app')

@section('content')
    <section class="container text-center">
        <h1>Home Page</h1>
        <p>Click down for start</p>
        <a href="{{ route('movies.index') }}" class="btn btn-primary">CLICK! ME!! CLICK ME!!</a>
    </section>
@endsection
