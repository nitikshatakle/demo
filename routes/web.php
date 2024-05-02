<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testingController;
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
    return view('index');
});
Route::get('index', function () {
    return view('index');
});
Route::get('about', function () {
    return view('about');
});
Route::get('appointment', function () {
    return view('appointment');
});
Route::post('appointment',[testingController::class,'appointment']);
Route::get('contact', function () {
    return view('contact');
});
Route::get('service', function () {
    return view('service');
});
Route::get('team', function () {
    return view('team');
});
Route::get('testimonial', function () {
    return view('testimonial');
});
Route::get('price', function () {
    return view('price');
});
// Route::get('/display', [testingController::class, 'display']);
// Route::get('/geturl/{name}/{id?}', [testingController::class, 'getParam']);


