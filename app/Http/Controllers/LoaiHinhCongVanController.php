<?php

namespace App\Http\Controllers;
use App\LoaiHinhCongVan;
use Illuminate\Http\Request;

class LoaiHinhCongVanController extends Controller {
	//
	public function getDanhSach() {
		$loaihinhcongvan = LoaiHinhCongVan::all();
		return view('admin.loaihinhcongvan.danhsach', ['loaihinhcongvan' => $loaihinhcongvan]);
	}

	public function getThem() {
		return view('admin.loaihinhcongvan.them');
	}

	public function postThem(Request $request) {
		$this->validate($request,
			[
				'Ten' => 'required|unique:LoaiHinhCongVan,name|min:3|max:30',
			],
			[
				'Ten.required' => 'Bạn phải nhập tên loại hình công văn',
				'Ten.unique' => 'Tên loại hình công văn đã tồn tại',
				'Ten.min' => 'Bạn phải nhập tên lớn từ 3 đến 30 ký tự',
				'Ten.max' => 'Bạn phải nhập tên lớn từ 3 đến 30 ký tự',
			]);
		$loaihinhcongvan = new LoaiHinhCongVan;
		$loaihinhcongvan->name = $request->Ten;
		$loaihinhcongvan->TenKhongDau = changeTitle($request->Ten);
		$loaihinhcongvan->save();

		return redirect('admin/loaihinhcongvan/them')->with('thongbao', 'Thêm thành công');

	}

	public function getSua($id) {
		$loaihinhcongvan = LoaiHinhCongVan::find($id);

		return view('admin.loaihinhcongvan.sua', ['loaihinhcongvan' => $loaihinhcongvan]);
	}

	public function postSua(Request $request, $id) {
		$loaihinhcongvan = LoaiHinhCongVan::find($id);
		$this->validate($request,
			[
				'Ten' => 'required|unique:LoaiHinhCongVan,name|min:3|max:30',
			],
			[
				'Ten.required' => 'Bạn phải nhập tên loại hình công văn',
				'Ten.unique' => 'Tên loại hình công văn đã tồn tại',
				'Ten.min' => 'Bạn phải nhập tên lớn từ 3 đến 30 ký tự',
				'Ten.max' => 'Bạn phải nhập tên lớn từ 3 đến 30 ký tự',
			]);

		$loaihinhcongvan->name = $request->Ten;
		$loaihinhcongvan->TenKhongDau = changeTitle($request->Ten);
		$loaihinhcongvan->save();

		return redirect('admin/loaihinhcongvan/sua/' . $id)->with('thongbao', 'Sửa thành công');
	}

	public function getXoa($id) {
		$coquanbanhanh = LoaiHinhCongVan::find($id);
		$coquanbanhanh->delete();

		return redirect('admin/loaihinhcongvan/danhsach')->with('thongbao', 'Xoá thành công');
	}
}
