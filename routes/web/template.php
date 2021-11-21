<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Backend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


 /**
  * Admin Template Routing
  * This routing is only responsible for NikkAdmin (Admin Template)
  * @return void
  */

Route::get('/', function () {
    return view('Template.dashboard.dashboard');
})->name('nikkadmin');

Route::group(['prefix' => 'page'],function(){
    Route::get('/', function () {
        return view('Template.pages.empty');
    })->name('nikkadmin.page');

    Route::get('/login', function () {
        return view('Template.pages.login');
    })->name('nikkadmin.page.login');

    Route::get('/otp', function () {
        return view('Template.pages.otp');
    })->name('nikkadmin.page.otp');

    Route::get('/add-user', function () {
        return view('Template.pages.add-user');
    })->name('nikkadmin.page.addUser');

    Route::get('/header', function () {
        return view('Template.pages.page-header');
    })->name('nikkadmin.page.header');
});

Route::group(['prefix' => 'forms'],function(){
    Route::get('/', function () {
        return view('Template.forms.default');
    })->name('nikkadmin.forms.default');

    Route::get('/editor', function () {
        return view('Template.forms.editor');
    })->name('nikkadmin.forms.editor');
});

Route::group(['prefix' => 'table'],function(){
    Route::get('/', function () {
        return view('Template.tables.data-table');
    })->name('nikkadmin.table.dataTable');
});
