@extends('admin.layout.index')
@section('title')
Danh sách Công văn
@endsection
@section('content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Công văn - văn bản
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(count($errors)>0)
                            <div class="alert-danger">
                                @foreach($errors->all() as $err)
                                    {{ $err }}<br>
                                @endforeach
                            </div>
                    @endif
                    @if(session('loi'))
                        <div class="alert alert-danger">
                            {{ session('loi') }}
                        </div>

                    @endif
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{ session('thongbao') }}
                        </div>

                    @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Số hiệu</th>
                                <th>Ngày ký</th>
                                <th>Trích yếu nội dung</th>
                                <th>Ngày chuyển</th>
                                <th>Loại hình công văn</th>
                                <th>Cơ quan ban hành</th>
                                <th>Hình thức văn bản</th>
                                <th>Lĩnh vực</th>
                                <th>Loại văn bản</th>
                                <th>Xoá</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
{{-- Kiểm tra dữ liệu của bảng nếu k có thì in ra Bảng hiện có dữ liệu --}}
@if(count($congvan) == 0)
<tr>Bảng hiện tại chưa có dữ liệu</tr>
@endif

<?php
//Cách xuất STT
$i = 1;
if (isset($_GET['page']) && $_GET['page'] != 1) {
	$i = (($_GET['page'] - 1) * 10) + 1;
}
?>


                            @foreach($congvan as $key => $value)
                                <tr class="odd gradeX" align="center">
                                    <td>{{ $i }}</td><?php $i++;?>
                                    <td>{{ $value->sohieu }}</td>
                                    <td>{{ Carbon\Carbon::parse($value->ngayky)->format('d/m/Y') }}</td>
                                    <td>{{ $value->trichyeunoidung }}</td>
                                    <!-- kiểm tra ngaychuyen khác null -->
                                    @if($value->ngaychuyen != '')
                                        <td>{{ Carbon\Carbon::parse($value->ngaychuyen)->format('d/m/Y') }}</td>
                                    @else
                                        <td>-</td>
                                    @endif

                                    <td>{{ $value->loaihinhcongvan->name }}</td>

                                    <td>{{ $value->coquanbanhanh->name }}</td>
                                    <td>{{ $value->hinhthucvanban->name }}</td>
                                    <td>{{ $value->linhvuc->name }}</td>
                                    <td>{{ $value->loaivanban->name }}</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/congvan/xoa/{{ $value->id }}">Xoá</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/congvan/sua/{{ $value->id }}">Sửa</a></td>
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