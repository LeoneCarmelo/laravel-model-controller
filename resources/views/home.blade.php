@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-3">
            <!-- Print movies  -->
            @forelse ($movies as $movie)
            <div class="col">
                <div class="card p-1">
                    <div class="card-img-top">
                        <img src="{{$movie->image}}" alt="" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <div class="card-title">Title: <span>{{ $movie->title }}</span></div>
                        <div class="card-subtitle">Original Title: <span>{{ $movie->original_title }}</span></div>
                        <div class="nationality">Nationality: <span>{{ $movie->nationality }}</span></div>
                        <div class="nationality">Release Date: <span>{{ $movie->date }}</span></div>
                        <div class="vote">Vote: <span>{{ $movie->vote }}</span></div>
                    </div>
                </div>
            </div>               
            @empty
                <p>Sorry, no items found!</p>
            @endforelse
        </div>
    </div>
@endsection