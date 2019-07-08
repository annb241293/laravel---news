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
// route theloai
Route::group(['prefix'=>'admin','middleware'=>'AdminLogin'],function(){
	Route::get('login','adminController@getLogin');
	Route::post('login','adminController@postLogin');
	Route::get('index','adminController@getIndex');
	Route::group(['prefix'=>'theloai'],function(){
		Route::get('danhsach','theloaiController@getDanhSach');
		Route::get('them','theloaiController@getThem');
		Route::get('sua/{idTL}','theloaiController@getSua');
		Route::post('them','theloaiController@postThem');
		Route::post('sua/{idTL}','theloaiController@postSua');
		Route::get('xoa/{idTL}','theloaiController@getXoa');
	});
	//route loaitin
	Route::group(['prefix'=>'loaitin'],function(){
		Route::get('danhsach','loaitinController@getDanhSach');
		Route::get('them','loaitinController@getThem');
		
		Route::get('sua/{idLT}','loaitinController@getSua');
		Route::post('sua/{idTL}','loaitinController@postSua');
		Route::get('them','loaitinController@getThem');
		Route::post('them','loaitinController@postThem');
		Route::get('xoa/{idTL}','loaitinController@getXoa');
	});
	Route::group(['prefix'=>'tin'],function(){
		Route::get('danhsach','tinController@getDanhSach');
		Route::get('them','tinController@getThem');
		
		Route::get('sua/{idTin}','tinController@getSua');
		Route::post('sua/{idTin}','tinController@postSua');
		Route::get('them','tinController@getThem');
		Route::post('them','tinController@postThem');
		Route::get('xoa/{idTin}','tinController@getXoa');
	});
	Route::group(['prefix'=>'user'],function(){
		Route::get('danhsach','usersController@getDanhSach');
		Route::get('them','usersController@getThem');
		Route::get('sua/{idTin}','usersController@getSua');
		Route::post('sua/{idTin}','usersController@postSua');
		Route::get('them','usersController@getThem');
		Route::post('them','usersController@postThem');
		Route::get('xoa/{idTin}','usersController@getXoa');
		
	});

});
Route::get('Dang-Nhap','homeController@dangNhap');
Route::post('Dang-Nhap','homeController@postDangNhap');
Route::get('Log-Out','homeController@logOut');
Route::get('Dang-Ky','homeController@dangKy');
Route::post('Dang-Ky','homeController@postDangKy');
Route::get('Lien-He','homeController@lienHe');


Route::post('ajax','Ajax@postAjax');
Route::get('/','homeController@getTrangChu');

Route::get('{theloai}','homeController@getCate');
// Route::get('{loaitin}','homeController@getCateLoaiTin');

Route::get('{theloai}/{loaitin}','homeController@getCateLoaiTin');
Route::get('{theloai}/{loaitin}/{tin}','homeController@getTin');


Route::any('{all}',function(){
	return redirect('/');
})->where('all','(.*)');


?>