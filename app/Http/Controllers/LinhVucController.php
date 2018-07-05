<?php

namespace App\Http\Controllers;
use App\CongVan;
use App\LinhVuc;
use Illuminate\Http\Request;

class LinhVucController extends Controller {
	//
	public function getDanhSach() {
		$linhvuc = LinhVuc::all();
		return view('admin.linhvuc.danhsach', ['linhvuc' => $linhvuc]);
	}

	public function getThem() {
		return view('admin.linhvuc.them');
	}

	public function postThem(Request $request) {
		$this->validate($request,
			[
				'Ten' => 'required|unique:LinhVuc,name|min:3|max:30',
			],
			[
				'Ten.required' => 'Bạn phải nhập tên lĩnh vực',
				'Ten.unique' => 'Tên lĩnh vực đã tồn tại',
				'Ten.min' => 'Bạn phải nhập tên lớn từ 3 đến 30 ký tự',
				'Ten.max' => 'Bạn phải nhập tên lớn từ 3 đến 30 ký tự',
			]);
		$linhvuc = new LinhVuc;
		$linhvuc->name = $request->Ten;
		$linhvuc->TenKhongDau = changeTitle($request->Ten);
		$linhvuc->save();

		return redirect('admin/linhvuc/them')->with('thongbao', 'Thêm thành công');

	}

	public function getSua($id) {
		$linhvuc = LinhVuc::find($id);

		return view('admin.linhvuc.sua', ['linhvuc' => $linhvuc]);
	}

	public function postSua(Request $request, $id) {
		$linhvuc = LinhVuc::find($id);
		$this->validate($request,
			[
				'Ten' => 'required|unique:LinhVuc,name|min:3|max:30',
			],
			[
				'Ten.required' => 'Bạn phải nhập tên lĩnh vực',
				'Ten.unique' => 'Tên lĩnh vực đã tồn tại',
				'Ten.min' => 'Bạn phải nhập tên lớn từ 3 đến 30 ký tự',
				'Ten.max' => 'Bạn phải nhập tên lớn từ 3 đến 30 ký tự',
			]);

		$linhvuc->name = $request->Ten;
		$linhvuc->TenKhongDau = changeTitle($request->Ten);
		$linhvuc->save();

		return redirect('admin/linhvuc/sua/' . $id)->with('thongbao', 'Sửa thành công');
	}

	public function getXoa($id) {
		$linhvuc = LinhVuc::find($id);
		//kiểm tra khoá ngoại trước khi xoá
		$kiemtrakhoangoai = CongVan::where('idlinhvuc', $id)->get();
		$soluong = count($kiemtrakhoangoai);
		if ($soluong) {
			return redirect('admin/linhvuc/danhsach')->with('loi', 'Không được phép xoá danh mục này vì đang có ' . $soluong . ' công văn đang sử dụng danh mục. Vui lòng tìm và xoá toàn bộ những công văn đó trước!');
		} else {
			$linhvuc->delete();
		}

		return redirect('admin/linhvuc/danhsach')->with('thongbao', 'Xoá thành công');
	}
}
