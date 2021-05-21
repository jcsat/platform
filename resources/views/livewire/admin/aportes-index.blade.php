<div class='card'>

    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Busque un aporte">
    </div>

    @if ($aportes->count())

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
                @foreach ($aportes as $aporte)
                    <tr>
                        <td>{{$aporte->id}}</td>
                        <td>{{$aporte->codigoap}}</td>
                        <td>{{$aporte->evento_id}}</td>
                        <td></td>
                        <td with="10px">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.aportes.show', $aporte)}}">ver</a>
                        </td>
                        <td>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{$aportes->links()}}
    </div>

    @else
    <div class="card-body align-self-center">
        <strong>no existe registro...</strong>
    </div> 
    @endif


</div>
