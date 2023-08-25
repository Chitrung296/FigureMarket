<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StaffController;
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



//admin dashboad
Route::get('admin/index',[AdminController::class,'dashBoard'])->middleware('isLoggedIn');
Route::get('admin/login',[AdminController::class,'login']);
Route::get('admin/logout',[AdminController::class,'logout'])->name('admin-logout');
Route::post('admin/loginProcess',[AdminController::class,'loginProcess']);
Route::get('admin/admin-list',[AdminController::class,'AdminList'])->middleware('isLoggedIn');
Route::get('admin/admin-edit/{id}',[AdminController::class,'AdminEdit']);
Route::get('admin-delete/{id}',[AdminController::class,'delete']);
Route::get('admin/customer-list', [CustomerController::class, 'CustomerList'])->middleware('isLoggedIn')->name('admin.customer.list');
//product dashboad
Route::get('product/product-list',[ProductController::class,'Product'])->middleware('isLoggedIn');
Route::get('product/product-filter',[ProductController::class,'productFilter']);
Route::get('product/product-add',[ProductController::class,'add'])->middleware('isLoggedIn');
Route::post('product/product-save',[ProductController::class,'save']);
Route::get('product/product-delete/{id}',[ProductController::class,'delete']);
Route::get('product/product-edit/{id}', [ProductController::class, 'edit'] );
Route::post('product/product-update', [ProductController::class, 'update'] );
//, 'middleware' => 'isLoggedIn'

//customer dashboad
Route::group(['prefix' => 'customer', 'as' => 'customer.'], function () {
    Route::get('/index1', [CustomerController::class, 'index']);
    Route::get('/registration', [CustomerController::class, 'register']);
    Route::post('/processRegister', [App\Http\Controllers\CustomerController::class, 'processRegister']);
    Route::get('/signin', [CustomerController::class, 'login']);
    Route::post('/loginProcess', [App\Http\Controllers\CustomerController::class, 'loginprocess']);
    Route::get('/signout', [CustomerController::class, 'logout']);
    Route::get('/customer-edit/{id}', [CustomerController::class, 'customerEdit'])->name("edit");
    Route::post('/processUpdate', [CustomerController::class, 'customerUpdate'])->name("update");
    Route::get('customer-delete/{id}', [CustomerController::class, 'deleteCustomer'])->name("delete");});
    Route::get('customer/products',[CustomerController::class,'products']);
    Route::get('product-details/{id}',[CustomerController::class,'Details']);
//admin staff
// Route::get('admin/staff-list',[StaffController::class,'StaffList'])->middleware('isLoggedIn');
// Route::get('admin/staff-add',[StaffController::class,'StaffAdd'])->middleware('isLoggedIn');
// Route::post('admin/staff-save',[StaffController::class,'StaffSave']);
// Route::get('admin/staff-delete/{id}',[StaffController::class,'StaffDelete']);
// Route::get('admin/staff-edit/{id}',[StaffController::class,'StaffEdit']);
// Route::post('admin/staff-update', [StaffController::class, 'StaffUpdate'] );

Route::get('admin/staff-list',[StaffController::class,'StaffList'])->middleware('isLoggedIn');
Route::get('admin/staff-add',[StaffController::class,'StaffAdd'])->middleware('isLoggedIn');
Route::post('staff-save',[StaffController::class,'StaffSave']);
Route::get('admin/staff-delete/{id}',[StaffController::class,'StaffDelete']);
Route::get('admin/staff-edit/{id}',[StaffController::class,'StaffEdit']);
Route::post('staff-update', [StaffController::class, 'StaffUpdate'] );
