<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


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

Route::get('/', [TestController::class, 'sayHi'])->name("say-hi");

Route::get('/random', [TestController::class, 'random'])->name("random-");

Route::get('/randomgroups', [TestController::class, 'random_groups'])->name("random-g");

Route::get('/seconds', [TestController::class, 'seconds'])->name("seconds");


Route::get('/text', [TestController::class, 'text'])->name("text");





