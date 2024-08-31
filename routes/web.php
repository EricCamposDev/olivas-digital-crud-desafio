<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\Customers\CustomerController;
use App\Http\Controllers\Customers\CustomerExecuteController;
use App\Http\Controllers\Sellers\SellerController;
use App\Http\Controllers\Sellers\SellerExecuteController;
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


// ============ SELLERS ===============
// exibição
Route::get("sellers/list", [SellerController::class, "list"])->name("selllers.list");
Route::get("sellers/edit/{id}", [SellerController::class, "edit"])->name("sellers.edit");
Route::get("sellers/create", [SellerController::class, "create"])->name("selllers.create");
Route::get("sellers/preview/{id}", [SellerController::class, "preview"])->name("sellers.preview");

// execução
Route::post("sellers/create", [SellerExecuteController::class, "store"])->name("selllers.store");
Route::put("sellers/edit/{id}", [SellerExecuteController::class, "udpate"])->name("selllers.update");
Route::delete("sellers/delete/{id}", [SellerExecuteController::class, "destroy"])->name("sellers.destroy");

// =========== CUSTOMERS ==============

// exibição
Route::get("customers/list", [CustomerController::class, "list"])->name("customers.list");
Route::get("customers/edit/{id}", [CustomerController::class, "edit"])->name("customers.edit");
Route::get("customers/create", [CustomerController::class, "create"])->name("customers.create");
Route::get("customers/preview/{id}", [CustomerController::class, "preview"])->name("customers.preview");

// execução
Route::post("customers/create", [CustomerExecuteController::class, "store"])->name("customers.store");
Route::put("customers/edit/{id}", [CustomerExecuteController::class, "udpate"])->name("customers.update");
Route::delete("customers/delete/{id}", [CustomerExecuteController::class, "destroy"])->name("customers.destroy");


/*
    pattern:

    read

    - list
    - create
    - edit
    - delete
    - preview

    execute

    - store
    - update
    - destroy
*/