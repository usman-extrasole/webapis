<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('library/category', 'Api\AppControlller@libraryCategory');
Route::get('library/subcategory', 'Api\AppControlller@librarySubCategory');
Route::get('library/childcategory', 'Api\AppControlller@libraryChildCategory');
Route::post('library/search', 'Api\AppControlller@librarySearch');

Route::get('guitar/category', 'Api\AppControlller@guitarCategory');
Route::get('guitar/subcategory', 'Api\AppControlller@guitarSubCategory');
Route::get('guitar/childcategory', 'Api\AppControlller@guitarChildCategory');
Route::post('guitar/search', 'Api\AppControlller@guitarSearch');

Route::get('piano/category', 'Api\AppControlller@pianoCategory');
Route::get('piano/subcategory', 'Api\AppControlller@pianoSubCategory');
Route::get('piano/childcategory', 'Api\AppControlller@pianoChildCategory');
Route::post('piano/search', 'Api\AppControlller@pianoSearch');

Route::get('contact', 'Api\AppControlller@contact');
Route::get('about', 'Api\AppControlller@about');
Route::get('privacy', 'Api\AppControlller@privacy');
Route::get('donate ', 'Api\AppControlller@donate');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
