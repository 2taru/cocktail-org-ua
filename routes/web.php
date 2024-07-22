<?php

use App\Http\Controllers\GlobalController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Global routes
Route::get('/', [GlobalController::class, "showHomepage"]);
Route::get('/faq', [GlobalController::class, "showFAQ"]);
Route::get('/contact', [GlobalController::class, "showContact"]);