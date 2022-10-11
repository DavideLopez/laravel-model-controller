@extends('layouts.app')

@section('metaTitle', 'Home Page')

@section('content')
<ul>
    @forelse($movies as $movie)

    <li>
        <h1>{{ $movie['title'] }}</h1> 
        <p>{{ $movie['original_title']}}</p>
        <p>{{ $movie['nationality'] }}</p>
        <p>{{ $movie['date'] }}</p>
        <p>{{ $movie['vote'] }}</p>
    </li>


    @empty
        <p>NO MOVIE AVAILABLE!</p>
    @endforelse
</ul>
    
@endsection