@extends('layouts.main.master')
@section('title')
Bảng Giá Dịch Vụ Chụp Ảnh Color Memories Uy Tín, Chuyên Nghiệp
@endsection
@section('description')
Bảng Giá Dịch Vụ Chụp Ảnh Color Memories Uy Tín, Chuyên Nghiệp
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
            <span class="breadcrumb_last" aria-current="page"><strong>BẢNG GIÁ DỊCH VỤ TẠI COLOR MEMORIES</strong></span>
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
                     <h1 class="page-title col-lg-12 text-center"><span>BẢNG GIÁ DỊCH VỤ TẠI COLOR MEMORIES</span></h1>
                     <div class="archive-description">
                        <p style="text-align: justify"><span style="color: #008000">✪ </span>Dù thời gian có trôi qua bao lâu, 5 năm hay 10 năm nữa, những bức ảnh và thước phim hôm nay sẽ mãi mãi ghi dấu những kỷ niệm quý giá. Đó là những khoảnh khắc hồn nhiên, ngây thơ của thời học sinh, những cảm xúc hạnh phúc, lắng đọng trong ngày cưới, hay những hình ảnh nghệ thuật lưu giữ vẻ đẹp tinh khôi của mùa xuân... Bạn đang tìm kiếm một đơn vị chụp ảnh chất lượng cao với mức giá hợp lý?</p>
                        <p style="text-align: justify"><span style="color: #008000">✪ </span>Color Memories chính là lựa chọn hoàn hảo dành cho bạn – thương hiệu chụp ảnh uy tín hàng đầu trên toàn quốc. Với hơn một thập kỷ kinh nghiệm trong lĩnh vực nhiếp ảnh, chúng tôi tự hào mang đến cho khách hàng những bức ảnh tuyệt đẹp, các sản phẩm Photobook sắc nét và dịch vụ tư vấn miễn phí. Các gói chụp ảnh của chúng tôi luôn trọn gói, không phát sinh thêm chi phí, và mỗi sản phẩm đều được chỉnh sửa tỉ mỉ cho đến khi khách hàng hoàn toàn hài lòng. Đó chính là lý do Color Memories luôn là điểm đến tin cậy của hàng nghìn khách hàng và những lần quay lại sau đó.
                        </p>
                        <p><span style="color: #008000">✪ </span>Với nhiều loại hình dịch vụ chụp ảnh phong phú, chúng tôi có các bảng giá đa dạng, phù hợp với mọi nhu cầu và ngân sách của khách hàng. Đặc biệt, trong các dịp khuyến mãi và tri ân, Color Memories luôn dành tặng những ưu đãi hấp dẫn và các combo độc đáo, giúp bạn có thêm nhiều lựa chọn tuyệt vời. Uy tín thương hiệu, đội ngũ nhiếp ảnh gia chuyên nghiệp, và sản phẩm chất lượng vượt trội – đó là những gì Color Memories cam kết mang đến cho bạn. Hãy nhanh tay đặt lịch chụp ảnh ngay hôm nay để lưu giữ những khoảnh khắc đáng nhớ nhất!</p>
                        <h2 style="text-align: center"><span style="font-size: 18pt;color: #008000">DANH SÁCH BẢNG GIÁ</span></h2>
                     </div>
                  </div>
                  <div id="result_pagination">
                     <div class="blog-shortcode style-3">
                        <div id="ajaxPosts-wrap" class="row justify-content-center">
                           @foreach ($list as $item)
                           @php
                               $img = json_decode($item->image);
                           @endphp
                           <article class="element hentry post-item col-lg-4 col-md-6 col-sm-6 col-6 post-321 package type-package status-publish has-post-thumbnail package_cat-bang-gia-dich-vu-tai-cong-studio">
                              <div class="post-info">
                                 <div class="post-info__thumb"><a class="d-block img" href="{{route('detailKhuyenmai',['slug'=>$item->slug])}}" title="{{$item->name}}" style="background-image:url({{$img[0]}})"></a></div>
                                 <div class="post-info__content">
                                    <h3 class="post-info__title"><a href="{{route('detailKhuyenmai',['slug'=>$item->slug])}}" title="{{$item->name}}">{{$item->name}}</a></h3>
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