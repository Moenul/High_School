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

Route::get('logout/', 'Auth\loginController@logout');

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

    Route::resource('/admin/classes', 'AdminClassesController', ['names'=>[
        'index'=>'admin.classes.index',
        'edit'=>'admin.classes.edit',
        'show'=>'admin.classes.show'
    ]]);

    Route::resource('/admin/sections', 'AdminSectionsController', ['names'=>[
        'index'=>'admin.sections.index',
        'edit'=>'admin.sections.edit'
    ]]);

    Route::resource('/admin/students', 'AdminStudentsController', ['names'=>[
        'index'=>'admin.students.index',
        'show'=>'admin.students.show',
        'edit'=>'admin.students.edit'
    ]]);

    Route::resource('/admin/upgrades', 'AdminUpgradesController', ['names'=>[
        'index'=>'admin.upgrades.index',
        'edit'=>'admin.upgrades.edit'
    ]]);

    Route::resource('/admin/routines', 'AdminRoutinesController', ['names'=>[
        'index'=>'admin.routines.index',
        'create'=>'admin.routines.create',
        'edit'=>'admin.routines.edit'
    ]]);

    Route::resource('/admin/studentCosts', 'AdminStudentCostsController', ['names'=>[
        'index'=>'admin.studentCosts.index',
        'edit'=>'admin.studentCosts.edit'
    ]]);

    Route::resource('/admin/policys', 'AdminPolicysController', ['names'=>[
        'index'=>'admin.policys.index',
        'create'=>'admin.policys.create',
        'edit'=>'admin.policys.edit'
    ]]);

    Route::resource('/admin/speaches', 'AdminSpeachsController', ['names'=>[
        'index'=>'admin.speaches.index',
        'create'=>'admin.speaches.create',
        'edit'=>'admin.speaches.edit'
    ]]);



});

Route::get('/download/{id}', 'DownloadsController@download');

Route::resource('/admission', 'AdmissionController', ['names'=>[
    'index'=>'admission.index',
    'show'=>'admission.show'
]]);

Route::resource('/schedules', 'SchedulesController', ['names'=>[
    'index'=>'schedules.index'
]]);

Route::resource('/students', 'StudentsController', ['names'=>[
    'index'=>'students.index'
]]);

Route::resource('/informations', 'InformationsController', ['names'=>[
    'index'=>'informations.index'
]]);

Route::get('generatePdf',['App\Http\Controllers\PdfController', 'generatePdf'])->name('generatePdf');

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
