<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/nome', function(){
    return "matheus";
});
Route::get('/produto', function(){
    return "feijão";
});

Route::get('/cliente', function(){
    return "pedro";
});

Route::get('/produtos', function(){
    return view('produtos');
});


Route::get ('/nome', 'ContatoController@retornaNome');

Route::get('produtos', 'ContatoController@listaProdutos');

Route::get('contatos', 'ContatoController@listaContatos');
*/

Route::get('contatos', 'contatoController@index');

route::get('contatos/create', 'ContatoController@create');
route::post('contatos/create', 'ContatoController@store');

Route::get('contatos/{id}', 'ContatoController@edit');