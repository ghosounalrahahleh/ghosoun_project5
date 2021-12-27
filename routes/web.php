<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('publicSite.index');
})->name('index');

Route::get('/owner', function () {
    return view('publicSite.owner');
})->name('owner');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/ownerlogin', [OwnerController::class, 'login'])->name('dashboard.login');
Route::get('/adminLogin', function () {
    return view('admin_auth/adminLogin');
})->name('adminLogin');

//reem
Route::get('/', [CategoryController::class, 'index'])->name('landing');
Route::get('/companies', [OwnerController::class, 'index'])->name('allCategories');
Route::get('/companies/{id}', [OwnerController::class, 'show'])->name('company');
Route::post('/companies/{company_id}', [ReviewController::class, 'store'])->name('companyReview');
Route::get('singleCategory/{id}', [CategoryController::class, 'show'])->name('category');
Route::get('/search', [OwnerController::class, 'search'])->name('search');
Route::get('/services', function () {
    return view('publicSite.services');
})->name('services');
Route::get('/about', function () {
    return view('publicSite.about');
})->name('about');

//ahmed
// Route::get("user/edit/{id}", [UserController::class, 'edit'])->name('useredit');

// Route::post("user/update/{id}", [UserController::class, 'update'])->name('userupdate');

Route::get('/', [OwnerController::class, 'getcompanies'])->name('landingComp');

Route::get('/showcompany', [OwnerController::class, 'showcompany'])->name('showcompany');

Route::resource('users', UserController::class);



//Backend Routs
//Admin Route
Route::get("add_admin", [AdminController::class, 'backendcreate']);
Route::post("add_admin/store", [AdminController::class, 'backendstore'])->name('admin.store');
Route::get("/admin", [AdminController::class, 'backendindex'])->name('admin.index');
Route::get("admin/edit/{id}", [AdminController::class, 'backendedit'])->name('admin.edit');
Route::post("admin/update/{id}", [AdminController::class, 'backendupdate'])->name('admin.update');
Route::get("admin/destroy/{id}", [AdminController::class, 'backenddestroy'])->name('admin.destroy');

//Category Route
Route::get("add_category", [CategoryController::class, 'backendcreate']);
Route::post("add_category/store", [CategoryController::class, 'backendstore'])->name('category.store');
Route::get("/category", [CategoryController::class, 'backendindex'])->name('category.index');
Route::get("category/edit/{id}", [CategoryController::class, 'backendedit'])->name('category.edit');
Route::post("category/update/{id}", [CategoryController::class, 'backendupdate'])->name('category.update');
Route::get("category/destroy/{id}", [CategoryController::class, 'backenddestroy'])->name('category.destroy');

//Owner Route
Route::get("add_owner", [OwnerController::class, 'backendcreate']);
Route::post("add_owner/store", [OwnerController::class, 'backendstore'])->name('owner.store');
Route::get("/backendowner", [OwnerController::class, 'backendindex'])->name('owner.index');
Route::get("owner/edit/{id}", [OwnerController::class, 'backendedit'])->name('owner.edit');
Route::post("owner/update/{id}", [OwnerController::class, 'backendupdate'])->name('owner.update');
Route::get("owner/destroy/{id}", [OwnerController::class, 'backenddestroy'])->name('owner.destroy');


//User Route
Route::get("add_user", [UserController::class, 'backendcreate']);
Route::post("add_user/store", [UserController::class, 'backendstore'])->name('user.store');
Route::get("/backenduser", [UserController::class, 'backendindex'])->name('user.index');
Route::get("user/edit/{id}", [UserController::class, 'backendedit'])->name('user.edit');
Route::post("user/update/{id}", [UserController::class, 'backendupdate'])->name('user.update');
Route::get("user/destroy/{id}", [UserController::class, 'backenddestroy'])->name('user.destroy');

//Service Route
Route::get("add_service", [ServiceController::class, 'backendcreate']);
Route::post("add_service/store", [ServiceController::class, 'backendstore'])->name('service.store');
Route::get("/service", [ServiceController::class, 'backendindex'])->name('service.index');
Route::get("service/edit/{id}", [ServiceController::class, 'backendedit'])->name('service.edit');
Route::post("service/update/{id}", [ServiceController::class, 'backendupdate'])->name('service.update');
Route::get("service/destroy/{id}", [ServiceController::class, 'backenddestroy'])->name('service.destroy');

//image Route
Route::get("add_image", [ImageController::class, 'backendcreate']);
Route::post("add_image/store", [ImageController::class, 'backendstore'])->name('image.store');
Route::get("/image", [ImageController::class, 'backendindex'])->name('image.index');
Route::get("image/edit/{id}", [ImageController::class, 'backendedit'])->name('image.edit');
Route::post("image/update/{id}", [ImageController::class, 'backendupdate'])->name('image.update');
Route::get("image/destroy/{id}", [ImageController::class, 'backenddestroy'])->name('image.destroy');
