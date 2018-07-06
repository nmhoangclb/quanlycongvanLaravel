<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="trangchu">Hệ thống quản lý công văn</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="gioithieu">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="lienhe">Liên hệ</a>
                    </li>
                </ul>

                <form action="timkiem" class="navbar-form navbar-left" role="search">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
			        <div class="form-group">
			          <input type="text" class="form-control" name="tukhoa" placeholder="Nhập từ khoá cần tìm..">
			        </div>
			        <button type="submit" class="btn btn-default">Tìm kiếm</button>
			    </form>

			    <ul class="nav navbar-nav pull-right">
                    @if(!Auth::user())
                        <li>
                            <a href="dangnhap">Đăng nhập</a>
                        </li>
                    @endif
                    @if(Auth::user())
                        @if(Auth::user()->level > 0)
                            <li>
                                <a href="admin/congvan/danhsach">
                                    <span class ="glyphicon glyphicon-home"></span>
                                    Trang quản trị
                                </a>
                            </li>
                        @endif
                        <li>
                        	<a
                            @if(Auth::user()->level == 2)
                                href="admin/user/sua/{{ Auth::user()->id }}"
                            @endif
                            >
                        		<span class ="glyphicon glyphicon-user"></span>
                        		{{ Auth::user()->name }}
                        	</a>
                        </li>
                    @endif
                    @if(Auth::user())
                        <li>
                        	<a href="dangxuat">Đăng xuất</a>
                        </li>
                    @endif

                </ul>
            </div>



            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>