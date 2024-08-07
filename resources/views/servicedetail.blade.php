@extends('layouts.main.master')
@section('title')
{{($detail_service->name)}}
@endsection
@section('description')
{{$detail_service->description}}
@endsection
@section('image')
{{url(''.$detail_service->image)}}
@endsection
@section('css')
<link rel='stylesheet'  href='{{asset('frontend/css/fancybox.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='package-style-css' href='{{asset('frontend/css/service.css')}}' type='text/css' media='all' />
@php
	$img = json_decode($detail_service->image);
	$banggia = json_decode($detail_service->banggia);
@endphp
@endsection
@section('js')
<script type="text/javascript" src="{{asset('frontend/js/fancybox.umd.js')}}" id="fancybox-js-js"></script>
@endsection
@section('content')
<div id="content" class="site-content single ">
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
            <span class="breadcrumb_last" aria-current="page"><strong>{{$detail_service->name}}</strong></span>
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
		  <div class="content-img img8"></div>
		  <div class="content-img img9"></div>
		  <div id="primary" class="content-sidebar-wrap">
			 <main id="main" class="site-main" role="main">
				<div class="single-post__header">
				   <div class="container">
				   </div>
				</div>
				<!-- .single-header -->
				<div id="intro">
				   <div class="container">
					  <div class="wrap">
						 <h1 class="heading text-center"><span>{{($detail_service->name)}}</span></h1>
						 <div class="subheading text-center">
							{!!languageName($detail_service->content)!!}
						 </div>
						 <div class="btn-Intro"><a class="btn-package" href="#album"> <span>XEM BẢNG GIÁ TOUR<br>{{$detail_service->name}} </span></a><a class="btn-mess" href="{{$setting->facebook}}"> <span>Messenger</span> </a></div>
					  </div>
				   </div>
				</div>
				<div id="gallery">
				   <div class="container">
					  <div class="gallery-row">
						@foreach ($img as $item)
						<div class="gallery-item item-50"><a class="d-block" data-fancybox="gallery" href="{{$item}}"><img src="{{$item}}" alt="{{$item}}"></a></div>
						@endforeach
						
					  </div>
				   </div>
				</div>
				<div class="nd-gt">
				   <div class="container">
					  <p style="text-align: center;"><span style="font-size: 12pt;"><span style="color: #008000;"><i class="icon-phone"> Hãy liên hệ Color Memories ngay để được tư vấn miễn phí! Hotline: <strong><a style="color: #008000; text-decoration: underline;" href="tel:{{$setting->phone2}}">{{$setting->phone2}}</a> / <a style="color: #008000; text-decoration: underline;" href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a></strong></i></span> | <span style="color: #008000;">Fanpage: <strong><a style="color: #008000; text-decoration: underline;" href="{{$setting->facebook}}" target="_blank" rel="noopener">Chụp Ảnh Kỷ Yếu – Color Memories</a></strong></span></span></p>
				   </div>
				</div>
				<div id="album">
				   <div class="container">
					 @foreach ($banggia as $item)
					  <h2 class="heading text-center"><span>{{$item->title}}</span></h2>
					  <div class="gallery-row">
						@foreach ($item->image as $key => $img)
						 <div class="gallery-item item-50"><a class="d-block" data-fancybox="gallery" href="{{$img}}">
							<img src="{{$img}}" alt="Liên hệ báo giá (2)"></a>
						</div>
						@endforeach
					  </div>
					  @endforeach
					  <div class="blog-shortcode style-3">
						<h2 class="heading text-center"><span>Album mới nhất</span></h2>
						 <div class="row">
							@foreach ($albumse as $item)
							@php
                               $img = json_decode($item->images);
                           @endphp
							<article id="post-46825" class="element hentry post-item col-lg-4 col-md-6 col-6 post-46825 album type-album status-publish has-post-thumbnail album_cat-album-anh-dich-vu-chup-anh-ky-yeu-ket-hop-du-lich-tron-goi" style="display: block;">
								<div class="post-info">
								   <div class="post-info__thumb"><a class="d-block img" href="{{route('detailProduct',['cate'=>$item->cate_slug,'type'=>$item->type_slug ? $item->type_slug : 'loai','id'=>$item->slug])}}" title="{{$item->name}}" style="background-image:url({{$img[0]}})"></a></div>
								   <div class="post-info__content">
									  <h3 class="post-info__title"><a href="{{route('detailProduct',['cate'=>$item->cate_slug,'type'=>$item->type_slug ? $item->type_slug : 'loai','id'=>$item->slug])}}" title="{{$item->name}}">{{$item->name}}</a></h3>
								   </div>
								</div>
							 </article>
							@endforeach
							
							
						 </div>
					  </div>
				   </div>
				</div>
				<script>
				   (function($){
					   $(document).ready(function(){
						   $(window).on('load', function(){
							   if($('.post-description .subheading').length > 0){
								   var wrap = $('.post-description .subheading');
								   var current_height = wrap.height();
								   var your_height = 150;
								   if(current_height > your_height){
									   wrap.css('height', your_height+'px');
									   wrap.append(function(){
										   return '<div class="readmore readmore_show"><a title="Xem thêm" href="javascript:void(0);">Xem thêm</a></div>';
									   });
									   wrap.append(function(){
										   return '<div class="readmore readmore_less" style="display: none"><a title="Thu gọn" href="javascript:void(0);">Thu gọn</a></div>';
									   });
									   $('body').on('click','.readmore_show', function(){
										   wrap.removeAttr('style');
										   $('body .readmore_show').hide();
										   $('body .readmore_less').show();
									   });
									   $('body').on('click','.readmore_less', function(){
										   wrap.css('height', your_height+'px');
										   $('body .readmore_show').show();
										   $('body .readmore_less').hide();
									   });
								   }
							   }
						   });
					   });
				   })(jQuery);
				</script>
			 </main>
			 <!-- #main -->
		  </div>
		  <!-- #primary -->
	   </div>
	   <script>
		  jQuery(document).ready(function () {
			  if( jQuery('.uni-grid').length ) {
				  var $grid = jQuery('.uni-grid').isotope({
					  itemSelector: '.project-item',
					  layoutMode: 'masonry',
					  percentPosition: false,
					  masonry: {
						  // use element for option
						  columnWidth: '.grid-sizer'
					  },
				  });
				  $grid.imagesLoaded().progress( function() {
					  $grid.isotope('layout');
				  });
			  }
		  });
	   </script>
	</div>
 </div>
@endsection
