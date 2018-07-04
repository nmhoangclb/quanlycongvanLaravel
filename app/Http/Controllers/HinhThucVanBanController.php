<?php

namespace App\Http\Controllers;
use App\HinhThucVanBan;
use Illuminate\Http\Request;

class HinhThucVanBanController extends Controller {
	//
	public function getDanhSach() {
		$hinhthucvanban = HinhThucVanBan::all();
		return view('admin.hinhthucvanban.danhsach', ['hinhthucvanban' => $hinhthucvanban]);
	}

	public function getThem() {
		return view('admin.hinhthucvanban.them');
	}

	public function postThem(Request $request) {
		$this->validate($request,
			[
				'Ten' => 'required|unique:HinhThucVanBan,name|min:3|max:30',
			],
			[
				'Ten.required' => 'Bạn phải nhập tên hình thức văn bản',
				'Ten.unique' => 'Tên hình thức văn bản đã tồn tại',
				'Ten.min' => 'Bạn phải nhập tên lớn từ 3 đến 30 ký tự',
				'Ten.max' => 'Bạn phải nhập tên lớn từ 3 đến 30 ký tự',
			]);
		$hinhthucvanban = new HinhThucVanBan;
		$hinhthucvanban->name = $request->Ten;
		$hinhthucvanban->TenKhongDau = changeTitle($request->Ten);
		$hinhthucvanban->save();

		return redirect('admin/hinhthucvanban/them')->with('thongbao', 'Thêm thành công');

	}

	public function getSua($id) {
		$hinhthucvanban = HinhThucVanBan::find($id);

		return view('admin.hinhthucvanban.sua', ['hinhthucvanban' => $hinhthucvanban]);
	}

	public function postSua(Request $request, $id) {
		$hinhthucvanban = HinhThucVanBan::find($id);
		$this->validate($request,
			[
				'Ten' => 'required|unique:HinhThucVanBan,name|min:3|max:30',
			],
			[
				'Ten.required' => 'Bạn phải nhập tên hình thức văn bản',
				'Ten.unique' => 'Tên hình thức văn bản đã tồn tại',
				'Ten.min' => 'Bạn phải nhập tên lớn từ 3 đến 30 ký tự',
				'Ten.max' => 'Bạn phải nhập tên lớn từ 3 đến 30 ký tự',
			]);

		$hinhthucvanban->name = $request->Ten;
		$hinhthucvanban->TenKhongDau = changeTitle($request->Ten);
		$hinhthucvanban->save();

		return redirect('admin/hinhthucvanban/sua/' . $id)->with('thongbao', 'Sửa thành công');
	}

	public function getXoa($id) {
		$coquanbanhanh = HinhThucVanBan::find($id);
		$coquanbanhanh->delete();

		return redirect('admin/hinhthucvanban/danhsach')->with('thongbao', 'Xoá thành công');
	}
}
