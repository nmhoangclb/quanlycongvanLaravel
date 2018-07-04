@extends('admin.layout.index')

@section('content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cơ quan ban hành
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(session('thongbao'))
                            <div class="alert alert-success">{{ session('thongbao') }}</div>
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
                        	@foreach($coquanbanhanh as $cqbh)
	                            <tr class="odd gradeX" align="center">
	                                <td>{{ $cqbh->id }}</td>
	                                <td>{{ $cqbh->name }}</td>
	                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/coquanbanhanh/xoa/{{ $cqbh->id }}">Xoá</a></td>
	                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/coquanbanhanh/sua/{{ $cqbh->id }}">Sửa</a></td>
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