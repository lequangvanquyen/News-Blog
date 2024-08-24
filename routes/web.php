<?php

use App\Http\Controllers\ASMController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CateController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Authentication routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Admin routes
Route::prefix('admin')->middleware('quantri')->group(function () {
    Route::get('/', [ASMController::class, 'index_admin'])->name('admin.index');

    // Blog routes
    Route::prefix('blog')->group(function () {
        Route::get('/list', [ASMController::class, 'list_blog'])->name('list_blog');
        Route::get('/add', [ASMController::class, 'add_blog'])->name('add_blog');
        Route::post('/add', [BlogController::class, 'them_bv'])->name('them_bv');
        Route::delete('/{id}/delete', [BlogController::class, 'xoa_bv'])->name('xoa_bv');
        Route::get('/{id}/edit', [BlogController::class, 'capnhat_blog'])->name('capnhat_blog');
        Route::put('/{id}/update', [BlogController::class, 'capnhat_bv'])->name('capnhat_bv');
    });

    // Category routes
    Route::prefix('category')->group(function () {
        Route::get('/list', [ASMController::class, 'list_cate'])->name('list_cate');
        Route::get('/add', [ASMController::class, 'add_cate'])->name('add_cate');
        Route::post('/add', [CateController::class, 'them_dm'])->name('them_dm');
        Route::delete('/{id}/delete', [CateController::class, 'xoa_dm'])->name('xoa_dm');
        Route::get('/{id}/edit', [CateController::class, 'capnhat'])->name('capnhat');
        Route::post('/{id}/update', [CateController::class, 'capnhat_dm'])->name('capnhat_dm');
    });

    // Account routes
    Route::prefix('accounts')->group(function () {
        Route::get('/', [ASMController::class, 'list_acc'])->name('list_acc');
        Route::get('/{id}/edit', [ASMController::class, 'edit_user'])->name('capnhat');
        Route::post('/{id}/update', [ASMController::class, 'update_user'])->name('capnhat_user');
        Route::delete('/{id}/delete', [ASMController::class, 'delete_user'])->name('xoa');
    });
});

// Public routes
Route::get('/', [ASMController::class, 'index'])->name('index');

Route::get('/about', [ASMController::class, 'about']);

Route::get('/new_blog', [ASMController::class, 'new_blog']);

Route::get('/contact', [ASMController::class, 'contact']);

Route::get('/blog', [ASMController::class, 'blog']);

//lấy tin tuc theo danh mục
Route::get('/dm-by-id/{id}', [ASMController::class, 'get_tt_by_dm']);

//lấy chi tiết tin tuc của danh mục
Route::get('/dm/ct/{id}', [ASMController::class, 'ct_tt_by_dm'])->name('ct_tt_by_dm');

//comment
Route::post('/comment', [CommentController::class, 'store'])->name('comments');
