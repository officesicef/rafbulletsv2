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

Route::get('/', 'MainController@index');


Route::get('/patient', function () {
    return view('theme.patient.index');
});
Route::get('/overview', function () {
    return view('theme.overview.index');
});

Route::get('examinations', 'MainController@index');
Route::get('examination/create', 'MainController@createExamination');
Route::get('examination/submit', 'MainController@submit');
Route::get('examination/therapy/create', 'MainController@createTherapy');