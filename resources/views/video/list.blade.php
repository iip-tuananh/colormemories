@extends('layouts.main.master')
@section('title')
{{$catedetail->name}}
@endsection
@section('description')
{{$catedetail->name}}
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
<link rel='stylesheet' id='package-style-css' href='{{asset('frontend/css/video.css')}}' type='text/css' media='all' />
@endsection
@section('content')
<div id="content" class="site-content">
    <div class="wtb-breadcrumb">
       <div class="container">
          <p id="breadcrumbs">
            <span>
                <span><a href="{{route('home')}}">Trang chủ</a></span> » 
                <span><a href="{{route('home')}}">Video</a></span> »
                <span class="breadcrumb_last" aria-current="page"><strong>{{$catedetail->name}}</strong>
                </span>
            </span>
        </p>
       </div>
    </div>
    <div class="container">
       <div class="content-wrapper">
          <div class="content-img img0"></div>
          <div class="content-img img1"></div>
          <div class="content-img img2"></div>
          <div class="content-img img3"></div>
          <div class="content-img img4"></div>
          <div class="content-img img5"></div>
          <div class="content-img img6"></div>
          <div class="container">
             <div id="primary" class="content-sidebar-wrap">
                <main id="main" class="site-main" role="main">
                   <div class="archive-description">
                      <h1 style="text-align: center"><span style="color: #304a31">{{$catedetail->name}}</span></h1>
                      {!!$catedetail->content!!}
                   </div>
                   <div class="video-head">
                      <div class="video-menu">
                         <div class="menu-danh-muc-video-container">
                            <ul id="video-menu" class="menu clearfix">
                                @foreach ($listcatevideo as $item)
                                <li id="menu-item-130" class="menu-item menu-item-type-taxonomy menu-item-object-video_cat {{$item->id == $catedetail->id ? 'current-menu-item' : ''}} ">
                                    <a href="{{route('listVideo',['danhmuc'=>$item->slug])}}" aria-current="page">{{$item->name}}</a>
                                </li>
                                @endforeach
                               
                            </ul>
                         </div>
                      </div>
                   </div>
                   <div id="result_pagination">
                      <div class="blog-shortcode style-2">
                         <div id="ajaxPosts-wrap" class="row justify-content-center">
                           
                            @if (count($list)>0 )
                            @foreach ($list as $item)
                            <article class="element hentry post-item col-lg-6 col-md-6 col-sm-6 col-6 post-98545 video type-video status-publish has-post-thumbnail video_cat-video-ky-yeu">
                                <div class="post-info">
                                   <div class="post-info__thumb"><a class="d-block img" href="{{route('detailVideo',['danhmuc'=>$catedetail->slug,'slug'=>$item->slug])}}" title="{{$item->name}}" style="background-image:url({{$item->image}})"></a></div>
                                   <div class="post-info__content">
                                      <h3 class="post-info__title"><a href="{{route('detailVideo',['danhmuc'=>$catedetail->slug,'slug'=>$item->slug])}}" title="{{$item->name}}">{{$item->name}}</a></h3>
                                   </div>
                                </div>
                             </article>
                            @endforeach
                            @else 
                            <div class="alert alert-info">Nội dung đang cập nhật</div>
                            @endif
                           
                           
                         </div>
                      </div>
                      <div class="resultLoadMore text-center">
                        {{$list->links()}}
                      </div>
                   </div>
                </main>
                <!-- #main -->
             </div>
            
          </div>
       </div>
    </div>
 </div>
@endsection