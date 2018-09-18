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
//  Uzkrauna home page - base.blade.php faila
Route::get('/', function () {
    return view('index');
});

Route::resource('hosts', 'HostsController');
