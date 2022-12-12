<?php

use App\Category;
use App\Product;
use App\SubCatgeory;
use Illuminate\Support\Facades\Route;

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
   return redirect()->route('login');
});

Route::get('front/index','FrontController@index')->name('front.index');
Route::get('product/single/{id}','FrontController@singleProduct')->name('product.single');
Route::post('/add/cart','Front\ProductController@addCart')->name('add.cart');
Route::get('/cart', 'Front\ProductController@cart')->name('cart');
Route::get('/remove/cart/{id}', 'Front\ProductController@removeCart')->name('remove.cart');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::resource('category','CategoryController');
Route::get('/categoryy/one', 'CategoryController@indexOne')->name('categoryy.one');
Route::get('/categoryy/two', 'CategoryController@index2')->name('categoryy.two');
Route::get('/request/category', 'CategoryController@index2')->name('request.category');
Route::resource('subcategory','SubCatgeoryController');
Route::get('/subcategoryy/one', 'SubCatgeoryController@indexOne')->name('subcategoryy.one');
Route::get('/subcategoryy/two', 'SubCatgeoryController@index2')->name('subcategoryy.two');

Route::get('/request/subcategory', 'SubCatgeoryController@index2')->name('request.subcategory');

Route::resource('/product','ProductController');

Route::get('/discount/product', 'ProductController@index2')->name('discount.product');
Route::get('/user/sellers','UserController@index')->name('seller.index');
Route::get('/user/visitor','UserController@index2')->name('user.index');
Route::get('/user/edit/{id}','UserController@edit')->name('user.edit');
Route::post('/user/update/{id}','UserController@update')->name('user.update');
Route::get('/admin/edit','UserController@adminEdit')->name('admin.edit');
Route::post('/profile/update', 'UserController@adminUpdate')->name('profile.update');

Route::get('/user/create','UserController@create')->name('user.create');
Route::post('/user/store','UserController@store')->name('user.store');

Route::post('/fetchmaincategory', 'ChildCategoryController@fetchmaincategory')->name('fetchmaincategory');

Route::resource('/about','AboutController');
Route::resource('/contact','ContactController');
Route::resource('/donate','DonateController');
Route::resource('/privacy','PrivacyController');

Route::get('/child-category/create','ChildCategoryController@create')->name('child-category.create');
Route::get('/child-categoryy/create/one','ChildCategoryController@create1')->name('child-categoryy.create.one');
Route::get('/child-categoryy/create/two','ChildCategoryController@create2')->name('child-categoryy.create.two');
Route::post('/child-category/store','ChildCategoryController@store')->name('child-category.store');
Route::get('/child-category/index','ChildCategoryController@index')->name('child-category.index');
Route::get('/child-categoryy/index/one','ChildCategoryController@index1')->name('child-categoryy.index.one');
Route::get('/child-categoryy/index/two','ChildCategoryController@index2')->name('child-categoryy.index.two');
Route::get('/child-category/edit/{id}/{status}','ChildCategoryController@edit')->name('child-category.edit');
Route::get('/child-category/delete/{id}','ChildCategoryController@destroy')->name('child-category.delete');
Route::get('/child-category/details/{id}','ChildCategoryController@show')->name('child-category.details');
Route::post('/child-category/update/{id}','ChildCategoryController@update')->name('child-category.update');
