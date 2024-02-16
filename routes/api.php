<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\ExchangeRateController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// تسجيل إنشاء حساب الدخول للمستخدم 
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:api')->group(function () {
    // هنا تعريف الراوتات التي تحتاج إلى المصادقة عبر API


});

// تسجيل الدخول لحساب المكتب
//Route::get('/offices', [AdminController::class, 'index']);
Route::post('/Office/store', [TransferController::class,'store'])->name('Office.store');
Route::get('/', [Controller::class, 'index'])->name('welcome');
Route::post('/', [Controller::class, 'index'])->name('welcome');
Route::get('/home', [HomeController::class, 'index'])->name('home');

// تعديل الملف الشخصي
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// صقحة المدير الرئيسية 
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

// صفحة الرئسية للمكتب عند تسجيل الدخول
Route::get('/Office/dashboard', function () {
    return view('Office.dashboard');
})->middleware(['auth:Office', 'verified'])->name('Office.dashboard');

// require __DIR__.'/Officeauth.php';


// صفحات المدير 
// إنشاء مكتب تعديل وحذف
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/admin/update/{id}', [AdminController::class, 'update'])->name('admin.update');
Route::delete('/admin/destroy/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');



// صفحة المكتب لإرسال الحوالات
Route::get('/Office/create', [TransferController::class,'create'])->name('Office.create');
Route::post('/Office/store', [TransferController::class,'store'])->name('Office.store');


// // صفحة المكتب لإنشاء أو إرسال سعر الصرف
Route::get('/Office/create1', [ExchangeRateController::class, 'create'])->name('Office.create1');
Route::post('/Office/store', [ExchangeRateController::class, 'store'])->name('Office.store1');
Route::get('/show1', [ExchangeRateController::class, 'showAllRates'])->name('show1');

// صفحة حذف الحوالات للمدير
Route::get('/admin/Delete_transfers', [TransferController::class,'showTransfers1'])->name('admin.show');
Route::delete('/admin/Delete_transfers/{id}', [TransferController::class,'destroy'])->name('admin.delete');

// صفحة حذف الأسعار للمدير
Route::get('/admin/Delete_prices', [ExchangeRateController::class,'showAllRates1'])->name('admin.Delete_prices');
Route::delete('/admin/Delete_prices/{id}', [ExchangeRateController::class,'destroy'])->name('admin.delete');



// صفحات المستخدم 
//صفحة عرض الحوالات 
Route::get('/show',[TransferController::class, 'showTransfers'])->name('show');




/////////////////////////////////////////////////////////////
// Route::middleware('auth:sanctum')->get('/user', function () {
//     return request()->user();
// });

// Route::middleware('auth:api')->group(function () {
//     // Authenticated API routes go here
// });

// Route::post('/Office/store', [TransferController::class, 'store'])->name('Office.store');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Route::prefix('admin')->middleware(['auth:admin', 'verified'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('admin.dashboard');
//     })->name('admin.dashboard');

//     Route::resource('admin', AdminController::class)->except(['show']); // Resourceful controller for admin management

//     Route::get('/admin/Delete_transfers', [TransferController::class, 'showTransfers1'])->name('admin.show');
//     Route::delete('/admin/Delete_transfers/{id}', [TransferController::class, 'destroy'])->name('admin.delete');

//     Route::get('/admin/Delete_prices', [ExchangeRateController::class, 'showAllRates1'])->name('admin.Delete_prices');
//     Route::delete('/admin/Delete_prices/{id}', [ExchangeRateController::class, 'destroy'])->name('admin.delete');
// });

// Route::prefix('Office')->middleware(['auth:Office', 'verified'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('Office.dashboard');
//     })->name('Office.dashboard');

//     Route::resource('Office', TransferController::class)->only(['create', 'store']); // Resourceful controller for Office transfers
//     Route::get('/create1', [ExchangeRateController::class, 'create'])->name('Office.create1');
//     Route::post('/store1', [ExchangeRateController::class, 'store'])->name('Office.store1');
//     Route::get('/show1', [ExchangeRateController::class, 'showAllRates'])->name('show1');
// });

// Route::get('/', [Controller::class, 'index'])->name('welcome');
// Route::post('/', [Controller::class, 'index'])->name('welcome');
// Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/show', [TransferController::class, 'showTransfers'])->name('show');