<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\CategoriesController;

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
Route::get('dashboards',[AdminDashboardController::class,'index']);
Route::get('/categories', [CategoriesController::class, 'list'])->name('categoriesList');
Route::get('/categories/create', [CategoriesController::class, 'create'])->name('categoriesAdd');
Route::post('/categories/store', [CategoriesController::class, 'store'])->name('categoriesStore');
Route::get('/categories/edit/{id}', [CategoriesController::class, 'edit'])->name('categories.edit');
Route::put('/categories/update/{id}', [CategoriesController::class, 'update'])->name('categories.update');

Route::post('/categories/toggle-status/{id}', [CategoriesController::class, 'toggleStatus'])->name('categories.toggleStatus');

