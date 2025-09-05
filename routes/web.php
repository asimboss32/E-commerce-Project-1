<?php

use App\Http\Controllers\backend\adminController;
use App\Http\Controllers\backend\dashboardController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [FrontendController::class, 'index']);
Route::get('/shop', [FrontendController::class, 'shop']);
Route::get('/retun-process', [FrontendController::class, 'returnProcess']);
Route::get('/category-products', [FrontendController::class, 'categoryProducts']);
Route::get('/subcategory-products', [FrontendController::class, 'subCategoryProducts']);
Route::get('/product-details', [FrontendController::class, 'productDetails']);
Route::get('/view-cart', [FrontendController::class, 'viewCart']);
Route::get('/checkout', [FrontendController::class, 'checkOut']);
Route::get('/type-products', [FrontendController::class, 'typeProduct']);



//Policy Page..
Route::get('/privacy-policy', [FrontendController::class, 'privacyPolicy']);
Route::get('/terms-conditions', [FrontendController::class, 'termsCondition']);
Route::get('/refund-policy', [FrontendController::class, 'refundPolicy']);
Route::get('/payment-policy', [FrontendController::class, 'paymentPolicy']);
Route::get('/about-us', [FrontendController::class, 'aboutUs']);
Route::get('/contact-us', [FrontendController::class, 'contactUs']);

//admin login
Route::get('/admin/login', [adminController::class, 'adminLogin']);
Route::get('/admin/logout', [adminController::class, 'adminLogout']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [dashboardController::class, 'adminDashboard']);
