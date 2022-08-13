<?php

// use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Donation_FormController;
use App\Http\Controllers\MessageController;
use Illuminate\Routing\RouteRegistrar;
use App\Models\Category;


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
    return view('pages.index');
})->name('home.index');

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/donate', function () {
    return view('pages.donate');
});

Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/how-it-works', function () {
    return view('pages.how-it-works');
});

Route::get('/blog-single', function () {
    return view('pages.blog-single');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';






Route::get('/editprofile/{user}', ['App\Http\Controllers\UsersController', 'editProfile'])->name('pages.editprofile');

Route::post('/updateprofile/{user}', ['App\Http\Controllers\UsersController', 'updateProfile'])->name('pages.updateProfile');

Route::get('/profile/{user}', ['App\Http\Controllers\UsersController', 'showProfile']);


//admin routes
Route::get('admin/user/approve/{id}', [UsersController::class,'approve']);
Route::get('admin/users/approve-all', [UsersController::class,'approveAll']);
Route::get('admin/order/approve/{id}', [OrderController::class,'approve']);
Route::get('admin/package/approve/{id}', [PackageController::class,'approve']);
Route::get('admin/packages/approve-all', [PackageController::class,'approveAll']);

Route::resource('admin/users' , 'App\Http\Controllers\UsersController')->middleware('auth');
Route::resource('admin/packages' , 'App\Http\Controllers\PackageController')->middleware('auth');
Route::resource('admin/categories' , 'App\Http\Controllers\CategoryController')->middleware('auth');
Route::resource('admin/messages' , 'App\Http\Controllers\MessageController')->middleware('auth');
Route::resource('admin/cities' , 'App\Http\Controllers\CityController')->middleware('auth');
Route::get('items/{id}' , 'App\Http\Controllers\OrderController@orderItems');

Route::get('orders/{id}' , 'App\Http\Controllers\OrderController@orders');
Route::get('order/items/{id}' , 'App\Http\Controllers\OrderController@profileItems');


Route::resource('categories', CategoryController::class);
Route::get('categories/{packages}', [CategoryController::class,'show'])->name('categories.show');

Route::get('/softDelete/{package}', [PackageController::class,'softDelete'])->name('packages.softDelete');
Route::resource('packages', PackageController::class);
Route::resource('orders', OrderController::class);

Route::get('' , 'App\Http\Controllers\CategoryController@showCategory');


// Route::get('/' , function(){

//     $data= Category::all();
//     return view('layouts.nav',compact('data'));
// });
// -users');
// ->middleware(['auth'])->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/signup' ,  [RegisterController::class, 'index']);
//// Donation Form
Route::resource('donations', Donation_FormController::class);

//contact page
Route::resource('pages/contact', MessageController::class);
