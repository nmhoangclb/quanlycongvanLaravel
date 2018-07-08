@extends('admin.layout.index')
@section('title')
Danh sách Người dùng
@endsection
@section('content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Người dùng
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err )
                                {{ $err }}<br>
                            @endforeach
                        </div>
                    @endif

                    @if(session('thongbao'))
                        <div class="alert alert-success">{{ session('thongbao') }}</div>
                    @endif
                    @if(session('loi'))
                        <div class="alert alert-success">{{ session('loi') }}</div>
                    @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>email</th>
                                <th>Quyền</th>
                                <th>Ngày tạo</th>
                                <th>Ngày sửa</th>
                                <th>Xoá</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>

{{-- Kiểm tra dữ liệu của bảng nếu k có thì in ra Bảng hiện có dữ liệu --}}
@if(count($user) == 0)
<tr>Bảng hiện tại chưa có dữ liệu</tr>
@endif

<?php
//Cách xuất STT
$i = 1;
if (isset($_GET['page']) && $_GET['page'] != 1) {
	$i = (($_GET['page'] - 1) * 10) + 1;
}
?>

                            @foreach($user as $usr)
                                <tr class="odd gradeX" align="center">
                                    <td>{{ $i }}</td><?php $i++;?>
                                    <td>{{ $usr->name }}</td>
                                    <td>{{ $usr->email }}</td>

                                    @switch($usr->level)
                                        @case(1)
                                            <td>Admin</td>
                                            @break
                                        @case(2)
                                            <td>Super Admin</td>
                                            @break
                                        @default
                                            <td>Nhân viên</td>
                                    @endswitch

                                    <td>{{ $usr->created_at }}</td>
                                    <td>{{ $usr->updated_at }}</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/xoa/{{ $usr->id }}">Xoá</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/sua/{{ $usr->id }}">Sửa</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

@endsection