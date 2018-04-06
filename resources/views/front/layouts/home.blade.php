
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--*************************************************-->
    <!-- Tác giả: Đặng Quốc Dũng - PGD TTCNTT-TT Hà Tĩnh -->
    <!-- Email: dungthinhvn@gmail.com - Phone:0986242487 -->
    <!--      Website: http://www.dangquocdung.com       -->
    <!--*************************************************-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../assets/ico/favicon.ico">

    {{-- <title>{{ config('app.name', 'Dang Quoc Dung') }}</title> --}}

    @yield('title')
    <base href="{{asset('')}}">


    <!-- Bootstrap core CSS -->
    <!-- <link href="./css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Bootstrap custom CSS -->
      <!-- DataTables -->
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

    <link href="css/ionicons.min.css" rel="stylesheet">

    {{--<link href="./assets/css/app.css" rel="stylesheet">--}}

      <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    <!-- fancybox -->
    <link rel="stylesheet" href="./assets/css/jquery.fancybox.css?v=2.1.6" type="text/css" media="screen" />

    <!-- Custom styles for this template -->
    {{-- <link href="./assets/css/offcanvas.css" rel="stylesheet"> --}}

    <script src="./js/jquery.min.js"></script>
    <script src="./js/socket.io.js"></script>
    <script src="./admin/ckeditor/ckeditor.js"></script>
    {{-- <script>
      var socket = io("http://localhost:3000");
      $(document).ready(function(){
        socket.on("server_send_quangcao",function(data){
          var s =   "<a  class='list-group-item active main-color-bg'>";
              s = s + "<span class='glyphicon glyphicon-cog' aria-hidden='true'></span> Tài trợ</a>";
              s = s + "<a class='dichvucong' href='" + data + "' target='_blank'>";
              s = s + "<img class='img-responsive' src='./img/banner-right/" + data + "' style='display:block; margin:0 auto' width='100%'></a>";
          $("#quangcao").html(s);

        })
      })
    </script> --}}

    <link href="./css/rotate.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="./js/rotate.js"></script>
    <script type="text/javascript">
      $(window).load(function() {
        // startRotator("#rotator");
      })
    </script>

  <script src="./js/jssor.slider.min.js"></script>
  <script>
      jssor_slider1_init = function (containerId) {
          //Define an array of slideshow transition code
          var _SlideshowTransitions = [

              {$Duration:1200,y:-1,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Top:[0.5,0.5],$Clip:[0,0.5]},$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:12},$ScaleClip:0.5},
              {$Duration:1500,x:-1,y:0.5,$Delay:100,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:513,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutJump},$Round:{$Top:1.5}},
              {$Duration:1500,x:-1,y:0.5,$Delay:100,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutJump},$Round:{$Top:1.5}},
              {$Duration:1500,x:-1,y:0.5,$Delay:100,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutJump},$Round:{$Top:1.5}},
              {$Duration:1500,x:-1,y:-0.5,$Delay:50,$Cols:10,$Rows:5,$Opacity:2,$Formation:$JssorSlideshowFormations$.$FormationCircle,$Assembly:260,$Easing:{$Left:$Jease$.$Swing,$Top:$Jease$.$InJump},$Round:{$Top:1.5}}

          ];
          var options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                  $Class: $JssorSlideshowRunner$,
                  $Transitions: _SlideshowTransitions,
                  $TransitionsOrder: 1,
                  $ShowLink: true
              }
          };
          var jssor_slider1 = new $JssorSlider$(containerId, options);

          var MAX_WIDTH = 1200;

          function ScaleSlider() {
              var containerElement = jssor_slider1.$Elmt.parentNode;
              var containerWidth = containerElement.clientWidth;

              if (containerWidth) {

                  var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                  jssor_slider1.$ScaleWidth(expectedWidth);
              }
              else {
                  window.setTimeout(ScaleSlider, 30);
              }
          }

          ScaleSlider();

          $(window).bind("load", ScaleSlider);
          $(window).bind("resize", ScaleSlider);
          $(window).bind("orientationchange", ScaleSlider);
      };
  </script>




  </head>

  <body>

  <div class="container" style="background: #fefefe !important">
      <div class="row">
{{--    @include('front.layouts.header-banner')--}}
      @include('front.layouts.bg-box-top')
    @include('front.layouts.menu-ngang')

            <div class="main-content" style="padding: 0 10px; overflow: hidden;">

{{--                @include('front.layouts.menu-ngang')--}}

                    <div class="row row-offcanvas row-offcanvas-right">
                        {{--<div class="container">--}}
                          {{--<p class="pull-right visible-xs" >--}}
                            {{--<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Menu &raquo;</button>--}}
                          {{--</p>--}}
                        {{--</div>--}}
                        <div class="col-xs-12 col-md-9">

                                @yield('content')

                        </div><!--/span-->
                        <div class="col-xs-6 col-md-3 hidden-sm sidebar-offcanvas" id="sidebar" role="navigation">
                            @include('front.layouts.menu-right')
                        </div>
                    </div><!--/row-->

            </div>
      </div>

    </div>
    <div class="copyright">
    	<div class="container">
        <div class="content">
          <h4>{{ config('app.name', 'Dang Quoc Dung') }}</h4>
          <p>Địa chỉ: {{ config('app.diachi') }} - Điện thoại: {{ config('app.dienthoai') }} - Thư điện tử: {{ config('app.email') }}@hatinh.gov.vn</p>
          <p>Chịu trách nhiệm nội dung: {{ config('app.cio') }} - Chủ tịch UBND xã.</p>
          <p>Thiết kế và phát triển: <a href="http://ttcntt.hatinh.gov.vn" target="_blank">Trung tâm CNTT-TT Hà Tĩnh</a> | <a href="#" target="_blank">Điều khoản sử dụng thông tin</a> | <a href="#t" target="_blank">Chính sách bảo mật</a></p>
          <p>&copy;2017, Bản quyền nội dung thuộc UBND {{ config('app.banquyen') }} | Số lượt truy cập: <img src="http://www.reliablecounter.com/count.php?page={{ config('app.email') }}.hatinh.gov.vn&digit=style/plain/6/&reloads=0" alt="" title="" border="0"></p>
        </div>
        {{-- <a href="#" class="cd-top cd-is-visible">Top</a> --}}
        <div id="back-top">
          <a href="#"> <img src="./img/btt.png" alt="Top" width=100%> </a>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/offcanvas.js"></script>
    <script src="./js/pdf.js"></script>
    <script type="text/javascript" src="./js/jquery.fancybox.pack.js?v=2.1.6"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $(".bando").fancybox();
        $(".thongke").fancybox();

        // hide #back-top first
        $("#back-top").hide();

        // fade in #back-top
        $(function () {
          $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
              $('#back-top').fadeIn();
            } else {
              $('#back-top').fadeOut();
            }
          });

          // scroll body to 0px on click
          $('#back-top').click(function () {
            $('body,html').animate({
              scrollTop: 0
            }, 800);
            return false;
          });
        });
      });
    </script>



    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5949233b18804526"></script>
    <!-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58b3ca27cfd3d5ce"></script> -->
    {{-- <a href="https://www.freecounterstat.com" title="web counter"><img src="https://counter1.fcs.ovh/private/freecounterstat.php?c=qzhhxxk5dn68mrb1r4ugwkjjctbrhg5t" border="0" title="web counter" alt="web counter"></a> --}}

  </body>
</html>
