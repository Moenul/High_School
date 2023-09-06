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

// Route::get('home', function () {
//     return view('home');
// });

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

    Route::resource('/admin/galleries', 'AdminGalleriesController', ['names'=>[
        'index'=>'admin.galleries.index'
    ]]);

    Route::resource('/admin/members', 'AdminMembersController', ['names'=>[
        'index'=>'admin.members.index',
        'edit'=>'admin.members.edit'
    ]]);

    Route::resource('/admin/instructors', 'AdminInstructorsController', ['names'=>[
        'index'=>'admin.instructors.index',
        'edit'=>'admin.instructors.edit'
    ]]);

    Route::resource('/admin/events', 'AdminEventsController', ['names'=>[
        'index'=>'admin.events.index',
        'edit'=>'admin.events.edit'
    ]]);

    Route::resource('/admin/notices', 'AdminNoticesController', ['names'=>[
        'index'=>'admin.notices.index',
        'edit'=>'admin.notices.edit'
    ]]);

    Route::resource('/admin/sliders', 'AdminSlidersController', ['names'=>[
        'index'=>'admin.sliders.index'
    ]]);

    Route::resource('/admin/admissions', 'AdminAdmissionsController', ['names'=>[
        'index'=>'admin.admissions.index',
        'show'=>'admin.admissions.show',
        'edit'=>'admin.admissions.edit'
    ]]);


});

Route::get('/download/{id}', 'DownloadsController@download');

Route::resource('/admission', 'AdmissionController', ['names'=>[
    'index'=>'admission.index',
    'show'=>'admission.show'
]]);

Route::get('generatePdf',['App\Http\Controllers\PdfController', 'generatePdf'])->name('generatePdf');

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
