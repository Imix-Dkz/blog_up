<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

/* [Web Routes]
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
*/

Route::get('/', HomeController::class)->name('home');
    //Ejm_L7 -> Route::get('/', 'HomeController');

    /* v02 //Ya que se buscará crear una lista más optimizada de rutas, se comenta lo siguiente
    Route::controller(CursoController::class)->group(function(){ 
        //Ejemplo de agrupación de metodos de una clase
        Route::get('/cursos', 'index')->name('cursos.index');
        Route::get('/cursos/create', 'create')->name('cursos.create');
            Route::post('cursos', 'store')->name('cursos.store');
        //Route::get('/cursos/{curso}', 'show')->name('cursos.show');
        Route::get('/cursos/{id}', 'show')->name('cursos.show');
        Route::get('/cursos/{curso}/edit', 'edit')->name('cursos.edit');
            Route::put('/cursos/{curso}', 'update')->name('cursos.update');
        Route::delete('/cursos/{curso}', 'destroy')->name('cursos.destroy');
    }); */

    /* v01 [Si no se agrupan es así... para LARAVEL7 o sin optimización]
        Route::get('/cursos', [CursoController::class, 'index']);
        //Ejm_L7 -> Route::get('/cursos', 'CursoController@index');
        Route::get('/cursos/create', [CursoController::class, 'create']);
        Route::get('/cursos/{curso}', [CursoController::class, 'show']);
    */

    /* v00 [Old Routes]
        Route::get('cursos', function(){
            return "Bienvenido a la pagina de cursos";
        });

        Route::get('cursos/create', function (){
            return "En esta página podras crear un curso...";
            
        });

        //cursos/javascript...
        Route::get('cursos/{curso}', function($curso){
            return "Bienvenido al curso: $curso";
        });
    */

    //v03 usando "Route:resource"
        Route::resource('cursos', CursoController::class);
    //v04 Usando "Route:resource", pero con cambio de URL, conservando variables
        //Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas'=>'curso'])->names('cursos');
        //Esto último lo que hace es cambiar las URLs de acceso de las paginas conservado toda la fucnionalidad
Route::get('cursos/{cursos}/{categoria?}', function ($curso,$categoria=null){
    if($categoria){
        return "Bienvenido al curso $curso de la catagoria $categoria";
    }else{
        return "Bienvenido al curso: $curso";
    }
});
Route::view('nosotros', 'nosotros')->name('nosotros');
Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');