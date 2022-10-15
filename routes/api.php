<?php

use App\Http\Controllers\Api\AvariaController;
use App\Http\Controllers\Api\ProblemController;
use App\Http\Controllers\Api\SolutionController;
use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('problem', [ProblemController::class, 'index']);
Route::get('solution/{problem_id}', [SolutionController::class, 'index']);
