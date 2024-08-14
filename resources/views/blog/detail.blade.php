@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->title)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
@endsection
@section('css')
{{-- <link rel='stylesheet' id='package-style-css' href='{{asset('frontend/css/video.css')}}' type='text/css' media='all' /> --}}
@endsection
@section('content')
<div id="content" class="site-content">
    <div class="wtb-breadcrumb">
       <div class="container">
          <p id="breadcrumbs">
            <span>
                <span><a href="{{route('home')}}">Trang chủ</a></span> » 
                <span><a href="#">Góc tư vấn</a></span> » 
                <span class="breadcrumb_last" aria-current="page"><strong>{{languageName($blog_detail->title)}}</strong></span>
            </span>
        </p>
       </div>
    </div>
    <div class="container single">
       <div id="primary" class="content-sidebar-wrap">
          <main id="main" class="site-main" role="main">
             <div class="row">
                <div class="main-layout col-lg-8 order-1">
                   <article id="post-98545" class="post-98545 video type-video status-publish has-post-thumbnail hentry video_cat-video-ky-yeu">
                      
                      <section class="single-post__header">
                         <h1 class="entry-title"><span>{{languageName($blog_detail->title)}}</span></h1>
                      </section>
                      <!-- .single-header -->
                      <section class="single-post__meta">
                         <span class="date-time"><i class="icon-clock"></i> {{date_format($blog_detail->updated_at,'d/m/Y')}}</span>
                      </section>
                      <section class="single-post__content">
                        {!!languageName($blog_detail->content)!!}
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
                      </section>
                   </article>
                   <!-- #post-## -->
                </div>
                <div class="sidebar-layout col-lg-4 order-lg-2 order-3">
                   <div class="sidebar-box">
                      <aside class="sidebar sidebar-primary pl-0 pr-0" role="complementary">
                         <section id="nav_menu-2" class="widget widget_nav_menu">
                            <h3 class="widget-title">Danh mục</h3>
                            <div class="menu-danh-muc-tin-tuc-container">
                               <ul id="menu-danh-muc-tin-tuc" class="menu">
                                @foreach ($blogCate as $item)
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-news_cat menu-item-91">
                                    <a href="{{route('listCateBlog',['slug'=>$item->slug])}}">{{languageName($item->name)}}</a>
                                </li>
                                @endforeach
                               </ul>
                            </div>
                         </section>
                         <section id="list_posts_new-2" class="widget widget_list_posts_new">
                            <h3 class="widget-title">Bài viết mới</h3>
                            <ul class="list-post-item">
                                @foreach ($blognew as $item)
                                <li class="clearfix post-116846 post type-post status-publish format-standard has-post-thumbnail hentry category-chup-anh-ao-dai category-tin-tuc category-tin-tuc-su-kien">
                                    <a class="img alignleft" href="{{route('detailBlog',['slug'=>$item->slug])}}" title="{{(languageName($item->title))}}">
                                    <img width="1024" height="683" src="{{$item->image}}" class="attachment-large size-large wp-post-image" alt="{{(languageName($item->title))}}" >                        </a>
                                    <h3><a href="{{route('detailBlog',['slug'=>$item->slug])}}" title="{{(languageName($item->title))}}">{{(languageName($item->title))}}</a></h3>
                                    <span class="date-time"> <i class="icon-clock"></i> {{date_format($item->created_at,'d/m/Y')}}</span>                
                                 </li>
                                @endforeach
                            </ul>
                         </section>
                      </aside>
                      <!-- #secondary -->
                   </div>
                </div>
             </div>
          </main>
          <!-- #main -->
       </div>
       <!-- #primary -->
    </div>
 </div>
@endsection


