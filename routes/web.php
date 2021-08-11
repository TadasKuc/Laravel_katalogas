<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PartController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('home')->name('main');
});

require __DIR__.'/auth.php';

Route::get('/', [Controller::class, 'home']);

Route::resource('/users', UserController::class)->middleware(['auth', 'admin']);

Route::resource('/parts', PartController::class)->middleware(['auth']);
Route::get('/parts-export', [PartController::class, 'exportToCsv'])->name('part.exportToCsv')->middleware(['auth', 'companyUser']);


Route::resource('/cars', CarController::class)->middleware(['auth','admin']);
Route::get('/cars', [CarController::class, 'index'])->name('cars.index')->middleware(['auth']);

Route::resource('/address', AddressController::class)->middleware(['auth']);

Route::resource('/categories', CategoryController::class)->middleware(['auth','admin']);
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index')->middleware(['auth']);

Route::resource('/order', OrderController::class)->middleware(['auth', 'companyUser']);
Route::get('/order/{part}/add', [OrderController::class, 'add'])->middleware(['auth', 'companyUser'])->name('order.add');

Route::get('/dashboard', [AdminController::class, 'index'])->middleware(['auth'])->name('dashboard');



