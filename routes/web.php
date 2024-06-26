<?php

use App\Http\Controllers\MemberController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get("list", [MemberController::class, "index"]);
Route::get("edit/{id}", [MemberController::class, "show"]);
Route::get("delete/{id}", [MemberController::class, "delete"]);
Route::post("Add" ,[MemberController::class, 'update'])->name("customer.add");
