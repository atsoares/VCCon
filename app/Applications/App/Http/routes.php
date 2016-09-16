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
        Route::get('{id}/visualizar',	['as' => 'carros.show',    'uses' => 'Condominos\CarroCondominoController@show']);
        Route::get('criar', 			['as' => 'carros.create',  'uses' => 'Condominos\CarroCondominoController@create']);
        Route::post('salvar', 			['as' => 'carros.store',   'uses' => 'Condominos\CarroCondominoController@store']);
        Route::get('{id}/editar', 		['as' => 'carros.edit',    'uses' => 'Condominos\CarroCondominoController@edit']);
		Route::post('{id}/atualizar', 	['as' => 'carros.update',  'uses' => 'Condominos\CarroCondominoController@update']);
		Route::get('{id}/remover', 		['as' => 'carros.destroy', 'uses' => 'Condominos\CarroCondominoController@destroy']);
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