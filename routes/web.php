<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NewController;
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
Route::get('/say', function () {
    return 'hello word';
});


Route::get('/micosoft-p', [Controller::class, 'show']);
// Route::get('/micosoft-p', function () {
//     return view('micosoft-p');
// });
Route::get('/color-game2', [NewController::class, 'color']);
// Route::get('/color-game2', function () {
//     return view('color-game2');
// });
