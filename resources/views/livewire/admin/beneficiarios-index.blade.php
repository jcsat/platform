<div>


    

    @if ($beneficiarios->count())
    
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID Evento</th>
                        <th>Nombre</th>
                        <th>Categoria</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($beneficiarios as $beneficiario)
                        <tr>
                            <td>{{$beneficiario->id}}</td>
                            <td>{{$beneficiario->name}}</td>
                            <td>{{$beneficiario->categoria->name}} </td>
                            <td with="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.beneficiarios.show', $beneficiario)}}">Ver donacion</a>
                            </td>
                            <td>                                
                            </td>
                            <td>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer align-self-center">
            {{$beneficiarios->links()}}
        </div>
    @else
        <div class="card-body align-self-center">
            <strong>no existe evento...</strong>
        </div> 
    @endif
</div>
