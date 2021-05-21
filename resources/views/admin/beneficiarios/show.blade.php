@extends('adminlte::page')

@section('title', 'Plataforma de Donaciones')

@section('content_header')
    <h1 class="">Detalle del Evento y sus donaciones</h1>
@stop

@section('content')

<div class="container ">
    
    <div class="panel panel-default bg-white rounded-full py-2 px-2">
        <br>
      <div class="panel-body">Nombre del Evento: <b> {{$beneficiario->name}} </b></div>
      <br>
      <div class="panel-body">Categoria: <b> {{$beneficiario->categoria->name}} </b></div>
        
  <br>
    <p>Imagen del Evento:</p>

        <div class=" image-wrapper">
            <img class="img-fluid rounded mx-auto d-block" src="{{Storage::url($beneficiario->image->url)}}" alt="">
        </div>

        <div class="panel-body">Contenido: <p>{!!$beneficiario->body!!}</p></div>
        
        

        <div class="panel-body">Creado por: <b> {{$beneficiario->user->name}} </b></div>
    <br>
    <p>Donaciones en Efectivo:</p>
    
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>codigo de aporte</th>
            <th>monto</th>
            <th colspan="2"></th>
        </tr>
    </thead>

    <tbody>
        @foreach ($aportes as $aporte)
            <tr>
                <td>{{$aporte->id}}</td>
                <td>{{$aporte->codigoap}}</td>
                <td>{{$aporte->monto}}</td>
                <td></td>
                <td></td>
            </tr>
        @endforeach

       

    </tbody>
        
</table>
        <div class="panel-body">
             El monto total recaudado para este evento es:<b> <h1 class="text-center">{{$sumas}}.00</h1></b>
        </div>       
{{--<div class="text-right">
    <a class="btn btn-primary btn-sm" href="">Solicitar desembolso</a>
</div>
--}}
<br><br>
<p>Donaciones en Objetos:</p>
 
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>codigo de aporte</th>
            <th>lista detalle</th>
            <th colspan="2"></th>
        </tr>
    </thead>

    <tbody>
        @foreach ($objetos as $objeto)
            <tr>
                <td>{{$objeto->id}}</td>
                <td>{{$objeto->codigoap}}</td>
                <td>{{$objeto->lista_detalle}}</td>
                <td></td>
                <td></td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="text-right">
    <a class="btn btn-primary btn-sm" href="">Solicitar</a>
</div>


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