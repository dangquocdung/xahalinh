@extends('front.layouts.home')
@section('title')

    <title>Giới thiệu</title>


@endsection
@section('content')
  <div class="list-group">
    <div  class="list-group-item active main-color-bg in-hoa-dam">

        <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> &nbsp;Giới thiệu

      <p class="pull-right visible-xs" >
        <a data-toggle="offcanvas" style="color:red">
          <span class="glyphicon glyphicon-forward site-logo" aria-hidden="true"></span>
        </a>
      </p>
    </div>



      @foreach ($cm->tintuc->where('active','1')->sortBy('id') as $ttl)
        <div class="list-group-item">
          <div class="row">
            <div class="col-md-3 col-sm-5 col-xs-5 hinh-minh-hoa">
              <a href="/chi-tiet-tin/{{ $ttl->tieudekhongdau }}">
                @if ($ttl->urlhinh)
                  <img class="img-responsive" src="{{ $ttl->urlhinh }}" alt="{{ $ttl->tieude }}" title="{{ $ttl->tieude }}">
                @else
                  <img class="img-responsive" src="images/bacho.jpeg" alt="{{ $ttl->tieude }}" title="{{ $ttl->tieude }}">
                @endif
              </a>
            </div>
            <div class="col-md-9 col-sm-7 col-xs-7">
              <a href="/chi-tiet-tin/{{ $ttl->tieudekhongdau }}">
                <h4>{{ $ttl->tieude }}</h4>
              </a>
              <p style="text-align:justify"><em>{{ $ttl->tomtat }}...</em></p>
            </div>
          </div>
        </div>
      @endforeach
  </div>
@endsection
