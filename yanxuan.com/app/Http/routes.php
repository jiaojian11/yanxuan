<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// 欢迎页 welcome
Route::get('/', 'home\ShowController@index');

// 前台
// 认证路由...
	Route::get('auth/login', 'Auth\AuthController@getLogin');
	Route::post('auth/login', 'Auth\AuthController@postLogin');
	Route::get('auth/logout', 'Auth\AuthController@getLogout');
	// 注册路由...
	Route::get('auth/register', 'Auth\AuthController@getRegister');
	Route::post('auth/register', 'Auth\AuthController@postRegister');

	// //跳转前台商城首页
	Route::controller('/home','home\ShowController');


// 后台登录
Route::get('/admin/login', 'admin\LoginController@login');
// 执行登录
Route::post('/admin/login', 'admin\LoginController@dologin');
// 后台中间件
Route::group(['middleware' => 'login'],function(){
	// 退出
	Route::get('/admin/logout', 'admin\LoginController@getLogout');
	// Route::controller('/admin/login/login','admin\LoginController');
	// 后台首页 展示页
	Route::get('/admin/index',function(){return view('admin.index');});
	//	后台限时优惠
	Route::controller('/admin/promotion','admin\PromotionController');

	//订单管理页面跳转
	Route::controller('admin/dingdan','admin\DingdanController');
	//优惠券列表跳转
	Route::controller('admin/youhui','admin\YouhuiController');
	// 产品管理
	Route::controller('/admin/product','admin\ProductController');
	//后台  用户列表
	Route::controller('admin/user','admin\UserController');
	//后台 管理员管理
	Route::controller('admin/administrator','admin\AdministratorController');
	//后台 友情链接
	Route::controller('admin/flink','admin\FlinkController');
	// 轮播图管理
	Route::controller('admin/banner','admin\BannerController');
	// 评论
	Route::controller('admin/comment','admin\CommentController');
	// 退货
	Route::controller('admin/return','admin\ReturnController');
	// select 
	Route::controller('admin/selection','admin\SelectionController');
}
);
	
	
