@extends('admin.layouts.app')

@section('title', 'Lista de Alunos')

@section('content')

    {{-- @include("admin.includes.alerts") --}}

    <hr>
    
    <h1>Lista de Alunos</h1>
    <a href="{{ route('alunos.create') }}" class="btn btn-primary">Cadastrar</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>  
                <th>Data Nascimento</th>  
                <th>Sexo</th> 
                <th width="200">Ações</th> 
            </tr>           
        </thead>
        <tbody>
            @foreach ($alunos as $aluno)
                <tr>
                    <td>{{ $aluno->name }}</td>
                    <td>{{ $aluno->email }}</td>
                    {{-- <td>{{ $aluno->birthdate }}</td> --}}
                    <td>{{ date('d/m/Y',strtotime($aluno->birthdate)) }}</td>
                    <td>{{ $aluno->sex }}</td>
                    <td>
                        <a class="btn btn-outline-primary" href="{{ route('alunos.edit', $aluno->id) }}">Editar</a>
                        <a class="btn btn-outline-primary" href="{{ route('alunos.show', $aluno->id) }}">Detalhes</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $alunos->links() !!}
@endsection
