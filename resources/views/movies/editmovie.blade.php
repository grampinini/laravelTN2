@extends('layouts.master') 
@section('content')

<div class="col-7 offset-1">
    <h1 class="">Agregar Película</h1>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form class="" action="/movies/{{ $movie->id }}" method="POST" enctype="multipart/form-data">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" value="{{ $movie->title }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="Rating">Rating</label>
            <input type="text" name="rating" value="{{ $movie->rating }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="premios">Premios</label>
            <input type="text" name="premios" value="{{ $movie->awards }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="duracion">Duracion</label>
            <input type="text" name="duracion" value="{{ $movie->length }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="fecha_de_estreno">Fecha de estreno</label>
            <input type="text" name="fecha_de_estreno" value="{{ $movie->release_date }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="genero">Género</label>
            <select class="form-control" name="genero">
            <option value="{{ $genre->id }}" selected>{{ $genre->name }}</option>
            @foreach($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
            @endforeach
        </select>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Confirmar Cambios">
        </div>
    </form>
</div>
@endsection