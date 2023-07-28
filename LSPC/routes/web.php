<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccuserController;
use App\Http\Controllers\ComplainantController;
use App\Http\Controllers\CrimeChargesController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/suspect', function () {
    return view('accuser');
});
Route::get('/victim', function () {
    return view('complainant');
});
Route::get('/crime', function () {
    return view('crimecharge');
});
Route::get('/lawyer', function () {
    return view('lawyer');
});
Route::post('/victim/form', function () {
    return view('victimform');
});

Route::get('/', [DashboardController::class, 'summary']);
Route::get('/suspect', [AccuserController::class, 'accuser']);
Route::get('/victim', [ComplainantController::class, 'complainant']);
Route::get('/crime', [CrimeChargesController::class, 'crime']);
Route::get('/lawyer', [LawyerController::class, 'lawyer']);
Route::get('/form/register',[LoginController::class,'index']);
Route::get('/dashboard',[DashboardController::class,'summary']);

Route::get('/victim/form', [ComplainantController::class, 'registerComplainant']);
Route::post('/victim/form', [ComplainantController::class, 'showregisterComplainant']);
Route::get('/suspect/form', [AccuserController::class, 'registerAccuser']);
Route::post('/suspect/form', [AccuserController::class, 'showregisterAccuser']);