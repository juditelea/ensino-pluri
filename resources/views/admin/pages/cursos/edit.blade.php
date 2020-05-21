@extends('admin.layouts.app')

@section('title', "Detalhes do Curso - {$curso->title}")

@section('content')

<h1>Editar o Curso {{ $curso->title }}</h1>

<form action="{{ route('cursos.update', $curso->id) }}" method="post">
    @method('PUT')
    
    @include('admin.pages.cursos._partials.form')
</form>

@endsection
        