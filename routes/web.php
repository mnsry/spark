<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FileController;
use App\Models\Field;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

/*
|--------------------------------------------------------------------------
| Welcome Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function () {return view('welcome');})->name('welcome');
Route::get('/dev', function () {
    return "mansory";
})->name('dev');
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin'], function () { Voyager::routes(); });

/*
|--------------------------------------------------------------------------
| File Routes
|--------------------------------------------------------------------------
*/
Route::get('/file/select-category', [FileController::class, 'selectCategory'])->name('file.select.category');
Route::get('/file/create-user', [FileController::class, 'createUser'])->name('file.create.user');
Route::get('/file/create-loc', [FileController::class, 'createLoc'])->name('file.create.loc');
Route::get('/file/create-info', [FileController::class, 'createInfo'])->name('file.create.info');
Route::get('/file/create-optional', [FileController::class, 'createOptional'])->name('file.create.optional');
Route::get('/file/create-advance', [FileController::class, 'createAdvance'])->name('file.create.advance');
Route::get('/file/create-price', [FileController::class, 'createPrice'])->name('file.create.price');
Route::get('/file/create-change', [FileController::class, 'createChange'])->name('file.create.change');
Route::get('/file/create-media', [FileController::class, 'createMedia'])->name('file.create.media');
Route::resource('file', FileController::class);
