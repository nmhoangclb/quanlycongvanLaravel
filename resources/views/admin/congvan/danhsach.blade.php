@extends('admin.layout.index')

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
                                        <td>(Không)</td>
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
                            <!-- <tr class="odd gradeX" align="center">
                                <td>2</td>
                                <td>1983/BC-SYT</td>
                                <td>2017-10-17</td>
                                <td>Báo cáo tình hình công tác y tế tháng 10/2017</td>
                                <td><input type="checkbox" name="vehicle" value="Bike"></td>
                                <td>Công văn đi</td>
                                <td>Sở Y Tế</td>
                                <td>Báo cáo</td>
                                <td>Y Tế</td>
                                <td>Văn bản chỉ đạo điều hành</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#">Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>
                            <tr class="odd gradeX" align="center">
                                <td>3</td>
                                <td>1983/BC-SYT</td>
                                <td>2017-10-17</td>
                                <td>Báo cáo tình hình công tác y tế tháng 10/2017</td>
                                <td><input type="checkbox" name="vehicle" value="Bike"></td>
                                <td>Văn bản nội bô</td>
                                <td>Sở Y Tế</td>
                                <td>Báo cáo</td>
                                <td>Y Tế</td>
                                <td>Văn bản chỉ đạo điều hành</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#">Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>
                            <tr class="odd gradeX" align="center">
                                <td>4</td>
                                <td>1983/BC-SYT</td>
                                <td>2017-10-17</td>
                                <td>Báo cáo tình hình công tác y tế tháng 10/2017</td>
                                <td><input type="checkbox" name="vehicle" value="Bike"></td>
                                <td>Công văn đến</td>
                                <td>Sở Y Tế</td>
                                <td>Báo cáo</td>
                                <td>Y Tế</td>
                                <td>Văn bản chỉ đạo điều hành</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#">Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>
                            <tr class="odd gradeX" align="center">
                                <td>5</td>
                                <td>1983/BC-SYT</td>
                                <td>2017-10-17</td>
                                <td>Báo cáo tình hình công tác y tế tháng 10/2017</td>
                                <td><input type="checkbox" name="vehicle" value="Bike" checked disabled></td>
                                <td>Công văn đến</td>
                                <td>Sở Y Tế</td>
                                <td>Báo cáo</td>
                                <td>Y Tế</td>
                                <td>Văn bản chỉ đạo điều hành</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#">Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>
                            <tr class="odd gradeX" align="center">
                                <td>6</td>
                                <td>1983/BC-SYT</td>
                                <td>2017-10-17</td>
                                <td>Báo cáo tình hình công tác y tế tháng 10/2017</td>
                                <td><input type="checkbox" name="vehicle" value="Bike"></td>
                                <td>Công văn đến</td>
                                <td>Sở Y Tế</td>
                                <td>Báo cáo</td>
                                <td>Y Tế</td>
                                <td>Văn bản chỉ đạo điều hành</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#">Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>
                            <tr class="odd gradeX" align="center">
                                <td>7</td>
                                <td>1983/BC-SYT</td>
                                <td>2017-10-17</td>
                                <td>Báo cáo tình hình công tác y tế tháng 10/2017</td>
                                <td><input type="checkbox" name="vehicle" value="Bike"></td>
                                <td>Công văn đến</td>
                                <td>Sở Y Tế</td>
                                <td>Báo cáo</td>
                                <td>Y Tế</td>
                                <td>Văn bản chỉ đạo điều hành</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#">Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>
                            <tr class="odd gradeX" align="center">
                                <td>8</td>
                                <td>1983/BC-SYT</td>
                                <td>2017-10-17</td>
                                <td>Báo cáo tình hình công tác y tế tháng 10/2017</td>
                                <td><input type="checkbox" name="vehicle" value="Bike" checked disabled></td>
                                <td>Công văn đến</td>
                                <td>Sở Y Tế</td>
                                <td>Báo cáo</td>
                                <td>Y Tế</td>
                                <td>Văn bản chỉ đạo điều hành</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#">Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>
                            <tr class="odd gradeX" align="center">
                                <td>9</td>
                                <td>1983/BC-SYT</td>
                                <td>2017-10-17</td>
                                <td>Báo cáo tình hình công tác y tế tháng 10/2017</td>
                                <td><input type="checkbox" name="vehicle" value="Bike"></td>
                                <td>Công văn đến</td>
                                <td>Sở Y Tế</td>
                                <td>Báo cáo</td>
                                <td>Y Tế</td>
                                <td>Văn bản chỉ đạo điều hành</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#">Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>
                            <tr class="odd gradeX" align="center">
                                <td>10</td>
                                <td>1983/BC-SYT</td>
                                <td>2017-10-17</td>
                                <td>Báo cáo tình hình công tác y tế tháng 10/2017</td>
                                <td><input type="checkbox" name="vehicle" value="Bike"></td>
                                <td>Công văn đến</td>
                                <td>Sở Y Tế</td>
                                <td>Báo cáo</td>
                                <td>Y Tế</td>
                                <td>Văn bản chỉ đạo điều hành</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#">Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>
                            <tr class="odd gradeX" align="center">
                                <td>11</td>
                                <td>1983/BC-SYT</td>
                                <td>2017-10-17</td>
                                <td>Báo cáo tình hình công tác y tế tháng 10/2017</td>
                                <td><input type="checkbox" name="vehicle" value="Bike" checked disabled></td>
                                <td>Công văn đến</td>
                                <td>Sở Y Tế</td>
                                <td>Báo cáo</td>
                                <td>Y Tế</td>
                                <td>Văn bản chỉ đạo điều hành</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#">Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>
 -->

                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

@endsection