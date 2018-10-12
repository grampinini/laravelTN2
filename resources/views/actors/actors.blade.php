@extends('layouts.master') 
@section('content')
<div class="offset-1">
    <h1>Listado de actores</h1>
    <h4>Selecciona para ver mas detalles o editar</h4><br>
    <ul>
        @foreach($actors as $actor)
        <li>
            <a href="#">{{ $actor->first_name }} {{ $actor->last_name }}</a>
        </li>
        @endforeach
    </ul>
</div>
@endsectionection