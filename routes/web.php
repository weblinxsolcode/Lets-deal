<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\AdminController;

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
Route::group(['prefix' => '/vendor', 'as' => 'vendor.'], function () {

	Route::get('/dashboard', [VendorController::class, 'index'])->name('dashboard');
	Route::get('/orders', [VendorController::class, 'orderIndex'])->name('order.index');

	// PRODUCTS
	Route::get('/products', [VendorController::class, 'productIndex'])->name('product.index');
	Route::get('/product/create', [VendorController::class, 'productCreate'])->name('product.create');
	Route::get('/product/edit', [VendorController::class, 'productEdit'])->name('product.edit');
	Route::get('/product/details', [VendorController::class, 'productDetail'])->name('product.detail');

	// CATEGORIES
	Route::get('/categories', [VendorController::class, 'categoryIndex'])->name('category.index');
	Route::get('/category/create', [VendorController::class, 'categoryCreate'])->name('category.create');
	Route::get('/category/store', [VendorController::class, 'categoryStore'])->name('category.store');
	Route::get('/category/edit', [VendorController::class, 'categoryEdit'])->name('category.edit');
	Route::get('/category/update', [VendorController::class, 'categoryUpdate'])->name('category.update');

	// SETTINGS
	Route::get('/settings', [VendorController::class, 'settingEdit'])->name('setting.edit');
})->middleware('Vendor');

// ADMIN
Route::group(['prefix' => '/admin', 'as' => 'admin.'], function () {
	Route::get('/login', [AdminController::class, 'login'])->name('login');
	Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
	Route::get('/orders', [AdminController::class, 'orderIndex'])->name('order.index');

	// PRODUCTS
	Route::get('/products', [AdminController::class, 'productIndex'])->name('product.index');
	Route::get('/product/create', [AdminController::class, 'productCreate'])->name('product.create');
	Route::get('/product/edit', [AdminController::class, 'productEdit'])->name('product.edit');
	Route::get('/product/details', [AdminController::class, 'productDetail'])->name('product.detail');

	// SETTINGS
	Route::get('/settings', [AdminController::class, 'settingEdit'])->name('setting.edit');

	// VENDORS
	Route::get('/vendors', [AdminController::class, 'vendorIndex'])->name('vendor.index');
	Route::get('/vendor/details/{id}', [AdminController::class, 'vendorDetail'])->name('vendor.detail');
	Route::get('/vendor/approve/{id}', [AdminController::class, 'vendorApprove'])->name('vendor.approve');
});
