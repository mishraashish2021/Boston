<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Task 1
// Implement a simple route that returns a "Hello, Laravel!" message.
// Both route return Hello, Laravel!
Route::get('/', [HelloController::class, 'index']); // Using controller
Route::get('/hellolaravel', function () {
    return 'Hello, Laravel!'; // Using directly from route
}); 
