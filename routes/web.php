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
/**
 * 后台路由
 */

Route::get('/admin/dashboard', 'Admin\DashBoardController@dashboard');
Route::prefix('admin')->group(function (){

    Route::get('index', 'Admin\IndexController@index')->name('admin.index.index');
    Route::get('login', 'Admin\IndexController@login');
    //系统配置
    Route::group(['prefix'=>"config"],function (){
        Route::get("site","Admin\ConfigController@siteConfig")->name("admin.config.siteconfig");
        Route::post("store","Admin\ConfigController@store")->name("admin.config.store");
    });
    //文章
    Route::group(['prefix'=>"article"],function (){
        Route::get("/list","Admin\ArticleController@list")->name("admin.article.list");
        Route::post("/store","Admin\configController@store")->name("admin.article.store");
    });
    //管理员
    Route::group(['prefix'=>"manager"],function (){
        Route::get("/list","Admin\ArticleController@list")->name("admin.manager.list");
        Route::post("/store","Admin\configController@store")->name("admin.article.store");
    });

});

/**
 * 前台路由
 */
Route::get('/',"Home\IndexController@index");
Route::prefix('index')->group(function () {

});