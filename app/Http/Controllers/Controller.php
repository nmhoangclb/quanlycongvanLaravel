<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController {
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function xuatthongbao() {
		if (count($errors) > 0) {
			echo '<div class="alert-danger">';
			foreach ($errors->all() as $err) {
				echo $err . "<br>";
			}

			echo '</div>';
		}
		if (session('loi')) {
			echo '<div class="alert alert-danger">';
			echo session('loi');
			echo '</div>';
		}
		if (session('thongbao')) {
			echo '<div class="alert alert-success">';
			echo session('thongbao');
			echo '</div>';
		}

	}
}
