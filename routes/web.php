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

//Route::get('/', function () {
//    return view('layouts.login');
//});

Route::get('/ouvidoria', function () {
    return view('layouts.painel');
});

/* ABRIR MANIFESTAÇÃO */
// ROTA PARA ABRIR VIEW DE MANIFESTAÇÃO
Route::post("/abrirManifestacao", 'ManifestacaoController@abrirManifestacao')->name('abrirManifestacao');
// ROTA PARA BUSCAR DADOS DO USUÁRIO ATRAVÉS DA MATRÍCULA
Route::post("/getDataUsers", 'ManifestacaoController@getDataUsers')->name('getDataUsers');
//ROTA PARA INSERIR MANIFESTAÇÃO
Route::post("/logicAbrirManifestacao", 'ManifestacaoController@logicAbrirManifestacao')->name('logicAbrirManifestacao');

/* BUSCAR MANIFESTAÇÃO */
// ROTA PARA MOSTRAR VIEW BUSCAR MANIFESTAÇÃO
Route::post("/buscarManifestacao", 'ManifestacaoController@buscarManifestacao')->name('buscarManifestacao');
// ROTA PARA BUSCAR MANIFESTAÇÃO PELO ID
Route::post("/getDataManifestacao", 'ManifestacaoController@getDataManifestacao')->name('getDataManifestacao');

/* ESTATÍSTICAS */
Route::post("/estatisticas", 'EstatisticasController@estatisticas')->name('estatisticas');
Route::post("/getLegendsEstatistic", 'EstatisticasController@getLegendsEstatistic')->name('getLegendsEstatistic');
Route::post("/getEstatistics", 'EstatisticasController@getEstatistics')->name('getEstatistics');


/* PERGUNTAS FREQUENTES */
Route::post("/perguntasFrequentes", 'PerguntasFrequentesController@perguntasFrequentes')->name('perguntasFrequentes');


/* RESPONDER MANIFESTAÇÕES */
Route::post("/responderManifestacoes", 'ResponderManifestacoes@responderManifestacoes')->name('responderManifestacoes');
Route::post("/dadosManifestacoesPendentes", 'ResponderManifestacoes@dadosManifestacoesPendentes')->name('dadosManifestacoesPendentes');
Route::post("/getDataManifestacaoToResponderManifestacao", 'ResponderManifestacoes@getDataManifestacaoToResponderManifestacao')->name('getDataManifestacaoToResponderManifestacao');
Route::post("/actionResponderManifestacao", 'ResponderManifestacoes@actionResponderManifestacao')->name('actionResponderManifestacao');

/* EDITAR MANIFESTAÇÕES */
Route::post("/editarManifestacoes", 'EditarManifestacoes@editarManifestacoes')->name('editarManifestacoes');
Route::post("/dadosManifestacoesRespondidas", 'EditarManifestacoes@dadosManifestacoesRespondidas')->name('dadosManifestacoesRespondidas');
Route::post("/actionEditManifestacao", 'EditarManifestacoes@actionEditManifestacao')->name('actionEditManifestacao');
Route::post("/actionEditWhenClick", 'EditarManifestacoes@actionEditWhenClick')->name('actionEditWhenClick');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::post('/login', 'Auth\LoginController@login')->name('login');
