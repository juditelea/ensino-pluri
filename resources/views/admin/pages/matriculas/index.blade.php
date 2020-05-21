@extends('admin.layouts.app')

@section('title', 'Lista de Matrículas')

@section('content')


    <hr>
    
    <h1>Lista de matriculas</h1>
    <a href="{{ route('matriculas.create') }}" class="btn btn-primary">Cadastrar</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Alunos</th>
                <th>Cursos</th>  
                <th width="200">Ações</th> 
            </tr>           
        </thead>
        <tbody>
            @foreach ($matriculas as $matricula)
                <tr>
                    <td style="width:200px">{{ Aluno::where('id','$matricula->aluno_id') }}</td>
                    <td style="width:200px">{{ Curso::where('id','$matricula->curso_id') }}</td>
                    <td>
                        <a class="btn btn-outline-primary href={{ route('matriculas.edit', $matricula->id) }}">Editar</a>
                        <a class="btn btn-outline-primary href= {{ route('matriculas.show', $matricula->id) }}">Detalhes</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $matriculas->links() !!}
@endsection


