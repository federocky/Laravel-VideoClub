@extends('layouts.master')

@section('content')
<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
       <div class="card">
          <div class="card-header text-center">
             Modificar película
          </div>
          <div class="card-body" style="padding:30px">
 
            <form method="POST" action="{{ url('/catalog/validarEdit') }}">
            {{-- @method('PUT') --}} {{-- comento para la validacíon --}}
            @csrf
 
             <div class="form-group">
                <label for="title">Título</label> <br>
                {{ $errors->first('title', ':message')}}
                <input type="text" name="title" value=" {{$pelicula->title}} " id="title" class="form-control">
             </div>
 
             <div class="form-group">
                <label for="anio">Año</label><br>
                {!! $errors->first('anio', '<span style="color:red">:message<span>')!!}
                <input type="text" name="anio" value="{{ old('anio') }}" id="anio" class="form-control">
            </div>
 
             <div class="form-group">
                <label for="director">Director</label><br>
                {{ $errors->first('director', ':message')}}
                <input type="text" name="director" value="{{$pelicula->director}}" id="director" class="form-control">
             </div>
 
             <div class="form-group">
                <label for="poster">URL Poster</label><br>
                {{ $errors->first('poster', ':message')}}
                <input type="text" name="poster" value="{{$pelicula->poster}}" id="poster" class="form-control">
             </div>
 
             <div class="form-group">
                <label for="synopsis">Resumen</label><br>
                {{ $errors->first('synopsis', ':message')}}
                <textarea name="synopsis" id="synopsis" placeholder="{{$pelicula->synopsis}}" class="form-control" rows="3"></textarea>
             </div>
 
             <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                    Modificar película
                </button>
             </div>
 
            </form>
 
          </div>
       </div>
    </div>
 </div>@endsection