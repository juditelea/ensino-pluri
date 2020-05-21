@extends('admin.layouts.app')

@section('title', "Detalhes do curso - {$curso->name}")

@section('content')

    <h1>Produto {{ $curso->name }} <a href="{{ route('cursos.index') }}"></a></h1>
    
        <ul>
            <li> <strong>Título: </strong>{{ $curso->title }}</li>
            <li> <strong>Descrição: </strong>{{ $curso->description }}</li>
        </ul>

        <form action="{{ route('cursos.destroy', $curso->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Deletar o curso {{ $curso->name }} </button>
        </form>
@endsection