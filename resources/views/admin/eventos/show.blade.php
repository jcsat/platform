@extends('adminlte::page')

@section('title', 'Plataforma de Donaciones')

@section('content_header')
    <h1 class="">Detalle del Evento</h1>
@stop

@section('content')

<div class="container ">
    
    <div class="panel panel-default bg-white rounded-full py-2 px-2">
        <br>
      <div class="panel-body">Nombre del Evento: <b> {{$evento->name}} </b></div>
      <br>
      <div class="panel-body">Categoria: <b> {{$evento->categoria->name}} </b></div>
        
  <br>
    <p>Imagen del Evento:</p>

        <div class=" image-wrapper">
            <img class="img-fluid rounded mx-auto d-block" src="{{Storage::url($evento->image->url)}}" alt="">
        </div>

        <div class="panel-body">Contenido: <p>{!!$evento->body!!}</p></div>
        
        <div class="text-right">
            <a class="btn btn-primary btn-sm" href="{{route('admin.eventos.edit', $evento)}}">Editar</a>
            
        </div>

        <div class="panel-body">Creado por: <b> {{$evento->user->name}} </b></div>
    </div>
    
</div>

    
    
    <br>
    <br>
@stop

@section('footer')
    <p class="text-center">Plataforma de Donaciones<br>Derechos reservados 2021</p>
@stop

@section('css')
<style>
    .image-wrapper{
        position: relative;
        padding-bottom: 5%;
    }

    .image-wrapper img{
        position: center;
        object-fit:cover;
        width:50%;
        height:50%;
    }
</style>   
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop