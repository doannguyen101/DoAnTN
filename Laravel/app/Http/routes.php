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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
/*
--------------------------------------------------------------------------
*/
//trang chu
Route::get('index',function(){
	return view('pages.index');
});

Route::get('bangxephang',function(){
	return view('pages.bangxephang');
});

Route::get('dstintuc',function(){
	return view('pages.dstintuc');
});

Route::get('chitiettintuc',function(){
	return view('pages.chitiettintuc');
});

Route::get('login',function(){
	return view('pages.login');
});
Route::get('signup',function(){
	return view('pages.signup');
});

/*Route::get('taikhoan',function(){
	return view('pages.taikhoan');
});*/

Route::get('taikhoan',function(){
	return view('pages.thongtincanhan');
});
Route::get('hoatdong',function(){
	return view('pages.hoatdong');
});

//dangki
Route::get('dangki',function (){
	return view('pages.signup');
});
Route::post('formdangki',['as'=>'dangkithanhvien','uses'=>'dangkiController@dangki']);

//admin
//quan ly bai viet
Route::get('quanlybaiviet','baivietController@dulieu');
Route::post('quanlybaiviet',['as'=>'thembaiviet','uses'=>'baivietController@thembaiviet']);
Route::get('sua/{mabaiviet}',['as'=>'sua','uses'=>'baivietController@getbaiviet']);

//quan ly bang thi
Route::get('quanlybangthi','bangthiController@dulieu');
Route::post('quanlybangthi',['as'=>'thembangthi','uses'=>'bangthiController@thembangthi']);

//quan ly ki thi
Route::get('quanlykithi','kithiController@dulieu');
Route::post('quanlykithi',['as'=>'themkithi','uses'=>'kithiController@themkithi']);

//quan ly truong
Route::get('quanlytruong','truongController@dulieu');
Route::post('quanlytruong',['as'=>'themtruong','uses'=>'truongController@themtruong']);

//quan ly thi sinh
Route::get('quanlythisinh','thisinhController@dulieu');
Route::post('quanlythisinh',['as'=>'themthisinh','uses'=>'thisinhController@themthisinh']);

//quan ly ket qua
Route::get('quanlyketqua','ketquaController@dulieu');
Route::post('quanlyketqua',['as'=>'themketqua','uses'=>'ketquaController@themketqua']);

//quan ly nguoi dung
Route::get('quanlynguoidung','nguoidungController@dulieu');
Route::post('quanlynguoidung',['as'=>'themnguoidung','uses'=>'nguoidungController@themnguoidung']);

//quan ly dot thi
Route::get('quanlydotthi','dotthiController@dulieu');
Route::post('quanlydotthi',['as'=>'themdotthi','uses'=>'dotthiController@themdotthi']);

//quan ly bang dieu khien
Route::get('bangdieukhien',function (){
	return view('pages.bangdieukhien');
});

//quan ly bang dieu khien
/*Route::get('Admin',function (){
	return view('pages.Admin');
});*/
Route::get('Admin','Auth\AuthController@getLoginadmin');
Route::post('Admin',['as'=>'Adminlogin','uses'=>'Auth\AuthController@postLoginadmin']);




