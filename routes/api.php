<?php

use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\genresController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/test',function (Request $request){
    return response()->json(['message'=>'Hello World']);
});
Route::get('/books',[BookController::class,'index']);
Route::post('/store-book',[BookController::class,'store']);
Route::delete('/book/delete/{bookId}',[BookController::class, 'delete']);
Route :: post("/books/genres",[genresController::class,"index"]);

