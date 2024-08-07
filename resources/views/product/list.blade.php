@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('js')
<script type="text/javascript" src="{{asset('frontend/js/fancybox.umd.js')}}" id="fancybox-js-js"></script>
<script type="text/javascript" src="{{asset('frontend/js/imagesloaded.pkgd.js')}}" id="imagesloaded-js-js"></script>
<script type="text/javascript" src="{{asset('frontend/js/isotope.pkgd.min.js')}}" id="isotope-js-js"></script>
@endsection
@section('css')
<link rel='stylesheet' id='fancybox-css-css' href='{{asset('frontend/css/fancybox.css')}}' type='text/css' media='all' />
<link rel='stylesheet' href='{{asset('frontend/css/service.css')}}' type='text/css' media='all' />
@endsection
@section('content')
<div id="content" class="site-content">
   <div class="wtb-breadcrumb">
      <div class="container">
         <p id="breadcrumbs"><span><span><a href="{{route('home')}}">Trang chủ</a></span> » <span><a href="">Album</a></span> » <span class="breadcrumb_last" aria-current="page"><strong>{{$title}}</strong></span></span></p>
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
                        <h1 class="heading text-center"><span>{{$title}} - Color Memories</span></h1>
                        <div class="subheading text-center">
                          {!!$content!!}
                        </div>
                        <div class="intro-list">
                           <div class="intro-item">
                              <h4 class="intro-title">Sản Phẩm Ấn Tượng</h4>
                              <div class="intro-desc">
                                 <p style="text-align: justify;">Với sứ mệnh luôn đặt chất lượng lên hàng đầu, Color Memories cam kết tận tâm, tỉ mỉ và chất lượng trong từng khâu làm việc: từ tư vấn, sản xuất đến chỉnh sửa, đóng khung và nhiệt huyết đến cùng cả khi trả ảnh và lắng nghe khách hàng để các sản phẩm được thực hiện bởi 100% công sức nhà Cộng luôn hoàn hảo nhất.</p>
                              </div>
                           </div>
                           <div class="intro-item">
                              <h4 class="intro-title">Dịch Vụ Hoàn Hảo</h4>
                              <div class="intro-desc">
                                 <p style="text-align: justify;">Đồng hành cùng bạn hơn 10 năm làm việc, Color Memories tự tin hiểu rõ sở thích và yêu cầu của từng khách hàng mỗi lần ghé thăm. Chúng tôi với đội ngũ tư vấn tận tâm, nhiệt tình, Ekip chụp ảnh đầy trẻ trung, sáng tạo và chuyên nghiệp hứa hẹn sẽ đem đến cho bạn những trải nghiệm thoải mái và tuyệt vời.</p>
                              </div>
                           </div>
                           <div class="intro-item">
                              <h4 class="intro-title">Trọn Gói - Ưu Đãi</h4>
                              <div class="intro-desc">
                                 <p style="text-align: justify;">Sản phẩm đẹp với giá chụp Ưu đãi thì ngại gì mà không liên hệ ngay hôm nay với Color Memories! Với đa dạng gói chụp, Concept kỷ yếu luôn cập nhật xu hướng mới và đặc biệt những món quà tri ân đầy yêu thương đến từ nhà Color Memories chắc hẳn sẽ khiến bạn phải bất ngờ.</p>
                              </div>
                           </div>
                        </div>
                        <div class="btn-Intro">
                           <a class="btn-package" href="{{$cateno->avatar}}"> <span>BẢNG GIÁ <span> CHỤP ẢNH KỶ YẾU </span></span></a>
                           <a class="btn-mess" href="{{$setting->facebook}}"> <span>Messenger</span> </a></div>
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
               <div id="album">
                  <div class="container">
                     <h2 class="heading text-center"><span>Dự án đã làm</span></h2>
                     <div class="blog-shortcode style-3">
                        <div class="row">
                           @foreach ($list as $item)
                           @php
                               $img = json_decode($item->images);
                           @endphp
                           <article class="element hentry post-item col-lg-4 col-md-6 col-6 post-111164 album type-album status-publish has-post-thumbnail album_cat-album-anh-chup-anh-ky-yeu" style="display: block;">
                              <div class="post-info">
                                 <div class="post-info__thumb">
                                    <a class="d-block img" href="{{route('detailProduct',['cate'=>$item->cate_slug,'type'=>$item->type_slug ? $item->type_slug : 'loai','id'=>$item->slug])}}" title="{{$item->name}}" style="background-image:url({{$img[0]}})"></a></div>
                                 <div class="post-info__content">
                                    <h3 class="post-info__title"><a href="{{route('detailProduct',['cate'=>$item->cate_slug,'type'=>$item->type_slug ? $item->type_slug : 'loai','id'=>$item->slug])}}" title="{{$item->name}}">{{$item->name}}</a></h3>
                                 </div>
                              </div>
                           </article>
                           @endforeach
                           {{$list->links()}}
                        </div>
                       
                     </div>
                  </div>
               </div>
               <div id="block-cst">
                  <div class="container">
                     <h2 class="bl-heading col-lg-6 offset-lg-3"><span>
                        <img src="{{url('frontend/img/nb-6-plus.png')}}" alt="Icon"><span>Yếu tố để bạn tin tưởng lựa  chọn Color Memories</span></span></h2>
                     <div class="bl-list">
                        <div class="row">
                           <div class="col-lg-4 col-md-6 col-6 mb-5">
                              <div class="bl-item">
                                 <div class="bl-top">
                                    <div class="bl-icon"><img src="{{url('frontend/img/nb-1.png')}}" alt="Icon"></div>
                                    <span>Hậu Mãi</span>
                                 </div>
                                 <div class="bl-bottom">Color Memories luôn sẵn sàng dịch vụ hậu mãi cho mọi khách hàng của mình. Cộng chăm chút và quan tâm đến từng khách hàng để mỗi khi bạn ghé thăm Color Memories là một trải nghiệm thoải mái và tuyệt vời nhất.</div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6 col-6 mb-5">
                              <div class="bl-item">
                                 <div class="bl-top">
                                    <div class="bl-icon"><img src="{{url('frontend/img/nb-2.png')}}" alt="Icon"></div>
                                    <span>Uy Tín</span>
                                 </div>
                                 <div class="bl-bottom">Color Memories luôn uy tín và đảm bảo chất lượng trong từng khâu làm việc. Làm việc đúng giờ, trả ảnh đúng thời gian hẹn và sẵn sàng chỉnh sửa để bộ ảnh trở nên ưng ý nhất.</div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6 col-6 mb-5">
                              <div class="bl-item">
                                 <div class="bl-top">
                                    <div class="bl-icon"><img src="{{url('frontend/img/nb-3.png')}}" alt="Icon"></div>
                                    <span> Chất Lượng</span>
                                 </div>
                                 <div class="bl-bottom">Mỗi bộ ảnh của Color Memories sản xuất luôn được đảm bảo 100% chất lượng ở mọi quy trình. Cộng luôn chăm chút và mong muốn gửi đến khách hàng của mình những sản phẩm tốt nhất.</div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6 col-6 mb-5">
                              <div class="bl-item">
                                 <div class="bl-top">
                                    <div class="bl-icon"><img src="{{url('frontend/img/nb-4.png')}}" alt="Icon"></div>
                                    <span>Chuyên Nghiệp</span>
                                 </div>
                                 <div class="bl-bottom">"Chuyên nghiệp" là phong cách mà Color Memories luôn hướng đến. Ekip Color Memories luôn tìm tòi, học hỏi, cập nhật xu hướng để cho ra đời những sản phẩm chất lượng.</div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6 col-6 mb-5">
                              <div class="bl-item">
                                 <div class="bl-top">
                                    <div class="bl-icon"><img src="{{url('frontend/img/nb-5.png')}}" alt="Icon"></div>
                                    <span>Sáng Tạo</span>
                                 </div>
                                 <div class="bl-bottom">Ekip của Color Memories luôn không ngừng sáng tạo và tìm tòi, phát huy hết mình khả năng bản thân để cho ra đời những Concept đẹp - độc - lạ và luôn cập nhật những xu hướng mới.</div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6 col-6 mb-5">
                              <div class="bl-item">
                                 <div class="bl-top">
                                    <div class="bl-icon"><img src="{{url('frontend/img/nb-6.png')}}" alt="Icon"></div>
                                    <span>Nhiệt Tình</span>
                                 </div>
                                 <div class="bl-bottom">Ở Color Memories, bạn sẽ luôn tìm thấy đội ngũ từ Tư vấn đến Nhiếp ảnh vô cùng năng động, nhiệt huyết và đặc biệt dám “lăn xả” vì bạn để cho ra những bộ ảnh lung linh nhất bất kể địa hình hay thời tiết.</div>
                              </div>
                           </div>
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