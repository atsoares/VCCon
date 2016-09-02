<?php

use JasperPHP\JasperPHP;

/**
* Controle de rotas para a aplicação.
* Define caminhos da url.
*
* @var null
*/

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

// Rotas domain Processos
Route::group(['prefix' => 'processos'],  function()
{
	Route::group(['prefix' => 'categorias'],  function()
	{
		Route::get('', 					['as' => 'processoCategorias.index',   'uses' => 'ProcessoCategoriasController@index']);
        Route::get('{id}/visualizar',	['as' => 'processoCategorias.show',    'uses' => 'ProcessoCategoriasController@show']);
        Route::get('criar', 			['as' => 'processoCategorias.create',  'uses' => 'ProcessoCategoriasController@create']);
        Route::post('salvar', 			['as' => 'processoCategorias.store',   'uses' => 'ProcessoCategoriasController@store']);
        Route::get('{id}/editar', 		['as' => 'processoCategorias.edit',    'uses' => 'ProcessoCategoriasController@edit']);
		Route::post('{id}/atualizar', 	['as' => 'processoCategorias.update',  'uses' => 'ProcessoCategoriasController@update']);
		Route::get('{id}/remover', 		['as' => 'processoCategorias.destroy', 'uses' => 'ProcessoCategoriasController@destroy']);
	});

	Route::group(['prefix' => 'tipo'],  function()
	{
		Route::get('', 					['as' => 'processoTipo.index',   'uses' => 'ProcessoTipoController@index']);
	});
});
// End rotas domain OrgaosJulgadores


Route::get('/reports', function () {

    $input =  public_path() . '/report/hello_world_params.jrxml';
    $input2 =  public_path() . '/report/hello_world_params.jasper';
    $jasper = new JasperPHP;
    $jasper->compile($input)->execute();
    $output = $jasper->list_parameters($input2)->execute();

    print_r($output);
});