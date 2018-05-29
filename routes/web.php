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

Route::get('/', 'RemarksController@index');
Route::post('/remarks', 'RemarksController@store');

// Route::get('/', function () {
//     $remarks = App\Remark::all();
    
//     return view('remarks', compact('remarks'));
// });
