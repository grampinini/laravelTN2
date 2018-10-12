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

    <form class="" action="movies/create" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" value="{{ old("titulo") }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="Rating">Rating</label>
            <input type="text" name="rating" value="{{ old("rating") }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="premios">Premios</label>
            <input type="text" name="premios" value="{{ old("premios") }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="duracion">Duracion</label>
            <input type="text" name="duracion" value="{{ old("duracion") }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="fecha_de_estreno">Fecha de estreno</label>
            <input type="date" name="fecha_de_estreno" value="{{ old("fecha_de_estreno") }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="genero">Género</label>
            <select class="form-control" name="genero">
            @foreach($genres as $genre)
            @if ($genre->id == old("genero"))
                <option value="{{ $genre->id }}" selected>
                {{ $genre->name }}
                </option>
            @else
                <option value="{{ $genre->id }}">
                {{ $genre->name }}
                </option>
            @endif
            @endforeach
        </select>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Agregar Película">
        </div>
    </form>
</div>
@endsection