<?php

// ========================== 静态页面【主页/分类】 ==============================//
// 首页
Route::get('/', 'HomeController@root')->name('root');
// 人物经历
Route::get('/categories/experience','CategoriesController@experience')->name('experience');
// 个人宣传
Route::get('/categories/myself','CategoriesController@myself')->name('myself');
// 灵魂艺术
Route::get('/categories/art','CategoriesController@art')->name('art');
// 灵魂学院
Route::get('/categories/college','CategoriesController@college')->name('college');
// 灵魂礼赞
Route::get('/categories/gift','CategoriesController@gift')->name('gift');
// 灵魂展览馆
Route::get('/categories/show','CategoriesController@show')->name('show');
// 灵魂共享
Route::get('/categories/share','CategoriesController@share')->name('share');
// 灵魂极乐
Route::get('/categories/heaven','CategoriesController@heaven')->name('heaven');
// 灵魂服务
Route::get('/categories/serve','CategoriesController@serve')->name('serve');

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

// ================================ 后台管理 =================================//
//后台用户管理
Route::get('/admin/users/index', 'Admin\UsersController@index')->name('admin.users.index');
Route::get('/admin/users/create', 'Admin\UsersController@create')->name('admin.users.create');
Route::get('/admin/users/edit', 'Admin\UsersController@edit')->name('admin.users.edit');

//后台管理员管理
Route::get('/admin/admin/index', 'Admin\AdminController@index')->name('admin.admin.index');
Route::get('/admin/admin/create', 'Admin\AdminController@create')->name('admin.admin.create');
Route::get('/admin/admin/edit', 'Admin\AdminController@edit')->name('admin.admin.edit');

//后台角色管理
Route::get('/admin/roles/index', 'Admin\RoleController@index')->name('admin.roles.index');
Route::get('/admin/roles/create', 'Admin\RoleController@create')->name('admin.roles.create');
Route::get('/admin/roles/edit', 'Admin\RoleController@edit')->name('admin.roles.edit');

//后台权限
Route::get('/admin/permissions/index', 'Admin\PermissionsController@index')->name('admin.permissions.index');
Route::get('/admin/permissions/create', 'Admin\PermissionsController@create')->name('admin.permissions.create');
Route::get('/admin/permissions/edit', 'Admin\PermissionsController@edit')->name('admin.permissions.edit');

//后台分类管理
Route::get('/admin/categories/index', 'Admin\CategoriesController@index')->name('admin.categories.index');
Route::get('/admin/categories/create', 'Admin\CategoriesController@create')->name('admin.categories.create');
Route::get('/admin/categories/edit', 'Admin\CategoriesController@edit')->name('admin.categories.edit');

//后台帖子管理
Route::get('/admin/topics/index', 'Admin\TopicsController@index')->name('admin.topics.index');
Route::get('/admin/topics/create', 'Admin\TopicsController@create')->name('admin.topics.create');
Route::get('/admin/topics/edit', 'Admin\TopicsController@edit')->name('admin.topics.edit');

//后台财务管理
Route::get('/admin/finances/index', 'Admin\FinanceController@index')->name('admin.finances.index');
Route::get('/admin/finances/create', 'Admin\FinanceController@create')->name('admin.finances.create');
Route::get('/admin/finances/edit', 'Admin\FinanceController@edit')->name('admin.finances.edit');





