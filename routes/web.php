<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\SellerController;
use App\Models\Seller;
use App\Models\SellerCustomer;
use Illuminate\Support\Facades\Route;

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

Route::get("/", [AppController::class, "dashboard"])->name("dashboard");
Route::get("sellers/list", [SellerController::class, "list"])->name("selllers.list");
Route::get("sellers/create", [SellerController::class, "createPage"])->name("selllers.create");
Route::post("sellers/create", [SellerController::class, "store"])->name("selllers.store");
Route::put("sellers/edit/{id}", [SellerController::class, "edit"])->name("selllers.edit");
Route::delete("sellers/delete/{id}", [SellerController::class, "delete"])->name("sellers.delete");