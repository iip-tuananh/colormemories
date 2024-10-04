<nav id="mobilenav" class="d-lg-none">
   <div class="mobilenav__inner">
      <div class="h90 ">
         <div class="menu_close active">
            <div class="showmenu-cross"><span></span><span></span></div>
         </div>
      </div>
      <div class="menu-mobile-menu-container">
         <ul id="menu-main" class="mobile-menu">
            <li id="menu-item-477" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-477">
               <a href="{{route('home')}}" aria-current="page">Trang Chủ</a>
            </li>

            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1116">
               <a href="">Album</a>
               <span class="arrow"> <i class="icon-angle-down"></i> </span>
               <ul class="sub-menu">
                  @foreach ($categoryhome as $item)
                  <li class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1051">
                     <a href="{{route('allListProCate',['danhmuc'=>$item->slug])}}">{{languageName($item->name)}}</a>
                  </li>
                  @endforeach
                 
               </ul>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1116">
               <a href="{{route('khuyenMai')}}">Bảng giá</a>
               <span class="arrow"> <i class="icon-angle-down"></i> </span>
               <ul class="sub-menu">
                  @foreach ($bangiaheader as $item)
                  <li class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1051">
                     <a href="{{route('detailKhuyenmai',['slug'=>$item->slug])}}">{{($item->name)}}</a>
                  </li>
                  @endforeach
                  @if (count($bangiaheader) > 12)
                  <li class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1051">
                     <a href="{{route('khuyenMai')}}">Xem Thêm</a>
                  </li>
                  @endif
               </ul>
            </li>
            <li id="menu-item-11528" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11258"><a href="{{route('listVideo',['danhmuc'=>'video-ky-yeu'])}}">Video</a></li>
            @foreach ($servicehome as $item)
            <li class="menu-item menu-item-type-custom menu-item-object-custom {{count($item->services) > 0 ? 'menu-item-has-children' : ''}} menu-item-1116">
               <a href="{{route('serviceList',['slug'=>$item->slug])}}">{{$item->name}}</a>
               @if (count($item->services) > 0)
               <span class="arrow"> <i class="icon-angle-down"></i> </span>
               <ul class="sub-menu">
                  @foreach ($item->services as $ser)
                  <li class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1051">
                     <a href="{{route('serviceDetail',['danhmuc'=>$item->slug,'slug'=>$ser->slug])}}">{{$ser->name}}</a>
                  </li>
                  @endforeach
                 
               </ul>
               @endif
            </li>
            @endforeach
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1116">
               <a href="">Góc tư vấn</a>
               <span class="arrow"> <i class="icon-angle-down"></i> </span>
               <ul class="sub-menu">
                  @foreach ($blogCate as $item)
                  <li class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1051">
                     <a href="{{route('listCateBlog',['slug'=>$item->slug])}}">{{languageName($item->name)}}</a>
                  </li>
                  @endforeach
                 
               </ul>
            </li>
            <li id="menu-item-1158" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1158"><a href="{{route('lienHe')}}">Liên Hệ</a></li>
         </ul>
      </div>
   </div>
</nav>

<header id="masthead" class="site-header header-logo" role="banner"  >
   <div class="container">
      <div class="wrap-head">
         <!-- Start Top Header -->
         <div class="headerSearch">
            <div class="container">
               <form role="search" method="get" class="search-form" action="">
                  <label>
                  <span class="screen-reader-text">Tìm kiếm cho:</span>
                  <input type="search" class="search-field" placeholder="Tìm kiếm &hellip;" value="" name="s" />
                  </label>
                  <input type="submit" class="search-submit" value="Tìm kiếm" />
               </form>
            </div>
         </div>
         <div class="top-header d-lg-block d-none">
            <div class="wrap">
               <span class="phone"> <i class="icon-phone"></i>  <span class="vl">{{$setting->phone1}}</span></span><span class="btnSearch"></span>						
            </div>
         </div>
         <!-- End Top Header -->
         <div class="header-main">
            <div class="site-branding">
               <h1 class="site-title"><a href="{{route('home')}}" rel="home">{{$setting->webname}}</a></h1>
               <p class="site-description">{{$setting->company}}</p>
            </div>
            <!-- .site-branding -->
            <div class="header-content">
               <div class="col-3 d-lg-none d-block">
                  <div class="menu-toggle d-lg-none" id="showmenu">
                     <div class="showmenu-hamburger"><span></span><span></span><span></span></div>
                  </div>
               </div>
               <div class="logo">
                  <a class="d-block" id="logo" href="{{route('home')}}"><img alt="Logo" width="108" height="135" src="{{$setting->logo}}"></a>		
               </div>
               <div class="top-header d-lg-none d-block col-3">
                  <div class="wrap">
                     <span class="btnSearch"></span>			
                  </div>
               </div>
               <div class="wrap-menu">
                  <nav id="site-navigation" class="main-navigation main-navigation1"  >
                     <div class="menu-primary-menu-container">
                        <ul id="primary-menu" class="menu clearfix">
                           <li class="menu-item menu-item-type-custom menu-item-object-custom "><a href="{{route('home')}}">Trang Chủ</a></li>
                           <li class="menu-item menu-item-type-taxonomy menu-item-object-service_cat menu-item-has-children menu-item-484">
                              <a href="javascript:;">Album</a>
                              <ul class="sub-menu">
                                 @foreach ($categoryhome as $item)
                                 <li class="menu-item menu-item-type-post_type menu-item-object-service menu-item-4704">
                                    <a href="{{route('allListProCate',['danhmuc'=>$item->slug])}}">{{languageName($item->name)}}</a>
                                 </li>
                                 @endforeach
                              </ul>
                           </li>
                           <li class="menu-item menu-item-type-taxonomy menu-item-object-package_cat menu-item-has-children menu-item-319">
                              <a href="{{route('khuyenMai')}}">Bảng giá</a>
                              <ul class="sub-menu">
                                 @foreach ($bangiaheader as $item)
                                 <li class="menu-item menu-item-type-post_type menu-item-object-package menu-item-4740">
                                    <a href="{{route('detailKhuyenmai',['slug'=>$item->slug])}}">{{$item->name}}</a>
                                 </li>
                                 @endforeach
                                 @if (count($bangiaheader) > 12)
                                 <li class="menu-item menu-item-type-post_type menu-item-object-package menu-item-4740">
                                    <a href="{{route('khuyenMai')}}">Xem Thêm</a>
                                 </li>
                                 @endif
                                 
                              </ul>
                           </li>
                           <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-105025">
                              <a href="{{route('listVideo',['danhmuc'=>'video-ky-yeu'])}}">Video</a></li>
                        </ul>
                     </div>
                  </nav>
                  <nav id="site-navigation" class="main-navigation main-navigation2"  >
                     <div class="menu-primary-menu-right-container">
                        <ul id="primary-menu" class="menu clearfix">
                           @foreach ($servicehome as $item)
                           <li id="menu-item-473" class="menu-item menu-item-type-custom menu-item-object-custom {{count($item->services) > 0 ? 'menu-item-has-children' : ''}}  menu-item-473">
                              <a href="{{route('serviceList',['slug'=>$item->slug])}}">{{$item->name}}</a>
                              @if (count($item->services) > 0)
                              <ul class="sub-menu">
                                 @foreach ($item->services as $ser)
                                 <li class="menu-item menu-item-type-post_type menu-item-object-service menu-item-968">
                                    <a href="{{route('serviceDetail',['danhmuc'=>$item->slug,'slug'=>$ser->slug])}}">{{$ser->name}}</a>
                                 </li>
                                 @endforeach
                              </ul>
                              @endif
                           </li>
                           @endforeach
                           
                           <li id="menu-item-475" class="menu-item menu-item-type-taxonomy menu-item-object-news_cat menu-item-has-children menu-item-475">
                              <a href="">Góc tư vấn</a>
                              <ul class="sub-menu">
                                 @foreach ($blogCate as $item)
                                 <li id="menu-item-989" class="menu-item menu-item-type-post_type menu-item-object-news menu-item-989"><a href="{{route('listCateBlog',['slug'=>$item->slug])}}">{{languageName($item->name)}}</a></li>
                                 @endforeach
                              </ul>
                           </li>
                           <li id="menu-item-476" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-476"><a href="{{route('lienHe')}}">Liên hệ</a></li>
                        </ul>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>