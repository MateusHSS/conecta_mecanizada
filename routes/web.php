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
    return view('employee.home');
})->name('home');

Route::get('/checklist', function () {
    return view('employee.checklists.checklist');
})->name('employee.check');

Route::prefix('employee')->group(function () {
    Route::resource('/request', 'RequestController');
    Route::get('/checklist/{model}', 'ChecklistController@new')->name('checklist.new');
    Route::resource('/checklist', 'ChecklistController');
});
