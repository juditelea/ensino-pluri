@extends('admin.layouts.app')

@section('title', 'Cadastro de Matrículas')

@section('content')
    <h1>Cadastro de Matrículas</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('matriculas.store') }}" method="post">
        @csrf
        <label for="alunos"> Alunos</label>
        <select name="alunos" id="aluno">
            <option value="José">José</option>
            <option value="Pedro">Pedro</option>
            <option value="Maria">Maria</option>
        </select>
        <button type="submit">Enviar</button>
    </form>

@endsection