<?php

use Illuminate\Support\Facades\Route;
use Modules\User\Http\Controllers\PatronController;
use Modules\Places\Http\Controllers\CourtController;
use Modules\User\Http\Controllers\CustomerController;
use Modules\Option\Http\Controllers\ProductController;
use Modules\Option\Http\Controllers\CategoryController;
use Modules\User\Http\Controllers\AcquaintanceController;
use Modules\Places\Http\Controllers\PoliceOfficeController;

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

Route::get('/home', function () {
    return view('status::report.home');
});
Route::resource('customer', CustomerController::class);

Route::resource('category', CategoryController::class);

Route::resource('court', CourtController::class);

Route::resource('police-office', PoliceOfficeController::class);

Route::resource('acquaintance', AcquaintanceController::class);

Route::resource('product', ProductController::class);

Route::resource('patron', PatronController::class);


Route::get('/account', function () {
    return view('status::account.create')->name('account');
});

Route::get('/delegate', function () {
    return view('user::delegate.create')->name('delegate');
});

Route::get('/supplier', function () {
    return view('user::supplier.create')->name('supplier');
});

Route::get('/legal-procedurs', function () {
    return view('option::legal-procedurs.create');
});
Route::get('/order', function () {
    return view('option::order.create');
});
Route::get('/issue', function () {
    return view('status::issue.create');
});
Route::get('/warranty', function () {
    return view('status::warranty.create');
});
Route::get('/creditcard', function () {
    return view('attachment::creditcard.create');
});
Route::get('/appointment', function () {
    return view('attachment::appointment.create');
});
Route::get('/archives', function () {
    return view('attachment::archives.create');
});
Route::get('/folder', function () {
    return view('attachment::folder.create');
});
Route::get('/media', function () {
    return view('attachment::media.create');
});
Route::get('/plane', function () {
    return view('attachment::plane.create');
});
Route::get('/fileupload', [CustomerController::class, 'excelfile']);
Route::post('/excel', [CustomerController::class, 'uploadexcel'])->name('customer.excel');
