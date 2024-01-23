@extends('layouts.app')

@section('content')

    <div class="container">
    @foreach ($movies as $movie)
        <div class="card">
            <h1>{{ $movie->title }}</h1>
            <h4>{{ $movie->original_title }}</h4>
            <span>Nationality: {{ $movie->nationality }}</span>
            <span>Date: {{ $movie->date }}</span>
            <span>Vote: {{ $movie->vote }}</span>
        </div>
        
    @endforeach
    </div>
@endsection