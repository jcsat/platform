@extends('adminlte::page')

@section('title', 'Plataforma de Donaciones')

@section('content_header')

    <a class="btn btn-primary float-right" href="{{route('admin.eventos.create')}}">Crear nuevo Evento</a>

    <h1>Lista de mis Eventos</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>

@endif

    @livewire('admin.eventos-index')
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