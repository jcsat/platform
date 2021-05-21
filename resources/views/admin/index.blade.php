@extends('adminlte::page')

@section('title', 'Plataforma de Donaciones')

@section('content_header')
    <h1 class="text-center">Plataforma de Donaciones</h1>
@stop

@section('content')
    <div>
        <p class="text-center">Bienvenido a nuestra Plataforma de Donaciones.</p>
    </div>
    <br><br><br>
    <div class="text-center">
        <a class="btn btn-primary btn-lg" href="{{route('admin.eventos.create')}}">Crear nuevo Evento</a>    
    </div><br><br>

    <div class="text-center">
        <a class="btn btn-primary " href="{{route('admin.eventos.index')}}">Ver mis eventos</a>    
    </div><br><br>
    <div class="text-center">
        <a class="btn btn-primary " href="{{route('admin.beneficiarios.index')}}">Ver las donaciones de mis eventos</a>    
    </div><br><br>
    <tr>
        <td></td>
        <td></td>

    </tr>

    <div class="text-center">
        <tbody>
        <tr>
        <td>
        <a class="btn btn-primary btn-lg btn-block" href="{{route('admin.aportes.create')}}">Donar dinero</a>
    </td><td>
        <a class="btn btn-primary btn-lg btn-block" href="{{route('admin.objetos.create')}}">Donar objetos</a>
    </td><tbody>
    </div><br><br>
    <div class="text-center">
        <a class="btn btn-primary btn-lg" href="{{route('admin.aportes.index')}}">Ver mis donaciones en Dinero</a>
        <a class="btn btn-primary btn-lg" href="{{route('admin.objetos.index')}}">Ver mis donaciones en Bienes</a>
        
    </div><br><br><br><br>
    <br>
    <div class="text-center py-10">
        <a class="btn btn-primary " href="{{route('admin.home')}}">Pagina principal de Administracion</a>
    </div><br>

    <div class="text-center py-10">
        <a class="btn btn-primary " href="{{route('home')}}">Pagina principal</a>
    </div>
        
@stop

@section('footer')
    <p class="text-center">Plataforma de Donaciones<br>Derechos reservados 2021</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop