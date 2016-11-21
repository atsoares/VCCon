<?php

use JasperPHP\JasperPHP;

/**
* Controle de rotas para a aplicação.
* Define caminhos da url.
*
* @var null
*/
Route::auth();
Route::get('/', ['as' => 'home.index',   'uses' => 'HomeController@index']);

Route::group(['prefix' => 'unidades'],  function()
	{
		Route::get('', 					['as' => 'unidades.index',   'uses' => 'Unidades\UnidadeController@index']);
		Route::get('{id}/visualizar',	['as' => 'unidades.show',    'uses' => 'Unidades\UnidadeController@show']);
		Route::get('criar', 			['as' => 'unidades.create',  'uses' => 'Unidades\UnidadeController@create']);
		Route::post('salvar', 			['as' => 'unidades.store',   'uses' => 'Unidades\UnidadeController@store']);
		Route::get('{id}/editar', 		['as' => 'unidades.edit',    'uses' => 'Unidades\UnidadeController@edit']);
		Route::post('{id}/atualizar', 	['as' => 'unidades.update',  'uses' => 'Unidades\UnidadeController@update']);
		Route::get('{id}/remover', 		['as' => 'unidades.destroy', 'uses' => 'Unidades\UnidadeController@destroy']);
	});

Route::group(['prefix' => 'areas-externas'],  function()
	{
		Route::get('', 					['as' => 'areasExternas.index',   'uses' => 'AreasExternas\AreaExternaController@index']);
		Route::get('{id}/visualizar',	['as' => 'areasExternas.show',    'uses' => 'AreasExternas\AreaExternaController@show']);
		Route::get('criar', 			['as' => 'areasExternas.create',  'uses' => 'AreasExternas\AreaExternaController@create']);
		Route::post('salvar', 			['as' => 'areasExternas.store',   'uses' => 'AreasExternas\AreaExternaController@store']);
		Route::get('{id}/editar', 		['as' => 'areasExternas.edit',    'uses' => 'AreasExternas\AreaExternaController@edit']);
		Route::post('{id}/atualizar', 	['as' => 'areasExternas.update',  'uses' => 'AreasExternas\AreaExternaController@update']);
		Route::get('{id}/remover', 		['as' => 'areasExternas.destroy', 'uses' => 'AreasExternas\AreaExternaController@destroy']);
	});

Route::group(['prefix' => 'reservas'],  function()
	{
		Route::get('', 					['as' => 'reservas.index',      'uses' => 'Reservas\ReservaController@index']);
		Route::get('{id}/visualizar',	['as' => 'reservas.show',       'uses' => 'Reservas\ReservaController@show']);
		Route::get('/calendario',	    ['as' => 'reservas.calendario', 'uses' => 'Reservas\ReservaController@calendario']);
		Route::get('criar', 			['as' => 'reservas.create',     'uses' => 'Reservas\ReservaController@create']);
		Route::post('salvar', 			['as' => 'reservas.store',      'uses' => 'Reservas\ReservaController@store']);
		Route::get('{id}/editar', 		['as' => 'reservas.edit',       'uses' => 'Reservas\ReservaController@edit']);
		Route::post('{id}/atualizar', 	['as' => 'reservas.update',     'uses' => 'Reservas\ReservaController@update']);
		Route::get('{id}/remover', 		['as' => 'reservas.destroy',    'uses' => 'Reservas\ReservaController@destroy']);
	});

Route::group(['prefix' => 'reunioes'],  function()
	{
		Route::get('', 					['as' => 'reunioes.index',      'uses' => 'Reunioes\ReuniaoController@index']);
		Route::get('{id}/visualizar',	['as' => 'reunioes.show',       'uses' => 'Reunioes\ReuniaoController@show']);
		Route::get('/calendario',	    ['as' => 'reunioes.calendario', 'uses' => 'Reunioes\ReuniaoController@calendario']);
		Route::get('criar', 			['as' => 'reunioes.create',     'uses' => 'Reunioes\ReuniaoController@create']);
		Route::post('salvar', 			['as' => 'reunioes.store',      'uses' => 'Reunioes\ReuniaoController@store']);
		Route::get('{id}/editar', 		['as' => 'reunioes.edit',       'uses' => 'Reunioes\ReuniaoController@edit']);
		Route::post('{id}/atualizar', 	['as' => 'reunioes.update',     'uses' => 'Reunioes\ReuniaoController@update']);
		Route::get('{id}/remover', 		['as' => 'reunioes.destroy',    'uses' => 'Reunioes\ReuniaoController@destroy']);
	});

// Rotas domain Condominos
Route::group(['prefix' => 'condominos'],  function()
{
	Route::group(['prefix' => ''],  function()
	{
		Route::get('', 					['as' => 'condominos.index',   'uses' => 'Condominos\CondominoController@index']);
        Route::get('{id}/visualizar',	['as' => 'condominos.show',    'uses' => 'Condominos\CondominoController@show']);
        Route::get('criar', 			['as' => 'condominos.create',  'uses' => 'Condominos\CondominoController@create']);
        Route::post('salvar', 			['as' => 'condominos.store',   'uses' => 'Condominos\CondominoController@store']);
        Route::get('{id}/editar', 		['as' => 'condominos.edit',    'uses' => 'Condominos\CondominoController@edit']);
		Route::post('{id}/atualizar', 	['as' => 'condominos.update',  'uses' => 'Condominos\CondominoController@update']);
		Route::get('{id}/remover', 		['as' => 'condominos.destroy', 'uses' => 'Condominos\CondominoController@destroy']);
	});

	Route::group(['prefix' => 'carros'],  function()
	{
		Route::get('', 					['as' => 'carros.index',   'uses' => 'Condominos\CarroCondominoController@index']);
		Route::get('{id}/listar', 		['as' => 'carros.list',    'uses' => 'Condominos\CarroCondominoController@list']);
        Route::get('{id}/visualizar',	['as' => 'carros.show',    'uses' => 'Condominos\CarroCondominoController@show']);
        Route::get('criar', 			['as' => 'carros.create',  'uses' => 'Condominos\CarroCondominoController@create']);
        Route::post('salvar', 			['as' => 'carros.store',   'uses' => 'Condominos\CarroCondominoController@store']);
        Route::get('{id}/editar', 		['as' => 'carros.edit',    'uses' => 'Condominos\CarroCondominoController@edit']);
		Route::post('{id}/atualizar', 	['as' => 'carros.update',  'uses' => 'Condominos\CarroCondominoController@update']);
		Route::get('{id}/remover', 		['as' => 'carros.destroy', 'uses' => 'Condominos\CarroCondominoController@destroy']);
	});

	Route::group(['prefix' => 'contatos'],  function()
	{
		Route::get('', 					['as' => 'contatos.index',   'uses' => 'Condominos\ContatoCondominoController@index']);
		Route::get('{id}/listar', 		['as' => 'contatos.list',    'uses' => 'Condominos\ContatoCondominoController@list']);
        Route::get('{id}/visualizar',	['as' => 'contatos.show',    'uses' => 'Condominos\ContatoCondominoController@show']);
        Route::get('criar', 			['as' => 'contatos.create',  'uses' => 'Condominos\ContatoCondominoController@create']);
        Route::post('salvar', 			['as' => 'contatos.store',   'uses' => 'Condominos\ContatoCondominoController@store']);
        Route::get('{id}/editar', 		['as' => 'contatos.edit',    'uses' => 'Condominos\ContatoCondominoController@edit']);
		Route::post('{id}/atualizar', 	['as' => 'contatos.update',  'uses' => 'Condominos\ContatoCondominoController@update']);
		Route::get('{id}/remover', 		['as' => 'contatos.destroy', 'uses' => 'Condominos\ContatoCondominoController@destroy']);
	});
});
// End rotas domain Condominos

// Rotas domain Funcionarios
Route::group(['prefix' => 'funcionarios'],  function()
{
	Route::group(['prefix' => ''],  function()
	{
		Route::get('', 					['as' => 'funcionarios.index',   'uses' => 'Funcionarios\FuncionarioController@index']);
		//Route::get('{id}/listar', 		['as' => 'funcionarios.list',    'uses' => 'Funcionarios\FuncionarioController@list']);
        Route::get('{id}/visualizar',	['as' => 'funcionarios.show',    'uses' => 'Funcionarios\FuncionarioController@show']);
        Route::get('criar', 			['as' => 'funcionarios.create',  'uses' => 'Funcionarios\FuncionarioController@create']);
        Route::post('salvar', 			['as' => 'funcionarios.store',   'uses' => 'Funcionarios\FuncionarioController@store']);
        Route::get('{id}/editar', 		['as' => 'funcionarios.edit',    'uses' => 'Funcionarios\FuncionarioController@edit']);
		Route::post('{id}/atualizar', 	['as' => 'funcionarios.update',  'uses' => 'Funcionarios\FuncionarioController@update']);
		Route::get('{id}/remover', 		['as' => 'funcionarios.destroy', 'uses' => 'Funcionarios\FuncionarioController@destroy']);
	});

	Route::group(['prefix' => 'funcoes'],  function()
	{
		Route::get('', 					['as' => 'funcoes.index',   'uses' => 'Funcionarios\FuncaoController@index']);
        Route::get('{id}/visualizar',	['as' => 'funcoes.show',    'uses' => 'Funcionarios\FuncaoController@show']);
        Route::get('criar', 			['as' => 'funcoes.create',  'uses' => 'Funcionarios\FuncaoController@create']);
        Route::post('salvar', 			['as' => 'funcoes.store',   'uses' => 'Funcionarios\FuncaoController@store']);
        Route::get('{id}/editar', 		['as' => 'funcoes.edit',    'uses' => 'Funcionarios\FuncaoController@edit']);
		Route::post('{id}/atualizar', 	['as' => 'funcoes.update',  'uses' => 'Funcionarios\FuncaoController@update']);
		Route::get('{id}/remover', 		['as' => 'funcoes.destroy', 'uses' => 'Funcionarios\FuncaoController@destroy']);
	});
});
// End rotas domain Funcionarios
