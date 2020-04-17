{{-----------------------------------}}
@php
    $lang = session('lang');

    if (empty (session('lang')))
    {
    $lang ='ar';
    }
 @endphp
{{-----------------------------------}}

<!-- =====Start footer======================================== -->
<section class="footer-svg"  >
    <svg  preserveAspectRatio="none" viewBox="0 0 100 100" height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" id="curveUpColor">
        <path class="paths-setionpath-footre" sty d="M0 100 C 20 0 50 0 100 100 Z"></path>
    </svg>
    <footer class="footer-area footer--light">
        <div class="footer-big">
            <!-- start .container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 col-sm-12">
                        <div class="footer-widget">
                            <div class="widget-about">
                                <h3 class="footer-title">{{trans('admin.about_us')}}


                                </h3>
                                <p align="justify" class="p-linhight">
                                    @foreach($footer as $foot)
                                        {{$foot['aboutus_'.$lang]}}
                                    @endforeach
                                </p>
                            </div>
                        </div>
                        <!-- Ends: .footer-widget -->
                    </div> <!-- end /.col-md-4 -->
                    <div class="col-md-6 col-lg-3 col-sm-12">
                        <h3 class="footer-title"> {{trans('admin.important_links')}}</h3>
                        <ul class="list-unstyled contact-info text-left ul-import-info" >
                            @foreach($footer as $foot)
                            <?php   $str =$foot['import_info_'.$lang] ?>
                            <?php
                            $arr = explode("," , $str);
                            for ($i = 0; $i < count($arr); $i ++) {
                                echo "  <p style=' '> <i class='fa fa-check-circle-o'></i>". $arr[$i]."</p>";
                            }?>
                            @endforeach
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-12 p-linhight-smol">
                        <h3 class="footer-title">{{trans('admin.contact_information')}}</h3>
                        <!-- <p>Tel: 9892-62156 int 6126</p> -->
                        <p class="p-linhight-smol">
                            @foreach($footer as $foot)
                                {{$foot['contact_'.$lang]}}
                            @endforeach
                        </p>
                        <p class="p-linhight-smol">Call Us: <font color="orange" size="3">
                                @foreach($footer as $foot)
                                     {{$foot['callus_'.$lang]}}

                                @endforeach
                            </font></p>
                        <p class="p-linhight-smol">Support Email: <font color="orange">
                                @foreach($footer as $foot)
                                    {{$foot->emaill}}
                                @endforeach
                            </font></p>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <h3 class="footer-title">{{trans('admin.payments')}}</h3>
                        <p align="justify">
                            @foreach($footer as $foot)
                                {{$foot['payment_'.$lang]}}

                            @endforeach
                        </p>
                        <ul class="pay list-unstyled">
                            <span><img src="{{url('default/visa.png')}}" alt="visa"></span>
                            <span><img src="{{url('default/discov.png')}}" alt="discov"></span>
                            <span><img src="{{url('default/master.png')}}" alt="master"></span>
                            <span><img src="{{url('default/paypal.png')}}" alt="paypal"></span>
                        </ul>
                    </div>
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.footer-big -->
        <article  class="img-and-icon-footer">
            <div class="container">
                      <span>
                      <span class="s-medie">
                      <a href="{{$foot->twitter}} " target="_self"  ><i class="fa fa-twitter"></i></a>
                      <a href="{{$foot->facebook}} " target="_self"  ><i class="fa fa-facebook"></i></a>
                      <a href="{{$foot->instagram}}  " target="_self"  ><i class="fa fa-instagram"></i></a>
                      <a href="{{$foot->youtube}} " target="_self"  ><i class="fa fa-youtube"></i></a>
                      </span>
                      @foreach($footer as $foot)
                             <div class="content_img_downlode_app">
                                  <a href="{{$foot->link_appstore}}" target="_self">   <img class="img-downlode-app " src="{{url('storage/'.$foot->img_appstore)}}"></a>
                              <a href="{{$foot->link_googelplay}}" target="_self"> <img class="img-downlode-app " src="{{url('storage/'.$foot->img_googelplay)}}"></a>
                             </div><!-- content_img_downlode_app -->
                @endforeach
            </div>
            </span>
            <br><!-- <br><br> -->
            <div class="text-left">
                <a href="https://wa.me/447418397601" id="callnowbutton" target="_blank">
                    <!--<i class="fa fa-whatsapp fa-5x icon-whatsapp-bootom"></i>-->
                    <i class="fa   fa-5x icon-whatsapp-bootom">
                        <img name="icon" class="image image-icon-whatsapp" src="{{ asset( 'default/whatspp-icon.gif')}}"  class="img-create-Edit" >
                    </i>
                </a>                  <div class="p-capy container">
                  <span class="color color_fff">
                    ©2020<sapn class="yellow">All rights</sapn> reserved for <span class=" "> <a href="quransquare.com">quransquare</a></span>
                  <sapn class="yellow">© Developed by
                  <span class="color">
                  elsayadweb
                  </span>
                  </span>
                    <span class="s-medie by-me">
                  @foreach($footer as $foot)
                            <a href="{{$foot->twitter}}"><i class="fa fa-twitter"></i></a>
                            <a href="{{$foot->facebook}}"><i class="fa fa-facebook"></i></a>
                            <a href="{{$foot->youtube}}"><i class="fa fa-google"></i></a>
                            <a href="{{$foot->github}}"><i class="fa fa-github"></i></a>
                        @endforeach
                  </span>
                    </span>
                </div>
            </div>
        </article>
    </footer>
</section>
</section>