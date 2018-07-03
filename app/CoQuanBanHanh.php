<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoQuanBanHanh extends Model {
	//
	protected $table = 'coquanbanhanh';

	public function congvan() {
		return $this->hasMany('App\CongVan', 'idcoquanbanhanh', 'id');
	}

}
