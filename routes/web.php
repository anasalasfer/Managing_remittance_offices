<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ExchangeRateController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OfficesController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [Controller::class, 'index'])->name('welcome');
Route::post('/', [Controller::class, 'index'])->name('welcome');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

require __DIR__.'/adminauth.php';

Route::get('/Office/dashboard', function () {
    return view('Office.dashboard');
})->middleware(['auth:Office', 'verified'])->name('Office.dashboard');

require __DIR__.'/Officeauth.php';

Route::get('/Office/create', [TransferController::class,'create'])->name('Office.create');

Route::post('/office/store', [TransferController::class, 'store'])->name('Office.store');

Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');


Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/admin/update/{id}', [AdminController::class, 'update'])->name('admin.update');
Route::delete('/admin/destroy/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');

Route::get('/show',[TransferController::class, 'showTransfers'])->name('show');




Route::get('/Office/create1', [ExchangeRateController::class, 'create'])->name('Office.create1');
Route::post('/Office/store', [ExchangeRateController::class, 'store'])->name('Office.store1');

Route::get('/show1', [ExchangeRateController::class, 'showAllRates'])->name('show1');

Route::get('/admin/Delete_transfers', [TransferController::class,'showTransfers1'])->name('admin.show');

Route::delete('/admin/Delete_transfers/{id}', [TransferController::class,'destroy'])->name('admin.delete');


Route::get('/admin/Delete_prices', [ExchangeRateController::class,'showAllRates1'])->name('admin.Delete_prices');

Route::delete('/admin/Delete_prices/{id}', [ExchangeRateController::class,'destroy'])->name('admin.delete');
