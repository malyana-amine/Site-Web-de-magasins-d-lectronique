<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\ClientController;
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
Route::get('/admin', function () {
    return view('adminDash');
});
// Route::get('/product', function () {
//     return view('product');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin', [adminController::class, 'home'])->middleware('auth','admin')->name('admin');
Route::get('/admin/magasines', [adminController::class, 'magasineHome'])->middleware('auth','admin')->name('adminMagasine');
Route::get('/admin/cities', [adminController::class, 'adminCity'])->middleware('auth','admin')->name('adminCity');
Route::get('/admin/categories', [adminController::class, 'adminCategory'])->middleware('auth','admin')->name('adminCategory');
Route::get('/admin/magasines/{id}', [adminController::class, 'aprovemagasine'])->middleware('auth','admin')->name('aproveMagasine');
Route::post('/admin/categories/add', [adminController::class, 'store'])->middleware('auth','admin')->name('adminstoreCategory');
Route::get('/delCategory/{id}', [adminController::class, 'destroy'])->middleware('auth','admin')->name('deleteCategory');



Route::get('/user', [userController::class, 'home'])->middleware('auth')->name('user');
Route::post('/user/product', [userController::class, 'store'])->middleware('auth')->name('productsAdd');
Route::get('/user/product', [userController::class, 'productuser'])->middleware('auth')->name('productshome');
Route::get('/user/magasine', [userController::class, 'editmagasine'])->middleware('auth')->name('editmaasine');


Route::get('/client',function(){
 return   view('clientacuell');
});

Route::get('/client', [ClientController::class, 'home'])->name('client');
Route::get('/client/search', [ClientController::class, 'search'])->name('serchproduct');
Route::get('/client/product/{id}', [ClientController::class, 'show'])->name('viewproduct');



Route::get('/addCity', [CityController::class, 'home'])->middleware('auth')->name('addCity');
Route::post('/addCity', [CityController::class, 'store'])->middleware('auth')->name('store');
Route::get('/delCity/{id}', [CityController::class, 'destroy'])->middleware('auth')->name('deleteCity');

Route::get('/addCategory', [CategoryController::class, 'home'])->middleware('auth')->name('addCategory');
Route::post('/addCategory', [CategoryController::class, 'store'])->middleware('auth')->name('storeCategory');
// Route::get('/delCategory/{id}', [CategoryController::class, 'destroy']);


Route::get('/createMagasine', [MagasineController::class, 'home'])->middleware('auth')->name('createMagasine');
Route::post('/createMagasine', [MagasineController::class, 'store'])->middleware('auth')->name('storeMagasine');
// Route::get('/delCategory/{id}', [CategoryController::class, 'destroy']);




Route::get('/addProduct', [ProductController::class, 'home'])->middleware('auth')->name('addProduct');

Route::post('/addProduct', [ProductController::class, 'store'])->middleware('auth')->name('storeProduct');
Route::get('/produit/delete/{id}', [ProductController::class, 'destroy'])->middleware('auth')->name('deleteProduct');
Route::get('/produit/edit/{id}', [ProductController::class, 'edit'])->middleware('auth')->name('editProduct');
Route::put('/produit/update/{id}', [ProductController::class, 'update'])->middleware('auth')->name('updateProduit');


require __DIR__.'/auth.php';
