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

            Route::get('/exams', function () {
                return view('dashboards.exams');
            })->name('exams');

            Route::get('/patients', 'PatientController@index')->name('patients');

            Route::get('/prescriptions', 'PrescriptionsController@index')->name('prescriptions');
            Route::get('/prescriptions/new', 'PrescriptionsController@create')->name('prescription.create');
            Route::post('/prescriptions/store', 'PrescriptionsController@store')->name('prescription.store');
            Route::delete('/prescriptions/destroy/{prescription}', 'PrescriptionsController@destroy')->name('prescription.destroy');
            Route::get('/prescriptions/receipt/{prescription}', 'PrescriptionsController@generate_prescription')->name('prescription.receipt');

        });

        Route::prefix('profile')->name('profile.')->group(function () {
            Route::get('/overview', 'DoctorController@profile_overview')->name('overview');
            Route::get('/edit/{doctor}', 'DoctorController@profile_overview_edit')->name('edit');
            Route::put('/update/{doctor}', 'DoctorController@profile_overview_update')->name('update');
        });

        Route::prefix('scheduling')->name('scheduling.')->group(function () {
            Route::get('/calendar', function () {
                return view('scheduling.general_calendar');
            })->name('calendar');
        });
    });
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
