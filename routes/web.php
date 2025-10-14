<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\User1Controller;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ChatSupportController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('category/create', [CategoryController::class, 'create']);
Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');

Route::get('rol/create', [RolController::class, 'create']);
Route::post('rol/store', [RolController::class, 'store'])->name('rol.store');

Route::get('user/create', [User1Controller::class, 'create']);
Route::post('user/store', [User1Controller::class, 'store'])->name('user.store');

Route::get('seller/create', [SellerController::class, 'create']);
Route::post('seller/store', [SellerController::class, 'store'])->name('seller.store');

Route::get('chatSupport/create', [ChatSupportController::class, 'create']);
Route::post('chatSupport/store', [ChatSupportController::class, 'store'])->name('chatSupport.store');

Route::get('image/create', [ImageController::class, 'create']);
Route::post('image/store', [ImageController::class, 'store'])->name('image.store');

Route::get('publication/create', [PublicationController::class, 'create']);
Route::post('publication/store', [PublicationController::class, 'store'])->name('publication.store');

Route::get('complaint/create', [ComplaintController::class, 'create']);
Route::post('complaint/store', [ComplaintController::class, 'store'])->name('complaint.store');

Route::get('comment/create', [CommentController::class, 'create']);
Route::post('comment/store', [CommentController::class, 'store'])->name('comment.store');
