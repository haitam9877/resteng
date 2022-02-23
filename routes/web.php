<?php

use App\Http\Controllers\ProdactsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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



Auth::routes(['verify' => true]);




Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...

       Route::get('/', function () {
           return view('welcome');
      });
    
       Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
    
       Route::resource('offers', OffersController::class);


    //    ***************************Prodacts****************************************************
      


        Route::resource('prodacts', 'ProdactsController');
        



    });



  






