@extends('adminlte::page')

@section('title', 'Plataforma de Donaciones')

@section('content_header')
    <h1>Detalle de su donacion en efectivo</h1>
@stop

@section('content')


<div class="container ">
    
    <div class="panel panel-default bg-white rounded-full py-2 px-2">
      <div class="panel-body">Nombre: <b> {{$aporte->user->name}} </b></div>
      <br>
      <div class="panel-body">Codigo de la donacion: <b> {{$aporte->codigoap}} </b></div>
      <div class="panel-body">Descripcion: <b> {{$aporte->descripcion}} </b></div>
      <div class="panel-body">Tipo de donacion: <b> @if ($aporte->status == 1) transferencia bancaria @elseif ($aporte->status == 2) Paypal @elseif ($aporte->status == 3) Bitcoin @endif</b></div>
      <div class="panel-body">Monto: <b> {{$aporte->monto}} </b></div>
      <br>
      <div class="panel-body">Fue donado al evento: <b> {{$aporte->evento->name}} </b></div>
      <div class="panel-body">Que pertenece a la categoria: <b> {{$aporte->evento->categoria->name}} </b></div>
  <br>
    <p>Comprobante</p>
    
        <div class=" image-wrapper">
            <img class="img-fluid rounded mx-auto d-block" src="{{Storage::url($aporte->image->url)}}" alt="">
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