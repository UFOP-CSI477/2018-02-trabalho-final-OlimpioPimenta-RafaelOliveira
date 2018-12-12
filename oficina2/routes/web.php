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


Route::get('/', function () {
    return view('welcome.index');
});
Route::resource('/usuario', 'UsuarioController');
*/

Route::get('/', 'WelcomeController@index');
Route::resource('/agendamento', 'AgendamentoController');
Route::resource('/programacao', 'ProgramacaoController');
Route::resource('/apontamento', 'ApontamentoController');
Route::resource('/concessionarias', 'ConcessionariaController');
Route::resource('/concesusuario', 'ConcesusuarioController');
Route::resource('/especialidades', 'EspecialidadeController');
Route::resource('/excecaocarga', 'ExcecaocargaController');
Route::resource('/funcionario', 'FuncionarioController');
Route::resource('/intervaloagenda', 'IntervaloagendaController');
Route::resource('/logcarga', 'LogcargaController');
Route::resource('/os', 'OSController');
Route::resource('/oslog', 'OslogController');
Route::resource('/paineisagenda', 'PaineisagendaController');
Route::resource('/primas', 'PrimaController');
Route::resource('/statusagenda', 'StatusAgendamentoController');
Route::resource('/statusos', 'StatusOSController');
Route::resource('/telausuario', 'TelausuarioController');
Route::resource('/tipos', 'TipoController');
Route::resource('/usuario', 'UsuarioController');
Route::resource('/modelo', 'ModeloController');
Route::resource('/equipe', 'EquipeController');
Route::resource('/ordensdeservico', 'OrdensServicoController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
