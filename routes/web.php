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

Route::match(['get','post'],'/',['uses'=>'IndexController@index', 'as' => 'home']);


Route::resource('portfolios', 'PortfoliosController',[
    'only' => ['index','show'],
    ]);

Route::resource('blog', 'BlogController',[
    'only' => ['index','show'],
]);

Route::resource('razrabotka-saitov', 'SiteDesignController',[
    'only' => ['index','show'],
]);
Route::resource('internet-marketing', 'InternetMarketingController',[
    'only' => ['index','show'],
]);
Route::match(['get','post'],'contacti',['uses'=>'ContactController@index', 'as' => 'contacti']);

Route::get('calculator',['uses'=>'CalculatorController@index']);