<x-app-layout>
    <br>
    <h1 class="text-center text-6xl text-gray-500 ">Eventos de Donaciones</h1>
    
    <h1 class="text-center text-4xl text-gray-500 ">Ayudemos a una causa</h1>
    
    <h1 class=" py-2 text-center text-4xl text-gray-500 ">Nuestros eventos</h1>
    
    <br>

    
    
    
    <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
        <div class = "grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
            
            @foreach ($eventos as $evento)
                <article class="w-full h-96 bg-white shadow-lg overflow-hidden rounded-2xl"  >
                    
                    @if ($evento->image)
                    <a href="{{route('eventos.show', $evento)}}">
                    <img class="w-full h-56 object-cover object-center" src="{{Storage::url($evento->image->url)}}" alt="">
                    </a>
                    @else
                    <a href="{{route('eventos.show', $evento)}}">
                        <img class="w-full h-56 object-cover object-center" src="https://cdn.pixabay.com/photo/2020/07/06/01/33/forest-5375005_960_720.jpg" alt="">
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
        <br>
        <div class="ml-4">
            {{$eventos->links()}}
        </div>
        
    </div>

    
    
</x-app-layout>

<footer>
    <h1>Redes sociales</h1>
    <p class="text-center">Plataforma de Donaciones<br>Derechos reservados 2021</p>
</footer>