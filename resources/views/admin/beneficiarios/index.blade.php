@extends('adminlte::page')

@section('title', 'Plataforma de Donaciones')

@section('content_header')
    <h1>Donaciones de sus eventos:</h1>
@stop

@section('content')
    @livewire('admin.beneficiarios-index')
@stop

@section('footer')
    <p class="text-center">Plataforma de Donaciones<br>Derechos reservados 2021</p>
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

@endsection