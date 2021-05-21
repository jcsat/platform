@extends('adminlte::page')

@section('title', 'Plataforma de Donaciones')

@section('content_header')
    <h1>Listado de mis donaciones en dinero</h1>
@stop

@section('content')
    @livewire('admin.aportes-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('footer')
    <p class="text-center">Plataforma de Donaciones<br>Derechos reservados 2021</p>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop