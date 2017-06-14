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
    return view('welcome');
});
Route::get('/document/add','DocumentController@add')->name('document-add');

Route::get('/company/add','PageController@addCompanyForm')->name('company-add');
Route::post('/company/add','CompanyController@upsert');
Route::get('/company/update/{id}','PageController@editCompanyForm')->name('company-edit');
Route::post('/company/update/{id}','CompanyController@upsert');
Route::get('/company/delete/{id}','CompanyController@delete');
Route::get('/company/{id}','PageController@showCompany');

Route::get('/user/add','PageController@addUserForm')->name('user-add');
Route::post('/user/add','UserController@upsert');
Route::get('/user/update/{id}','PageController@editUser')->name('user-edit');
Route::post('/user/update/{id}','UserController@upsert');
Route::get('/user/delete/{id}','UserController@delete');

Route::get('/attendance/add','PageController@addAttendanceForm')->name('attendance-controller');
Route::post('/attendance/add','AttendanceController@upsert');
