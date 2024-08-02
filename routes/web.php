<?php

use App\Http\Controllers\EmailController;
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
Route::get('/instruction', [GlobalController::class, "showInstruction"]);
Route::get('/contact', [GlobalController::class, "showContact"]);
Route::get('/pricing', [GlobalController::class, "showPricing"]);
Route::get('/about', [GlobalController::class, "showAbout"]);

// Services routes
Route::get('/service/backend', [ServicesController::class, "showBackendService"]);
Route::get('/service/frontend', [ServicesController::class, "showFrontendService"]);
Route::get('/service/guest', [ServicesController::class, "showGuestService"]);
Route::get('/service/prro', [ServicesController::class, "showPRROService"]);

// Mail routes
Route::post('/contact/send-email', [EmailController::class, "sendEmail"]);