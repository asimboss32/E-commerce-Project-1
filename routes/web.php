<?php

use App\Http\Controllers\backend\adminController;
use App\Http\Controllers\backend\categoryController;
use App\Http\Controllers\backend\dashboardController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\subCategoryController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\Backend\SettingController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [FrontendController::class, 'index'])->name('base');
Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');
Route::get('/return-process', [FrontendController::class, 'returnProcess']);
Route::get('/category-products/{id}', [FrontendController::class, 'categoryProducts']);
Route::get('/subcategory-products/{id}', [FrontendController::class, 'subCategoryProducts']);
Route::get('/product-details/{slug}', [FrontendController::class, 'productDetails']);
Route::get('/view-cart', [FrontendController::class, 'viewCart']);
Route::get('/checkout', [FrontendController::class, 'checkOut']);
Route::get('/type-products/{type}', [FrontendController::class, 'typeProduct']);
Route::get('/search-products', [FrontendController::class, 'searchProducts']);



//Policy Page..
Route::get('/privacy-policy', [FrontendController::class, 'privacyPolicy']);
Route::get('/terms-conditions', [FrontendController::class, 'termsCondition']);
Route::get('/refund-policy', [FrontendController::class, 'refundPolicy']);
Route::get('/payment-policy', [FrontendController::class, 'paymentPolicy']);
Route::get('/about-us', [FrontendController::class, 'aboutUs']);
Route::get('/contact-us', [FrontendController::class, 'contactUs']);

//Cart Routes...
Route::get('/add-to-cart/{id}', [FrontendController::class, 'addToCart']);
Route::post('/add-to-cart-details/{id}', [FrontendController::class, 'addToCartDetails']);
Route::get('/cart-delete/{id}', [FrontendController::class, 'addToCartDelete']);

//Order Confirmation Routes...
Route::post('/confirm-order', [FrontendController::class, 'confirmOrder']);
Route::get('/order-confirmed/{invoiceId}', [FrontendController::class, 'thankyou']);

//admin login
Route::get('/admin/login', [adminController::class, 'adminLogin']);
Route::get('/admin/logout', [adminController::class, 'adminLogout']);

Auth::routes();
Route::middleware(['auth'])->prefix('admin')->group(function (){
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [dashboardController::class, 'adminDashboard']);


//Categories...
Route::get('/category/list', [categoryController::class, 'categoryList']);
Route::get('/category/create', [categoryController::class, 'categoryCreate']);
Route::post('/category/store', [CategoryController::class, 'categoryStore']);
Route::get('/category/delete/{id}', [CategoryController::class, 'categoryDelete']);
Route::get('/category/edit/{id}', [CategoryController::class, 'categoryEdit']);
Route::post('/category/update/{id}', [CategoryController::class, 'categoryUpdate']);

//SubCategories...
Route::get('/sub-category/list', [subCategoryController::class, 'subCategoryList']);
Route::get('/sub-category/create', [subCategoryController::class, 'subCategoryCreate']);
Route::post('/sub-category/store', [subCategoryController::class, 'subCategoryStore']);
Route::get('/sub-category/edit/{id}', [subCategoryController::class, 'subCategoryEdit']);
Route::post('/sub-category/update/{id}', [subCategoryController::class, 'subCategoryUpdate']);
Route::get('/sub-category/delete/{id}', [subCategoryController::class, 'subCategoryDelete']);

//Products...
Route::get('/product/list', [ProductController::class, 'productList']);
Route::get('/product/create', [ProductController::class, 'productCreate']);
Route::post('/product/store', [ProductController::class, 'productStore']);
Route::get('/product/edit/{id}', [ProductController::class, 'productEdit']);
Route::post('/product/update/{id}', [ProductController::class, 'productUpdate']);
Route::get('/product/delete/{id}', [ProductController::class, 'productDelete']);

//Orders....
Route::get('/all-order/list', [OrderController::class, 'allOrderList']);
Route::get('/edit-order/{id}', [OrderController::class, 'editOrder']);
Route::post('/update-order/{id}', [OrderController::class, 'updateOrder']);
Route::get('/update-order-status/{status}/{id}', [OrderController::class, 'updateOrderStatus']);
Route::get('/status-wise-order/{status}', [OrderController::class, 'statusWiseOrder']);

//Settings...
Route::get('/general-setting', [SettingController::class, 'showSettings']);
Route::post('/general-setting/update', [SettingController::class, 'updateSettings']);
Route::get('/top-banners', [SettingController::class, 'showBanners']);
Route::get('/top-banner-edit/{id}', [SettingController::class, 'editBanner']);
Route::post('/top-banners/update/{id}', [SettingController::class, 'updateBanners']);
Route::get('/policies-process', [SettingController::class, 'showPolicyProcess']);
Route::post('/policies-process/update', [SettingController::class, 'updatePolicyProcess']);
});