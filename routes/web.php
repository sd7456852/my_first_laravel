<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NewController;
use App\Http\Controllers\ShoppingCarController;
use App\Http\Controllers\BannerController;
use Illuminate\Http\Request;
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

Route::get('/index', [ShoppingCarController::class, 'index']);
Route::get('/login', [Controller::class, 'login']);
Route::get('/page1', [ShoppingCarController::class, 'page1']);
Route::get('/page2', [ShoppingCarController::class, 'page2']);
Route::get('/page3', [ShoppingCarController::class, 'page3']);
Route::get('/page4', [ShoppingCarController::class, 'page4']);
Route::get('/comment', [Controller::class, 'comment']);
Route::get('/comment/save', [Controller::class, 'save_comment']);

Route::get('/comment/edit/{id}', [Controller::class, 'edit_comment']);
Route::get('/comment/delete/{id}', [Controller::class, 'delete_comment']);


Route::get('/comment/save', [Controller::class, 'save_comment']);

Route::get('/banner', [BannerController::class, 'banner']);
Route::get('/banner/create', [BannerController::class, 'create']);
Route::post('/banner/store', [BannerController::class, 'store']);
Route::get('/banner/edit/{id}', [BannerController::class, 'edit']);
Route::post('/banner/update/{id}', [BannerController::class, 'update']);
Route::post('/banner/delete{id}', [BannerController::class, 'delete']);




// Route::get('/comment1', function (Request $request) {
//     dd($request->all());
// });
// Route::get('/index', function () {
//     return ('ShoppingCarController');
// });
// Route::get('/login', function () {
//     return view('Bootstrap login');
// });
// Route::get('/page1', function () {
//     return view('Bootstrap shopping car page1');
// });
// Route::get('/page2', function () {
//     return view('Bootstrap shopping car page2');
// });
// Route::get('/page3', function () {
//     return view('Bootstrap shopping car page3');
// });
// Route::get('/page4', function () {
//     return view('Bootstrap shopping car page4');
// });
// Route::get('/comment', function () {
//     return view('comment.comment');
// });




Route::get('/micosoft-p', [Controller::class, 'show']);
// Route::get('/micosoft-p', function () {
//     return view('micosoft-p');
// });
Route::get('/color-game2', [NewController::class, 'color']);
// Route::get('/color-game2', function () {
//     return view('color-game2');
// });
