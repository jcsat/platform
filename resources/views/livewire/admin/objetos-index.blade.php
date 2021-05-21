<div class='card'>

    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Busque un aporte">
    </div>

    @if ($objetos->count())

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>codigo de aporte</th>
                    <th>evento</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($objetos as $objeto)
                    <tr>
                        <td>{{$objeto->id}}</td>
                        <td>{{$objeto->codigoap}}</td>
                        <td>{{$objeto->evento_id}}</td>
                        <td></td>
                        <td with="10px">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.objetos.show', $objeto)}}">ver</a>
                        </td>
                        <td>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{$objetos->links()}}
    </div>

    @else
    <div class="card-body align-self-center">
        <strong>no existe registro...</strong>
    </div> 
    @endif


</div>