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


Route::get('/','WebController@trangchu');

Route::get('trangchu','WebController@trangchu');
Route::get('gioithieu','WebController@gioithieu');
Route::get('thucdon','WebController@thucdon');
Route::get('lienhe',['as'=>'getLienhe','uses'=>'WebController@getLienhe']);
Route::post('lienhe',['as'=>'postLienhe','uses'=>'WebController@postLienhe']);
Route::get('dichvu','WebController@dichvu');

Route::get('loaisp/{id}-{TenKhongDau}','WebController@LoaiSP');
Route::get('sanpham/{id}-{TenKhongDau}','WebController@SanPham');
Route::post('binhluan/{id}','BinhLuanController@postBinhluan');


////login/////////////
Route::get('login','UserController@getLogin');
Route::post('login','UserController@postLogin');


Route::get('logout','UserController@getLogout');
///
//register

Route::get('register','UserController@getRegister');
Route::post('register','UserController@postRegister');


Route::get('user','UserController@getNguoiDung');
Route::post('user','UserController@postNguoiDung');
//



//Trang Admin
Route::get('admin/login','AdminController@getLogin');
Route::post('admin/login','AdminController@postLogin');
Route::get('admin/logout','AdminController@getLogout');
Route::get('admin/user','AdminController@getUser');
Route::post('admin/user','AdminController@postUser');
Route::group(['prefix'=>'admin','middleware'=>'AdminLogin'],function(){
	Route::group(['prefix'=>'sanpham'],function(){
		//tao route truy cập vào các trang quản lý 
		Route::get('danhsach','SanPhamController@getDanhSach');

		Route::get('them','SanPhamController@getThem');
		Route::post('them','SanPhamController@postThem');

		Route::get('sua/{id}','SanPhamController@getSua');
		Route::post('sua/{id}','SanPhamController@postsua');

		Route::get('xoa/{id}','SanPhamController@getXoa');
	});
	Route::group(['prefix'=>'loaisp'],function(){
		//tao route truy cập vào các trang quản lý 
		Route::get('danhsach','LoaiSPController@getDanhSach');

		Route::get('them','LoaiSPController@getThem');
		Route::post('them','LoaiSPController@postThem');

		Route::get('sua/{id}','LoaiSPController@getSua');
		Route::post('sua/{id}','LoaiSPController@postsua');

		Route::get('xoa/{id}','LoaiSPController@getXoa');
	});
	Route::group(['prefix'=>'nguoidung'],function(){
		//tao route truy cập vào các trang quản lý 
		Route::get('danhsach','NguoiDungController@getDanhSach');

		Route::get('them','NguoiDungController@getThem');
		Route::post('them','NguoiDungController@postThem');

		Route::get('sua/{id}','NguoiDungController@getSua');
		Route::post('sua/{id}','NguoiDungController@postsua');

		Route::get('xoa/{id}','NguoiDungController@getXoa');
	});
	Route::group(['prefix'=>'about'],function(){
		//tao route truy cập vào các trang quản lý 
		Route::get('danhsach','AboutController@getDanhSach');

		Route::get('them','AboutController@getThem');
		Route::post('them','AboutController@postThem');

		Route::get('sua/{id}','AboutController@getSua');
		Route::post('sua/{id}','AboutController@postsua');

		Route::get('xoa/{id}','AboutController@getXoa');
	});
	Route::group(['prefix'=>'slide'],function(){
		//tao route truy cập vào các trang quản lý 
		Route::get('danhsach','SlideController@getDanhSach');

		Route::get('them','SlideController@getThem');
		Route::post('them','SlideController@postThem');

		Route::get('sua/{id}','SlideController@getSua');
		Route::post('sua/{id}','SlideController@postsua');

		Route::get('xoa/{id}','SlideController@getXoa');
	});
	Route::group(['prefix'=>'dichvu'],function(){
		//tao route truy cập vào các trang quản lý 
		Route::get('danhsach','DichVuController@getDanhSach');

		Route::get('them','DichVuController@getThem');
		Route::post('them','DichVuController@postThem');

		Route::get('sua/{id}','DichVuController@getSua');
		Route::post('sua/{id}','DichVuController@postsua');

		Route::get('xoa/{id}','DichVuController@getXoa');
	});
	Route::group(['prefix'=>'binhluan'],function(){
		//tao route truy cập vào các trang quản lý 
		Route::get('xoa/{id}/{idSP}','BinhLuanController@getXoa');
	});
	Route::group(['prefix'=>'lienhe'],function(){
		//tao route truy cập vào các trang quản lý 
		Route::get('danhsach','LienHeController@getDanhSach');

		Route::get('sua/{id}','LienHeController@getSua');
		Route::post('sua/{id}','LienHeController@postsua');
	});
	Route::group(['prefix'=>'nhanvien'],function(){
		//tao route truy cập vào các trang quản lý 
		Route::get('danhsach','NhanVienController@getDanhSach');

		Route::get('them','NhanVienController@getThem');
		Route::post('them','NhanVienController@postThem');

		Route::get('sua/{id}','NhanVienController@getSua');
		Route::post('sua/{id}','NhanVienController@postsua');

		Route::get('xoa/{id}','NhanVienController@getXoa');
	});
});