@extends('layout.index')

@section('content')
<!-- Page Content -->
<div class="container">

	@include('layout.slider')

	<div class="space20"></div>


	@include('layout.menu')

	<!-- Content -->
<div class="col-md-9">


	<div class="panel-heading" style="background-color:#337AB7; color:white;" >
	            		<h2 style="margin-top:0px; margin-bottom:0px;">Bảng Công Văn </h2>
	            	</div>
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
			</tr>
		</thead>
		<tbody>
			<tr class="odd gradeX" align="center">
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


			</tr>


		</tbody>
	</table>
</div>
	<!-- end Page Content -->

</div>

@endsection