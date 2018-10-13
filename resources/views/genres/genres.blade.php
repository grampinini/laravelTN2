@extends('layouts.master') 

@section('content')

<div class="offset-1">
    <h1>Selecciona Genero</h1><br>
    <ul>
        @foreach($genres as $genre)
    <li><a href="/genres/{{ $genre->id }}/movies">{{ $genre->name }}</a></li>
        @endforeach
    </ul>
    <a href="#">Agregar Nuevo Genero</a>
</div>

@endsection
