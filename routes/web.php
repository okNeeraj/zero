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

Route::prefix('nikkadmin')->group(base_path('routes/web/template.php'));
Route::prefix('dashboard')->group(base_path('routes/web/backend.php'));
Route::get('/', function () {
    return view('Template.pages.login');
});

Route::group(['prefix' => 'react'], function () {
    Route::get('/', function () {
        return view('Frontend.react.app');
    });
});