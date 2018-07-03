<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinhVuc extends Model {
	//
	protected $table = 'linhvuc';
	public $timestamps = false;
	public function congvan() {
		return $this->hasMany('App\CongVan', 'idlinhvuc', 'id');
	}
}
