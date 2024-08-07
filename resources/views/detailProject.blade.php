@extends('layouts.main.master')
@section('title')
{{$detail->name}}
@endsection
@section('description')
{{$detail->description}}
@endsection
@section('image')
@php
$img = json_decode($detail->images);
@endphp
{{url(''.$img[0])}}
@endsection
@section('js')
@endsection
@section('css')
@endsection
@section('content')
<div class="page-content">
	<!-- INNER PAGE BANNER -->
	<div class="sx-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5" style="background-image: url(&quot;{{url(''.$img[0])}}&quot;); background-position: 50% -285px;">
	   <div class="overlay-main bg-black opacity-07"></div>
	   <div class="container">
		  <div class="sx-bnr-inr-entry">
			 <div class="banner-title-outer">
				<div class="banner-title-name">
				   <h1 class="m-tb0">{{$detail->name}}</h1>
				</div>
			 </div>
			 <!-- BREADCRUMB ROW -->                            
			 <div>
				<ul class="sx-breadcrumb breadcrumb-style-2">
				   <li><a href="{{route('home')}}">Home</a></li>
               <li>Dự án</li>
				   <li>{{$detail->name}}</li>
				</ul>
			 </div>
			 <!-- BREADCRUMB ROW END -->                        
		  </div>
	   </div>
	</div>
   <div class="section-full p-tb80 inner-page-padding stick_in_parent">
      <div class="container">
         <div class="row">
            <div  class="col-lg-7 col-md-7  sticky_column">
               <div  class="project-detail-containt">
                  <div class="bg-white text-black">
                     <h3>{{$detail->name}}</h3>
                     {!!languageName($detail->content)!!}
                     <div class="product-block mt-30">
                        <ul>
                           <li>
                              <h4 class="m-b10">Vị Trí</h4>
                              <p>{{$detail->location}}</p>
                           </li>
                           <li>
                              <h4 class="m-b10">Quy mô</h4>
                              <p>{{$detail->scale}}</p>
                           </li>
                           <li>
                              <h4 class="m-b10">Ngày bàn giao</h4>
                              <p>{{$detail->operate}}</p>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-5 col-md-5 ">
               <div class="project-detail-outer mfp-gallery">
                  @foreach ($img as $item)
                  <div class="project-detail-pic m-b30">
                     <div class="sx-media">
                           <a class="mfp-link" href="{{$item}}">
                              <img src="{{$item}}" alt="{{$item}}">
                           </a>  
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="section-full p-tb80 bg-gray inner-page-padding">
      <div class="container">
          <div class="section-content">
              <!-- TITLE START -->
              <div class="section-head">
                  <div class="sx-separator-outer separator-left">
                      <div class="sx-separator bg-white bg-moving bg-repeat-x" style="background-image:url({{url('frontend/images/cross-line2.png')}})">
                          <h3 class="sep-line-one">Dự Án Mới</h3>
                      </div>
                  </div>
              </div>                   
              <!-- TITLE END -->                                 
              <div class="work-carousel-outer">
                  <div class="owl-carousel mfp-gallery project-carousel project-carousel3 owl-btn-vertical-center p-lr80">
                      @foreach ($duan as $item)
                      @php
                          $im = json_decode($item->images);
                      @endphp
                      <div class="item">
                        <div class="project-mas m-a30">
                            <div class="image-effect-one">
                              <img src="{{$im[0]}}" alt="{{$im[0]}}" />
                                <div class="figcaption">
                                    <a class="mfp-link" href="{{$im[0]}}">
                                        <i class="fa fa-arrows-alt"></i>
                                    </a>  
                                </div>
                            </div> 
                            <div class="project-info p-t20">
                                <h4 class="sx-tilte  m-t0"><a href="{{route('duanTieuBieuDetail',['slug'=>$item->slug])}}">{{$item->name}}</a></h4>
                                <a href="{{route('duanTieuBieuDetail',['slug'=>$item->slug])}}"><i class="link-plus bg-primary"></i></a>
                            </div>
                        </div>                                                       
                    </div> 
                      @endforeach
                                                                                                                                             
                   </div>
              </div> 
           </div>
       </div>
   </div>           
 </div>
@endsection