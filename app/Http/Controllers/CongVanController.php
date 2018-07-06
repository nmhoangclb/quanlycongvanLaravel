<?php

namespace App\Http\Controllers;
use App\CongVan;
use App\CoQuanBanHanh;
use App\HinhThucVanBan;
use App\LinhVuc;
use App\LoaiHinhCongVan;
use App\LoaiVanBan;
use Illuminate\Http\Request;

class CongVanController extends Controller {
	//
	public function getDanhSach() {
		$congvan = CongVan::all();
		// foreach ($congvan as $key => $value) {
		// 	echo "<br>Key:" . $key;
		// 	echo "<hr>";
		// 	echo "id:" . $value->id;
		// 	echo "<hr>";
		// 	$ten = $value->coquanbanhanh->name;
		// 	echo "<b>Value: $ten</b>";
		// }
		return view('admin.congvan.danhsach', ['congvan' => $congvan]);

	}

	public function getThem() {

		$congvan = CongVan::all();
		$coquanbanhanh = CoQuanBanHanh::all();
		$hinhthucvanban = HinhThucVanBan::all();
		$linhvuc = LinhVuc::all();
		$loaihinhcongvan = LoaiHinhCongVan::all();
		$loaivanban = LoaiVanBan::all();
		return view('admin.congvan.them', ['congvan' => $congvan, 'coquanbanhanh' => $coquanbanhanh, 'hinhthucvanban' => $hinhthucvanban, 'linhvuc' => $linhvuc, 'loaihinhcongvan' => $loaihinhcongvan, 'loaivanban' => $loaivanban]);
	}

	public function postThem(Request $request) {
		$this->validate($request,
			[
				'sohieu' => 'required|min:3|max:15',

				'trichyeunoidung' => 'required|min:20|max:100',

				'taptindinhkem' => 'required',

				// 'ngaylap' => 'date_format:"d-m-Y"',
				// 'ngayky' => 'date_format:"d-m-Y"',
				// 'ngayhieuluc' => 'date_format:"d-m-Y"',
				// 'ngaychuyen' => 'date_format:"d-m-Y"',

			],
			[
				'sohieu.required' => 'Bạn phải nhập số hiệu',
				'sohieu.min' => 'Bạn phải nhập số hiệu lớn từ 3 đến 15 ký tự',
				'sohieu.max' => 'Bạn phải nhập số hiệu lớn từ 3 đến 15 ký tự',

				'trichyeunoidung.required' => 'Bạn phải nhập trích yếu nội dung',
				'trichyeunoidung.min' => 'Bạn phải nhập trích yếu nội dung lớn từ 20 đến 100 ký tự',
				'trichyeunoidung.max' => 'Bạn phải nhập trích yếu nội dung lớn từ 20 đến 100 ký tự',

				'taptindinhkem.required' => 'Bạn phải chọn tập tin đính kèm',

				// 'ngaylap.date_format' => 'Bạn phải nhập ngày lập đúng định dạng ngày-tháng-năm',
				// 'ngayky.date_format' => 'Bạn phải nhập ngày ký đúng định dạng ngày-tháng-năm',
				// 'ngayhieuluc.date_format' => 'Bạn phải nhập ngày hiệu lực đúng định dạng ngày-tháng-năm',
				// 'ngaychuyen.date_format' => 'Bạn phải nhập ngày chuyển đúng định dạng ngày-tháng-năm',

			]);
		$congvan = new CongVan;
		$congvan->sohieu = $request->sohieu;
		$congvan->trichyeunoidung = $request->trichyeunoidung;
		$congvan->nguoiky = $request->nguoiky;

		$congvan->idcoquanbanhanh = intval($request->CoQuanBanHanh);
		$congvan->idhinhthucvanban = intval($request->HinhThucVanBan);
		$congvan->idlinhvuc = intval($request->LinhVuc);
		$congvan->idloaihinhcongvan = intval($request->LoaiHinhCongVan);
		$congvan->idloaivanban = intval($request->LoaiVanBan);

		$congvan->ngaylap = $request->ngaylap;
		$congvan->ngayky = $request->ngayky;
		$congvan->ngayhieuluc = $request->ngayhieuluc;
		$congvan->ngaychuyen = $request->ngaychuyen;
		$congvan->conhieuluc = $request->conhieuluc;

		if ($request->hasFile('taptindinhkem')) {
			$file = $request->file('taptindinhkem');
			$duoi = $file->getClientOriginalExtension();
			$duoichophep = array("doc", "docx", "pdf", "xls", "zip", "rar");
			if (!in_array($duoi, $duoichophep)) {
				return redirect('admin/congvan/them')->with('loi', 'Bạn chỉ được chọn file doc, docx, pdf, xls, zip", rar.');
			}
			$name = $file->getClientOriginalName();
			$taptindinhkem = str_random(3) . "_" . $name;
			while (file_exists("upload/" . $taptindinhkem)) {
				$taptindinhkem = str_random(3) . "_" . $name;
			}
			if (strlen($taptindinhkem) < 35) {
				$file->move("upload/", $taptindinhkem);
				$congvan->tentaptindinhkem = $taptindinhkem;
			} else {
				return redirect('admin/congvan/them')->with('loi', 'Tên tập tin đính kèm phải nhỏ hơn 30 ký tự');
			}

		}

		$congvan->TenKhongDau = changeTitle($request->trichyeunoidung);

		$congvan->save();

		return redirect('admin/congvan/them')->with('thongbao', 'Thêm thành công');

	}

	public function getSua($id) {
		$congvan = CongVan::find($id);
		$coquanbanhanh = CoQuanBanHanh::all();
		$hinhthucvanban = HinhThucVanBan::all();
		$linhvuc = LinhVuc::all();
		$loaihinhcongvan = LoaiHinhCongVan::all();
		$loaivanban = LoaiVanBan::all();
		return view('admin.congvan.sua', ['congvan' => $congvan, 'coquanbanhanh' => $coquanbanhanh, 'hinhthucvanban' => $hinhthucvanban, 'linhvuc' => $linhvuc, 'loaihinhcongvan' => $loaihinhcongvan, 'loaivanban' => $loaivanban]);
	}

	public function postSua(Request $request, $id) {
		$congvan = CongVan::find($id);
		$this->validate($request,
			[
				'sohieu' => 'required|min:3|max:15',

				'trichyeunoidung' => 'required|min:20|max:100',

			],
			[
				'sohieu.required' => 'Bạn phải nhập số hiệu',
				'sohieu.min' => 'Bạn phải nhập số hiệu lớn từ 3 đến 15 ký tự',
				'sohieu.max' => 'Bạn phải nhập số hiệu lớn từ 3 đến 15 ký tự',

				'trichyeunoidung.required' => 'Bạn phải nhập trích yếu nội dung',
				'trichyeunoidung.min' => 'Bạn phải nhập trích yếu nội dung lớn từ 20 đến 100 ký tự',
				'trichyeunoidung.max' => 'Bạn phải nhập trích yếu nội dung lớn từ 20 đến 100 ký tự',

			]);

		$congvan->sohieu = $request->sohieu;
		$congvan->trichyeunoidung = $request->trichyeunoidung;
		$congvan->nguoiky = $request->nguoiky;

		$congvan->idcoquanbanhanh = intval($request->CoQuanBanHanh);
		$congvan->idhinhthucvanban = intval($request->HinhThucVanBan);
		$congvan->idlinhvuc = intval($request->LinhVuc);
		$congvan->idloaihinhcongvan = intval($request->LoaiHinhCongVan);
		$congvan->idloaivanban = intval($request->LoaiVanBan);

		$congvan->ngaylap = $request->ngaylap;
		$congvan->ngayky = $request->ngayky;
		$congvan->ngayhieuluc = $request->ngayhieuluc;
		$congvan->ngaychuyen = $request->ngaychuyen;
		$congvan->conhieuluc = $request->conhieuluc;

		if ($request->hasFile('taptindinhkem')) {
			$file = $request->file('taptindinhkem');
			$duoi = $file->getClientOriginalExtension();
			$duoichophep = array("doc", "docx", "pdf", "xls", "zip", "rar");
			if (!in_array($duoi, $duoichophep)) {
				return redirect('admin/congvan/them')->with('loi', 'Bạn chỉ được chọn file doc, docx, pdf, xls, zip", rar.');
			}
			$name = $file->getClientOriginalName();
			$taptindinhkem = str_random(3) . "_" . $name;
			while (file_exists("upload/" . $taptindinhkem)) {
				$taptindinhkem = str_random(3) . "_" . $name;
			}
			if (strlen($taptindinhkem) < 35) {
				$file->move("upload/", $taptindinhkem);
				//kiểm tra và xoá file cũ
				if (file_exists("upload/" . $taptindinhkem)) {
					unlink("upload/" . $congvan->tentaptindinhkem);
				}
				$congvan->tentaptindinhkem = $taptindinhkem;
			} else {
				return redirect('admin/congvan/them')->with('loi', 'Tên tập tin đính kèm phải nhỏ hơn 30 ký tự');
			}

		}

		$congvan->TenKhongDau = changeTitle($request->trichyeunoidung);

		$congvan->save();

		return redirect('admin/congvan/sua/' . $id)->with('thongbao', 'Sửa thành công');

	}

	public function getXoa($id) {
		$congvan = CongVan::find($id);
		$congvan->delete();

		return redirect('admin/congvan/danhsach')->with('thongbao', 'Xoá thành công');
	}
}
