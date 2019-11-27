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

Route::post('/', 'LoginController@login')->name('login-post');

//route CRUD Users
Route::get('/customer','UsersController@index')->name('customer-index');

Route::get('/customer/tambah','UsersController@tambah');

Route::post('/customer/store','UsersController@store');

Route::get('/customer/edit/{id}','UsersController@edit');

Route::post('/customer/update','UsersController@update');

Route::get('/customer/hapus/{id}','UsersController@hapus');

Route::get('/customer/cari','UsersController@cari');


Route::get('/registrasi/newcustomer/', function () {
    return view('register');
})->name('registrasi');

Route::post('/registrasi/create/', 'UsersController@create')->name('registrasi-create');

Route::delete('/registrasi/delete/{id}', 'UsersController@destroy')->name('registrasi-destroy');


Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashbaord');

Route::get('/home/{id}', 'UsersController@index')->name('asd');

Route::get('/home/{nama}/{umur}', 'MemberTypeController@index')->name('nmumur');

