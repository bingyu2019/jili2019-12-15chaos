<?php
//Route::get('/', function () {
//    return view('welcome');
//});

// ========================== 静态页面【主页-分类】 ==============================//
// 主页
Route::get('/', 'HomeController@root')->name('root');
// 人物经历
Route::get('/category/experience','CategoriesController@experience')->name('experience');
// 个人宣传
Route::get('/category/myself','CategoriesController@myself')->name('myself');
// 灵魂艺术
Route::get('/category/art','CategoriesController@art')->name('art');
// 灵魂学院
Route::get('/category/college','CategoriesController@college')->name('college');
// 灵魂礼赞
Route::get('/category/gift','CategoriesController@gift')->name('gift');
// 灵魂展览馆
Route::get('/category/show','CategoriesController@show')->name('show');
// 灵魂共享
Route::get('/category/share','CategoriesController@share')->name('share');
// 灵魂极乐
Route::get('/category/heaven','CategoriesController@heaven')->name('heaven');
// 灵魂服务
Route::get('/category/serve','CategoriesController@serve')->name('serve');

//============================ 用户路由 ==============================//
//Route::resource('users', 'UsersController');
Route::get('/users/show','UsersController@show')->name('users.show');

//============================ 帖子路由 ==============================//
Route::get('/topics/show','TopicsController@show')->name('topics.show');
