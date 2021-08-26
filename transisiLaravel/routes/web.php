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
    return view('index');
});

//Route of Companies Homepage
Route::get('/companies', 'CompanyController@index');
//Routes of Companies CRUD Operations
// Route::get('/companies/create', 'CompanyController@create');
// Route::post('/companies', 'CompanyController@store');
// Route::delete('/companies/{companies}', 'CompanyController@destroy');
// Route::get('/companies/{companies}/edit', 'CompanyController@edit');
// Route::patch('/companies/{companies}', 'CompanyController@update');
Route::resource('companies', "CompanyController");

//Route of Employees Homepage
Route::get('/employees', 'EmployeeController@index');
//Route of Employees CRUD Operations
// Route::get('/employees/create', 'EmployeeController@create');
// Route::post('/employees', 'EmployeeController@store');
// Route::delete('/employees/{employees}', 'EmployeeController@destroy');
// Route::get('/employees/{employees}/edit', 'EmployeeController@edit');
// Route::patch('/employees/{employees}', 'EmployeeController@update');
Route::resource('employees', 'EmployeeController');
