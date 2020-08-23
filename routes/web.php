<?php

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
    return view('welcome');
});

Route::group(['middleware'=>'auth'], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::get('/language/switch/{prefix}',function($prefix){
        $allowed_prefixes = ['en','ar'];
        if(in_array($prefix,$allowed_prefixes)) {
            App::setLocale($prefix);
            session()->put('locale', $prefix);
        }
        return back();
    })->name('language.switch');

    Route::group(['prefix'=>'cp','as'=>'cp.',"namespace"=>"cp",'middleware'=>'is_admin'], function(){
        Route::get('/home', 'HomeController@index')->name('home');
        Route::resource('users', 'UserController');
        // Route::resource('owners', 'OwnerController');
        // Route::resource('tenants', 'TenantController');
    
        // Route::group(['prefix'=>'reports','as'=>'reports.',"namespace"=>"reports"], function(){
            
        // });
        // Route::get('/logs', 'DbLogController@index')->name('logs.index');
    });

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
