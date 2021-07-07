<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ZohoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web
//        DB::connection()->getPdo();
//        echo "Connected successfully to: " . DB::connection()->getDatabaseName();
//    } catch (\Exception $e) {
//        die("Could not connect to the database. Please check your configuration. error:" . $e );
//    }Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register web routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| contains the "web" middleware group. Now create something great!
//|
//*/
//
//Route::get('/', function () {
////    try {
//    die;
    //return view('welcom');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('refresh', [ContactController::class, 'refresh'])->name('contacts');
Route::get('accessToken', [ContactController::class, 'accessToken'])->name('contacts');
Route::get('insert', [ContactController::class, 'insert'])->name('contacts');
Route::get('get', [ContactController::class, 'get'])->name('contacts');


