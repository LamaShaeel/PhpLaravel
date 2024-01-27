<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\DashboardController;

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

//Route::get('/', function () {
//    return view('welcome');
//})->name('welcome');



Route::get('/',[ItemsController::class,'ShowItemGroup'])->name('welcome');

Route::get('/itemsgroup',[ItemsController::class,'getItemGroup'])->name('itemsgroup');

Route::get('/delete/{id}',[ItemsController::class,'deleteGItem'])->name('deleteItem');


Route::get('addcart/{id}',[ItemsController::class,'addToCart'])->name('addToCart');


Route::get('/showproduct/{id}',[ItemsController::class,'getShowProduct'])->name('showProduct');

Route::get('/edit/{id}',[ItemsController::class,'editGItem'])->name('editItem');

Route::get('/items',[ItemsController::class,'getItems'])->name('items');



Route::get('/checkout',[ItemsController::class,'checkout'])->name('checkout')->middleware('auth');



Route::POST('/saveItems',[ItemsController::class,'saveItems'])->name('saveitems');

Route::POST('/save',[ItemsController::class,'saveGroupItems'])->name('saveGroupItems');

Route::POST('/update',[ItemsController::class,'updateGItem'])->name('updateItem');

Route::get('/deleteItem/{id}',[ItemsController::class,'deleteItem2'])->name('deleteItem2');
Route::POST('/updateItems',[ItemsController::class,'updateItems'])->name('updateItemss');
Route::get('/edi/{id}',[ItemsController::class,'editItem'])->name('editItems');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cpanel', [DashboardController::class, 'displayGItems'])->name('displayGItems');
Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
Route::get('/addGItems', [DashboardController::class, 'displayAddItemsPage'])->name('displayAddItemsPage');

Route::get('/invoice', [DashboardController::class, 'showInvoice'])->name('showInvoice');

Route::get('/cart', [DashboardController::class, 'cart'])->name('cart');

Route::get('/addItems', [DashboardController::class, 'displayAddItems'])->name('displayAddItems');

Route::get('/items', [DashboardController::class, 'ShowItem'])->name('ShowItem');

Route::get('/retrieve', [ItemsController::class, 'testAPI'])->name('testAPI');

