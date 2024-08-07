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
                        <p style="text-align: justify"><span style="color: #008000">✪ </span>Sau tất cả, 5 năm hay 10 năm đi nữa, mọi điều có đổi thay thì những bức ảnh hay thước phim của hiện tại mãi bên cạnh mỗi chúng ta. Đó chính là khoảng thời gian đầy ngây ngô và hồn nhiên của tuổi học trò, phút giây bồi hồi, hạnh phúc của một lễ cưới trọn vẹn hay những bức ảnh vô cùng nghệ thuật lưu lại sắc xuân… Bạn đang tìm kiếm một đơn vị chụp ảnh chất lượng với giá cả phù hợp.</p>
                        <p style="text-align: justify"><span style="color: #008000">✪ </span>Câu trả lời hoàn hảo nhất chính là <strong><span style="color: #008000">Color Memories </span></strong><span style="color: #008000"><span style="color: #000000">– thương hiệu chụp ảnh hàng đầu cả nước</span>&nbsp;</span>. Với hơn 10 năm kinh nghiệm trong nghề nhiếp ảnh, chúng tôi luôn tự hào là thương hiệu chụp ảnh hàng đầu cả nước. Không chỉ ảnh đẹp, các sản phẩm Photobook, ảnh in chất lượng, đồng thời với đó dịch vụ Tư vấn miễn phí, các gói chụp trọn gói không phát sinh, mọi sản phẩm sẽ được chỉnh sửa cho tới khi ưng ý nhất đã khiến Cộng luôn là lựa chọn hàng đầu của mọi khách hàng và những lần ghé thăm sau nữa.</p>
                        <p><span style="color: #008000">✪ </span>Với đa dạng các loại hình Dịch vụ chụp ảnh, mỗi dịch vụ sẽ có những bảng giá khác nhau phù hợp với mọi mức tài chính cũng như mong muốn của khách hàng. Đặc biệt trong các dịp tri ân và khuyến mãi, <strong><span style="color: #008000">Color Memories</span></strong> luôn có những món quà khủng, các combo độc quyền, có 1-0-2 để bạn có thể tham khảo và lựa chọn. Thương hiệu uy tín, nhiếp ảnh gia chuyên nghiệp, sản phẩm chất lượng với mức giá ưu đãi nhất – nhanh tay chụp ảnh cùng Cộng ngay hôm nay!</p>
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