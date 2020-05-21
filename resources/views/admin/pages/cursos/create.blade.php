@extends('admin.layouts.app')

@section('title', 'Cadastro de Cursos')

@section('content')
    <h1>Cadastro de Cursos</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('cursos.store') }}" method="post">
        @include('admin.pages.cursos._partials.form')
    </form>

@endsection