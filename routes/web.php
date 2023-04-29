<?php

use App\Http\Controllers\back\AboutController;
use App\Http\Controllers\Back\CategoriesController;
use App\Http\Controllers\Back\DashboadController;
use App\Http\Controllers\Back\HomeSliderController;
use App\Http\Controllers\back\LoginController;
use App\Http\Controllers\Back\OrdersController;
use App\Http\Controllers\Back\PasswordController;
use App\Http\Controllers\Back\ProductsController;
use App\Http\Controllers\Back\ProfileController;
use App\Http\Controllers\Back\ReviewsController;
use App\Http\Controllers\Back\UsersController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\PagesController;
use App\Http\Controllers\Front\ProfileController as FrontProfileController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('cms/dashboard',[DashboadController::class,'index'])->middleware('auth:cms')->name('dashboard.index');

Route::get('cms/profile',[ProfileController::class,'edit'])->name('back.profile.edit');

Route::post('cms/profile',[ProfileController::class,'update'])->name('back.profile.update')->middleware('auth:cms');

Route::get('cms/login',[LoginController::class,'showLoginForm'])->name('back.login.show');

Route::post('cms/login',[LoginController::class,'login'])->name('back.login.login');

Route::get('cms/logout',[LoginController::class,'logout'])->name('back.logout')->Middleware('auth:cms');


Route::get('cms/password',[PasswordController::class,'edit'])->middleware('auth:cms')->name('back.password.edit');

Route::post('cms/password',[PasswordController::class,'update'])->middleware('auth:cms')->name('back.password.update');


Route::get('cms/category',[CategoriesController::class,'index'])->name('back.category.index');

Route::get('cms/create staff',[CategoriesController::class, 'create'])->name('back.category.create');
Route::post('cms/create staff',[CategoriesController::class, 'store'])->name('back.category.store');
Route::get('cms/edit/{category}',[CategoriesController::class,'edit'])->name('back.category.edit'); 
Route::post('cms/eupdate/{category}',[CategoriesController::class, 'update'])->name('back.category.update');
Route::post('cms/cdelete/{category}',[CategoriesController::class,'destroy'])->name('back.category.destroy'); 


Route::get('cms/product',[ProductsController::class, 'index'])->name('back.product.index');
Route::get('cms/Cproduct',[ProductsController::class, 'create'])->name('back.product.create');
Route::post('cms/sproduct',[ProductsController::class, 'store'])->name('back.product.store');
Route::get('cms/editproduct/{product}',[ProductsController::class,'edit'])->name('back.product.edit'); 
Route::post('cms/editupdate/{product}',[ProductsController::class, 'update'])->name('back.product.update');
Route::get('cms/pdelete/{product}',[ProductsController::class,'destroy'])->name('back.product.destroy'); 

Route::name('front.')->group(function() {

    Route::get('/category/{category}', [PagesController::class, 'category'])->name('pages.category');

    Route::get('/brand/{brand}', [PagesController::class, 'brand'])->name('pages.brand');

    Route::get('/product/{product}', [PagesController::class, 'product'])->name('pages.product');

    Route::get('/search', [PagesController::class, 'search'])->name('pages.search');

    Route::get('/', [PagesController::class, 'home'])->name('home');

    Route::post('/product/{product}/review', [PagesController::class, 'review'])->name('pages.review');
  
    Route::get('/about', [PagesController::class, 'about'])->name('pages.about');



    Route::controller(CartController::class)->group(function(){
        Route::get('/carts','index')->name('cart.index');
        Route::match(['put','patch'],'/cart','update')->name('cart.update');

        Route::get('/carts/{product}','destroy')->name('cart.destroy');
        
        Route::post('/cart/{product}/{qty?}','store');
        Route::get('/checkout','checkout')->middleware('auth')->name('checkout');

    });

    Route::controller(FrontProfileController::class)->group(function(){
    Route::get('/prrofile','index')->name('profile.index');
    Route::post('/prrofile/edit','edit')->name('profile.edit');
    Route::post('/prrofile/password','password')->name('profile.password');



    })->middleware('auth');


});

Route::get('cms/reviews',[ReviewsController::class, 'index'])->name('back.reviews.index');
Route::get('cms/Rdelete/{review}',[ReviewsController::class,'destroy'])->name('back.reviews.destroy'); 

Route::controller(OrdersController::class)->group(function(){

    Route::get('orders','index')->name('back.orders.index');
    Route::match(['put','patch'],'lupdate/{order}','update')->name('back.orders.update');
    Route::get('Odelete/{order}','destroy')->name('back.orders.destroy');


});


Route::controller(UsersController::class)->group(function(){

    Route::get('users','index')->name('back.users.index');
    Route::get('Udelete/{user}','destroy')->name('back.users.destroy');


});

Route::controller(AboutController::class)->group(function(){

    Route::get('About','index')->name('back.about.index');
    Route::post('store','store')->name('back.about.store');
    Route::get('cms/editAbout/{about}','edit')->name('back.about.edit'); 
    Route::get('cms/CAbout','create')->name('back.about.create');


    Route::post('cms/updateabout/{about}', 'update')->name('back.about.update');



});



Route::get('home_sliders', [HomeSliderController::class, 'index'])->name('home_sliders.index');
Route::get('cms/edithomeslider/{homeslider}',[HomeSliderController::class],'edit')->name('home_sliders.edit'); 

Auth::routes();


