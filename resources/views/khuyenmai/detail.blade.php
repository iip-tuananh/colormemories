@extends('layouts.main.master')
@section('title')
{{($detail->name)}}
@endsection
@section('description')
{{($detail->description)}}
@endsection
@section('image')
{{url(''.$detail->image)}}
@endsection
@section('css')
<link rel='stylesheet'  href='{{asset('frontend/css/fancybox.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='package-style-css' href='{{asset('frontend/css/package.css')}}' type='text/css' media='all' />
@php
    $img = json_decode($detail->image);
    $bangia = json_decode($detail->banggia);
@endphp
@endsection
@section('js')
<script type="text/javascript" src="{{asset('frontend/js/fancybox.umd.js')}}" id="fancybox-js-js"></script>
@endsection
@section('content')
<div id="content" class="site-content">
   <div class="wtb-breadcrumb">
      <div class="container">
         <p id="breadcrumbs">
            <span>
               <span><a href="{{route('home')}}">Trang chủ</a></span> » 
               <span><a href="{{route('khuyenMai')}}">Bảng giá</a></span> » 
               <span class="breadcrumb_last" aria-current="page"><strong>{{($detail->name)}}</strong></span>
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
         <div id="primary" class="content-sidebar-wrap">
            <main id="main" class="site-main" role="main">
               <div id="intro">
                  <div class="container">
                     <div class="top-intro">
                        <div class="row">
                           <div class="col-lg-12">
                              <h1 class="heading"><span>{{($detail->name)}} - Color Memories</span></h1>
                           </div>
                           <div class="col-lg-12">
                              <div class="package-description">
                                 {!!($detail->content)!!} 
                                 <p style="text-align: center;">
                                    <span style="font-size: 12pt;">
                                       <span style="color: #304a31;">
                                          <i class="icon-phone"> Hãy liên hệ Color Memories ngay để được tư vấn miễn phí! Hotline: 
                                          <strong>
                                             <a style="color: #304a31; text-decoration: underline;" href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a> / 
                                             <a style="color: #304a31; text-decoration: underline;" href="tel:{{$setting->phone2}}">{{$setting->phone2}} </a>
                                          </strong>
                                          </i>
                                       </span>| 
                                       <span style="color: #304a31;">Fanpage: 
                                          <strong>
                                             <a style="color: #304a31; text-decoration: underline;" href="{{$setting->facebook}}" target="_blank" rel="noopener">Color Memories - Kỷ yếu sắc màu </a>
                                          </strong>
                                       </span>
                                    </span>
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="gallery">
                  <div class="container">
                     <div class="gallery-row">
                        @foreach ($img as $key => $item)
                        <div class="gallery-item item-50">
                           <a class="d-block" data-fancybox="gallery" href="{{$item}}"><img src="{{$item}}" alt="{{($detail->name)}} ({{$key}})" width="602" height="402"></a>
                        </div>
                        @endforeach
                     </div>
                  </div>
               </div>
               <div id="package">
                  <div class="container">
                     @foreach ($bangia as $item)
                     <div class="package-wrap">
                        <h2 class="package-heading"><span>{{$item->title}}</span></h2>
                        <div class="package-list">
                           <div class="row">
                              @if (count($item->image) == 1)
                              @foreach ($item->image as $key => $img)
                                 <div class="col-lg-12 col-sm-12">
                                    <div class="package-item">
                                       <a class="d-block" data-fancybox="Package-Image" href="{{$img}}"><img src="{{$img}}" alt="{{($detail->name)}} (0{{$key}})" width="602" height="402"></a>
                                    </div>
                                 </div>
                                 @endforeach
                              @else 
                                 @foreach ($item->image as $key => $img)
                                 <div class="col-lg-6 col-sm-6">
                                    <div class="package-item">
                                       <a class="d-block" data-fancybox="Package-Image" href="{{$img}}"><img src="{{$img}}" alt="{{($detail->name)}} (0{{$key}})" width="602" height="402"></a>
                                    </div>
                                 </div>
                                 @endforeach
                              @endif
                              
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
               <div class="container pt-3 pb-3 package_desc">
                  <p style="text-align: center;"><span style="color: #304a31;"><em>Cảm ơn bạn đã ghé thăm <strong><a style="color: #304a31;" href="{{route('home')}}">Color Memories</a></strong>. Chúc bạn sẽ có được những bộ ảnh Kỷ Yếu đẹp và lung linh nhất để lưu giữ Thanh Xuân.</em></span></p>
               </div>
               <div id="album">
                  <div class="container">
                     <div class="album-intro">
                        <h2 class="heading text-center"><span>CÓ THỂ BẠN QUAN TÂM?</span></h2>
                        <div class="blog-shortcode style-3">
                           <div class="row justify-content-center">
                              @foreach ($lienquan as $i)
                              @if ($i->id != $detail->id)
                                 @php
                                       $imglq = json_decode($i->image);
                                 @endphp
                                 <div class="col-lg-4 col-sm-6 post-item element hentry">
                                    <div class="post-info">
                                       <div class="post-info__thumb"><a class="img" title="Xem thêm album ảnh" href="{{route('detailKhuyenmai',['slug'=>$i->slug])}}" style="background-image: url({{$imglq[0]}})"></a></div>
                                       <div class="post-info__content">
                                          <h3 class="post-info__title"><a title="Xem thêm album ảnh" href="{{route('detailKhuyenmai',['slug'=>$i->slug])}}">{{$i->name}}</a></h3>
                                       </div>
                                    </div>
                                 </div>
                              @endif
                              
                              @endforeach
                              @if (count($lienquan) == 6)
                              <div class="col-lg-4 col-sm-6 post-item element hentry">
                                 <div class="post-info">
                                    <div class="post-info__thumb"><a class="img" title="Xem thêm album ảnh" href="{{route('khuyenMai')}}" style="background-image: url({{url('frontend/img/xemthem55jpg-_Copy_.webp')}})"></a></div>
                                    <div class="post-info__content">
                                       <h3 class="post-info__title"><a title="Xem thêm album ảnh" href="{{route('khuyenMai')}}"></a></h3>
                                    </div>
                                 </div>
                              </div>
                              @endif
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
            </main>
            <!-- #main -->
         </div>
      </div>
      <!-- #primary -->
   </div>
</div>
@endsection