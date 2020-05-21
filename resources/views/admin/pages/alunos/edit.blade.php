@extends('admin.layouts.app')

@section('title', "Detalhes do Aluno - {$aluno->name}")

@section('content')

<h1>Editar o Aluno {{ $aluno->name }}</h1>

<form action="{{ route('alunos.update', $aluno->id) }}" method="post">
    @method('PUT')
    
    @include('admin.pages.alunos._partials.form')
</form>

@endsection
        