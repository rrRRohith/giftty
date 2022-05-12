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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('signup','API\ApiController@signup'); 
Route::post('login', 'API\ApiController@login'); 
Route::post('update-profile','API\ApiController@updateProfile');


Route::group(['middleware' => 'api'], function ($router) {

    Route::post('categories','API\HomeController@categories'); 
    Route::post('occasions','API\HomeController@occasions');
    Route::post('shopping-categories','API\HomeController@shoppingCategories');
    Route::post('banners','API\HomeController@banners');
    Route::post('sliders','API\HomeController@sliders');
    Route::post('home','API\HomeController@home');

   

});

