@extends('admin.layouts.app')

@section('title', "Detalhes do Aluno - {$aluno->name}")

@section('content')

    <h1>Produto {{ $aluno->name }} <a href="{{ route('alunos.index') }}"></a></h1>
    
        <ul>
            <li> <strong>Nome: </strong>{{ $aluno->name }}</li>
            <li> <strong>E-mail: </strong>{{ $aluno->email }}</li>
            <li> <strong>Data Nascimento: </strong>{{ date('d/m/Y',strtotime($aluno->birthdate))  }}</li>
            <li> <strong>Sexo: </strong>{{ $aluno->sex }}</li>
        </ul>

        <form action="{{ route('alunos.destroy', $aluno->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Deletar o aluno {{ $aluno->name }} </button>
        </form>
@endsection