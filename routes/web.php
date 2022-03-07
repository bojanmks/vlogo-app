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

Route::get('/', [\App\Http\Controllers\HomeController::class, "index"])->name("home");
Route::get('/home', function() {
    return redirect()->route("home");
});
Route::resource('/restaurants', \App\Http\Controllers\RestaurantController::class, ['only' => ['index', 'show']]);
Route::post('/restaurants/search', [\App\Http\Controllers\RestaurantController::class, 'search'])->name("restaurants.search");
Route::post('/restaurants/filter', [\App\Http\Controllers\RestaurantController::class, 'getFiltered'])->name("restaurants.filter");
Route::post('/restaurants/food', [\App\Http\Controllers\RestaurantController::class, 'filterFood'])->name("restaurants.food");
Route::get('/contact', [\App\Http\Controllers\ContactController::class, "index"])->name("contact");
Route::post('/contact', [\App\Http\Controllers\MailController::class, "contact"])->name("mail.contact");
Route::get('/author', [\App\Http\Controllers\AuthorController::class, "index"])->name("author");
Route::middleware('isNotLoggedIn')->group(function() {
    Route::get('/login', [\App\Http\Controllers\AuthController::class, "login"])->name("form.login");
    Route::get('/register', [\App\Http\Controllers\AuthController::class, "register"])->name("form.register");
    Route::post('/login', [\App\Http\Controllers\AuthController::class, "doLogin"])->name("login");
    Route::post('/register', [\App\Http\Controllers\AuthController::class, "doRegister"])->name("register");
});
Route::middleware('isLoggedIn')->group(function() {
    Route::post('/logout', [\App\Http\Controllers\AuthController::class, "logout"])->name("logout");
    Route::post('/cart/add', [\App\Http\Controllers\OrderController::class, "addItem"])->name("cart.add");
    Route::post('/cart/change', [\App\Http\Controllers\OrderController::class, "change"])->name("cart.change");
    Route::post('/cart/items', [\App\Http\Controllers\OrderController::class, "getItems"])->name("cart.items");
    Route::post('/orders/store', [\App\Http\Controllers\OrderController::class, "store"])->name('orders.store');
});
Route::prefix('/admin')->name('admin.')->middleware(['isLoggedIn', 'isAdmin'])->group(function() {
    Route::get('/', [\App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', function() {
        return redirect()->route('dashboard');
    });
    Route::resource('/users', \App\Http\Controllers\UserController::class, ['except' => ['show']]);
    Route::get('/restaurants', [\App\Http\Controllers\AdminController::class, 'restaurants'])->name('restaurants');
    Route::resource('/restaurants', \App\Http\Controllers\RestaurantController::class, ['except' => ['index', 'show']]);
    Route::resource('/food', \App\Http\Controllers\FoodController::class, ['except' => 'show']);
    //Route::get('/categories', [\App\Http\Controllers\AdminController::class, 'foodCategories'])->name('categories');
    Route::resource('/categories', \App\Http\Controllers\FoodCategoryController::class, ['except' => ['show']]);
    Route::get('/orders', [\App\Http\Controllers\AdminController::class, 'orders'])->name('orders');
    Route::get('/orders/{id}', [\App\Http\Controllers\OrderController::class, 'details'])->name('orders.details');
    Route::get('/actions', [\App\Http\Controllers\AdminController::class, 'actions'])->name('actions');
});
