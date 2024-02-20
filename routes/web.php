<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\{HomeController, ClassController};
use App\Http\Controllers\{FrontEndController};
use App\Http\Controllers\Admin\{CurrentClassController};
  
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
  
// Route::get('/', function () {
    Route::get('/', [FrontEndController::class, 'homePage'])->name('homePage');

// });
  
Auth::routes();

Route::get('/class/{id}', [ClassController::class, 'class'])->name('student.class');
Route::get('/class-list', [ClassController::class, 'classList'])->name('student.class.list');
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::controller(CurrentClassController::class)->prefix('admin')->group(function () {
        Route::get('manage-current-class', 'manage')->name('admin.manage-current-class');
        Route::get('create-current-class', 'create')->name('admin.create-current-class');
        Route::post('store-current-class', 'store')->name('admin.store-current-class');
        Route::get('delete-current-class/{id}', 'delete')->name('admin.delete-current-class');
    });
});
  

 