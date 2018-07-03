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
	return view('welcome');
});
//route admin
Route::group(['prefix' => 'admin'], function () {
	Route::group(['prefix' => 'coquanbanhanh'], function () {
		Route::get('danhsach', 'CoQuanBanHanhController@getDanhSach');

		Route::get('sua/{id}', 'CoQuanBanHanhController@getSua');
		Route::post('sua/{id}', 'CoQuanBanHanhController@postSua');

		Route::get('them', 'CoQuanBanHanhController@getThem');
		Route::post('them', 'CoQuanBanHanhController@postThem');
	});

	Route::group(['prefix' => 'hinhthucvanban'], function () {
		Route::get('danhsach', 'HinhThucVanBanController@getDanhSach');

		Route::get('sua', 'HinhThucVanBanController@getSua');

		Route::get('them', 'HinhThucVanBanController@getThem');
	});

	Route::group(['prefix' => 'linhvuc'], function () {
		Route::get('danhsach', 'LinhVucController@getDanhSach');

		Route::get('sua', 'LinhVucController@getSua');

		Route::get('them', 'LinhVucController@getThem');
	});

	Route::group(['prefix' => 'loaivanban'], function () {
		Route::get('danhsach', 'LoaiVanBanController@getDanhSach');

		Route::get('sua', 'LoaiVanBanController@getSua');

		Route::get('them', 'LoaiVanBanController@getThem');
	});

	Route::group(['prefix' => 'congvan'], function () {
		Route::get('danhsach', 'CongVanController@getDanhSach');

		Route::get('sua', 'CongVanController@getSua');

		Route::get('them', 'CongVanController@getThem');
	});
});