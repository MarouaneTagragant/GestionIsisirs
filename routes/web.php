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


Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){

    Route::get('/', 'AdminController@Home')->name('Home');
    Route::get('/users', 'AdminController@listUsers')->name('listUsers');
    Route::get('/add', 'AdminController@createUser')->name('add');
    Route::put('/add/store', 'AdminController@storeUser')->name('store');
    Route::get('/updateUser/{id}', 'AdminController@updateUser')->name('updateUser');
    Route::get('/showUser/{id}', 'AdminController@showUser')->name('showUser');
    Route::put('/editUser/{id}', 'AdminController@editUser')->name('editUser');
    Route::get('/deleteUser/{id}', 'AdminController@deleteUser')->name('deleteUser');

    Route::get('/sections', 'AdminSectionController@index')->name('Sections');
    Route::get('/section/add', 'AdminSectionController@add')->name('addSection');
    Route::post('/section/store', 'AdminSectionController@store')->name('storeSection');
    Route::get('/section/show/{id}', 'AdminSectionController@show')->name('showSection');
    Route::put('/section/update/{id}', 'AdminSectionController@update')->name('updateSection');
    Route::get('/section/edit/{id}', 'AdminSectionController@edit')->name('editSection');
    Route::get('/section/delete/{id}', 'AdminSectionController@delete')->name('deleteSection');


    Route::get('/niveaux', 'AdminNiveauController@index')->name('Niveaux');
    Route::get('/niveau/add', 'AdminNiveauController@add')->name('addNiveau');
    Route::post('/niveau/store', 'AdminNiveauController@store')->name('storeNiveau');
    Route::get('/niveau/show/{id}', 'AdminNiveauController@show')->name('showNiveau');
    Route::put('/niveau/update/{id}', 'AdminNiveauController@update')->name('updateNiveau');
    Route::get('/niveau/edit/{id}', 'AdminNiveauController@edit')->name('editNiveau');
    Route::get('/niveau/delete/{id}', 'AdminNiveauController@delete')->name('deleteNiveau');


    Route::get('/classes', 'AdminClassController@index')->name('Classes');
    Route::get('/class/add', 'AdminClassController@add')->name('addClass');
    Route::post('/class/store', 'AdminClassController@store')->name('storeClass');
    Route::get('/class/show/{id}', 'AdminClassController@show')->name('showClass');
    Route::put('/class/update/{id}', 'AdminClassController@update')->name('updateClass');
    Route::get('/class/edit/{id}', 'AdminClassController@edit')->name('editClass');
    Route::get('/class/delete/{id}', 'AdminClassController@delete')->name('deleteClass');

    
});


