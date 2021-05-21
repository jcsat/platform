{!! Form::open(['route' => 'admin.eventos.store', 'autocomplete' => 'off', 'files'=> true]) !!}
                
{!! Form::hidden('user_id', auth()->user()->id) !!}

<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre del evento']) !!}


@error('name')
    <small class="text-danger">{{$message}}</small>
@enderror
</div>

<br>
<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'slug del evento', 'readonly']) !!}

@error('slug')
    <small class="text-danger">{{$message}}</small>
@enderror
</div>

<br>
<div class="form-group">
    {!! Form::label('categoria_id', 'Categoria') !!}
    {!! Form::select('categoria_id', $categorias, null, ['class' => 'form-control']) !!}
<br>
@error('categoria_id')
    <small class="text-danger">{{$message}}</small>
@enderror
</div>

<br>
<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset ($evento->url)
                <img id="picture" src="{{Storage::url($evento->image->url)}}" alt="">
            @else
            <img id="picture" src="https://cdn.pixabay.com/photo/2020/02/01/20/05/hummingbird-hawkmoth-4811285_960_720.jpg" alt="">
            @endif
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'imagen para el evento') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
        </div>
        <p>Seleccione su imagen para su evento</p>
    </div>

@error('file')
    <span class="text-danger">{{$message}}</span>
@enderror
</div>

<br>
<div class="form-group">
    {!! Form::label('body', 'Cuerpo del Evento') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

@error('body')
    <small class="text-danger">{{$message}}</small>
@enderror
</div>