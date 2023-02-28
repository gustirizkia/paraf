<?php

use App\Http\Controllers\ParafController;
use Illuminate\Support\Facades\Route;

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
    return abort(404);
    return view('welcome');
});

Route::get('/signature/{uuid}', [ParafController::class, 'detail'])->name('detail-paraf');
