@extends('layouts.app')

@section('content')
    <div class="container w-75">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-3">

            @forelse ($movies as $movie)
                <div class="col">
                    <div style="background-color: lightskyblue" class="card text-center p-1 h-100">

                        <h2>{{ $movie->title }}</h2>

                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
@endsection
