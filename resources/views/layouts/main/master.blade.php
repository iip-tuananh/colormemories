<!DOCTYPE html>
<html lang="vi">
   <head>
      <meta charset="UTF-8" />
      <meta name="theme-color" content="#d70018">
      <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
      <meta name='revisit-after' content='2 days' />
      <meta name="viewport" content="width=device-width">
      <title>@yield('title')</title>
      <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
      <meta http-equiv="Content-Language" content="vi" />
      <link rel="alternate" href="{{url()->current()}}" hreflang="vi-vn" />
      <meta name="description" content="@yield('description')">
      <meta name="robots" content="index, follow" />
      <meta name="googlebot" content="index, follow">
      <meta name="revisit-after" content="1 days" />
      <meta name="generator" content="@yield('title')" />
      <meta name="rating" content="General">
      <meta name="application-name" content="@yield('title')" />
      <meta name="theme-color" content="#ed3235" />
      <meta name="msapplication-TileColor" content="#ed3235" />
      <meta name="apple-mobile-web-app-capable" content="yes" />
      <meta name="apple-mobile-web-app-title" content="{{url()->current()}}" />
      <link rel="apple-touch-icon-precomposed" href="@yield('image')" sizes="700x700">
      <meta property="og:url" content="">
      <meta property="og:title" content="@yield('title')">
      <meta property="og:description" content="@yield('description')">
      <meta property="og:image" content="@yield('image')">
      <meta property="og:site_name" content="{{url()->current()}}">
      <meta property="og:image:alt" content="@yield('title')">
      <meta property="og:type" content="website" />
      <meta property="og:locale" content="vi_VN" />
      <meta name="twitter:card" content="summary" />
      <meta name="twitter:site" content="@{{url()->current()}}" />
      <meta name="twitter:title" content="@yield('title')" />
      <meta name="twitter:description" content="@yield('description')" />
      <meta name="twitter:image" content="@yield('image')" />
      <meta name="twitter:url" content="" />
      <meta itemprop="name" content="@yield('title')">
      <meta itemprop="description" content="@yield('description')">
      <meta itemprop="image" content="@yield('image')">
      <meta itemprop="url" content="">
      <link rel="canonical" href="{{\Request::url()}}">
      <!-- <link rel="amphtml" href="amp/" /> -->
      <link rel="image_src" href="@yield('image')" />
      <link rel="image_src" href="@yield('image')" />
      <link rel="shortcut icon" href="{{url(''.$setting->favicon)}}" type="image/x-icon">
      <link rel="icon" href="{{url(''.$setting->favicon)}}" type="image/x-icon">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
      <script>
         var primarycolor = '#304a31';
             secondarycolor = '#828282';
             textcolor = '#222222';
         // Then we set the value in the --vh custom property to the root of the document
         document.documentElement.style.setProperty('--primarycolor', `${primarycolor}`);
         document.documentElement.style.setProperty('--secondarycolor', `${secondarycolor}`);
         document.documentElement.style.setProperty('--textcolor', `${textcolor}`);
      </script>
   
     

      <link rel='stylesheet' id='wp-block-library-css' href='{{asset('frontend/css/style.min.css')}}' type='text/css' media='all' />
   
      <link rel='stylesheet' id='kk-star-ratings-css' href='{{asset('frontend/css/kk-star-ratings.min.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='contact-form-7-css' href='{{asset('frontend/css/styles.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='toc-screen-css' href='{{asset('frontend/css/screen.min.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='ms-main-css' href='{{asset('frontend/css/masterslider.main.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='ms-custom-css' href='{{asset('frontend/css/custom.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='fontello-style-css' href='{{asset('frontend/css/fontello.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='unitheme-style-css' href='{{asset('frontend/css/style.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='custom-style-css' href='{{asset('frontend/css/custom-style.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='ald-styles-css' href='{{asset('frontend//css/styles.min.css')}}' type='text/css' media='all' />
      <script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('frontend/js/jquery-migrate.min.js')}}" ></script>
      <script type="text/javascript" src="{{asset('frontend/js/jquery.bind-first-0.2.3.min.js')}}" ></script>
      
      @yield('css')
      {{-- <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v20.0&appId=936856741398296" nonce="rQvJV3PL"></script> --}}
 </head>
   <body data-rsssl=1 class="home page-template page-template-front-page page-template-front-page-php page page-id-41 _masterslider _msp_version_3.6.1 no-sidebar"  >
      
      <div id="page" class="site">
         @include('layouts.header.index')
         <!-- #masthead -->
         @yield('content')
         <!-- #content -->
         @include('layouts.footer.index')
         <!-- #colophon -->
      </div>
      <!-- #page -->
      <div class="ald_laser_loader">
         <div class="ald_loader_progress"></div>
      </div>
      
      <link rel='stylesheet' id='slick-style-css' href='{{asset('frontend/css/slick.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='slick-theme-style-css' href='{{asset('frontend/css/slick-theme.css')}}' type='text/css' media='all' />
    
      {{-- <script type="text/javascript" src="{{asset('frontend/js/kk-star-ratings.min.js')}}" ></script> --}}
      {{-- <script type="text/javascript" src="{{asset('frontend/js/hooks.min.js')}}" ></script> --}}
      {{-- <script type="text/javascript" src="{{asset('frontend/js/i18n.min.js')}}" ></script> --}}
      
      <script type="text/javascript" src="{{asset('frontend/js/index.js')}}" ></script>
     

      <script type="text/javascript" src="{{asset('frontend/js/front.min.js')}}"></script>
      
      <script type="text/javascript" src="{{asset('frontend/js/main.js')}}" ></script>
      @yield('js')
      
    </body>
</html>
<!-- Page cached by LiteSpeed Cache 6.3.0.1 on 2024-08-03 08:48:45 -->