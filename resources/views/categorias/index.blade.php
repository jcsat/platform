<x-app-layout>
    <br>
    <h1 class="text-center text-6xl text-gray-500 ">Eventos por Categorias</h1>
    
    <h1 class="text-center text-4xl text-gray-500 ">Ayudemos a una causa</h1>
    
    <h1 class=" py-2 text-center text-4xl text-gray-500 ">Nuestros eventos</h1>
    
    <br>

    <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
        <div class = "grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">

            @foreach ($categorias as $categoria)
                
                <article class="w-full h-24 bg-white shadow-lg overflow-hidden rounded-2xl"  >
                    
                    <div class="px-6 py-4 flex flex-col justify-end">
                        <h1 class="text-4xl text-gray-400 leading-8 font-bold text-right ">
                            <a href="{{route('categorias.show', $categoria)}}">
                                {{$categoria->name}}
                            </a>
                        </h1>

                        <h1 class=" text-gray-800 leading-8 font-bold text-right ">
                            <a href="{{route('categorias.show', $categoria)}}">
                                Ingresar a categoria 
                            </a>

                        </h1>


                    </div>        
                </article>
            @endforeach
        </div>
    </div>

    <br>
    <div class="ml-4">
        {{$categorias->links()}}
    </div>

</x-app-layout>

<footer>
    <h1>Redes sociales</h1>
    <p class="text-center">Plataforma de Donaciones<br>Derechos reservados 2021</p>
</footer>