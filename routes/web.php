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


Route::get('/',['as'=>'site.home','uses'=>"HomeController@index"]);
Route::get('admin/boletim/adicionar',['as'=>'admin.boletim.adicionar','uses'=>"BoletimController@adicionar"]);
Route::post('admin/boletim/salvar',['as'=>'admin.boletim.salvar','uses'=>"BoletimController@salvar"]);
Route::get('admin/boletim/listagem',['as'=>'admin.boletim.listagem','uses'=>"BoletimController@listagem"]);
Route::get('admin/boletim/excluir/{id}',['as'=>'admin.boletim.excluir','uses'=>"BoletimController@excluir"]);

