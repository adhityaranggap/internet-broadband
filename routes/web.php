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
    return view('login');
});

Route::get('/registrasi/newcustomer/', function () {
    return view('register');
})->name('registrasi');

Route::post('/registrasi/create/', 'UsersController@store')->name('registrasi-create');

Route::delete('/registrasi/delete/{id}', 'UsersController@destroy')->name('registrasi-destroy');


Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashbaord');

Route::get('/home/{id}', 'UsersController@index')->name('asd');

Route::get('/home/{nama}/{umur}', 'MemberTypeController@index')->name('nmumur');

