@extends('layouts.master')

@section('content')
<div class="offset-1">
    <h1>Estas son nuestras Pelis</h1>
    <h4>Selecciona para ver mas detalles o editar</h4><br>
    <ul>
    @foreach($movies as $movie)
        <li>
            <a href="movies/{{ $movie->id }}">{{ $movie->title }}</a>
        </li>
    @endforeach
    </ul>
    {!! $movies->links() !!}
</div>

@endsection