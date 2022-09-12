<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login-basic');
});

Route::namespace('App\Http\Controllers')->group(function () {
    Route::group(['middleware' => ['auth']], function () {

        Route::prefix('dashboards')->name('dashboards.')->group(function () {
            Route::get('/home', function () {
                return view('dashboards.index');
            })->name('home');
        });

        Route::prefix('profile')->name('profile.')->group(function () {
            Route::get('/overview', 'DoctorController@profile_overview')->name('overview');
            Route::get('/edit/{doctor}', 'DoctorController@profile_overview_edit')->name('edit');
        });

        Route::prefix('scheduling')->name('scheduling.')->group(function () {

        });
    });
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
