<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});


/*
Route::get('/', [
    ForumController::class, 'index'
]);

Route::get('/1/view', [ForumController::class, 'view']);
Route::get('/create', [ForumController::class, 'create']);
Route::post('/store', [ForumController::class, 'store']);


Route::get('/category', [CategoryController::class, 'index']);
Route::post('/category/store', [CategoryController::class, 'store']);
Route::get('/category/{id}/view', [CategoryController::class, 'view']);
Route::delete('/category/{id}/delete', [CategoryController::class, 'delete']);
Route::put('/category/{id}/update', [CategoryController::class, 'update']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


*/


Route::get('/', [
    'as' => 'index',
    'uses' => 'CustomAuthController@login'
]);


//Route::get('/', function () {
//    return view('welcome');
//});
