@php

    $tinmoinhat = $mt->tintuc->where('active','1')->sortByDesc('created_at')->take(10);

    $tinnoibat = $mt->tintuc->where('active','1')->where('tinnoibat',1)->sortByDesc('created_at')->take(11);

    $tin1 = $tinnoibat->shift();

@endphp

<div class="block3">

    <div class="portlet-header">
        <img src="/images/background/lotus.ico">
        <a href="vi/tin-noi-bat">
            <h4 class="portlet-header-title no-pd-top">Tin Nổi bật</h4>
        </a>
    </div>

    @if (count($tinnoibat) > 0)


        <div id="tinNoiBatChinh" class="col-md-7 col-xs-12 w3-animate-left">

            <div class="hot-news">

                <a href="#" class="hot-news-thumb-nail">
                    <img src="{{$tin1->urlhinh}}" alt="{{ $tin1->tieude }}" class="w3-animate-left">
                </a>

                <div class="hot-news-title" style="display: block; text-align: center">
                    <h3>
                        <a href=" {{  route('chi-tiet-tin', [$tin1->loaitin->chuyenmuc->slug,$tin1->loaitin->slug,$tin1->slug]) }}">{{ $tin1->tieude }}</a>
                    </h3>
                </div>
                <div class="hot-news-desc" style="text-align: justify; line-height: 20px; padding-bottom: 15px;">
                    {{ $tin1->gioithieu }}

                </div>
            </div>
        </div>

        <div class="col-md-5 hidden-xs">

            <div class="card">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-bars"></i>  <span>Tin nổi bật </span></a>
                    </li>
                    <li role="presentation">
                        <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-group"></i>  <span>Tin mới nhất</span></a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div id="tin-noi-bat">
                            <ul>
                                @foreach ($tinnoibat as $tnb)
                                    <li>
                                        <div class="hot-news-block">

                                            <a href="{{  route('chi-tiet-tin', [$tnb->loaitin->chuyenmuc->slug,$tnb->loaitin->slug,$tnb->slug]) }}" class="news-title">
                                                <i class="fa fa-angle-double-right" aria-hidden="true"></i> {{ $tnb->name }}
                                                <small><em style="font-weight: normal">({{ \Carbon\Carbon::parse($tnb->ngaydang)->format('d-m-Y H:i:s')}})</em></small>
                                            </a>

                                            <img src="{{$tnb->avatar}}" alt="{{ $tnb->name }}" title="{{ $tnb->name }}" style="display: none;">

                                            <div class="item-desc" style="display: none;">{{ $tnb->gioithieu }}</div>

                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="xem-tiep" style="float:right; padding-bottom: 8px;">
                                <a href="/tin-noi-bat" style="text-decoration: none;"><em>Xem tiếp... <i class="fa fa-angle-double-right" aria-hidden="true"></i></em></a>
                            </div>
                        </div>

                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">

                        <div id="tin-doc-nhieu">
                            <ul>
                                @foreach ($tinmoinhat as $tnb)
                                    <li>
                                        <div class="hot-news-block">

                                            <a href="{{  route('chi-tiet-tin', [$tnb->loaitin->chuyenmuc->slug,$tnb->loaitin->slug,$tnb->slug]) }}" class="news-title">
                                                <i class="fa fa-angle-double-right" aria-hidden="true"></i> {{ $tnb->name }}
                                                <small><em style="font-weight: normal">({{ \Carbon\Carbon::parse($tnb->ngaydang)->format('d-m-Y H:i:s')}})</em></small>
                                            </a>

                                            <img src="{{$tnb->avatar}}" alt="{{ $tnb->name }}" title="{{ $tnb->name }}" style="display: none;">

                                            <div class="item-desc" style="display: none;">{{ $tnb->gioithieu }}</div>

                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="xem-tiep" style="float:right; padding-bottom: 8px;">
                                <a href="/vi/tin-noi-bat" style="text-decoration: none;"><em>Xem tiếp... <i class="fa fa-angle-double-right" aria-hidden="true"></i></em></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    @endif
</div>

<div class="hot-item" style="background-color:#ffffff">
<ul>
    @foreach ($banner->where('vitri','7') as $bn)
        <li class="col-md-3 col-sm-3 col-xs-6">
            <div class="block2">
                <a href="{{$bn->lienket}}" target="_blank">
                    <img src="{{ $bn->banner}}" alt="{{ $bn->name}}" title="{{ $bn->name}}" width="100%">
                </a>
            </div>
        </li>
    @endforeach
</ul>
</div>








{{--<div class="block2">--}}
{{--<a href="http://dichvucong.hatinh.gov.vn" target="_blank">--}}
{{--<img src="/uploads/2017/10/59ee9c1a4637d.png" alt="Dịch vụ công trực tuyến" width="100%">--}}
{{--</a>--}}
{{--</div>--}}



<script>

function UnionSwitchMode2() {

var isMobile = $(window).width() < 768;
console.log("isMobile");
console.log(isMobile);

var idUnion_image_thumb = "tin-noi-bat"


var jQueryActive = $("#" + idUnion_image_thumb + ' .active');


var jQueryNext = jQueryActive.next().length ? jQueryActive.next() : $("#" + idUnion_image_thumb + ' ul li:first');

//Tìm giá trị



var imgAlt = jQueryNext.find('img').attr("alt");

var imgSrc = jQueryNext.find('img').attr("src");

var imgDesc = jQueryNext.find('.hot-news-block').html();

var aHref = jQueryNext.find('a').attr("href");

var imgDescHeight = $("#tinNoiBatChinh .hot-news").find('#tinNoiBatChinh .hot-news-block').height();

var newsDesc = jQueryNext.find('.item-desc').html();

var isMobile = $(window).width() < 768;


if(!isMobile) {

$("#tinNoiBatChinh .hot-news").animate({marginBottom: "0"}, 0, function () {

    jQueryActive.removeClass('active');

    jQueryNext.addClass('active');

    $("#tinNoiBatChinh .hot-news img").attr({src: imgSrc, alt: imgAlt});

    $("#tinNoiBatChinh .hot-news .hot-news-title h3 a").attr({href: aHref});

    $("#tinNoiBatChinh .hot-news .hot-news-title h3 a").html(imgAlt);

    $("#tinNoiBatChinh .hot-news .hot-news-desc").html(newsDesc);

});
}



}

$(document).ready(function () {

var UnionNewsRefreshInterval2


$("#tin-noi-bat ul li:first").addClass('active');

UnionNewsRefreshInterval2 = setInterval("UnionSwitchMode2()", "4000");

$("#tin-noi-bat ul")
.on('mouseenter',function () {
    console.log('mouse enter');
    clearInterval(UnionNewsRefreshInterval2);
})
.on('mouseleave', function() {
    console.log('mouse leave');
    UnionNewsRefreshInterval2 = setInterval("UnionSwitchMode2()", "4000");
});

$("#tin-noi-bat ul li")

.on('mouseenter', function() {

    console.log("li mouse enter");

    $(this).addClass('hover');


    var imgAlt = $(this).find('img').attr("alt");

    var imgSrc = $(this).find('img').attr("src");

    var aHref = $(this).find('a').attr("href");

    var newsDesc = $(this).find('.item-desc').html();


    $("#tinNoiBatChinh").addClass('w3-animate-left');

    $("#tinNoiBatChinh .hot-news img").attr({ src: imgSrc, alt: imgAlt });

    $("#tinNoiBatChinh .hot-news .hot-news-title h3 a").attr({href: aHref});

    $("#tinNoiBatChinh .hot-news .hot-news-title h3 a").html(imgAlt);

    $("#tinNoiBatChinh .hot-news .hot-news-desc").html(newsDesc);



})
.on("mouseleave", function() {
    console.log('li mouse leave');
    $(this).removeClass('hover');
    $("#tinNoiBatChinh").removeClass('w3-animate-left');
//                $("#tinNoiBatChinh .hot-news .hot-news-block").stop(true, true);
});




})
</script>
