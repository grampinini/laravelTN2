@extends('layouts.master')

@section('content')

<div class="offset-1">
    <h2>{{ $movie->title }}</h2>
    <h4>Fecha de estreno: {{ $movie->release_date }}</h4>
    <h4>Rating: {{ $movie->rating }}</h4>
    <h4>Premios: {{ $movie->awards }}</h4>
    <h4>Genero: {{ $movie->genre->name}}</h4>
    <h4>Actores:</h4>
    <ul>
        @foreach($movie->actors as $actor)
        <li>{{ $actor->first_name }} {{ $actor->last_name }}</li>
        @endforeach
    </ul>


    <a href="{{ url("movies/$movie->id/edit") }}">Editar Pelicula</a>
    <br>
    <br>
    <form action="/movies/{{ $movie->id }}" method="post" value="DELETE">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button type="submit" class="btn btn-danger">Eliminar Pelicula</button>
    </form>
    
    <br>
    <a href="{{ route('movies') }}">Volver a Index de Peliculas</a>
</div>

@endsection