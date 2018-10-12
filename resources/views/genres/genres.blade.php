@extends('layouts.master') 
@section('content')
<div class="offset-1">
    <h1>Selecciona Genero</h1><br>
    <ul>
        @foreach($genres as $genre)
        <li><a href="genres/{{ $genre->id }}">{{ $genre->name }}</a></li>
        @endforeach
    </ul>
</div>

@endsection
