@extends('layout.index')


@section('content')
<!-- Content -->
<div class="col-md-9">


	<div class="panel-heading" style="background-color:#337AB7; color:white;" >
	            		<h2 style="margin-top:0px; margin-bottom:0px;">Chi tiết công văn: {{ $chitietcongvan->sohieu }}</h2>
	            	</div>
	<table class="table table-striped table-bordered table-hover" id="dataTables-example">


		<tbody>

				<tr>
					<th>Số hiệu</th>
					<th>{{ $chitietcongvan->sohieu }}</th>
				</tr>

				<tr>
					<th>Trích yếu nội dung</th>
					<th>{{ $chitietcongvan->trichyeunoidung }}</th>
				</tr>

				@if($chitietcongvan->nguoiky != 0)
					<tr>
						<th>Người ký</th>
						<th>{{ $chitietcongvan->nguoiky }}</th>
					</tr>
				@else
					<tr>
						<th>Ngày người</th>
						<th>-</th>
					</tr>
				@endif

				@if($chitietcongvan->ngaylap != 0)
					<tr>
						<th>Ngày lập</th>
						<th>{{ Carbon\Carbon::parse($chitietcongvan->ngaylap)->format('d/m/Y') }}</th>
					</tr>
				@else
					<tr>
						<th>Ngày lập</th>
						<th>-</th>
					</tr>
				@endif

				@if($chitietcongvan->ngayky != 0)
					<tr>
						<th>Ngày ký</th>
						<th>{{ Carbon\Carbon::parse($chitietcongvan->ngayky)->format('d/m/Y') }}</th>
					</tr>
				@else
					<tr>
						<th>Ngày ký</th>
						<th>-</th>
					</tr>
				@endif

				@if($chitietcongvan->ngayhieuluc != 0)
					<tr>
						<th>Ngày hiệu lực</th>
						<th>{{ Carbon\Carbon::parse($chitietcongvan->ngayhieuluc)->format('d/m/Y') }}</th>
					</tr>
				@else
					<tr>
						<th>Ngày ký</th>
						<th>-</th>
					</tr>
				@endif

				@if($chitietcongvan->conhieuluc == 0)
					<tr>
						<th>Còn hiệu lực</th>
						<th><input type="checkbox" value="0" disabled></th>
					</tr>
				@else
					<tr>
						<th>Còn hiệu lực</th>
						<th><input type="checkbox" value="1" disabled></th>
					</tr>
				@endif

				@if($chitietcongvan->ngaychuyen != 0)
					<tr>
						<th>Ngày chuyển</th>
						<th>{{ Carbon\Carbon::parse($chitietcongvan->ngaychuyen)->format('d/m/Y') }}</th>
					</tr>
				@else
					<tr>
						<th>Ngày chuyển</th>
						<th>-</th>
					</tr>
				@endif

				<tr>
					<th>Cơ quan ban hành</th>
					<th>{{ $chitietcongvan->coquanbanhanh->name }}</th>
				</tr>

				<tr>
					<th>Hình thức văn bản</th>
					<th>{{ $chitietcongvan->hinhthucvanban->name }}</th>
				</tr>

				<tr>
					<th>Lĩnh vực</th>
					<th>{{ $chitietcongvan->linhvuc->name }}</th>
				</tr>

				<tr>
					<th>Loại văn bản</th>
					<th>{{ $chitietcongvan->loaivanban->name }}</th>
				</tr>

				<tr>
					<th>Loại hình công văn</th>
					<th>{{ $chitietcongvan->loaihinhcongvan->name }}</th>
				</tr>

				<tr>
					<th>Tải về</th>
					<th><a href="upload/{{ $chitietcongvan->tentaptindinhkem }}" target="_blank"><div class="glyphicon glyphicon-download-alt"></div></a></th>
				</tr>



		</tbody>
	</table>
</div>
	<!-- end Page Content -->
@endsection

