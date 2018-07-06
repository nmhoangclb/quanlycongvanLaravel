
<div class="row main-left">
            <div class="col-md-3 ">
                <ul class="list-group" id="menu">
                    <li href="trangchu" class="list-group-item menu1 active">
                    	Menu
                    </li>

                    <li href="#" class="list-group-item menu1">
                    	Cơ quan ban hành
                    </li>
                    <ul>
                        @foreach($coquanbanhanhviewshare as $cqbh)

                    		<li class="list-group-item">
                    			<a href="coquanbanhanh/{{ $cqbh->id }}/{{ $cqbh->TenKhongDau }}.html">{{ $cqbh->name }}</a>
                    		</li>

                        @endforeach
                    </ul>
                    <li href="#" class="list-group-item menu1">
                        Hình thức văn bản
                    </li>
                    <ul>
                        @foreach($hinhthucvanbanviewshare as $htvb)

                            <li class="list-group-item">
                                <a href="hinhthucvanban/{{ $htvb->id }}/{{ $htvb->TenKhongDau }}.html">{{ $htvb->name }}</a>
                            </li>

                        @endforeach
                    </ul>
                    <li href="#" class="list-group-item menu1">
                        Lĩnh vực
                    </li>
                    <ul>
                        @foreach($linhvucviewshare as $lv)

                            <li class="list-group-item">
                                <a href="linhvuc/{{ $lv->id }}/{{ $lv->TenKhongDau }}.html">{{ $lv->name }}</a>
                            </li>

                        @endforeach
                    </ul>
                    <li href="#" class="list-group-item menu1">
                        Loại văn bản
                    </li>
                    <ul>
                        @foreach($loaivanbanviewshare as $lvb)

                            <li class="list-group-item">
                                <a href="loaivanban/{{ $lvb->id }}/{{ $lvb->TenKhongDau }}.html">{{ $lvb->name }}</a>
                            </li>

                        @endforeach

                    @if(Auth::user())
                    {{-- Xử lý hiện menu loại công văn nếu user đăng nhập --}}

                        </ul>
                            <li href="#" class="list-group-item menu1">
                            Loại hình công văn
                            </li>
                            <ul>
                                @foreach($loaihinhcongvanviewshare as $lhcv)

                                    <li class="list-group-item">
                                        <a href="loaihinhcongvan/{{ $lhcv->id }}/{{ $lhcv->TenKhongDau }}.html">{{ $lhcv->name }}</a>
                                    </li>

                                @endforeach
                        </ul>

                    @endif



                </ul>
            </div>
