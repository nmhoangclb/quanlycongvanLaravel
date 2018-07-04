<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CongVan extends Model {
	//
	protected $table = 'congvan';
	public $timestamps = false;
	//Tạo liên kết cho bảng công văn
	public function coquanbanhanh() {
		return $this->belongsTo('App\CoQuanBanHanh', 'idcoquanbanhanh', 'id');
	}

	public function hinhthucvanban() {
		return $this->belongsTo('App\HinhThucVanBan', 'idhinhthucvanban', 'id');
	}

	public function linhvuc() {
		return $this->belongsTo('App\LinhVuc', 'idlinhvuc', 'id');
	}

	public function loaivanban() {
		return $this->belongsTo('App\LoaiVanBan', 'idloaivanban', 'id');
	}

	public function loaihinhcongvan() {
		return $this->belongsTo('App\LoaiHinhCongVan', 'idloaihinhcongvan', 'id');
	}

}
