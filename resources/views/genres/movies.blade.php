@extends('layouts.master') 
@section('content')
<div class="offset-1">
    <ul>
        @foreach($movies as $movie)
        <li>
            <a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a>
        </li>
        @endforeach
    </ul>
</div>
@endsection
