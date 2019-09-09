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

Route::get('/', function () {
    // dd(app('wechat.official_account.default')->user->list());
    return view('welcome');
});

//关注页面
Route::any('index','Week2@index');
//添加
Route::any('createArticle','Week2@createArticle');
//添加的数据
Route::any('createArticleDo','Week2@createArticleDo');
//展示
Route::any('listArticle','Week2@listArticle');
//删除
Route::any('delArticle','Week2@delArticle');
//菜单
Route::any('menuArticle','Week2@menuArticle');







//Route::any('index','Day6@index');

//Route::any('createArticle','Day6@createArticle');
//Route::any('createArticle_do','Day6@createArticle_do');
//Route::any('listArticle','Day6@listArticle');
//Route::any('ArticleMenu','Day6@ArticleMenu');







//
//Route::any('test','Wechar@test');
//
//
//Route::any('userList','Wechar@userList');
//
//Route::any('createQrCode','Wechar@createQrCode');
//Route::any('createCd','Wechar@createCd');







//Route::any('index','Wechar@index');
//Route::any('index','Wechat@index');
//Route::any('index','Day7@index');
//Route::any('show','Day7@show');
//Route::any('getUserInfo','WechatOne@getUserInfo');
//Route::any('MsgSend','WechatOne@MsgSend');
