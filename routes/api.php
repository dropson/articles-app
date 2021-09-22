<?php

use App\Http\Controllers\Api\ArticleController;

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


Route::get('article-json', [ArticleController::class, 'show']);
Route::put('article-views-increment', [ArticleController::class, 'viewIncrement']);
Route::put('article-likes-increment', [ArticleController::class, 'likeIncrement']);
