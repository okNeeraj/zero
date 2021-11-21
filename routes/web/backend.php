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
  * Backend App's Routing
  * This routing is saprate for Product Management
  * @return void
  */

Route::get('/', function () {
    return view('Backend.dashboard');
})->name('backend');

// Location Management
Route::group(['prefix' => 'location'],function(){
    Route::get('/country', function () {
        return view('Backend.locations.country');
    })->name('backend.location.country');

    Route::get('/state', function () {
        return view('Backend.locations.state');
    })->name('backend.location.state');

    Route::get('/city', function () {
        return view('Backend.locations.city');
    })->name('backend.location.city');

    Route::get('/locality', function () {
        return view('Backend.locations.locality');
    })->name('backend.location.locality');
});

// User/Team Management
Route::group(['prefix' => 'management'], function () {
    Route::get('/users', function () {
        return view('Backend.management.users.index');
    })->name('backend.team');

    Route::get('/roles', function () {
        return view('Backend.management.roles.index');
    })->name('backend.team.role');

    Route::get('/groups', function () {
        return view('Backend.management.groups.index');
    })->name('backend.team.group');

    Route::get('/permissions', function () {
        return view('Backend.management.permissions.index');
    })->name('backend.team.permission');
});
