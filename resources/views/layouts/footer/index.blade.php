<footer id="footer" class="site-footer"  >
   <div class="container">
      <div class="footer-wrapper">
         <div class="top-footer">
            <div class="footer-info">
               <div class="row">
                  <div class="col-md-6 text-left mb-5">
                     <h3>Thông tin liên hệ</h3>
                     <p class="info_company">Color Memories</p>
                     <div class="contact-item">
                        <img src="{{url('frontend/img/ic-map.svg')}}" alt="Địa chỉ">
                        <span class="title">
                        Địa chỉ 1:
                        </span>
                        <span class="info">
                        {{$setting->address1}}	</span>
                     </div>
                     <div class="contact-item">
                        <img src="{{url('frontend/img/ic-map.svg')}}" alt="Địa chỉ">
                        <span class="title">
                        Địa chỉ 2:
                        </span>
                        <span class="info">
                        {{$setting->address2}}	</span>
                     </div>
                     <div class="contact-item">
                        <img src="{{url('frontend/img/ic-map.svg')}}" alt="Địa chỉ">
                        <span class="title">
                        Địa chỉ 3:
                        </span>
                        <span class="info">
                           X5,X.Như Hòa,H.Kim Sơn, Tp. Ninh Bình	</span>
                     </div>
                     <div class="contact-item">
                        <img src="{{url('frontend/img/ic-phone_2.svg')}}" alt="Số điện thoại">
                        <span class="title">
                        Hotline 1:
                        </span>
                        <span class="info">
                           {{$setting->phone1}}							</span>
                     </div>
                     <div class="contact-item">
                        <img src="{{url('frontend/img/ic-phone_2.svg')}}" alt="Số điện thoại">
                        <span class="title">
                           Hotline 2:
                        </span>
                        <span class="info">
                           {{$setting->phone2}}									</span>
                     </div>
                     <div class="contact-item">
                        <img src="{{url('frontend/img/ic-email_2.svg')}}" alt="Email">
                        <span class="title">
                        Email 1:
                        </span>
                        <span class="info">
                           {{$setting->email}}									</span>
                     </div>
                     <div class="contact-item">
                        <img src="{{url('frontend/img/ic-email_2.svg')}}" alt="Email">
                        <span class="title">
                        Email 2:
                        </span>
                        <span class="info">
                           Trantuan29101997@gmail.com							</span>
                     </div>
                  </div>
                  <div class="col-md-3 text-left mb-5">
                     <section id="custom_html-5" class="widget_text widget widget_custom_html">
                        <h3 class="widget-title">Dịch vụ nổi bật</h3>
                        <div class="textwidget custom-html-widget">
                           <ul style="font-weight: 400;">
                              @foreach ($servicehome as $item)
                              <li><a href="{{route('serviceList',['slug'=>$item->slug])}}">{{$item->name}}</a></li>
                              @endforeach
                           </ul>
                        </div>
                     </section>
                  </div>
                  <div class="col-md-3 text-left mb-5">
                     <section id="custom_html-5" class="widget_text widget widget_custom_html">
                        <h3 class="widget-title">Chính sách và điều khoản</h3>
                        <div class="textwidget custom-html-widget">
                           <ul style="font-weight: 400;">
                              @foreach ($pageContent as $item)
                                  @if ($item->type == 'ho-tro-khanh-hang')
                                  <li><a href="{{route('pagecontent',['slug'=>$item->slug])}}">{{$item->title}}</a></li>
                                  @endif
                              @endforeach
                           </ul>
                        </div>
                     </section>
                  </div>
               </div>
            </div>
         </div>
         <div class="main-footer">
            <div class="wrap">
               <div class="row">
                  <div class="ft-column col-md-6">
                     <section id="custom_html-2" class="widget_text widget widget_custom_html">
                        <h3 class="widget-title">Chỉ đường</h3>
                        <div class="textwidget custom-html-widget">{!!$setting->iframe_map!!}</div>
                     </section>
                  </div>
                  <div class="ft-column col-md-6">
                     <section id="custom_html-3" class="widget_text widget widget_custom_html">
                        <h3 class="widget-title">Fanpage</h3>
                        <div class="textwidget custom-html-widget" style="width:100%;"><div  class="fb-page" data-href="https://www.facebook.com/profile.php?id=61560913689302" data-tabs="timeline" data-width="500" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/profile.php?id=61560913689302" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/profile.php?id=61560913689302">Color Memories - Kỷ yếu sắc màu</a></blockquote></div></div>
                     </section>
                  </div>
               </div>
            </div>
         </div>
         <!-- .footer-widgets -->
         <div class="site-info">
            <div class="wrap">
               <div class="row align-items-center">
                  <div class="col-md-7 text-lg-left text-center">
                     <p id="copyright">Coppyright © COLOR MEMERIES | 2024</p>
                  </div>
                  <div class="col-md-5">
                     <div class="widget_social mb-0">
                        <ul class="text-lg-right text-center">
                           <li class="icon_social icon_facebook"><a title="Facebook" href="" rel="nofollow" target="_blank"><img src="{{url('frontend/img/ic-facebook.svg')}}" alt="Facebook" width="40" height="40"></a></li>
                           <li class="icon_social icon_youtube"><a title="youtube" href="" rel="nofollow" target="_blank"><img src="{{url('frontend/img/ic-youtube.svg')}}" alt="youtube" width="40" height="40"></a></li>
                           <li class="icon_social icon_instagram"><a title="Instagram" href="" rel="nofollow" target="_blank"><img src="{{url('frontend/img/ic-instagram.svg')}}" alt="Instagram" width="40" height="40"></a></li>
                           <li class="icon_social icon_tiktok"><a title="Tiktok" href="" rel="nofollow" target="_blank"><img src="{{url('frontend/img/ic-tiktok.svg')}}" alt="Tiktok" width="40" height="40"></a></li>
                           <li class="icon_social icon_zalo"><a title="Zalo" href="" rel="nofollow" target="_blank"><img src="{{url('frontend/img/ic-zalo.svg')}}" alt="Zalo" width="40" height="40"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- .site-info -->
      </div>
   </div>
   <div id="back-top">
      <img src="{{url('frontend/img/backtop.svg')}}" alt="Backtop" width="60" height="60">
   </div>
   <div id="buttonfixed">
      <a class="btn_zalo" href="https://zalo.me/{{$setting->phone1}}" target="_blank"><img src="{{url('frontend/img/btn-zalo.svg')}}" alt="Zalo" width="60" height="60"></a><a  class="btn_phone" href="tel:{{$setting->phone1}}" target="_blank"><img src="{{url('frontend/img/btn-calling.svg')}}" alt="Phone" width="60" height="60"></a>		
   </div>
</footer>