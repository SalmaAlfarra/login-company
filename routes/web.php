<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/customer', function () {
    return view('user::customer.create');
});
Route::get('/acquaintance', function () {
    return view('user::acquaintance.create');
});
Route::get('/account', function () {
    return view('status::account.create');
});
Route::get('/patron', function () {
    return view('user::patron.create');
});
Route::get('/delegate', function () {
    return view('user::delegate.create');
});
Route::get('/supplier', function () {
    return view('user::supplier.create');
});
Route::get('/category', function () {
    return view('option::category.create');
});
Route::get('/product', function () {
    return view('option::product.create');
});
Route::get('/court', function () {
    return view('places::court.create');
});
Route::resource('police-office', PoliceOfficeController::class);
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
