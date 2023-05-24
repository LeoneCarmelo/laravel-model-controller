@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-3">
            <!-- Print movies  -->
            @forelse ($movies as $movie)
            <div class="col">
                <div class="card p-2">
                    <div class="card-title">Title: {{ $movie->title }}</div>
                    <div class="card-subtitle">Original Title: {{ $movie->original_title }}</div>
                    <div class="nationality">Nationality: {{ $movie->nationality }}</div>
                    <div class="nationality">Release Date: {{ $movie->date }}</div>
                    <div class="vote">Vote: {{ $movie->vote }}</div>
                </div>
            </div>               
            @empty
                <p>Sorry, no items found!</p>
            @endforelse
        </div>
    </div>
@endsection