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
    return view ('auth.login');
});


Route::post('/', 'LoginController@login')->name('login-post');

//route CRUD customer
Route::group(['middleware' => 'auth'], function (){

    Route::middleware(['HakAkses'])->prefix('customer')->group(function () {
        Route::get('/','CustomerController@index')->name('customer-index');

        Route::get('/tambah','CustomerController@create');
        
        Route::post('/store','CustomerController@store')->name('customer-create');
        
        Route::get('/edit/{id}  ','CustomerController@edit')->name('customer-edit');
        
        Route::post('/update/{id}','CustomerController@update')->name('customer-update');
        
        Route::get('/hapus/{id}','CustomerController@hapus');
        
        Route::get('/cari','CustomerController@cari');

    });
    Route::middleware(['HakAkses'])->prefix('order')->group(function () {
    // Route::prefix('order')->group(function () {
        
        Route::get('/','OrderController@index')->name('order-index');
        Route::get('/create','OrderController@create')->name('order-create');
        Route::post('/store','OrderController@store')->name('order-store');
        Route::get('/load','OrderController@loadData')->name('load-data');
        Route::get('/list', 'OrderController@ordersList'); 
        Route::get('/hapus/{id}', 'OrderController@hapus')->name('delete-data');
    });

    Route::get('/logout-akun','LoginController@logout')->name('logout-akun');
    
});



Route::get('/registrasi/newcustomer/', function () {
    return view('auth.register');
})->name('registrasi');

Route::post('/registrasi/create/', 'CustomerController@store')->name('registrasi-create');

Route::delete('/registrasi/delete/{id}', 'UserController@destroy')->name('registrasi-destroy');


Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashbaord');

Route::get('/home/{id}', 'UserController@index')->name('asd');

Route::get('/home/{nama}/{umur}', 'MemberTypeController@index')->name('nmumur');


Route::get('/home', 'HomeController@index')->name('home');
