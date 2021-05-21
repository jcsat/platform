<div class="card">

    

    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Busque un evento">
    </div>

    @if ($eventos->count())
    
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
                    @foreach ($eventos as $evento)
                        <tr>
                            <td>{{$evento->id}}</td>
                            <td>{{$evento->name}}</td>
                            <td with="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.eventos.show', $evento)}}">Ver</a>
                            </td>
                            <td with="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.eventos.edit', $evento)}}">Editar</a>
                            </td>
                            <td with="10px">
                                <form action="{{route('admin.eventos.destroy', $evento)}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer align-self-center">
            {{$eventos->links()}}
        </div>
    @else
        <div class="card-body align-self-center">
            <strong>no existe evento...</strong>
        </div> 
    @endif
</div>
  