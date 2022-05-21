<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;

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

Route::get('/produits/create', [ProduitController::class, 'create'])->name('produits.create');
Route::post('/produits/store', [ProduitController::class, 'store'])->name('produits.store');
Route::get('/produits/index', [ProduitController::class, 'index'])->name('produits.index');