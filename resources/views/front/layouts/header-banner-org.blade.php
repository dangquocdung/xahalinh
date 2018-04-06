<div class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <div class="porlet-header-banner">
                <div class="header-banner-wrapper">
                    <div class="container pad-left-10 pad-right-10">
                        <div class="header-banner-logo hidden-xs">
                            <a href="/">
                                <img src="../img/brand/{{ config('app.brand')}}.png">
                            </a>
                        </div>
                        <div class="header-banner-slide">
                            {{-- <div id="rotator" style="opacity:0.6">
                              <img src="./images/banner/1.png" class="img-responsive" alt="" >
                              <img src="./images/banner/2.png" class="img-responsive" alt="" >
                              <img src="./images/banner/3.png" class="img-responsive" alt="" >
                            </div> --}}

                            <div id="banner-xa" class="banner-xa">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="visible-xs" href="/"><img src="../img/brand/{{ config('app.brand')}}.png" alt="" width="80%"></a>
                            </div>
                        </div>

                        <div class="header-menu-search-wrapper hidden-xs">
                            <form action="ket-qua-tim-kiem" method="POST">
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <input type="text" name="timkiem" class="header-menu-search-box" placeholder="Tìm kiếm" value="">
                                <input type="submit" class="icon-search" value="">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div id="banner-xa" class="banner-xa">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a href="/"><img src="../img/brand/{{ config('app.brand')}}.png" alt="" width="80%"></a>
            </div> --}}
        </div>
    </div><!-- /.container -->
    <div class="menu-ngang">
        <div class="container">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
                    </li>
                    @if ($menutop)
                        @foreach ($menutop as $mt)
                            {{-- @if ($mt->id < 4) --}}
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ $mt->ten }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    @foreach ($mt->loaitin as $lt)
                                        @if ( $lt->menutop_id == $mt->id )
                                            <li><a href="/loai-tin/{{$lt->slug}}"><i class="fa fa-tag" aria-hidden="true"></i> &nbsp{{ $lt->ten }}</a></li>
                                        @endif
                                    @endforeach
                                    @if ($mt->id == 2)
                                        <li class="divider"></li>
                                        <li><a href="/loai-tin/video"><i class="fa fa-youtube" aria-hidden="true"></i> &nbspVideo clip</a></li>
                                    @endif

                                    @if ($mt->id == 3)
                                        <li class="divider"></li>
                                        <li><a href="http://{{ config('app.huyen') }}.hatinh.gov.vn" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> &nbspVB QPPL: Công báo huyện</a></li>
                                        <li><a href="http://congbao.hatinh.gov.vn" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> &nbspVB QPPL: Công báo tỉnh</a></li>

                                        <li class="divider"></li>

                                        <li><a href="hoi-dap"><i class="fa fa-comments-o" aria-hidden="true"></i> &nbspHỏi & Đáp</a></li>
                                        <li><a href="gop-y"><i class="fa fa-envelope-o" aria-hidden="true"></i> &nbspGóp ý</a></li>

                                    @endif
                                </ul>
                            </li>
                        @endforeach
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Chỉ đạo, Điều hành <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                @foreach ($menuvb as $lt)
                                    <li><a href="/van-ban/{{$lt->slug}}"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> &nbsp{{ $lt->ten }}</a></li>
                                @endforeach
                                <li class="divider"></li>
                                @foreach ($loaivb as $lvb)
                                    <li><a href="/loai-van-ban/{{$lvb->slug}}"><i class="fa fa-folder-open-o" aria-hidden="true"></i> &nbsp{{ $lvb->ten }}</a></li>
                                @endforeach
                            </ul>
                    @endif
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}"><i class="fa fa-user" aria-hidden="true"></i> &nbspĐăng nhập</a></li>
                        {{-- <li><a href="{{ route('register') }}">Đăng kí</a></li> --}}
                    @else

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <i class="fa fa-user" aria-hidden="true"></i> &nbsp{{ Auth::user()->name }} ({{ Auth::user()->level }})<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/qtht"><i class="fa fa-sign-in" aria-hidden="true"></i> Trang quản trị</a></li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i> Đăng xuất
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                        @endif
                        </li>
                </ul>
            </div><!-- /.nav-collapse -->
        </div>
    </div>
</div><!-- /.navbar -->