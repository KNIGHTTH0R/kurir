<?php

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

# public
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/masuk', ['as' => 'login', 'uses' => 'UserController@index']);
Route::post('/masuk', ['as' => 'user.index', 'uses' => 'UserController@auth']);
Route::get('/daftar', ['as' => 'register', 'uses' => 'UserController@register']);
Route::resource('user', 'UserController', ['only' => [
    'store'
]]);

# Logged
Route::group(['middleware' => ['\App\Http\Middleware\LoggedMiddleware']], function () {
    # logout
    Route::get('/keluar', function(){
        \PluginHttpClient\TokenSession::getInstance()->logout();
        return redirect()->route('home');
    })->name('logout');

    Route::resource('user', 'UserController', ['only' => [
        'show'
    ]]);

    # dashboard
    Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);
});

Route::group(['middleware' => ['\App\Http\Middleware\LoggedMiddleware']], function () {
    Route::post('/dashboard/item/pickup', ['as' => 'dashboard', 'uses' => 'DashboardController@pickup']);
    Route::post('/dashboard/item/delivered', ['as' => 'dashboard', 'uses' => 'DashboardController@delivered']);
    Route::post('/dashboard/item/store', ['as' => 'dashboard', 'uses' => 'DashboardController@store']);
});
