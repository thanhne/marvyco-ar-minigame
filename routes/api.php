<?php

use App\Http\Controllers\Api\PointController;
use App\Http\Controllers\Api\UserController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

/**
 * middleware
 * throttle:100,60 Rate limit 100 request per 60 second
 * excution|checkExcutionTime check excutiontime just allow <200ms
 * origin|CheckOriginRequest must be in $allowedOrigins = ['http://localhost:8009', 'http://127.0.0.1:8009'];
 *  (config here app\Http\Middleware\CheckOriginRequest.php) $allowedOrigins = [];
 */ 
Route::middleware(['throttle:100,60', 'origin', 'excution'])->group(function () {
    /**
     * Endpoint get all users
     */
    Route::get('/users', [UserController::class, 'get_users']);

    /**
     * Endpoint get a user by id
     */
    Route::get('/user/{user_id}', [ UserController::class, 'get_user' ]);

    /**
     * Endpoint user register
     */
    Route::post('/user', [UserController::class, 'register']);

    /**
     * Endpoint post point
     */
    Route::post('/point', [PointController::class, 'post_point'])->middleware('auth:sanctum');
});