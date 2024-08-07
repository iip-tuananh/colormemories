@extends('layouts.main.master')
@section('title')
{{$cateService->name}}
@endsection
@section('description')
{{$cateService->description}}
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
<link rel='stylesheet' id='package-style-css' href='{{asset('frontend/css/package.css')}}' type='text/css' media='all' />
@endsection
@section('content')
<div id="content" class="site-content">
   <div class="wtb-breadcrumb">
      <div class="container">
         <p id="breadcrumbs">
            <span>
               <span>
               <a href="{{route('home')}}">Trang chủ</a>
            </span> » 
            <span>
               <span>
               <a href="">Dịch vụ</a>
            </span> » 
            <span class="breadcrumb_last" aria-current="page"><strong>{{$cateService->name}}</strong></span>
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
         <div class="content-img img7"></div>
         <div class="container">
            <div id="primary" class="content-sidebar-wrap">
               <main id="main" class="site-main" role="main">
                  <div class="package-head">
                     <h1 class="page-title col-lg-12 text-center"><span>{{$cateService->name}}</span></h1>
                     <div class="archive-description">
                       {!!$cateService->content!!}
                        <h2 style="text-align: center"><span style="font-size: 18pt;color: #008000">DANH SÁCH DỊCH VỤ</span></h2>
                     </div>
                  </div>
                  <div id="result_pagination">
                     <div class="blog-shortcode style-3">
                        <div id="ajaxPosts-wrap" class="row justify-content-center">
                           @foreach ($list as $key => $item)
                           @php
                               $img = json_decode($item->image);
                           @endphp
                           <article class="element hentry post-item col-lg-4 col-md-6 col-sm-6 col-6 post-321 package type-package status-publish has-post-thumbnail package_cat-bang-gia-dich-vu-tai-cong-studio">
                              <div class="post-info">
                                 <div class="post-info__thumb"><a class="d-block img" href="{{route('serviceDetail',['danhmuc'=>$item->cate_slug, 'slug'=>$item->slug])}}" title="{{$item->name}}" style="background-image:url({{$img[0]}})"></a></div>
                                 <div class="post-info__content">
                                    <h3 class="post-info__title"><a href="{{route('serviceDetail',['danhmuc'=>$item->cate_slug, 'slug'=>$item->slug])}}" title="{{$item->name}}">{{$item->name}}</a></h3>
                                 </div>
                              </div>
                           </article>
                           @endforeach
                        </div>
                     </div>
                     {{$list->links()}}
                  </div>
               </main>
               <!-- #main -->
            </div>
            <!-- #primary -->
         </div>
      </div>
   </div>
</div>
@endsection



