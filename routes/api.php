<?php

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
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::group(['prefix' => '/v1'], function() {
    Route::get('add-new-user',[\App\Http\Controllers\UserController::class, 'create']);
    Route::get('get-documents',[\App\Http\Controllers\TypeDocumentController::class, 'show']);
    Route::post('add-new-document',[\App\Http\Controllers\DocumentUserController::class, 'create']);
    Route::post('get-documents',[\App\Http\Controllers\DocumentUserController::class, 'show']);
});

