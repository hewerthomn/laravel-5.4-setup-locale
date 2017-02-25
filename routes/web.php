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
  $dia = date('d');
  $ano = date('Y');
  $diaSemana = ucwords(Carbon\Carbon::instance(new DateTime)->formatLocalized('%A'));
  $mes  = ucwords(Carbon\Carbon::instance(new DateTime)->formatLocalized('%B'));

  return "{$diaSemana}, {$dia} de {$mes} de {$ano}";
});
