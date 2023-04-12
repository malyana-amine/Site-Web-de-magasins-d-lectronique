<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MagasineController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', function () {
    return view('user');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/addCity', [CityController::class, 'home'])->name('addCity');
Route::post('/addCity', [CityController::class, 'store'])->name('store');
Route::get('/delCity/{id}', [CityController::class, 'destroy']);

Route::get('/addCategory', [CategoryController::class, 'home'])->name('addCategory');
Route::post('/addCategory', [CategoryController::class, 'store'])->name('storeCategory');
Route::get('/delCategory/{id}', [CategoryController::class, 'destroy']);


Route::get('/createMagasine', [MagasineController::class, 'home'])->name('createMagasine');

Route::post('/createMagasine', [MagasineController::class, 'store'])->name('storeMagasine');
// Route::get('/delCategory/{id}', [CategoryController::class, 'destroy']);




Route::get('/addProduct', [ProductController::class, 'home'])->name('addProduct');

Route::post('/addProduct', [ProductController::class, 'store'])->name('storeProduct');
Route::get('/produit/delete/{id}', [ProductController::class, 'destroy'])->name('deleteProduct');
Route::get('/produit/edit/{id}', [ProductController::class, 'edit'])->name('editProduct');
Route::put('/produit/update/{id}', [ProductController::class, 'update'])->name('updateProduit');


require __DIR__.'/auth.php';
