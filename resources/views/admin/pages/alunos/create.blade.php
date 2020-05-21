@extends('admin.layouts.app')

@section('title', 'Cadastro de Alunos')

@section('content')
    <h1>Cadastro de Alunos</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('alunos.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome:" value="{{ old('nome') }}"><br>
        <input type="text" name="email" placeholder="Email:" value="{{ old('email') }}"><br>
        Sexo: <br/>
        <input type="radio" name="sex" value="M"> Masculino
        <input type="radio" name="sex" value="F"> Feminino
        <input type="radio" name="sex" value="N"> Não Declarado
        <br/>
        <input type="text" name="birthdate" placeholder="Data Nascimento:" value="{{ old('data_nascimento') }}"><br>
        <button type="submit">Enviar</button>
    </form>

@endsection