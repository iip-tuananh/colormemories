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
                  <div class="ft-column col-md-4">
                     <section id="custom_html-2" class="widget_text widget widget_custom_html">
                        <h3 class="widget-title">Chỉ đường</h3>
                        <div class="textwidget custom-html-widget">{!!$setting->iframe_map!!}</div>
                     </section>
                  </div>
                  <div class="ft-column col-md-4">
                     <section id="custom_html-3" class="widget_text widget widget_custom_html">
                        <h3 class="widget-title">Fanpage</h3>
                        <div class="textwidget custom-html-widget" style="width:100%;">
                           <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F61560913689302%2F&tabs&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=985374385649893" width="440" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" title="Fanpage Chụp  kỷ yếu Color Memories"></iframe>
                        </div>
                     </section>
                  </div>
               </div>
            </div>
         </div>
         <!-- .footer-widgets -->
         <div class="site-info">
            <div class="wrap">
               <div class="row align-items-center">
                  <div class="col-md-12 text-lg-left text-center">
                     <p id="copyright">Coppyright © COLOR MEMERIES | 2024</p>
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