<?php

namespace App\Http\Controllers;
use App\LoaiVanBan;
use Illuminate\Http\Request;

class LoaiVanBanController extends Controller {
	//
	public function getDanhSach() {
		$loaivanban = LoaiVanBan::all();
		return view('admin.loaivanban.danhsach', ['loaivanban' => $loaivanban]);
	}

	public function getThem() {
		return view('admin.loaivanban.them');
	}

	public function postThem(Request $request) {
		$this->validate($request,
			[
				'Ten' => 'required|unique:LoaiVanBan,name|min:3|max:30',
			],
			[
				'Ten.required' => 'Bạn phải nhập tên loại văn bản',
				'Ten.unique' => 'Tên loại văn bản đã tồn tại',
				'Ten.min' => 'Bạn phải nhập tên lớn từ 3 đến 30 ký tự',
				'Ten.max' => 'Bạn phải nhập tên lớn từ 3 đến 30 ký tự',
			]);
		$loaivanban = new LoaiVanBan;
		$loaivanban->name = $request->Ten;
		$loaivanban->TenKhongDau = changeTitle($request->Ten);
		$loaivanban->save();

		return redirect('admin/loaivanban/them')->with('thongbao', 'Thêm thành công');

	}

	public function getSua($id) {
		$loaivanban = LoaiVanBan::find($id);

		return view('admin.loaivanban.sua', ['loaivanban' => $loaivanban]);
	}

	public function postSua(Request $request, $id) {
		$loaivanban = LoaiVanBan::find($id);
		$this->validate($request,
			[
				'Ten' => 'required|unique:LoaiVanBan,name|min:3|max:30',
			],
			[
				'Ten.required' => 'Bạn phải nhập tên loại văn bản',
				'Ten.unique' => 'Tên loại văn bản đã tồn tại',
				'Ten.min' => 'Bạn phải nhập tên lớn từ 3 đến 30 ký tự',
				'Ten.max' => 'Bạn phải nhập tên lớn từ 3 đến 30 ký tự',
			]);

		$loaivanban->name = $request->Ten;
		$loaivanban->TenKhongDau = changeTitle($request->Ten);
		$loaivanban->save();

		return redirect('admin/loaivanban/sua/' . $id)->with('thongbao', 'Sửa thành công');
	}

	public function getXoa($id) {
		$coquanbanhanh = LoaiVanBan::find($id);
		$coquanbanhanh->delete();

		return redirect('admin/loaivanban/danhsach')->with('thongbao', 'Xoá thành công');
	}
}
