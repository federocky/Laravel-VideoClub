@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-4">
        <img src=" {{ $pelicula['poster'] }} " alt="">
    
    </div>
    <div class="col-sm-8">
        <h2> {{ $pelicula['title'] }}</h2>
        <h6>Año: {{ $pelicula['year'] }}</h6>
        <h6>Director: {{ $pelicula['director'] }}</h6>

        <p> <span class="font-weight-bold">Resumen:</span> {{ $pelicula['synopsis'] }}</p>

        @if($pelicula['rented']) 
        <p>Pelicula alquilada</p>
        <button type="button" class="btn btn-danger">Devolver Pelicula</button>
        <a class="btn btn-light btn-outline-dark" href="{{ url('/catalog') }}">Volver</a>



        @else <p>Pelicula disponible</p>
        <button type="button" class="btn btn-primary">Alquilar Pelicula</button>
        <a class="btn btn-warning text-white" href="{{ url('/catalog/edit/'. $id) }}">Editar Pelicula</a>
        <a class="btn btn-light btn-outline-dark" href="{{ url('/catalog') }}">Volver</a>

        @endif

    </div>
   </div>
@endsection