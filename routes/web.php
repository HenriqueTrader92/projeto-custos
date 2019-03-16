<?php

Route::post('movimentacoes', 'MovimentacoesController@cadastraMovimentacoes')->name('cadastra.movimentacoes');
Route::get('movimentacoes', 'MovimentacoesController@movimentacoes')->name('movimentacoes');

Route::post('funcionarios', 'FuncionariosController@cadastroFuncionario')->name('cadastro.funcionario');
Route::get('funcionarios', 'FuncionariosController@funcionarios')->name('index.funcionarios');

Route::post('departamentos', 'DepartamentosController@cadastroDepartamento')->name('cadastro.departamento');
Route::get('departamentos', 'DepartamentosController@departamentos')->name('index.departamentos');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
