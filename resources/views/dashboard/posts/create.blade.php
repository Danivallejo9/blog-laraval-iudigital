@extends('layouts.app')

@section('content')
{{--    
 <form action="{{ route('post.store') }}" method="posts">
    @csrf
    
    <div class="row">
        <div class="form-group">
            <label for "name">Articulo</label><input class="form-control" type="text" name="text" id="name">
        </div>
    </div>
    
    {{-- fila 2 
    <div class="row form-group">
            <label for "description">Contenido</label>
            <textarea class="form-control" name="description" id="description" rows="10"></textarea>
    </div>

    {{-- fila 3
    <div class="row center">
        <div class="col s6">
            <button class="btn btn-succes btn-sm" type="submit">Publicar</button>
            <button class="btn btn-danger btn-sm">Cancelar</button>
        </div>
    </div>
</form>   
--}}

<div class="container">
    Create de posts
</div>
@endsection