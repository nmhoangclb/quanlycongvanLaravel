<?php

namespace App\Http\Controllers;
use App\CoQuanBanHanh;
use Illuminate\Http\Request;

class CoQuanBanHanhController extends Controller {
	//
	public function getDanhSach() {
		$coquanbanhanh = CoQuanBanHanh::all();
		return view('admin.coquanbanhanh.danhsach', ['coquanbanhanh' => $coquanbanhanh]);
	}

	public function getThem() {
		return view('admin.coquanbanhanh.them');
	}

	public function postThem(Request $request) {
		$this->validate($request,
			[
				'Ten' => 'required|unique:CoQuanBanHanh,name|min:5|max:30',
			],
			[
				'Ten.required' => 'Bạn phải nhập tên cơ quan ban hành',
				'Ten.unique' => 'Tên cơ quan ban hành đã tồn tại',
				'Ten.min' => 'Bạn phải nhập tên lớn từ 5 đến 30 ký tự',
				'Ten.max' => 'Bạn phải nhập tên lớn từ 5 đến 30 ký tự',
			]);
		$coquanbanhanh = new CoQuanBanHanh;
		$coquanbanhanh->name = $request->Ten;
		$coquanbanhanh->TenKhongDau = changeTitle($request->Ten);
		$coquanbanhanh->save();

		return redirect('admin/coquanbanhanh/them')->with('thongbao', 'Thêm thành công');

	}

	public function getSua($id) {
		$coquanbanhanh = CoQuanBanHanh::find($id);

		return view('admin.coquanbanhanh.sua', ['coquanbanhanh' => $coquanbanhanh]);
	}

	public function postSua(Request $request, $id) {
		$coquanbanhanh = CoQuanBanHanh::find($id);
		$this->validate($request,
			[
				'Ten' => 'required|unique:CoQuanBanHanh,name|min:5|max:30',
			],
			[
				'Ten.required' => 'Bạn phải nhập tên cơ quan ban hành',
				'Ten.unique' => 'Tên cơ quan ban hành đã tồn tại',
				'Ten.min' => 'Bạn phải nhập tên lớn từ 5 đến 30 ký tự',
				'Ten.max' => 'Bạn phải nhập tên lớn từ 5 đến 30 ký tự',
			]);

		$coquanbanhanh->name = $request->Ten;
		$coquanbanhanh->TenKhongDau = changeTitle($request->Ten);
		$coquanbanhanh->save();

		return redirect('admin/coquanbanhanh/sua/' . $id)->with('thongbao', 'Sửa thành công');
	}
}
