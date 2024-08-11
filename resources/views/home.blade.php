@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
<link rel='stylesheet' id='home-style-css' href='{{asset('frontend/css/home.css')}}' type='text/css' media='all' />
@endsection
@section('js')
<script type="text/javascript" src="{{asset('frontend/js/scripts.js')}}" ></script>
      <script type="text/javascript" src="{{asset('frontend/js/slick.min.js')}}"></script>
@endsection
@section('content')
<div id="content" class="site-content">
   <div class="container">
      <div class="content-wrapper">
         <div class="content-img img0"></div>
         <div class="content-img img1"></div>
         <div class="content-img img2"></div>
         <div class="content-img img3"></div>
         <div class="content-img img4"></div>
         <div class="content-img img5"></div>
         <div class="content-img img6"></div>
         <div id="primary" class="content-sidebar-wrap">
            <main id="main" class="site-main" role="main">
               <div id="slider">
                  <div class="container">
                     <div class="slider-wrap">
                        <div class="slider-container slick-carousel" data-items="1" data-items_lg="1" data-items_md="1" data-items_sm="1" data-items_mb="1" data-dots="false" data-arrows="true" data-row="1" data-infinite="true" data-autoplay="true" data-vertical="false">
                           @foreach ($banner as $item)
                           <div class="slider-item">
                              <div class="slider-box" data-url="">
                                 <div class="slider-thumbnail" style="background-image:url({{$item->image}})"></div>
                              </div>
                           </div>
                           @endforeach
                        </div>
                        <script>
                           jQuery(document).ready(function () {
                               jQuery('body').on('click','.slider-box',function(){
                                   var url = jQuery(this).data('url');
                                   if(url.length > 0) {
                                       window.location.href = url;
                                   }
                               });
                           });
                        </script>
                     </div>
                  </div>
               </div>
               <div id="dv">
                  <div class="container">
                     <div class="wrap">
                        <h2 class="heading text-center"><span>DỊCH VỤ TẠI COLOR MEMERIES</span></h2>
                        <p class="dv-description col-lg-6 offset-lg-3 text-center">{{$setting->webname}}</p>
                        <div class="tab-block">
                           <ul class="nav-pills">
                              @foreach ($servicehome as $key => $item)
                              <li class="nav-item"><a class="nav-link {{$key == 0 ? 'active' : ''}}" title="" tab="#tab339{{$key}}"> {{$item->name}} </a></li>
                              @endforeach
                           </ul>
                           <div class="tabContent">
                              @foreach ($servicehome as $key => $item)
                              <div id="tab339{{$key}}" class="tab-content {{$key == 0 ? 'show' : ''}} ">
                                 <div class="blog-shortcode style-slide">
                                    <div class="slick-carousel list-blogposts" data-items="3" data-items_lg="3" data-items_md="2" data-items_sm="2" data-items_mb="1" data-row="2" data-arrows="true" data-dots="true" data-infinite="true" data-autoplay="true" data-vertical="false">
                                       @foreach ($item->services as $item)
                                       @php
                                          $ime = json_decode($item->image);
                                       @endphp
                                       <article id="post-19017" class="element hentry post-item slide-item post-19017 service type-service status-publish has-post-thumbnail service_cat-ky-yeu-mien-bac">
                                          <div class="post-info">
                                             <div class="post-info__thumb"><a class="d-block img" href="{{route('serviceDetail',['danhmuc'=>$item->cate_slug, 'slug'=>$item->slug])}}" title="{{$item->name}}" style="background-image:url({{$ime[0]}})" ></a></div>
                                             <div class="post-info__content">
                                                <div class="post-info__inner">
                                                   <h3 class="post-info__title"><a href="{{route('serviceDetail',['danhmuc'=>$item->cate_slug, 'slug'=>$item->slug])}}" title="{{$item->name}}">{{$item->name}}</a></h3>
                                                   <div class="post-info__link"><a href="{{route('serviceDetail',['danhmuc'=>$item->cate_slug, 'slug'=>$item->slug])}}" title="{{$item->name}}">Xem chi tiết</a></div>
                                                </div>
                                             </div>
                                          </div>
                                       </article>
                                       @endforeach
                                    </div>
                                 </div>
                              </div>
                              @endforeach
                           </div>
                        </div>
                        <div id="cs-list" class="cslist">
                           <div class="row">
                              <div class="col-md-4 col-4 mb-md-5 mb-1">
                                 <div class="cs-item">
                                    <div class="cs-number"><span class="counter" data-count="8"> 0 </span> +</div>
                                    <h3 class="cs-title">Năm kinh nghiệm</h3>
                                    <p class="cs-desc d-md-block d-none">Với 8 năm hoạt động trong lĩnh vực chụp ảnh. Color Memories được biết đến với đội ngũ ekip chụp hình chuyên nghiệp, sáng tạo, tận tâm và nhiệt huyết đã đem lại trải nghiệm hài lòng cho khách hàng.</p>
                                 </div>
                              </div>
                              <div class="col-md-4 col-4 mb-md-5 mb-1">
                                 <div class="cs-item">
                                    <div class="cs-number"><span class="counter" data-count="20"> 0 </span> +</div>
                                    <h3 class="cs-title">Nhân viên chuyên nghiệp</h3>
                                    <p class="cs-desc d-md-block d-none">Color Memories có một đội ngũ nhân viên, thợ chụp ảnh và chuyên viên make – up trang điểm đông đảo, nhiệt tình đã có nhiều năm kinh nghiệm làm việc trong nghề.  </p>
                                 </div>
                              </div>
                              <div class="col-md-4 col-4 mb-md-5 mb-1">
                                 <div class="cs-item">
                                    <div class="cs-number"><span class="counter" data-count="1671"> 0 </span> +</div>
                                    <h3 class="cs-title">Dự án đã thực hiện</h3>
                                    <p class="cs-desc d-md-block d-none">Tên tuổi Color Memories được khẳng định bằng chính các sản phẩm chất lượng, màu sắc riêng biệt, độ bền dài lâu mà khách hàng nhận được. </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <script>
                  jQuery(document).ready(function ($) {
                     $('.nav-pills .nav-link').on('click',function(){
                        $('.nav-pills .nav-link').removeClass('active');
                        $('.tab-content').removeClass('show');
                        $tab = jQuery(this).attr('tab');
                        jQuery(this).addClass('active');
                        jQuery($tab).addClass('show');
                     });
                  
                     /*  Nếu dùng slick slider */
                     $('.nav-link').on('click', function(e) {
                        e.preventDefault();
                        $('.slick-initialized').slick("refresh");
                     });
                     
                     function Utils() {
                     }
                  
                     Utils.prototype = {
                        constructor: Utils,
                        isElementInView: function (element, fullyInView, pageTop) {
                           var pageBottom = pageTop + jQuery(window).height();
                           var elementTop = jQuery(element).offset().top;
                           var elementBottom = elementTop + jQuery(element).height();
                  
                           if (fullyInView === true) {
                              return ((pageTop < elementTop) && (pageBottom > elementBottom));
                           } else {
                              return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
                           }
                        }
                     };
                     var Utils = new Utils();
                     var isElementInView = Utils.isElementInView(jQuery('#cs-list'), false, 0);
                     var counter = true;
                     jQuery(window).scroll(function () {
                        if (Utils.isElementInView(jQuery('#cs-list'), false, jQuery(window).scrollTop())) {
                           if (counter) {
                              jQuery('.counter').each(function () {
                                 var $this = jQuery(this),
                                    countTo = $this.attr('data-count');
                                 jQuery({
                                    countNum: $this.text()
                                 }).animate({
                                    countNum: countTo
                                 }, {
                                    duration: 2000,
                                    easing: 'linear',
                                    step: function () {
                                       $this.text(Math.floor(this.countNum));
                                    },
                                    complete: function () {
                                       $this.text(this.countNum);
                                    }
                                 });
                              });
                              counter = false;
                           }
                        } else {
                        }
                     });
                  });
               </script>
               <div id="albums">
                  <div class="container">
                     <div class="wrap">
                        <div class="top-album">
                           <div class="row">
                              <div class="col-lg-6">
                                 <h4 class="subheading"><span>Color Memories</span></h4>
                                 <h2 class="heading"><span>ALBUM ẢNH NỔI BẬT</span></h2>
                                 <p class="album-description">Một số Album ảnh nổi bật nhất </p>
                                 <div class="album-permalink">
                                    <a href="">
                                       Xem thêm 
                                       <svg xmlns="http://www.w3.org/2000/svg" width="12.854" height="9.761" viewBox="0 0 12.854 9.761">
                                          <path id="arrow-right" d="M7.974,0l-.82.82,3.48,3.48H0v1.16H10.634l-3.48,3.48.82.82,4.881-4.881Z" fill="#166441"/>
                                       </svg>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="main-album">
                           <div class="card-columns">
                              @php
                                  $listAlbum = array_chunk($homePro, 3);
                              @endphp
                            
                                 @if (isset($listAlbum[0]))
                                 <div class="card card-empty card-empty1"></div>
                                 <div class="card card1">
                                    <div class="slider-fade customerlist" data-items="1" data-items_lg="1" data-items_md="1" data-items_sm="1" data-items_mb="1" data-row="1" data-arrows="false" data-dots="true" data-infinite="true" data-autoplay="true" data-vertical="false">
                                       @foreach ($listAlbum[0] as $item)
                                       @php
                                           $img0 = json_decode($item['images']);
                                       @endphp
                                       <div class="card-body">
                                          <a class="d-block h-100" href="{{route('detailProduct',['cate'=>$item['cate_slug'],'type'=>$item['type_slug'] ? $item['type_slug'] : 'loai','id'=>$item['slug']])}}"><img class="w-100" src="{{$img0[0]}}" alt="{{$item['name']}}" /></a>
                                          <div class="card-overlay">
                                             <div class="card-info">
                                                <div class="card-middle">
                                                   <h3 class="card-title"><a class="d-block" href="{{route('detailProduct',['cate'=>$item['cate_slug'],'type'=>$item['type_slug'] ? $item['type_slug'] : 'loai','id'=>$item['slug']])}}">{{$item['name']}}</a></h3>
                                                   <div class="card-link"><a href="{{route('detailProduct',['cate'=>$item['cate_slug'],'type'=>$item['type_slug'] ? $item['type_slug'] : 'loai','id'=>$item['slug']])}}">Xem chi tiết</a></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       @endforeach
                                       
                                    </div>
                                 </div>
                                 @endif
                              <div class="card card-empty"></div>

                             
                              @if (isset($listAlbum[1]))
                              <div class="card card-empty card-empty2"></div>
                              <div class="card card2">
                                 <div class="slider-fade customerlist" data-items="1" data-items_lg="1" data-items_md="1" data-items_sm="1" data-items_mb="1" data-row="1" data-arrows="false" data-dots="true" data-infinite="true" data-autoplay="true" data-vertical="false">
                                    @foreach ($listAlbum[1] as $item)
                                    @php
                                        $img1 = json_decode($item['images']);
                                    @endphp
                                    <div class="card-body">
                                       <a class="d-block h-100" href="{{route('detailProduct',['cate'=>$item['cate_slug'],'type'=>$item['type_slug'] ? $item['type_slug'] : 'loai','id'=>$item['slug']])}}"><img class="w-100" src="{{$img1[0]}}" alt="{{$item['name']}}" /></a>
                                       <div class="card-overlay">
                                          <div class="card-info">
                                             <div class="card-middle">
                                                <h3 class="card-title"><a class="d-block" href="{{route('detailProduct',['cate'=>$item['cate_slug'],'type'=>$item['type_slug'] ? $item['type_slug'] : 'loai','id'=>$item['slug']])}}">{{$item['name']}}</a></h3>
                                                <div class="card-link"><a href="{{route('detailProduct',['cate'=>$item['cate_slug'],'type'=>$item['type_slug'] ? $item['type_slug'] : 'loai','id'=>$item['slug']])}}">Xem chi tiết</a></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    @endforeach
                                 </div>
                              </div>
                              @endif
                              @if (isset($listAlbum[2]))
                              <div class="card card3">
                                 <div class="slider-fade customerlist" data-items="1" data-items_lg="1" data-items_md="1" data-items_sm="1" data-items_mb="1" data-row="1" data-arrows="false" data-dots="true" data-infinite="true" data-autoplay="true" data-vertical="false">
                                    @foreach ($listAlbum[2] as $item)
                                    @php
                                        $img2 = json_decode($item['images']);
                                    @endphp
                                    <div class="card-body">
                                       <a class="d-block h-100" href="{{route('detailProduct',['cate'=>$item['cate_slug'],'type'=>$item['type_slug'] ? $item['type_slug'] : 'loai','id'=>$item['slug']])}}"><img class="w-100" src="{{$img2[0]}}" alt="{{$item['name']}}" /></a>
                                       <div class="card-overlay">
                                          <div class="card-info">
                                             <div class="card-middle">
                                                <h3 class="card-title"><a class="d-block" href="{{route('detailProduct',['cate'=>$item['cate_slug'],'type'=>$item['type_slug'] ? $item['type_slug'] : 'loai','id'=>$item['slug']])}}">{{$item['name']}}</a></h3>
                                                <div class="card-link"><a href="{{route('detailProduct',['cate'=>$item['cate_slug'],'type'=>$item['type_slug'] ? $item['type_slug'] : 'loai','id'=>$item['slug']])}}">Xem chi tiết</a></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    @endforeach
                                 </div>
                              </div>
                              @endif
                              
                              @if (isset($listAlbum[3]))
                              <div class="card card-empty card-empty4"></div>
                              <div class="card card4">
                                 <div class="slider-fade customerlist" data-items="1" data-items_lg="1" data-items_md="1" data-items_sm="1" data-items_mb="1" data-row="1" data-arrows="false" data-dots="true" data-infinite="true" data-autoplay="true" data-vertical="false">
                                    @foreach ($listAlbum[3] as $item)
                                    @php
                                        $img3 = json_decode($item['images']);
                                    @endphp
                                    <div class="card-body">
                                       <a class="d-block h-100" href="{{route('detailProduct',['cate'=>$item['cate_slug'],'type'=>$item['type_slug'] ? $item['type_slug'] : 'loai','id'=>$item['slug']])}}"><img class="w-100" src="{{$img3[0]}}" alt="{{$item['name']}}" /></a>
                                       <div class="card-overlay">
                                          <div class="card-info">
                                             <div class="card-middle">
                                                <h3 class="card-title"><a class="d-block" href="{{route('detailProduct',['cate'=>$item['cate_slug'],'type'=>$item['type_slug'] ? $item['type_slug'] : 'loai','id'=>$item['slug']])}}">{{$item['name']}}</a></h3>
                                                <div class="card-link"><a href="{{route('detailProduct',['cate'=>$item['cate_slug'],'type'=>$item['type_slug'] ? $item['type_slug'] : 'loai','id'=>$item['slug']])}}">Xem chi tiết</a></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    @endforeach
                                 </div>
                              </div>
                              @endif
                              @if (isset($listAlbum[4]))
                              <div class="card card5">
                                 <div class="slider-fade customerlist" data-items="1" data-items_lg="1" data-items_md="1" data-items_sm="1" data-items_mb="1" data-row="1" data-arrows="false" data-dots="true" data-infinite="true" data-autoplay="true" data-vertical="false">
                                    @foreach ($listAlbum[4] as $item)
                                    @php
                                        $img4 = json_decode($item['images']);
                                    @endphp
                                    <div class="card-body">
                                       <a class="d-block h-100" href="{{route('detailProduct',['cate'=>$item['cate_slug'],'type'=>$item['type_slug'] ? $item['type_slug'] : 'loai','id'=>$item['slug']])}}"><img class="w-100" src="{{$img4[0]}}" alt="{{$item['name']}}" /></a>
                                       <div class="card-overlay">
                                          <div class="card-info">
                                             <div class="card-middle">
                                                <h3 class="card-title"><a class="d-block" href="{{route('detailProduct',['cate'=>$item['cate_slug'],'type'=>$item['type_slug'] ? $item['type_slug'] : 'loai','id'=>$item['slug']])}}">{{$item['name']}}</a></h3>
                                                <div class="card-link"><a href="{{route('detailProduct',['cate'=>$item['cate_slug'],'type'=>$item['type_slug'] ? $item['type_slug'] : 'loai','id'=>$item['slug']])}}">Xem chi tiết</a></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    @endforeach
                                 </div>
                              </div>
                              @endif
                              <div class="card card-empty"></div>
                              
                              @if (isset($listAlbum[5]))
                              <div class="card card-empty card-empty3"></div>
                              <div class="card card6">
                                 <div class="slider-fade customerlist" data-items="1" data-items_lg="1" data-items_md="1" data-items_sm="1" data-items_mb="1" data-row="1" data-arrows="false" data-dots="true" data-infinite="true" data-autoplay="true" data-vertical="false">
                                    @foreach ($listAlbum[5] as $item)
                                    @php
                                        $img5 = json_decode($item['images']);
                                    @endphp
                                    <div class="card-body">
                                       <a class="d-block h-100" href="{{route('detailProduct',['cate'=>$item['cate_slug'],'type'=>$item['type_slug'] ? $item['type_slug'] : 'loai','id'=>$item['slug']])}}"><img class="w-100" src="{{$img5[0]}}" alt="{{$item['name']}}" /></a>
                                       <div class="card-overlay">
                                          <div class="card-info">
                                             <div class="card-middle">
                                                <h3 class="card-title"><a class="d-block" href="{{route('detailProduct',['cate'=>$item['cate_slug'],'type'=>$item['type_slug'] ? $item['type_slug'] : 'loai','id'=>$item['slug']])}}">{{$item['name']}}</a></h3>
                                                <div class="card-link"><a href="{{route('detailProduct',['cate'=>$item['cate_slug'],'type'=>$item['type_slug'] ? $item['type_slug'] : 'loai','id'=>$item['slug']])}}">Xem chi tiết</a></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    @endforeach
                                 </div>
                              </div>
                              @endif
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="blogs">
                  <div class="container">
                     <div class="wrap">
                        <h2 class="heading text-center"><span>THÔNG TIN & TIN TỨC</span></h2>
                        <div class="blog-shortcode style-6">
                           <div class="row">
                              <div class="col-md-6 first-element-layout">
                                 @if (count($hotnews) > 0)
                                 <article class="element hentry post-item post-116846 post type-post status-publish format-standard has-post-thumbnail category-chup-anh-ao-dai category-tin-tuc category-tin-tuc-su-kien">
                                    <div class="post-info">
                                       <div class="post-info__thumb"><a class="d-block img" href="{{route('detailBlog',['slug'=>$hotnews[0]->slug])}}" title="{{languageName($hotnews[0]->title)}}" style="background-image:url({{$hotnews[0]->image}})" ></a></div>
                                       <div class="post-info__content">
                                          <div class="post-info__meta"><span class="date-time"><i class="icon-clock"></i>{{date_format($hotnews[0]->created_at,'d/m/Y')}}</span></div>
                                          <h3 class="post-info__title"><a href="{{route('detailBlog',['slug'=>$hotnews[0]->slug])}}" title="{{languageName($hotnews[0]->title)}}">{{languageName($hotnews[0]->title)}}</a></h3>
                                          <div class="post-info__description">
                                             <p>{{languageName($hotnews[0]->description)}}<a href="{{route('detailBlog',['slug'=>$hotnews[0]->slug])}}" class="more-link"> </a></p>
                                          </div>
                                       </div>
                                    </div>
                                 </article>
                                 @endif
                                 
                              </div>
                              <div class="col-md-6 second-element-layout">
                                 @foreach ($hotnews as $key => $item)
                                     @if ($key > 0)
                                     <article id="post-116547" class="element hentry post-item post-116547 post type-post status-publish format-standard has-post-thumbnail category-cho-thue-trang-phuc category-tin-tuc category-tin-tuc-su-kien">
                                       <div class="post-info">
                                          <div class="post-info__thumb"><a class="d-block img" href="{{route('detailBlog',['slug'=>$item->slug])}}" title="{{languageName($item->title)}}" style="background-image:url({{$item->image}})" ></a></div>
                                          <div class="post-info__content">
                                             <h3 class="post-info__title"><a href="{{route('detailBlog',['slug'=>$item->slug])}}" title="{{languageName($item->title)}}">{{languageName($item->title)}}</a></h3>
                                             <div class="post-info__meta"><span class="date-time"><i class="icon-clock"></i>{{date_format($item->created_at,'d/m/Y')}}</span><span class="number-view"></div>
                                          </div>
                                       </div>
                                    </article>
                                     @endif
                                 @endforeach
                                 
                              </div>
                           </div>
                        </div>
                        <div class="news-permalink text-center">
                           <a href="{{route('listCateBlog',['slug'=>'tin-tuc'])}}">
                              Xem thêm 
                              <svg xmlns="http://www.w3.org/2000/svg" width="12.854" height="9.761" viewBox="0 0 12.854 9.761">
                                 <path id="arrow-right" d="M7.974,0l-.82.82,3.48,3.48H0v1.16H10.634l-3.48,3.48.82.82,4.881-4.881Z" fill="#166441"/>
                              </svg>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="customer">
                  <div class="container">
                     <h2 class="heading"><span class="title">KHÁCH HÀNG & ĐỐI TÁC TIÊU BIỂU</span></h2>
                     <div class="slick-carousel customerlist" data-items="5" data-items_lg="4" data-items_md="3" data-items_sm="3" data-items_mb="2" data-row="2" data-arrows="false" data-dots="true" data-infinite="true" data-autoplay="true" data-vertical="false">
                        @foreach ($Partner as $item)
                        <div class="customer-image"><img class="w-100" width="222" height="120" src="{{$item->image}}" alt="{{$item->image}}"></div>
                        @endforeach
                     </div>
                  </div>
               </div>
            </main>
            <!-- #main -->
         </div>
         <!-- #primary -->
      </div>
   </div>
</div>
@endsection