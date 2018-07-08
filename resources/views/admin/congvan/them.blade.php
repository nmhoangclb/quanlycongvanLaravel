@extends('admin.layout.index')
@section('title')
Thêm Công Văn
@endsection
@section('content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Công văn
                            <small>thêm</small>
                        </h1>
                    </div>
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
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">

                        <form action="admin/congvan/them" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Cơ quan ban hành</label>
                                <select class="form-control" name="CoQuanBanHanh">
                                    @foreach($coquanbanhanh as $cqbh)
                                        <option value="{{ $cqbh->id }}"
                                            @if($cqbh->name == 'Sở y tế')
                                                selected
                                            @endif
                                            >{{ $cqbh->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Hình thức văn bản</label>
                                <select class="form-control" name="HinhThucVanBan">
                                    @foreach($hinhthucvanban as $htvb)
                                        <option value="{{ $htvb->id }}">{{ $htvb->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Lĩnh vực</label>
                                <select class="form-control" name="LinhVuc">
                                    @foreach($linhvuc as $lv)
                                        <option value="{{ $lv->id }}">{{ $lv->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Loại hình công văn</label>
                                <select class="form-control" name="LoaiHinhCongVan">
                                    @foreach($loaihinhcongvan as $lhcv)
                                        <option value="{{ $lhcv->id }}">{{ $lhcv->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Loại văn bản</label>
                                <select class="form-control" name="LoaiVanBan">
                                    @foreach($loaivanban as $lvb)
                                        <option value="{{ $lvb->id }}">{{ $lvb->name }}</option>
                                    @endforeach
                                </select>
                            <div class="form-group">
                                <label>Số hiệu</label>
                                <input class="form-control" name="sohieu" placeholder="Nhập số hiệu" />
                            </div>
                            <div class="form-group">
                                <label>Trích yếu nội dung</label>
                                <textarea class="form-control" name="trichyeunoidung" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Người ký</label>
                                <input class="form-control" name="nguoiky"  maxlength="30" placeholder="Nhập họ và tên người ký" />
                            </div>
                            <div class="form-group">
                                <label>Ngày lập</label>
                                <input type="date" class="form-control" name="ngaylap"  />
                            </div>
                            <div class="form-group">
                                <label>Ngày ký</label>
                                <input type="date" class="form-control" name="ngayky"  />
                            </div>
                            <div class="form-group">
                                <label>Ngày hiệu lực</label>
                                <input type="date" class="form-control" name="ngayhieuluc"  />
                            </div>
                            <div class="form-group">
                                <label>Ngày chuyển</label>
                                <input type="date" class="form-control" name="ngaychuyen"  />
                            </div>
                            <div class="form-group">
                                <label>Còn hiệu lực</label>
                                <label class="radio-inline">
                                    <input name="conhieuluc" value="1" checked="" type="radio">Còn
                                </label>
                                <label class="radio-inline">
                                    <input name="conhieuluc" value="0" type="radio">Hết
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Tập tin đính kèm</label>
                                <input type="file" name="taptindinhkem">
                            </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

@endsection
