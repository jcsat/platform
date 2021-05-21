<x-app-layout>
    <br>
    <h1 class="text-center text-6xl text-gray-500 ">Contactanos</h1>
    
    <h1 class="text-center text-4xl text-gray-500 ">Ayudemos a una causa</h1>
    
    <h1 class=" py-2 text-center text-4xl text-gray-500 "></h1>
    
    <br>
    
<div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
    <form action="{{route('store')}}" method="POST">

        @csrf
        <label for="">
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>

        @error('name')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label for="">
            Correo Electronico:
            <br>
            <input type="text" name="correo">
        </label>
        <br>

        @error('correo')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label for="">
            Mensaje:
            <br>
            <textarea name="mensaje" id="" cols="30" rows="10"></textarea>
        </label>
        <br>

        @error('mensaje')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <button type="submit">Enviar mensaje</button>
    </form>
</div>

    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif

</x-app-layout>

<footer>
    <h1>Redes sociales</h1>
    <p class="text-center">Plataforma de Donaciones<br>Derechos reservados 2021</p>
</footer>