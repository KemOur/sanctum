<?php

use Illuminate\Http\Request;
use App\http\Controllers\ApiToken;
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

Route::middleware('auth:api')->get('/user', function (Request $request) { return $request->user(); });


Route::post('auth/register', [ApiToken::class, 'register']);
Route::post('auth/login', [ApiToken::class, 'login']);

Route::middleware('auth:sanctum')->post('auth/me', [ApiToken::class, 'me']);
Route::middleware('auth:sanctum')->post('auth/logout', [ApiToken::class, 'logout']);

//posts part
Route::middleware('auth:sanctum')->get('/posts', [ApiToken::class, 'posts']);
