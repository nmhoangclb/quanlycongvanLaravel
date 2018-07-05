<?php

namespace App\Http\Controllers;
use App\CongVan;
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
				'Ten' => 'required|unique:CoQuanBanHanh,name|min:3|max:30',
			],
			[
				'Ten.required' => 'Bạn phải nhập tên cơ quan ban hành',
				'Ten.unique' => 'Tên cơ quan ban hành đã tồn tại',
				'Ten.min' => 'Bạn phải nhập tên lớn từ 3 đến 30 ký tự',
				'Ten.max' => 'Bạn phải nhập tên lớn từ 3 đến 30 ký tự',
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
				'Ten.min' => 'Bạn phải nhập tên lớn từ 3 đến 30 ký tự',
				'Ten.max' => 'Bạn phải nhập tên lớn từ 3 đến 30 ký tự',
			]);

		$coquanbanhanh->name = $request->Ten;
		$coquanbanhanh->TenKhongDau = changeTitle($request->Ten);
		$coquanbanhanh->save();

		return redirect('admin/coquanbanhanh/sua/' . $id)->with('thongbao', 'Sửa thành công');
	}

	public function getXoa($id) {
		$coquanbanhanh = CoQuanBanHanh::find($id);
		//kiểm tra khoá ngoại trước khi xoá
		$kiemtrakhoangoai = CongVan::where('idcoquanbanhanh', $id)->get();
		$soluong = count($kiemtrakhoangoai);
		if ($soluong) {
			return redirect('admin/coquanbanhanh/danhsach')->with('loi', 'Không được phép xoá danh mục này vì đang có ' . $soluong . ' công văn đang sử dụng danh mục. Vui lòng tìm và xoá toàn bộ những công văn đó trước!');
		} else {
			$coquanbanhanh->delete();
		}

		return redirect('admin/coquanbanhanh/danhsach')->with('thongbao', 'Xoá thành công');
	}
}
