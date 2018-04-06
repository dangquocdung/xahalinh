<div class="menu">
    <ul>
        <li><a href=""><span class="glyphicon glyphicon-home" aria-hidden="true"></a>
        <li><a href="{{ route('gioi-thieu') }}">Giới thiệu</a></li>

        @foreach ($menutop as $mt)
            @if ($mt->id > 1)
                <li><a href="">{{ $mt->ten }} <span class="caret"></span></a>
                <ul>
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
            @endif
        @endforeach
            <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    Chỉ đạo, Điều hành <span class="caret"></span>
                </a>
                <ul>
                    @foreach ($menuvb as $lt)
                        <li><a href="/van-ban/{{$lt->slug}}"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> &nbsp;{{ $lt->ten }}</a></li>
                    @endforeach
                    {{--<li class="divider"></li>--}}
                    {{--@foreach ($loaivb as $lvb)--}}
                        {{--<li><a href="/loai-van-ban/{{$lvb->slug}}"><i class="fa fa-folder-open-o" aria-hidden="true"></i> &nbsp;{{ $lvb->ten }}</a></li>--}}
                    {{--@endforeach--}}
                </ul>
            </li>

            <li class="pull-right">
            @if (Auth::guest())
                <li><a href="{{ route('login') }}"><i class="fa fa-user" aria-hidden="true"></i> &nbsp;Đăng nhập</a></li>
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




</div>




<script>
    /*global $ */
    $(document).ready(function () {

        "use strict";

        $('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
        //Checks if li has sub (ul) and adds class for toggle icon - just an UI


        $('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');
        //Checks if drodown menu's li elements have anothere level (ul), if not the dropdown is shown as regular dropdown, not a mega menu (thanks Luka Kladaric)

        $(".menu > ul").before("<a href=\"#\" class=\"menu-mobile\">{{ config('app.name', 'Dang Quoc Dung') }}</a>");

        //Adds menu-mobile class (for mobile toggle menu) before the normal menu
        //Mobile menu is hidden if width is more then 959px, but normal menu is displayed
        //Normal menu is hidden if width is below 959px, and jquery adds mobile menu
        //Done this way so it can be used with wordpress without any trouble

        $(".menu > ul > li").hover(function (e) {
            if ($(window).width() > 943) {
                $(this).children("ul").stop(true, false).fadeToggle(150);
                e.preventDefault();
            }
        });
        //If width is more than 943px dropdowns are displayed on hover

        $(".menu > ul > li").click(function () {
            if ($(window).width() <= 943) {
                $(this).children("ul").fadeToggle(150);
            }
        });
        //If width is less or equal to 943px dropdowns are displayed on click (thanks Aman Jain from stackoverflow)

        $(".menu-mobile").click(function (e) {
            $(".menu > ul").toggleClass('show-on-mobile');
            e.preventDefault();
        });
        //when clicked on mobile-menu, normal menu is shown as a list, classic rwd menu story (thanks mwl from stackoverflow)

    });
</script>