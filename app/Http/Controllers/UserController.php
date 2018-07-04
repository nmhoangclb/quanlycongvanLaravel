<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller {
	//
	public function getDanhSach() {
		$user = User::all();
		return view('admin.user.danhsach', ['user' => $user]);
	}

	public function getThem() {
		return view('admin.user.them');
	}

	public function postThem(Request $request) {
		$this->validate($request,
			[
				'name' => 'required|min:3|max:30',
				'email' => 'required|unique:users,email',
				'password' => 'required|min:6|max:20',
				'passwordAgain' => 'same:password',
			],
			[
				'name.required' => 'Bạn phải nhập tên người dùng',
				'email.required' => 'Bạn phải email',
				'email.unique' => 'Email đã tồn tại',
				'passsword.min' => 'Bạn phải nhập mật khẩu lớn hơn, từ 6 đến 20 ký tự',
				'passsword.max' => 'Bạn phải nhập mật khẩu nhỏ hơn, từ 6 đến 20 ký tự',
				'passwordAgain.min' => 'Bạn phải nhập mật khẩu lớn hơn, từ 6 đến 20 ký tự',
				'passwordAgain.max' => 'Bạn phải nhập mật khẩu nhỏ hơn, từ 6 đến 20 ký tự',
			]);
		$user = new User;
		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = bcrypt($request->password);
		$user->level = $request->level;
		$user->save();

		return redirect('admin/user/them')->with('thongbao', 'Thêm thành công');

	}

	public function getSua($id) {
		$user = User::find($id);

		return view('admin.user.sua', ['user' => $user]);
	}

	public function postSua(Request $request, $id) {
		$user = User::find($id);
		$this->validate($request,
			[
				'Ten' => 'required|unique:User,name|min:3|max:30',
			],
			[
				'Ten.required' => 'Bạn phải nhập tên tài khoản',
				'Ten.unique' => 'Tên tài khoản đã tồn tại',
				'Ten.min' => 'Bạn phải nhập tên lớn từ 3 đến 30 ký tự',
				'Ten.max' => 'Bạn phải nhập tên lớn từ 3 đến 30 ký tự',
			]);

		$user->name = $request->Ten;
		$user->TenKhongDau = changeTitle($request->Ten);
		$user->save();

		return redirect('admin/user/sua/' . $id)->with('thongbao', 'Sửa thành công');
	}

	public function getXoa($id) {
		$coquanbanhanh = User::find($id);
		$coquanbanhanh->delete();

		return redirect('admin/user/danhsach')->with('thongbao', 'Xoá thành công');
	}
}
