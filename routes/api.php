<?php

use App\Http\Resources\RecipeResource;
use App\Http\Resources\RecipesCollection;
use Illuminate\Http\Request;
use App\Models\Account;
use App\Http\Resources\AccountResource;
use \App\Models\Recipe;
use Illuminate\Support\Facades\Auth;

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

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::get('signup/activate/{token}', 'AuthController@signupActivate');

    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/test', function (Request $request) {
        $recipe = Recipe::all();
        return new RecipesCollection($recipe);
    });
});


