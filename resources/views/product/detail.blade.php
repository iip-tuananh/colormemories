@extends('layouts.main.master')
@section('title')
{{$product->name}}
@endsection
@section('description')
{{languageName($product->description)}}
@endsection
@section('image')
@php
$img = json_decode($product->images);
@endphp
{{url(''.$img[0])}}
@endsection
@section('js')
<script type="text/javascript" src="{{asset('frontend/js/fancybox.umd.js')}}" id="fancybox-js-js"></script>
<script type="text/javascript" src="{{asset('frontend/js/ptgrid.js')}}" id="isotope-js-js"></script>
@endsection
@section('css')
<link rel='stylesheet'  href='{{asset('frontend/css/fancybox.css')}}' type='text/css' media='all' />
<link rel='stylesheet'  href='{{asset('frontend/css/album.css')}}' type='text/css' media='all' />
<link rel='stylesheet' href='{{asset('frontend/css/ptgrid.css')}}' type='text/css' media='all' />
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
            <a href="">{{languageName($product->cate->name)}}</a>
            </span> » 
            <span class="breadcrumb_last" aria-current="page">
            <strong>{{$product->name}}</strong>
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
                        <h1 class="heading text-center"><span>{{$product->name}}</span></h1>
                        <div class="subheading text-center">
                           {!!languageName($product->content)!!}
                        </div>
                        <div class="btn-Intro">
                           <a class="btn-package" href="{{$product->origin}}"> <span>BẢNG GIÁ <span> {{languageName($product->cate->name)}} </span></span></a>
                           <a class="btn-mess" href="{{$setting->facebook}}"> <span>Messenger</span> </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="nd-gt">
                  <div class="container">
                     <p style="text-align: center;">
                        <span style="font-size: 12pt;">
                        <span style="color: #008000;">
                        <i class="icon-phone"> Hãy liên hệ Color Memories ngay để được tư vấn miễn phí! Hotline: 
                        <strong>
                        <a style="color: #008000; text-decoration: underline;" href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a> / 
                        <a style="color: #008000; text-decoration: underline;" href="tel:{{$setting->phone2}}">{{$setting->phone2}} </a>
                        </strong>
                        </i>
                        </span>| 
                        <span style="color: #008000;">Fanpage: 
                        <strong>
                        <a style="color: #008000; text-decoration: underline;" href="{{$setting->facebook}}" target="_blank" rel="noopener">Color Memories - Kỷ yếu sắc màu </a>
                        </strong>
                        </span>
                        </span>
                     </p>
                  </div>
               </div>
               <div id="gallery">
                  <div class="container">
                     <h2 class="album-heading"><span>Xem toàn bộ Album "{{$product->name}} " tại đây</span></h2>
                     <div class="over-photogrid_top">
                        <div class="demo-gallery photoGrid clearfix">
                           @foreach ($img as $key => $item)
						   <a class="d-block gallery_img_current item" data-fancybox="gallery" href="{{$item}}">
							<img src="{{$item}}" alt="{{$product->name}}{{$key+1}}"></a>

                           @endforeach
                        </div>
                     </div>
                     <script>
                        jQuery(document).ready(function($) {
                         $(window).load(function() {
                          // $(".loader").fadeOut("slow");
                          // $('.photoGrid').css({
                          // 	background: '#222',
                          // 	border: '5px solid #222',
                          // });
                          $('.photoGrid').photoGrid({
                        	  rowHeight: "300"
                          });
                          
                          if ($('.photoGrid a.gallery_img_current').length > 0) {
                        	  $('.photoGrid').wrapAll('<div class="over-photogrid_top">')
                          } else {
                        	  $('.photoGrid').addClass('hidediv')
                          }
                         });
                        });
                     </script>
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