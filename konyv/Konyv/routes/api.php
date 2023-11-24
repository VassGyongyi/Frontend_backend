<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KonyvController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('konyvek',[KonyvController::class,'index']);
Route::get('konyvek/{id}',[KonyvController::class,'show']);
Route::post('konyvek',[KonyvController::class,'store']);
Route::put('konyvek/{id}',[KonyvController::class,'update']);
Route::delete('konyvek/{id}',[KonyvController::class,'destroy']);
