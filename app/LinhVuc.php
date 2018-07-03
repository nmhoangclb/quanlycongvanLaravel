<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinhVuc extends Model {
	//
	protected $table = 'linhvuc';

	public function congvan() {
		return $this->hasMany('App\CongVan', 'idlinhvuc', 'id');
	}
}
