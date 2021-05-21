@extends('adminlte::page')

@section('title', 'Plataforma de Donaciones')

@section('content_header')
    <h1>Lista de categorias</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    
    @endif

    <div class="card">

        <div class="card-header">
            <a class="btn btn-secondary " href="{{route('admin.categorias.create')}}">Agregar nueva categoria</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>    
                    </tr> 
                </thead>

                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td>{{$categoria->id}}</td>
                            <td>{{$categoria->name}}</td>
                            <td with="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.categorias.edit', $categoria)}}">Editar</a>
                            </td>
                            <td with="10px">
                                <form action="{{route('admin.categorias.destroy', $categoria)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>    
    </div>    
@stop

@section('footer')
    <p class="text-center">Plataforma de Donaciones<br>Derechos reservados 2021</p>
@stop
