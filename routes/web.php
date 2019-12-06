<?php

// ========================== 静态页面【主页/分类】 ==============================//
// 首页
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
Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);

//============================ 帖子路由 ==============================//
//Route::get('/topics/show','TopicsController@show')->name('topics.show');

//========================= 认证用户邮箱注册登录系统 ====================//
//Auth::routes();
// 用户身份验证相关的路由
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// 用户注册相关路由
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// 密码重置相关路由
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Email 认证相关路由
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

// ============================ 后台管理 ==============================//
Route::get('/admin/users','Admin\AdminController@users')->name('admin.users'); // 用户列表
Route::resource('admin', 'Admin\AdminController', ['only' => ['update', 'edit','create','s']]);
Route::get('/admin/admin','Admin\AdminController@admin')->name('admin.admin'); // 管理员列表
Route::get('/admin/permission', 'Admin\AdminController@permission')->name('admin.permission');//权限列表
Route::get('/admin/permission_create_and_edit', 'Admin\AdminController@permissionCreateEdit')->name('admin.permissionCreateEdit');//权限列表
Route::get('/admin/role', 'Admin\AdminController@role')->name('admin.role');//权限列表



