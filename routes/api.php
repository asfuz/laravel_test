<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Laravel\Sanctum\Http\Controllers\AuthenticatedSessionController;
use Laravel\Sanctum\Http\Controllers\ConfirmablePasswordController;
use Laravel\Sanctum\Http\Controllers\TwoFactorAuthenticatedSessionController;
use Laravel\Sanctum\Http\Middleware\AuthenticateSession;

use Laravel\Sanctum\Http\Controllers\CsrfCookieController;

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\BlogController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('register', [AuthController::class, 'register']);
// Route::post('signup', function(){dd('test');});


Route::middleware('auth:sanctum')->group(function () {
    Route::resource('blogs', BlogController::class);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/sanctum/csrf-cookie', [CsrfCookieController::class, 'show']);