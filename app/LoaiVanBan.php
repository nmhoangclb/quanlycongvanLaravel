<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiVanBan extends Model {
	//
	protected $table = 'loaivanban';
	public $timestamps = false;
	public function congvan() {
		return $this->hasMany('App\CongVan', 'idloaivanban', 'id');
	}
}
