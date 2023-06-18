@extends('web.layout')
@section('content')

        <x-web.blog.post.index :posts='$posts'>
         <h2>Listado de publicaciones</h2>
         @slot('header')
            <h2 class="font-semibold text-x1 text-gray-800 leading-light">
                Listado principal de publicaciones --slot
            </h2>
         @endslot
         @slot('footer')
            <footer>
                Pie de página
            </footer>
         @endslot
        </x-web.blog.post.index>     
@endsection