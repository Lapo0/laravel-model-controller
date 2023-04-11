@extends('layouts.app');

@section('content')

    <div class="container">
        <div class="row">
            
            @foreach ($movies as $movie)

                <div class="col-4 p-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->original_title }}</h6>
                            <p class="card-text">{{ $movie->nationality }}</p>
                            <p class="card-text">{{ $movie->date }}</p>
                            <p class="card-text">{{ $movie->vote }}</p>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>

    </div>

@endsection