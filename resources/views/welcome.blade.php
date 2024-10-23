@extends('layouts.home')

@section('name', 'Primer Proyecto')

@section('contain')
    <section class="w-full mb-6 h-[100px] flex items-center justify-center bg-gradient-to-br from-gray-800 to-gray-600 text-white">
        <h1 class="text-center text-5xl font-extrabold tracking-wide uppercase">Proyecto Laravel</h1>
    </section>
@endsection

@section('carrusel') 
    <section class=" flex flex-col mb-6 items-center  bg-white">
        <article class="w-full max-w-6xl flex justify-around ">
            @for ($i = 0; $i < 3; $i++)
                @component('components.carrusel')
                    @slot('img')
                    https://kinsta.com/es/wp-content/uploads/sites/8/2018/05/PHP_Feature-Image.jpg
                    @endslot
                    @slot('alt')
                        Carrusel {{$i}}
                    @endslot
                @endcomponent
            @endfor
        </article>
    </section>
@endsection

@section('footer')
    <footer class="bg-gray-900 text-gray-300 py-12">
        <div class="container mx-auto text-center space-y-8">
            <div class="text-sm max-w-2xl mx-auto leading-relaxed">
                @component('components.footer')
                    @slot('info1')
                    “La simplicidad es la máxima sofisticación.” – Leonardo da Vinci. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, fugiat.
                    @endslot
                    @slot('info2')
                    © 2024 Tu Empresa. Todos los derechos reservados. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    @endslot
                @endcomponent
            </div>
        </div>
    </footer>
@endsection
