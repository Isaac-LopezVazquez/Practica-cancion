<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

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

Route::get('canciones/{id?}', [PaginaController::class, 'canciones']);
Route::get('contacto', [PaginaController::class, 'contacto']);   
Route::post('contacto',[PaginaController::class, 'bautizo']);

//Route::get('canciones/{id}' , function($id){

  //  $listaCanciones = [];
  //  $listaCanciones[] = ["nombre" => 'culpable o no', 'artista' => 'Luis Miguel'];
  //  $listaCanciones[] = ["nombre" => 'Tonta', 'artista' => 'Diego Verdague'];

  //  $cancion_seleccionada = $listaCanciones[$id];


  //  return view('cancion-detalle', compact('cancion_seleccionada'));


//});


