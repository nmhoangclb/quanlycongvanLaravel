@extends('admin.layout.index')

@section('content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại văn bản
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(session('thongbao'))
                            <div class="alert alert-success">{{ session('thongbao') }}</div>
                    @endif
                    @if(session('loi'))
                            <div class="alert alert-danger">{{ session('loi') }}</div>
                    @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Xoá</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($loaivanban as $lvb)
                                <tr class="odd gradeX" align="center">
                                    <td>{{ $lvb->id }}</td>
                                    <td>{{ $lvb->name }}</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/loaivanban/xoa/{{ $lvb->id }}">Xoá</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/loaivanban/sua/{{ $lvb->id }}">Sửa</a></td>
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