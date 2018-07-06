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

Route::get('/', 'PagesController@trangchu');
Route::get('dangnhap', 'PagesController@getDangnhap');
Route::post('dangnhap', 'PagesController@postDangnhap');
Route::get('dangxuat', 'PagesController@getDangxuat');

//tìm kiếm
Route::get('timkiem', 'PagesController@getTimkiem');

//giới thiệu và liên hệ
Route::get('gioithieu', 'PagesController@getGioithieu');
Route::get('lienhe', 'PagesController@getLienHe');

//chi tiết công văn
Route::get('chitiet/{id}', 'PagesController@getChiTiet');

//route login and logout
Route::get('admin', 'UserController@getDangnhapAdmin');
Route::get('admin/dangnhap', 'UserController@getDangnhapAdmin');
Route::post('admin/dangnhap', 'UserController@postDangnhapAdmin');

Route::get('admin/dangxuat', 'UserController@getDangxuat');

//route admin
Route::group(['prefix' => 'admin', 'middleware' => 'adminLogin'], function () {
	Route::group(['prefix' => 'coquanbanhanh'], function () {
		Route::get('danhsach', 'CoQuanBanHanhController@getDanhSach');

		Route::get('sua/{id}', 'CoQuanBanHanhController@getSua');
		Route::post('sua/{id}', 'CoQuanBanHanhController@postSua');

		Route::get('them', 'CoQuanBanHanhController@getThem');
		Route::post('them', 'CoQuanBanHanhController@postThem');

		Route::get('xoa/{id}', 'CoQuanBanHanhController@getXoa');
	});

	Route::group(['prefix' => 'hinhthucvanban'], function () {
		Route::get('danhsach', 'HinhThucVanBanController@getDanhSach');

		Route::get('sua/{id}', 'HinhThucVanBanController@getSua');
		Route::post('sua/{id}', 'HinhThucVanBanController@postSua');

		Route::get('them', 'HinhThucVanBanController@getThem');
		Route::post('them', 'HinhThucVanBanController@postThem');

		Route::get('xoa/{id}', 'HinhThucVanBanController@getXoa');
	});

	Route::group(['prefix' => 'linhvuc'], function () {
		Route::get('danhsach', 'LinhVucController@getDanhSach');

		Route::get('sua/{id}', 'LinhVucController@getSua');
		Route::post('sua/{id}', 'LinhVucController@postSua');

		Route::get('them', 'LinhVucController@getThem');
		Route::post('them', 'LinhVucController@postThem');

		Route::get('xoa/{id}', 'LinhVucController@getXoa');
	});

	Route::group(['prefix' => 'loaivanban'], function () {
		Route::get('danhsach', 'LoaiVanBanController@getDanhSach');

		Route::get('sua/{id}', 'LoaiVanBanController@getSua');
		Route::post('sua/{id}', 'LoaiVanBanController@postSua');

		Route::get('them', 'LoaiVanBanController@getThem');
		Route::post('them', 'LoaiVanBanController@postThem');

		Route::get('xoa/{id}', 'LoaiVanBanController@getXoa');
	});

	Route::group(['prefix' => 'loaihinhcongvan'], function () {
		Route::get('danhsach', 'LoaiHinhCongVanController@getDanhSach');

		Route::get('sua/{id}', 'LoaiHinhCongVanController@getSua');
		Route::post('sua/{id}', 'LoaiHinhCongVanController@postSua');

		Route::get('them', 'LoaiHinhCongVanController@getThem');
		Route::post('them', 'LoaiHinhCongVanController@postThem');

		Route::get('xoa/{id}', 'LoaiHinhCongVanController@getXoa');
	});

	Route::group(['prefix' => 'congvan'], function () {
		Route::get('danhsach', 'CongVanController@getDanhSach');

		Route::get('sua/{id}', 'CongVanController@getSua');
		Route::post('sua/{id}', 'CongVanController@postSua');

		Route::get('them', 'CongVanController@getThem');
		Route::post('them', 'CongVanController@postThem');

		Route::get('xoa/{id}', 'CongVanController@getXoa');
	});

	Route::group(['prefix' => 'user'], function () {
		Route::get('danhsach', 'UserController@getDanhSach');

		Route::get('sua/{id}', 'UserController@getSua');
		Route::post('sua/{id}', 'UserController@postSua');

		Route::get('them', 'UserController@getThem');
		Route::post('them', 'UserController@postThem');

		Route::get('xoa/{id}', 'UserController@getXoa');
	});

	Route::group(['prefix' => 'slide'], function () {
		Route::get('danhsach', 'SlideController@getDanhSach');

		Route::get('sua/{id}', 'SlideController@getSua');
		Route::post('sua/{id}', 'SlideController@postSua');

		Route::get('them', 'SlideController@getThem');
		Route::post('them', 'SlideController@postThem');

		Route::get('xoa/{id}', 'SlideController@getXoa');
	});
});

Route::get('trangchu', 'PagesController@trangchu');

Route::get('coquanbanhanh/{id}/{TenKhongDau}.html', 'PagesController@coquanbanhanh');

Route::get('hinhthucvanban/{id}/{TenKhongDau}.html', 'PagesController@hinhthucvanban');

Route::get('linhvuc/{id}/{TenKhongDau}.html', 'PagesController@linhvuc');

Route::get('loaivanban/{id}/{TenKhongDau}.html', 'PagesController@loaivanban');

Route::get('loaihinhcongvan/{id}/{TenKhongDau}.html', 'PagesController@loaihinhcongvan');