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
                                    <span>Chất Lượng Ảnh Vượt Trội</span>
                                 </div>
                                 <div class="bl-bottom">Tại Color Memories, chúng tôi cam kết mang đến những bức ảnh kỷ yếu với chất lượng vượt trội. Với trang thiết bị hiện đại và kỹ thuật chụp ảnh tiên tiến, 
                                    mỗi bức ảnh đều sắc nét, sống động và chân thực. Chúng tôi luôn chú trọng đến từng chi tiết nhỏ nhất để đảm bảo bạn sẽ hài lòng với từng bức ảnh.</div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6 col-6 mb-5">
                              <div class="bl-item">
                                 <div class="bl-top">
                                    <div class="bl-icon"><img src="{{url('frontend/img/nb-2.png')}}" alt="Icon"></div>
                                    <span> Đội Ngũ Chuyên Nghiệp và Tận Tâm</span>
                                 </div>
                                 <div class="bl-bottom">Đội ngũ nhiếp ảnh gia, chuyên viên trang điểm, làm tóc và tư vấn trang phục của Color Memories đều là những người có kinh nghiệm và tay nghề cao. 
                                    Chúng tôi luôn làm việc với sự tận tâm, chu đáo và sáng tạo, đảm bảo mỗi khung hình đều hoàn hảo và độc đáo. Sự chuyên nghiệp của chúng tôi giúp bạn có một 
                                    trải nghiệm chụp ảnh thú vị và thoải mái.</div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6 col-6 mb-5">
                              <div class="bl-item">
                                 <div class="bl-top">
                                    <div class="bl-icon"><img src="{{url('frontend/img/nb-3.png')}}" alt="Icon"></div>
                                    <span>  Sáng Tạo và Ý Tưởng Độc Đáo</span>
                                 </div>
                                 <div class="bl-bottom">Color Memories luôn tự hào về khả năng sáng tạo và phát triển những ý tưởng chụp ảnh độc đáo, phù hợp với phong cách và cá tính của từng lớp học. 
                                    Chúng tôi luôn tìm kiếm những concept mới lạ, đảm bảo mỗi bộ ảnh kỷ yếu đều mang dấu ấn riêng biệt và không bị trùng lặp với bất kỳ ai khác.</div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6 col-6 mb-5">
                              <div class="bl-item">
                                 <div class="bl-top">
                                    <div class="bl-icon"><img src="{{url('frontend/img/nb-4.png')}}" alt="Icon"></div>
                                    <span>Dịch Vụ Hỗ Trợ Toàn Diện</span>
                                 </div>
                                 <div class="bl-bottom">Chúng tôi cung cấp dịch vụ hỗ trợ toàn diện từ A đến Z, bao gồm trang điểm, làm tóc, tư vấn trang phục và phụ kiện, đến chỉnh sửa ảnh chuyên nghiệp. 
                                    Đội ngũ của Color Memories luôn sẵn sàng hỗ trợ bạn trong suốt quá trình chụp ảnh, giúp bạn có những bức ảnh đẹp nhất mà không phải lo lắng về bất kỳ khâu nào.</div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6 col-6 mb-5">
                              <div class="bl-item">
                                 <div class="bl-top">
                                    <div class="bl-icon"><img src="{{url('frontend/img/nb-5.png')}}" alt="Icon"></div>
                                    <span>Kinh Nghiệm và Uy Tín</span>
                                 </div>
                                 <div class="bl-bottom">Với nhiều năm kinh nghiệm trong lĩnh vực chụp ảnh kỷ yếu, Color Memories đã phục vụ hàng ngàn lớp học trên khắp cả nước. Chúng tôi hiểu rõ những mong muốn 
                                    và nhu cầu của học sinh, từ đó cung cấp những dịch vụ chụp ảnh chất lượng cao và chuyên nghiệp. Sự uy tín của chúng tôi được khẳng định qua những phản hồi tích cực
                                     và sự hài lòng của khách hàng.</div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6 col-6 mb-5">
                              <div class="bl-item">
                                 <div class="bl-top">
                                    <div class="bl-icon"><img src="{{url('frontend/img/nb-6.png')}}" alt="Icon"></div>
                                    <span>Giá Cả Hợp Lý và Minh Bạch</span>
                                 </div>
                                 <div class="bl-bottom">Color Memories cam kết cung cấp dịch vụ với giá cả hợp lý và minh bạch. Chúng tôi luôn đưa ra bảng giá rõ ràng, chi tiết và không có các chi phí ẩn,
                                    giúp bạn yên tâm lựa chọn dịch vụ mà không lo ngại về vấn đề tài chính. Sự minh bạch và trung thực trong báo giá là tiêu chí hàng đầu của chúng tôi.</div>
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