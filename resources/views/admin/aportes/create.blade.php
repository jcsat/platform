@extends('adminlte::page')

@section('title', 'Plataforma de Donaciones')

@section('content_header')
    <h1>Registrar nueva donacion de dinero</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.aportes.store', 'files'=> true]) !!}    

            {!! Form::hidden('user_id', auth()->user()->id) !!}

            <div class="form-group">
                {!! Form::label('codigoap', 'Codigo de donacion:') !!}
                {!! Form::text('codigoap', \Carbon\Carbon::now()->format('YdmYhis'), ['class' => 'form-control', 'readonly']) !!}     

            @error('codigoap')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <br>
            <div class="form-group">
                {!! Form::label('descripcion', 'Descripcion de donacion:') !!}
                <p>Detalle su donacion.</p> 
                {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su descripcion']) !!}      

            @error('descripcion')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <br>
            <div class="form-group">
                {!! Form::label('status', 'Seleccion el tipo de donacion:') !!}
                <br>
                <label>
                {!! Form::radio('status', 1, true ) !!}
                Transferencia bancaria
                </label>     
                <p></p>
                <label>        
                {!! Form::radio('status', 2) !!}
                Paypal
                </label>
                <p></p>
                <label> 
                {!! Form::radio('status', 3) !!}
                Bitcoin
                </label>
           
            @error('status')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            
            <br>
            <div class="form-group">
                {!! Form::label('monto', 'Cantidad de donacion:') !!}
                {!! Form::number('monto', null, ['class' => 'form-control']) !!}
            @error('monto')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <br>
            <div class="form-group">
                {!! Form::label('evento_id', 'Seleccione un Evento:') !!}
                {!! Form::select('evento_id', $eventos, null, ['class' => 'form-control']) !!}
            
            @error('evento_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <br>
            <div class="row mb-3">
                <div class="col">
                    <div class="image-wrapper">
                        @isset($aporte->url)
                            <img id="picture" src="{{Storage::url($aporte->image->url)}}" alt="">
                            @else
                            <img id="picture" src="https://cdn.pixabay.com/photo/2020/02/01/20/05/hummingbird-hawkmoth-4811285_960_720.jpg" alt="">
                        
                        @endisset
                            
                        
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        {!! Form::label('file', 'imagen de su donacion') !!}
                        {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
                    </div>
                    <p>Seleccione su imagen de donacion</p>
                </div>
            
            @error('file')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <br>
            {!! Form::submit('Registrar donacion', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>    
    
    </div>    



@stop


@section('footer')
    <p class="text-center">Plataforma de Donaciones<br>Derechos reservados 2021</p>
@stop

@section('css')
<style>
    .image-wrapper{
        position: relative;
        padding-bottom: 56.25%;
    }

    .image-wrapper img{
        position: absolute;
        object-fit:cover;
        width:100%;
        height:100%;
    }
</style>
@stop

@section('js')




    <script> 

    //cambiar imagen
    document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result); 
            };

            reader.readAsDataURL(file);
        }
   

     </script>
@stop