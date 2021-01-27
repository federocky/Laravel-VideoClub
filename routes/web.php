<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
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

/* Route::get('/', function () {
    return view('home');
});
 */

Route::get('/', [HomeController::class, 'getHome']);


Route::get('/login', function () {
    return view('auth/login');
});


Route::get('/logout', function () {
    return view('welcome');
});


Route::get('/catalog', [CatalogController::class, 'getIndex']);

Route::get('/catalog/show/{id}', [CatalogController::class, 'getShow']);


/* Route::get('/catalog/show/{id}', function ($id) {
    return view('catalog/show', ['id' => $id]);
}); */

Route::get('/catalog/create', [CatalogController::class, 'getCreate']);

/* Route::get('/catalog/create', function () {
    return view('catalog/create');
}); */

Route::get('/catalog/edit/{id}', [CatalogController::class, 'getEdit']);

/* Route::get('/catalog/edit/{id}', function ($id) {
    return view('catalog/edit', ['id' => $id]);
}); */