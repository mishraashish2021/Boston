<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\VideoController;

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

// Task 3: Video Generation
// 1. If time allows, choose either FFmpeg or PHP-FFmpeg.
// 2. Implement a basic command or API endpoint to process a sample video file.
Route::get('/video/form', [VideoController::class, 'showForm']);
Route::post('/video/process', [VideoController::class, 'processVideo'])->name('video.process');
