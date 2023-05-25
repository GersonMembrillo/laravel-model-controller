@extends('layouts.app')

@section('content')
    <section class="container">
        <h1 class="text-center">MOVIES!</h1>

        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-4 card-group mb-3">
                    <div class="card px-0" style="width: 18rem;">
                        <img src="{{ $movie->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <a href="{{ route('movies.show', ['id' => $movie->id]) }}" class="btn btn-primary">Dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </section>
@endsection
