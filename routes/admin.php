<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Livewire\Admin\Category\ListCategory;


Route::get('/dashboard', DashboardController::class)->name('admin.dashboard');
Route::get('/file', [DashboardController::class, 'file'])->name('admin.file');
// Category
Route::get('/category/list', ListCategory::class)->name('admin.category');
Route::resource('category', CategoryController::class);