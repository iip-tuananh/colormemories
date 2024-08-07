@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
{{$title_page}} 
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
<link rel='stylesheet' id='news-style-css' href='{{asset('frontend/css/news.css')}}' type='text/css' media='all' />
@endsection
@section('content')
<div id="content" class="site-content">
   <div class="wtb-breadcrumb">
      <div class="container">
         <p id="breadcrumbs"><span><span><a href="{{route('home')}}">Trang chủ</a></span> » 
            <span class="breadcrumb_last" aria-current="page"><strong>{{$title_page}} </strong></span></span></p>
      </div>
   </div>
   <div class="container">
      <div id="primary" class="content-sidebar-wrap">
         <main id="main" class="site-main" role="main">
            <div class="news-head">
               <h1 class="page-title"><span>{{$title_page}} </span></h1>
              
            </div>

            <div id="result_pagination">
               <div class="blog-shortcode style-3">
                  <div id="ajaxPosts-wrap" class="row justify-content-center">
                    @foreach ($blog as $key => $item)
                    <article id="post-3141" class="element hentry post-item col-lg-4 col-md-6 col-sm-6 col-6 post-3141 news type-news status-publish has-post-thumbnail tag-tuyen-chuyen-vien-marketing-cong-studio news_cat-tuyen-dung">
                     <div class="post-info">
                        <div class="post-info__thumb"><a class="d-block img" href="{{route('detailBlog',['slug'=>$item->slug])}}" title="{{languageName($item->title)}}" style="background-image:url({{$item->image}})"></a></div>
                        <div class="post-info__content">
                           <h3 class="post-info__title"><a href="{{route('detailBlog',['slug'=>$item->slug])}}" title="{{languageName($item->title)}}">{{languageName($item->title)}}</a></h3>
                           <div class="post-info__description">
                              {{languageName($item->description)}}
                           </div>
                        </div>
                     </div>
                  </article>
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



@endsection