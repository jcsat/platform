@extends('adminlte::page')

@section('title', 'Plataforma de Donaciones')

@section('content_header')
    <h1>Detalle de su donacion en objetos</h1>
@stop

@section('content')


<div class="container ">
    
    <div class="panel panel-default bg-white rounded-full py-2 px-2">
      <div class="panel-body">Nombre: <b> {{$objeto->user->name}} </b></div>
      <br>
      <div class="panel-body">Codigo de la donacion: <b> {{$objeto->codigoap}} </b></div>
      <div class="panel-body">Descripcion: <b> {{$objeto->descripcion}} </b></div>
      <div class="panel-body">Tipo de donacion: <b> @if ($objeto->status == 1) Bienes @elseif ($objeto->status == 2) Alimentos @elseif ($objeto->status == 3) Otros @endif</b></div>
      <div class="panel-body">Lista de donacion: <b> {{$objeto->lista_detalle}} </b></div>
      <br>
      <div class="panel-body">Fue donado al evento: <b> {{$objeto->evento->name}} </b></div>
      <div class="panel-body">Que pertenece a la categoria: <b> {{$objeto->evento->categoria->name}} </b></div>
  <br>
    <p>Comprobante</p>
    
        <div class=" image-wrapper">
            <img class="img-fluid rounded mx-auto d-block" src="{{Storage::url($objeto->image->url)}}" alt="">
        </div>
        <div class="text-right">
            <a class="btn btn-primary btn-sm" href="">Imprimir</a>
        </div>
    </div>
    
</div>


<br>
<br>
<br>
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

@section('footer')
    <p class="text-center">Plataforma de Donaciones<br>Derechos reservados 2021</p>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop