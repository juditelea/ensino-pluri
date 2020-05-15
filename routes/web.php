<?php

use Illuminate\Support\Facades\Route;

Route::resource('alunos', 'AlunoController');    //->middleware('auth');
Route::resource('cursos', 'CursoController');   //->middleware('auth');
Route::resource('matriculas', 'MatriculaController');   //->middleware('auth');

Route::get('/login', function () {
    return "Login";
})->name('login');

Route::get('/', function () {
    return view('welcome');
});
