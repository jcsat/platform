<x-app-layout>

    <div class="max-w-7xl mx-auto px-12 py-12 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold text-gray-500">Nombre del Evento:</h1>
        <h1 class="text-6xl font-bold text-gray-500 text-center" >
            {{$evento->name}}
        </h1>

        <h1>fecha de inicio de evento: {{$evento->created_at->format('d-F-Y')}}</h1>

        <h1>fecha de finalizacion de evento: {{$evento->created_at->addMonth(3)->format('d-F-Y')}}</h1>
        
        

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-20">
            {{--//contenidp rincipal--}}
            <div class="lg:col-span-2">

                <div class="text-lg text-gray-700 text-right">
                    Categoria: <a href="{{route('categorias.index')}}"> @if($evento->categoria) {{$evento->categoria->name}} @else {{"general"}} @endif </a> 
                </div>

                <figure>
                    @if ($evento->image)
                        <img class="w-full h-80 object-cover object-center shadow-lg rounded-2xl overflow-hidden" src="{{Storage::url($evento->image->url)}}" alt="">
                    @else
                        <img class="w-full h-80 object-cover object-center shadow-lg rounded-2xl overflow-hidden" src="https://cdn.pixabay.com/photo/2020/07/06/01/33/forest-5375005_960_720.jpg" alt="">
                    @endif
                </figure>
                    
                <div class="text-base text-gray-600 text-justify py-10">
                    {!!$evento->body!!}
                </div>
                {{--pendiente el enlace--}}
                <div class="text-lg text-gray-700 text-center">
                    <b>como desea donar?</b>
                    <br>
                    <div class="grid grid-cols-3 md:grid-cols-3 lg:grid-cols-3 gap-6">
                    <tr>
                        <td><a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded-lg" href="{{route('admin.aportes.create')}}">Banco </a></td> 
                        <td><a class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded-lg" href="{{route('admin.aportes.create')}}">Paypal </a></td>
                        <td><a class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded-lg" href="{{route('admin.aportes.create')}}">Bitcoin </a></td>
                    </tr>
                    </div>
                    <br>
                    <b>o puede donar en objetos?</b>
                    <br><div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-6">
                    <tr>
                        <td><a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded-lg" href="{{route('admin.objetos.create')}}">click aqui</a></td>
                    </tr></div>
                </div>

            </div>

            


            {{--//contenido similares--}}
            <aside>
                <h1 class="text-2xl font-bold text-gray-500">
                    Mas eventos de esta categoria:  
                    @if($evento->categoria) {{$evento->categoria->name}} @else {{"general"}} @endif
                </h1>
                <ul>

                                       
                   
                    @foreach ($similares as $similar)
                        <li class="mb-6 py-4 " >
                            <a class="flex" href="{{route('eventos.show', $similar)}}">
                                @if ($similar->image)
                                    <img class="w-36 h-20 object-cover object-center shadow-mg rounded-lg overflow-hidden" src="{{Storage::url($similar->image->url)}}" alt="">  
                                @else
                                    <img class="w-36 h-20 object-cover object-center shadow-mg rounded-lg overflow-hidden" src="https://cdn.pixabay.com/photo/2020/07/06/01/33/forest-5375005_960_720.jpg" alt="">
                                @endif
            
                                <span class="ml-2 text-gray-400">{{$similar->name}}</span>
                            </a>
                        </li>    
                    @endforeach
                </ul> 
            </aside>

        </div>
    </div>
</x-app-layout>    

<footer>
    <h1>Redes sociales</h1>
    <p class="text-center">Plataforma de Donaciones<br>Derechos reservados 2021</p>
</footer>