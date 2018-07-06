<?php

namespace App\Http\Controllers;

use App\CongVan;
use App\CoQuanBanHanh;
use App\HinhThucVanBan;
use App\LinhVuc;
use App\LoaiHinhCongVan;
use App\LoaiVanBan;
use App\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class PagesController extends Controller {
	//

	public function __construct() {
		$congvan = CongVan::all();
		$coquanbanhanh = CoQuanBanHanh::all();
		$hinhthucvanban = HinhThucVanBan::all();
		$linhvuc = LinhVuc::all();
		$loaivanban = LoaiVanBan::all();
		$loaihinhcongvan = LoaiHinhCongVan::all();
		$slide = Slide::all();

		view()->share('congvanviewshare', $congvan);
		view()->share('coquanbanhanhviewshare', $coquanbanhanh);
		view()->share('hinhthucvanbanviewshare', $hinhthucvanban);
		view()->share('linhvucviewshare', $linhvuc);
		view()->share('loaivanbanviewshare', $loaivanban);
		view()->share('loaihinhcongvanviewshare', $loaihinhcongvan);
		view()->share('slideviewshare', $slide);

	}
	public function getDangnhap() {
		return view('login');
	}

	public function postDangnhap(Request $request) {
		$this->validate($request,
			[
				'email' => 'required',
				'password' => 'required|min:6|max:20',
			],
			[
				'email.required' => 'Bạn phải nhập email',
				'password.required' => 'Bạn phải nhập mật khẩu',
				'password.min' => 'Bạn phải nhập mật khẩu lớn hơn, từ 6 đến 20 ký tự',
				'password.max' => 'Bạn phải nhập mật khẩu nhỏ hơn, từ 6 đến 20 ký tự',
			]

		);

		if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
			return redirect('trangchu');
		} else {
			return redirect('dangnhap')->with('loi', 'Đăng nhập không thành công, mời nhập lại!');
		}
	}

	public function getDangxuat() {
		Auth::logout();
		return redirect('dangnhap')->with('thongbao', 'Đăng xuất thành công');
	}

	public function trangchu() {
		if (Auth::user()) {
			$congvantrangchu = CongVan::orderBy('ngayky', 'desc')->paginate(10);
		} else {
			$congvantrangchu = CongVan::where('idloaihinhcongvan', '<>', 2)->orderBy('ngayky', 'desc')->paginate(10);
		}

		return view('pages.trangchu', ['congvantrangchu' => $congvantrangchu]);
	}

	public function coquanbanhanh($id) {
		$coquanbanhanh = CoQuanBanHanh::find($id);
		if (Auth::user()) {
			$congvan = CongVan::where('idcoquanbanhanh', $id)->orderBy('ngayky', 'desc')->paginate(10);
		} else {
			$congvan = CongVan::where('idcoquanbanhanh', $id)->where('idloaihinhcongvan', '<>', 2)->orderBy('ngayky', 'desc')->paginate(10);
		}

		return view('coquanbanhanh.coquanbanhanh', ['coquanbanhanh' => $coquanbanhanh, 'congvan' => $congvan]);
	}

	public function hinhthucvanban($id) {
		$hinhthucvanban = HinhThucVanBan::find($id);
		if (Auth::user()) {
			$congvan = CongVan::where('idhinhthucvanban', $id)->orderBy('ngayky', 'desc')->paginate(10);
		} else {
			$congvan = CongVan::where('idhinhthucvanban', $id)->where('idloaihinhcongvan', '<>', 2)->orderBy('ngayky', 'desc')->paginate(10);
		}

		return view('hinhthucvanban.hinhthucvanban', ['hinhthucvanban' => $hinhthucvanban, 'congvan' => $congvan]);
	}

	public function linhvuc($id) {
		$linhvuc = LinhVuc::find($id);
		if (Auth::user()) {
			$congvan = CongVan::where('idlinhvuc', $id)->orderBy('ngayky', 'desc')->paginate(10);
		} else {
			$congvan = CongVan::where('idlinhvuc', $id)->where('idloaihinhcongvan', '<>', 2)->orderBy('ngayky', 'desc')->paginate(10);
		}

		return view('linhvuc.linhvuc', ['linhvuc' => $linhvuc, 'congvan' => $congvan]);
	}

	public function loaivanban($id) {
		$loaivanban = LoaiVanBan::find($id);
		if (Auth::user()) {
			$congvan = CongVan::where('idloaivanban', $id)->orderBy('ngayky', 'desc')->paginate(10);
		} else {
			$congvan = CongVan::where('idloaivanban', $id)->where('idloaihinhcongvan', '<>', 2)->orderBy('ngayky', 'desc')->paginate(10);
		}

		return view('loaivanban.loaivanban', ['loaivanban' => $loaivanban, 'congvan' => $congvan]);
	}

	public function loaihinhcongvan($id) {
		$loaihinhcongvan = LoaiHinhCongVan::find($id);
		if (Auth::user()) {
			$congvan = CongVan::where('idloaihinhcongvan', $id)->orderBy('ngayky', 'desc')->paginate(10);
		} else {
			return redirect('dangnhap');
		}

		return view('loaihinhcongvan.loaihinhcongvan', ['loaihinhcongvan' => $loaihinhcongvan, 'congvan' => $congvan]);
	}

	public function getTimKiem(Request $request) {
		$tukhoa = $request->tukhoa;
		if (Auth::user()) {
			$congvan = CongVan::where('sohieu', 'LIKE', '%' . $tukhoa . '%')->orwhere('trichyeunoidung', 'LIKE', '%' . $tukhoa . '%')->orwhere('nguoiky', 'LIKE', '%' . $tukhoa . '%')->orderBy('ngayky', 'desc')->paginate(10);
		} else {
			$congvan = CongVan::where('idloaihinhcongvan', '<>', 2)->where('sohieu', 'LIKE', '%' . $tukhoa . '%')->orwhere('trichyeunoidung', 'LIKE', '%' . $tukhoa . '%')->orwhere('nguoiky', 'LIKE', '%' . $tukhoa . '%')->orderBy('ngayky', 'desc')->paginate(10);
		}
		return view('pages.timkiem', ['congvan' => $congvan, 'tukhoa' => $tukhoa]);

	}

	function getGioithieu() {
		return view('pages.gioithieu');
	}

	function getLienHe() {
		return view('pages.lienhe');
	}

	function getChitiet($id) {
		$chitietcongvan = CongVan::find($id);
		return view('pages.chitiet', ['chitietcongvan' => $chitietcongvan]);
	}

}
