<?php

use Illuminate\Support\Facades\Route;
Auth::routes();
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
    return view('auth.login');
});

Route::get('/cni','CniController@index')->name('cni');
Route::get('/cniShow','CniController@show')->name('show');
Route::post('/cni_add','CniController@add')->name('add_cni');
Route::post('/upload','CniController@upload')->name('upload');
Route::get('/departement','CniController@recherche')->name('departement');
Route::get('/genre','CniController@rechercheSexe')->name('par_genre');
Route::get('/age','CniController@rechercheAge')->name('par_age');
Route::get('/recherche','CniController@recherchePage')->name('page_recherche');


/**----------------------------Route Users --------------------------- */
Route::get('/users',[
    'as'   => 'users',
    'uses' => 'UserController@showUser'
]);
Route::get('/addUser',[
    'as'   => 'addUser',
    'uses' => 'UserController@createUser'
]);
Route::post('/storeUser',[
    'as'   => 'storeUser',
    'uses' => 'UserController@storeUser'
]);
Route::get('/editUser',[
    'as'   => 'editUser',
    'uses' => 'UserController@editUser'
]);
Route::put('/updateUser',[
    'as'   => 'updateUser',
    'uses' => 'UserController@updateUser'
]);
/**---------------------------- Fin Route Users --------------------------- */

Route::get('/home', 'HomeController@index')->name('home');
