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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'auth'], function(){
    Route::get('/profile/{slug}', [
        'uses' => 'ProfilesController@index', 
        'as'  => 'profile'
    ]);               
});

Route::post('/profile/update/update', [
    'uses' => 'ProfilesController@update', 
    'as'  => 'profile.update'
]);    

Route::get('termos-condicoes', function () {
    return view('construcao');
}); dawd

Route::get('politicas-privacidade', function () {
    return view('construcao');
});

Route::get('entrando', function () {
    return view('login-loader');
});

Route::get('registando', function () {
    return view('register-loader');
});

Route::get('saindo', function () {
    return view('saindo-loader');
});
