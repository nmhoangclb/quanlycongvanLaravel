 <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!-- <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search1...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </li> -->
                        <li>
                            <a href="trangchu"><i class="glyphicon glyphicon-home"></i> Trang chủ</a>
                        </li>

                        <li>
                            <a href="#"><i class="glyphicon glyphicon-list-alt"></i> Công văn<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/congvan/danhsach">Danh sách công văn</a>
                                </li>
                                <li>
                                    <a href="admin/congvan/them">Thêm công văn</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>



                        @if(Auth::user()->level == 2)
                        <li>
                            <a href="admin/coquanbanhanh/danhsach"><i class="fa fa-hospital-o"></i> Cơ quan ban hành<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/coquanbanhanh/danhsach">Danh sách cơ quan ban hành</a>
                                </li>
                                <li>
                                    <a href="admin/coquanbanhanh/them">Thêm cơ quan ban hành</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="admin/hinhthucvanban/danhsach"><i class="fa fa-columns"></i> Hình thức văn bản<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/hinhthucvanban/danhsach">Danh sách hình thức văn bản</a>
                                </li>
                                <li>
                                    <a href="admin/hinhthucvanban/them">Thêm hình thức văn bản</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="admin/linhvuc/danhsach"><i class="fa fa-medkit"></i> Lĩnh vực<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/linhvuc/danhsach">Danh sách lĩnh vực</a>
                                </li>
                                <li>
                                    <a href="admin/linhvuc/them">Thêm lĩnh vực</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="admin/loaivanban/danhsach"><i class="fa fa-list-ul"></i> Loại văn bản<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/loaivanban/danhsach">Danh sách loại văn bản</a>
                                </li>
                                <li>
                                    <a href="admin/loaivanban/them">Thêm loại văn bản</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="admin/loaihinhcongvan/danhsach"><i class="fa fa-list-alt"></i> Loại hình công văn<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/loaihinhcongvan/danhsach">Danh sách loại văn bản</a>
                                </li>
                                <!-- chưa xử lý nếu phát sinh thêm 1 loại hình thức công văn -->
                                <!-- <li>
                                    <a href="admin/loaihinhcongvan/them">Thêm loại văn bản</a>
                                </li> -->
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-picture"></i> Slide<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/slide/danhsach">Danh sách slide</a>
                                </li>
                                <li>
                                    <a href="admin/slide/them">Thêm slide</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Người dùng<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/user/danhsach">Danh sách người dùng</a>
                                </li>
                                <li>
                                    <a href="admin/user/them">Thêm người dùng</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        @endif



                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->