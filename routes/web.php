<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/about', function() {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/', [PostController::class, "index"]);

Route::get('/{slug}', [PostController::class, "show"]);


