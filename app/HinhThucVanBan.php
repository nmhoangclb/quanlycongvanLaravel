<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HinhThucVanBan extends Model {
	//
	protected $table = 'hinhthucvanban';

	public function congvan() {
		return $this->hasMany('App\CongVan', 'idhinhthucvanban', 'id');
	}
}
