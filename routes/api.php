<?php

use App\Http\Controllers\MovementController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(MovementController::class)->group(function () {
    Route::post("movements/run", 'run');
    Route::post("movements/stop", 'stop');
    Route::post("movements/backward", 'backward');
    Route::post("movements/forward", 'forward');
    Route::post("movements/exit", 'exit');
});
