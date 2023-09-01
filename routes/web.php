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
    return view('home');
});

// Route::get('/admin', function () {
//     return view('/admin/index');
// });

Auth::routes();


Route::group(['middleware' => 'admin'], function(){

    Route::get('/admin', function () {
        return view('admin.index');
    });

    Route::resource('/admin/contacts', 'AdminContactsController', ['names'=>[
        'index'=>'admin.contacts.index',
        'edit'=>'admin.contacts.edit'
    ]]);

    Route::resource('/admin/abouts', 'AdminAboutsController', ['names'=>[
        'index'=>'admin.abouts.index',
        'edit'=>'admin.abouts.edit'
    ]]);

});


Route::get('/', 'HomeController@index');
