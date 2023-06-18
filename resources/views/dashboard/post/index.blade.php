@extends('dashboard.layout')

@section('content')
    @can('admin.post.create')
    <a class="btn btn-success my-3" href="{{ route('post.create') }}">Crear Publicación</a>
    @endcan
<table class="table">
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Categoría</th>
            <th>Posted</th>
            <th colspan="2">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $p)
        <tr>
            <td>{{ $p->title }}</td>
            <td>{{ $p->category->title }}</td>
            <td>{{ $p->posted }}</td>
            <td width="10px">
                @can('admin.post.update')
                <a class="btn btn-primary" href="{{ route('post.edit', $p) }}">Editar</a>
                @endcan
                <a class="btn btn-primary" href="{{ route('post.show', $p) }}">Ver</a>
                
                @can('admin.post.destroy')
                <form action="{{ route('post.destroy', $p) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button class="btn btn-danger mt-2" type="submit">Eliminar</button>
                </form>
                @endcan               
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $posts->Links() }}
@endsection