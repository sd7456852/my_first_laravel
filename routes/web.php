<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NewController;
use App\Http\Controllers\ShoppingCarController;
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
Route::get('/index', function () {
    return view('Bootstrap index');
});
Route::get('/login', function () {
    return view('Bootstrap login');
});
Route::get('/page1', function () {
    return view('Bootstrap shopping car page1');
});
Route::get('/page2', function () {
    return view('Bootstrap shopping car page2');
});
Route::get('/page3', function () {
    return view('Bootstrap shopping car page3');
});
Route::get('/page4', function () {
    return view('Bootstrap shopping car page4');
});





Route::get('/micosoft-p', [Controller::class, 'show']);
// Route::get('/micosoft-p', function () {
//     return view('micosoft-p');
// });
Route::get('/color-game2', [NewController::class, 'color']);
// Route::get('/color-game2', function () {
//     return view('color-game2');
// });
