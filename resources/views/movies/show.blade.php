@extends('layouts.master')

@section('content')

<div class="offset-1">
    <h2>{{ $movie->title }}</h2>
    <h4>Fecha de estreno: {{ $movie->release_date }}</h4>
    <h4>Rating: {{ $movie->reting }}</h4>
    <h4>Premios: {{ $movie->awards }}</h4>
    
    <a href="{{ url("movies/$movie->id/edit") }}">Editar</a>
    
    <br>
    <a href="{{ route('movies') }}">Volver</a>
</div>

@endsection