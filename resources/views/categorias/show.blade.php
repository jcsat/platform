<x-app-layout>


    <div class="max-w-3xl mx-auto px-12 py-12 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold text-gray-500">Nombre de la Categoria:</h1>
        <h1 class="text-6xl font-bold text-gray-500 text-center" >
            {{$categoria->name}}
        </h1>

            <br><br>
    
            @foreach ($eventos as $evento)
            <article class="w-full h-auto mb-8 bg-white shadow-lg overflow-hidden rounded-2xl"  >
                
                @if ($evento->image)
                <a href="{{route('eventos.show', $evento)}}">
                <img class="w-full h-72 object-cover object-center" src="{{Storage::url($evento->image->url)}}" alt="">
                </a>
                @else
                <a href="{{route('eventos.show', $evento)}}">
                <img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2020/07/06/01/33/forest-5375005_960_720.jpg" alt="">
                </a>
                @endif


                
                <div class="px-6 py-4 flex flex-col justify-end">
                    <h1 class="text-4xl text-gray-400 leading-8 font-bold text-right ">
                        <a href="{{route('eventos.show', $evento)}}">
                            {{$evento->name}}
                        </a>
                    </h1>
                    <h1 class=" text-gray-800 leading-8 font-bold text-right ">
                        <a href="{{route('eventos.show', $evento)}}">
                            Ingresar a evento
                        </a>
                        <h1 class=" text-gray-800 font-bold text-right ">Creado el: {{$evento->created_at->format('d-F-Y')}} </h1>    
                        <h1 class=" text-gray-800 font-bold text-right ">Finaliza el: {{$evento->created_at->addMonth(3)->format('d-F-Y')}} </h1>
                    </h1>
                    
                </div>
                
            </article>
        @endforeach

        </div>
     {{--   <div class="ml-4">
            {{$categorias->links()}}
        </div> --}}



   

</x-app-layout>

<footer>
    <h1>Redes sociales</h1>
    <p class="text-center">Plataforma de Donaciones<br>Derechos reservados 2021</p>
</footer>