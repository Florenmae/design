<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PosController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReturnedProductController;

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

//Home controller
Route::post("/home", [HomeController::class,'index']);
Route::get("/get-user-count", [HomeController::class, 'getUserCount']);
Route::get("/get-product-count", [HomeController::class, 'getProductCount']);
Route::get("/get-category-count", [HomeController::class, 'getCategoryCount']);
Route::get("/get-return-count", [HomeController::class, 'getReturnCount']);
Route::get("/recent-products", [HomeController::class, 'recentProducts']);

//Product
Route::post("/submit-product", [ProductController::class, 'createProduct'])->name("createProduct");

Route::get("/get-products", [PosController::class, 'fetchProducts']);
Route::get('/fetch-categories', [PosController::class, 'fetchCategories']);

//Category
Route::post("/submit-category", [CategoryController::class, 'createCategory'])->name("createCategory");

Route::post('/addToCart', [CartController::class, 'addToCart'])->name("addToCart");
Route::get('/showCartItem', [CartController::class, 'showCartItem']);
Route::post('/delete-item', [CartController::class, 'deleteItem']);



//
Route::get('/{vue?}', function(){
    return view('app');
})->where('vue', '[\/\w\.-]*');

