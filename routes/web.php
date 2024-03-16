<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\VendorAuth;
use App\Http\Middleware\AdminAuth;

// Route::get('/', function () {
//     return view('welcome');
// });

// WEBSITE
Route::get('/', [WebsiteController::class, 'index'])->name('website.index');

Route::group(['prefix' => '/', 'as' => 'website.'], function () {
	Route::get('/become-partner', [WebsiteController::class, 'becomePartnerCreate'])->name('become-partner.create');
	Route::post('/become-partner/store', [WebsiteController::class, 'becomePartnerStore'])->name('become-partner.store');

	Route::get('/products', [WebsiteController::class, 'productIndex'])->name('product.index');
	Route::get('/product-details/{id?}', [WebsiteController::class, 'productDetail'])->name('product.detail');
});

// VENDOR AUTH
Route::get('vendor/login', [VendorController::class, 'login'])->name('vendor.login');
Route::post('vendor/login-check', [VendorController::class, 'loginCheck'])->name('vendor.login-check');
Route::get('vendor/logout', [VendorController::class, 'logout'])->name('vendor.logout');

// VENDOR
Route::group(['prefix' => '/vendor', 'as' => 'vendor.', 'middleware' => VendorAuth::class], function () {

	Route::get('/dashboard', [VendorController::class, 'index'])->name('dashboard');
	Route::get('/orders', [VendorController::class, 'orderIndex'])->name('order.index');

	// PRODUCTS
	Route::get('/products', [VendorController::class, 'productIndex'])->name('product.index');
	Route::get('/product/create', [VendorController::class, 'productCreate'])->name('product.create');
	Route::post('/product/store', [VendorController::class, 'productStore'])->name('product.store');
	Route::get('/product/edit', [VendorController::class, 'productEdit'])->name('product.edit');
	Route::get('/product/details/{id}', [VendorController::class, 'productDetail'])->name('product.detail');

	// SETTINGS
	Route::get('/settings', [VendorController::class, 'settingEdit'])->name('setting.edit');
});

// ADMIN AUTH
Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('admin/login-check', [AdminController::class, 'loginCheck'])->name('admin.login-check');
Route::get('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// ADMIN
Route::group(['prefix' => '/admin', 'as' => 'admin.', 'middleware' => AdminAuth::class], function () {
	Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
	Route::get('/orders', [AdminController::class, 'orderIndex'])->name('order.index');

	// SETTINGS
	Route::get('/settings', [AdminController::class, 'settingEdit'])->name('setting.edit');

	// VENDORS
	Route::get('/vendors', [AdminController::class, 'vendorIndex'])->name('vendor.index');
	Route::get('/vendor/details/{id}', [AdminController::class, 'vendorDetail'])->name('vendor.detail');
	Route::get('/vendor/approve/{id}', [AdminController::class, 'vendorApprove'])->name('vendor.approve');

	// CATEGORIES
	Route::get('/categories', [AdminController::class, 'categoryIndex'])->name('category.index');
	Route::post('/category/store', [AdminController::class, 'categoryStore'])->name('category.store');
	Route::post('/category/update/{id}', [AdminController::class, 'categoryUpdate'])->name('category.update');
	Route::get('/category/delete/{id}', [AdminController::class, 'categoryDelete'])->name('category.delete');
});
