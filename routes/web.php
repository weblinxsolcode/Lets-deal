<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\VendorAuth;
use App\Http\Middleware\AdminAuth;
use App\Http\Middleware\UserAuth;

// Route::get('/', function () {
//     return view('welcome');
// });

// WEBSITE
Route::get('/', [WebsiteController::class, 'index'])->name('website.index');

Route::group(['prefix' => '/', 'as' => 'website.'], function () {
	Route::get('/become-partner', [WebsiteController::class, 'becomePartnerCreate'])->name('become-partner.create');
	Route::post('/become-partner/store', [WebsiteController::class, 'becomePartnerStore'])->name('become-partner.store');

	Route::get('/products', [WebsiteController::class, 'productIndex'])->name('product.index');
	Route::get('/product-details/{id}', [WebsiteController::class, 'productDetail'])->name('product.detail');
});

// User Dashboard
Route::post('register', [WebsiteController::class, 'register'])->name('user.register');
Route::post('login', [WebsiteController::class, 'login'])->name('user.login');
Route::get('logout', [WebsiteController::class, 'logout'])->name('user.logout');

Route::group(['prefix' => '/', 'as' => 'website.', 'middleware' => UserAuth::class], function () {
	Route::get('user-dashboard', [WebsiteController::class, 'userDashboard'])->name('user-dashboard.index');
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
	Route::get('/product/edit/{id}', [VendorController::class, 'productEdit'])->name('product.edit');
	Route::post('/product/update/{id}', [VendorController::class, 'productUpdate'])->name('product.update');
	Route::get('/product/delete/{id}', [VendorController::class, 'productDelete'])->name('product.delete');
	Route::get('/product/details/{id}', [VendorController::class, 'productDetail'])->name('product.detail');

	// SETTINGS
	Route::get('/settings', [VendorController::class, 'settingEdit'])->name('setting.edit');
	Route::post('/setting-update-profile/{id}', [VendorController::class, 'settingUpdateProfile'])->name('setting.update-profile');
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
