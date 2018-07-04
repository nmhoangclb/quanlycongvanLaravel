<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiHinhCongVan extends Model {
	//
	protected $table = 'loaihinhcongvan';
	public $timestamps = false;
	public function congvan() {
		return $this->hasMany('App\CongVan', 'idloaihinhcongvan', 'id');
	}
}
