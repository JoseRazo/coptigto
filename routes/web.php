<?php

use Illuminate\Support\Facades\Route;

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

/**
 * Frontend routes
 */
Route::namespace('App\Http\Controllers\Front')->group(function (){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/conocenos', 'AboutController@about')->name('about');
    Route::get('/nuestros-servicios', 'ServicesController@services')->name('services');
    Route::get('/proyectos', 'ProjectsController@projects')->name('projects');
    Route::get('/contacto', 'ContactController@contact')->name('contact');
    Route::post('/contacto', [
        'uses' => 'ContactController@postContact',
        'as' => 'contact.post'
    ]);
});
