@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
<link rel='stylesheet' href='{{asset('frontend/css/contact.css')}}' type='text/css' media='all' />
@endsection
@section('js')
@endsection
@section('content')
<div id="content" class="site-content">
	<div class="wtb-breadcrumb">
	   <div class="container">
		  <p id="breadcrumbs"><span><span><a href="{{route('home')}}">Trang chủ</a></span> » <span class="breadcrumb_last" aria-current="page"><strong>Liên hệ</strong></span></span></p>
	   </div>
	</div>
	<div class="container">
	   <div id="primary" class="content-sidebar-wrap">
		  <main id="main" class="site-main" role="main">
			 <article id="post-23" class="post-23 page type-page status-publish has-post-thumbnail hentry">
				<section class="contact-header d-none">
				   <h1 class="page-title"><span>Liên hệ</span></h1>
				</section>
				<!-- .contact-header -->
				<section id="contact" class="contact-content">
				   <div class="contact-wrap">
					  <div class="contact-info">
						 <div class="contact-top">
							<div class="row">
							   <div class="col-lg-6 mb-lg-0 mb-5">
								  <div class="contact-box">
									 <h2 class="contact-heading">Color Memories</h2>
									 <ul class="contact-information">
										<li class="contact-item contact-address">
										   <span class="title">
										   Địa chỉ:
										   </span>
										   <span class="info">
										   {{$setting->address1}}</span>
										</li>
										<li class="contact-item contact-phone">
										   <div class="phone-item">
											  <span class="title">
											  Bộ phận CSKH:
											  </span>
											  <span class="info">
												{{$setting->phone1}}                                                         </span>
										   </div>
										</li>
										<li class="contact-item contact-email">
										   <span class="title">
										   Email:
										   </span>
										   <span class="info">
											{{$setting->email}}                                                 </span>
										</li>
									 </ul>
									 <div class="widget_social">
										<ul>
										   <li class="icon_social icon_facebook"><a title="Facebook" href="" rel="nofollow" target="_blank"><img src="{{url('frontend/img/ic-facebook.svg')}}" alt="Facebook"></a></li>
										   <li class="icon_social icon_youtube"><a title="youtube" href="" rel="nofollow" target="_blank"><img src="{{url('frontend/img/ic-youtube.svg')}}" alt="youtube"></a></li>
										   <li class="icon_social icon_instagram"><a title="Instagram" href="" rel="nofollow" target="_blank"><img src="{{url('frontend/img/ic-instagram.svg')}}" alt="Instagram"></a></li>
										   <li class="icon_social icon_tiktok"><a title="Tiktok" href="" rel="nofollow" target="_blank"><img src="{{url('frontend/img/ic-tiktok.svg')}}" alt="Tiktok"></a></li>
										   <li class="icon_social icon_zalo"><a title="Zalo" href="" rel="nofollow" target="_blank"><img src="{{url('frontend/img/ic-zalo.svg')}}" alt="Zalo"></a></li>
										</ul>
									 </div>
								  </div>
							   </div>
							   <div class="col-lg-6">
								  <div class="contact-map">
									 <div class="embed-responsive embed-responsive-21by9 mb-30">
										{!!$setting->iframe_map!!}
									 </div>
								  </div>
							   </div>
							</div>
						 </div>
					  </div>
				   </div>
				</section>
				<!-- .contact-content -->
			 </article>
			 <!-- #post-## -->
		  </main>
		  <!-- #main -->
	   </div>
	   <!-- #primary -->
	</div>
 </div>





@endsection