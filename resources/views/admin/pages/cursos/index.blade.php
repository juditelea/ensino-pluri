@extends('admin.layouts.app')

@section('title', 'Lista de Cursos')

@section('content')

    <hr>
    
    <h1>Lista de Cursos</h1>
    <a href="{{ route('cursos.create') }}" class="btn btn-primary">Cadastrar</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Título</th>
                <th>Descrição</th>  
                <th width="200">Ações</th> 
            </tr>           
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
                <tr>
                    <td style="width:200px">{{ $curso->title }}</td>
                    <td style="overflow: hidden; text-overflow: ellipsis; max-width: 35ch; white-space: nowrap;">
                        {{ $curso->description }} 
                    </td>
                    <td>
                        <a class="btn btn-outline-primary href={{ route('cursos.edit', $curso->id) }}">Editar</a>
                        <a class="btn btn-outline-primary href= {{ route('cursos.show', $curso->id) }}">Detalhes</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $cursos->links() !!}
@endsection
