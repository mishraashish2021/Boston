<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// for Itemcontroller
use App\Http\Controllers\ItemController; 

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

// Task 2: RESTful API Development
// 1. Implement a minimal RESTful API for managing a collection of items (e.g., books, movies).
// 2. Include endpoints for retrieving all items and adding a new item.
// 3. Use Laravel Eloquent for database interactions.

Route::get('/items', [ItemController::class, 'index']); // for retrieving all items
Route::post('/items', [ItemController::class, 'store']); // add new items
// from postman use url with post method http://localhost:8000/api/items and object wiil be
// {
//     "title": "Zero to One",
//     "description": "Book by Blake Masters and Peter Thiel"
// }

// for update and delete items
Route::put('/items/{item}', [ItemController::class, 'update']);
Route::patch('/items/{item}', [ItemController::class, 'update']);
Route::delete('/items/{item}', [ItemController::class, 'destroy']);