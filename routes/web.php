<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\CalculatorController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

/*
|--------------------------------------------------------------------------
| Welcome Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function () {return view('welcome');})->name('welcome');

Route::get('/cal', function () {return view('calculator.index');})->name('calculator');
Route::get('/answer', [CalculatorController::class, 'answer'])->name('answer');

Route::group(['prefix' => 'admin'], function () { Voyager::routes(); });
Auth::routes();
/*
|--------------------------------------------------------------------------
| Email AND Auth Routes
|--------------------------------------------------------------------------
*/
Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $r) {
    $r->fulfill();
    return redirect('/home')->with('status', 'حسابتان تایید شد');
})->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', function (Request $r) {
    $r->user()->sendEmailVerificationNotification();
    return back()->with('resent', 'Verification link sent ');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/user', [HomeController::class, 'user'])->name('user');
Route::post('/user', [HomeController::class, 'userUpdate'])->name('user.update');
Route::get('/comision', [HomeController::class, 'comision'])->name('comision');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/search/select', [HomeController::class, 'searchSelect'])->name('search.select');
Route::get('/search/show-fields', [HomeController::class, 'searchShowFields'])->name('search.show.fields');
Route::get('/search/select-field', [HomeController::class, 'searchSelectField'])->name('search.select.field');
Route::get('/search/find', [HomeController::class, 'searchFind'])->name('search.find');
/*
|--------------------------------------------------------------------------
| File Routes
|--------------------------------------------------------------------------
*/
Route::get('/file/select', [FileController::class, 'select'])->name('file.select');
Route::put('file/{file}/like', [FileController::class, 'like'])->name('file.like');
Route::put('file/{file}/shekar', [FileController::class, 'shekar'])->name('file.shekar');
Route::resource('file', FileController::class);
