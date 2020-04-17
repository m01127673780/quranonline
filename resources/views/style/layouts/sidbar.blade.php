@include('style.tawk_to')
@include('style.layouts.modal')

<!--====== start Slider  show in mobile=============================== -->
<section class="content_sidbar">
    <div class="md_show d-none" id="container33">

        <aside></aside>

        <div class="wrapper cf">

            <nav id="main-nav"  >



                <ul class="second-nav">
                    <li class="content_icin_pre_next_ref">

                            <a href="{{url('')}}" class="d-inline" onclick="goBack()"><i class="fa icon_li_sidbar fa-arrow-left"></i></a>
                            <a href="{{ URL::current() }}" class="d-inline"><i class="fa icon_li_sidbar fa-refresh"></i></a>
                            <a href="{{URL::previous()}}" class="d-inline"><i class="fa icon_li_sidbar fa-arrow-right"></i></a>
                        <script>
                            function refresh() {
                                setTimeout(function () {
                                    location.reload()
                                }, 100);
                            }
                        </script>
                        <style>
                            .content_icin_pre_next_ref
                            {
                                /*margin: 20px 0;*/
                                margin-bottom: 20px;
                                margin-top: 3px;
                                border-bottom: none!important;
                                text-align: center!important;
                                border-top: 1px solid #2c5d8f;
                                padding-top: 10px;
                            }
                            .content_icin_pre_next_ref a
                            {
                                background: none!important;
                                border-bottom: none!important;
                            }
                        </style>



                    </li>
                                        <li class="home"><a href="{{url('')}}"> <i class="fa      icon_li_sidbar fa-home"></i><span class="name_li_sidbar">{{trans('admin.home')}}</span></a></li>
                                            {{--start pages ---------------  --}}
                                            <!-------------------------------------------------------------------------------->
   

                                             <!-------------------------------------------------------------------------------->
                    <li class="login">
                        <a href="#"> <i class="fa icon_li_sidbar fa-address-book-o"></i> {{trans('admin.pages')}}</a>

                    <ul class="content_login">
                            <li>
                                <a href="{{url('Allcourses')}}" >
                                    <!-- Message Start -->
                                    <div class="media">
                                        <img src="{{url('default')}}/student.jpg" alt="student.png"  class="img_lang">
                                        <div class="media-body"><h6 class="dropdown-item-title">{{trans('admin.Allcourses')}} </h6> </div></div>
                                    <!-- Message End -->
                                </a>
                                
                                <a href="{{url('/Allwhyus')}}" >
                                    <!-- Message Start -->
                                    <div class="media">
                                        <img src="{{url('default')}}/teacher.jpg" alt="teacher.png"  class="img_lang">
                                        <div class="media-body"><h6 class="dropdown-item-title">{{trans('admin.why_us')}} </h6> </div></div>
                                    <!-- Message End -->
                                </a>
                                                         
                                <a href="{{url('/AllPrices')}}" >
                                    <!-- Message Start -->
                                    <div class="media">
                                        <img src="{{url('default')}}/teacher.jpg" alt="teacher.png"  class="img_lang">
                                        <div class="media-body"><h6 class="dropdown-item-title">{{trans('admin.AllPrices')}} </h6> </div></div>
                                    <!-- Message End -->
                                </a>                                     
                                <a href="{{url('/Allstatistics')}}" >
                                    <!-- Message Start -->
                                    <div class="media">
                                        <img src="{{url('default')}}/teacher.jpg" alt="teacher.png"  class="img_lang">
                                        <div class="media-body"><h6 class="dropdown-item-title">{{trans('admin.Allstatistics')}} </h6> </div></div>
                                    <!-- Message End -->
                                </a>
                                
                        </ul><!--content_login-->
                    </li>
                    {{--End   pages ---------------  --}}
                                        <li class="home"><a href="{{url('/#whyus_top')}}"> <i class="fa      icon_li_sidbar fa-question-circle-o"></i><span class="name_li_sidbar">{{trans('admin.whyus')}}</span></a></li>
                                        <li class="courses"><a href="{{url('/#courses')}}"> <i class="fa icon_li_sidbar fa-book"></i><span class="name_li_sidbar">{{trans('admin.courses')}}</span></a></li>
                                        <li class="Package"><a href="{{url('/#Package')}}"> <i class="fa icon_li_sidbar fa-money"></i><span class="name_li_sidbar">{{trans('admin.prices')}}</span></a></li>
                                        <li class="Package"><a data-toggle="modal" data-target="#myModal2"       class="color_fff" > <i class=" icon_li_sidbar fa fa-handshake-o"></i><span class="name_li_sidbar">{{trans('admin.contactus')}}</span></a></li>
                                        <li class="Package"><a data-toggle="modal" data-target="#modal_countdown"       class="sidbar_offers" > <i class=" icon_li_sidbar fa fa-gift"></i><span class="name_li_sidbar">{{trans('admin.offers')}}</span></a></li>
                                         {{--start Login ---------------  --}}
                    {{--start Login ---------------  --}}
                    <li class="login">
                        <a href="#"> <i class="fa icon_li_sidbar fa-address-book-o"></i> {{trans('admin.login')}}</a>

                    <ul class="content_login">
                            <li>
                                <a href="{{url('login//student')}}" >
                                    <!-- Message Start -->
                                    <div class="media">
                                        <img src="{{url('default')}}/student.jpg" alt="student.png"  class="img_lang">
                                        <div class="media-body"><h6 class="dropdown-item-title">{{trans('admin.student_login')}} </h6> </div></div>
                                    <!-- Message End -->
                                </a>
                                <a href="{{url('login//teacher')}}" >
                                    <!-- Message Start -->
                                    <div class="media">
                                        <img src="{{url('default')}}/teacher.jpg" alt="teacher.png"  class="img_lang">
                                        <div class="media-body"><h6 class="dropdown-item-title">{{trans('admin.teacher_login')}} </h6> </div></div>
                                    <!-- Message End -->
                                </a>
                        </ul><!--content_login-->
                    </li>
                    {{--End   Login ---------------  --}}
                    {{--start register ---------------  --}}
                    <li class="register">
                        <a href="#"> <i class="fa icon_li_sidbar fa-address-card-o"></i> {{trans('admin.register')}}</a>

                        <ul class="content_login">
                            <li>
                                <a href="{{url('/student')}}" >
                                    <!-- Message Start -->
                                    <div class="media">
                                        <img src="{{url('default')}}/student.jpg" alt="student.png"  class="img_lang">
                                        <div class="media-body"><h6 class="dropdown-item-title">{{trans('admin.student_login')}} </h6> </div></div>
                                    <!-- Message End -->
                                </a>
                                <a href="{{url('/teacher')}}" >
                                    <!-- Message Start -->
                                    <div class="media">
                                        <img src="{{url('default')}}/teacher.jpg" alt="teacher.png"  class="img_lang">
                                        <div class="media-body"><h6 class="dropdown-item-title">{{trans('admin.teacher_login')}} </h6> </div></div>
                                    <!-- Message End -->
                                </a>
                        </ul><!--content_login-->
                    </li>
                    {{--End   register ---------------  --}}
                    {{--start language ---------------  --}}
                    <li class="language">
                        <a href="#"> <i class="fa icon_li_sidbar fa-globe fa-spin"></i>  {{trans('admin.choose_language')}}</a>

                        <ul class="content_login">
                            <li>

                                <a href="{{url('lang_front_en')}}" >
                                    <!-- Message Start -->
                                    <div class="media">
                                        <img src="{{url('default')}}/en.png" alt="teacher.png"  class="img_lang">
                                        <div class="media-body"><h6 class="dropdown-item-title">English </h6> </div></div>
                                    <!-- Message End -->
                                </a>
                                <a href="{{url('lang_front_ar')}}" >
                                    <!-- Message Start -->
                                    <div class="media">
                                        <img src="{{url('default')}}/ar.png" alt="student.png"  class="img_lang">
                                        <div class="media-body"><h6 class="dropdown-item-title">عربى  </h6> </div></div>
                                    <!-- Message End -->
                                </a>
                        </ul><!--content_login-->
                    </li>
                    {{--End   language ---------------  --}}

                    
                    
                    
                       
                    <style>
                                                
                                        .img_manager {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    left: -19px;
    position: absolute;
    /* margin-left: 26px; */
    /* top: 0; */
    /* padding-bottom: 100px; */
    margin-left: 72px;
}
                                                
                                                
                                       .content_text_manager {
    height: 333px;
    width: 100%;
    overflow: scroll;
    padding-right: 1px;
    /* margin-right: 270px; */
    padding: 0;
    /* padding-left: 1px; */
    width: 240px;
    color: #fff;
    margin-top: 100px;
}
.icon_img_sidbar{
    width: 23px;
    height: 23px;
    border-radius: 50%;
}

                                                </style>
                    
                    
                    
                 

 
                    {{--start language ---------------  --}}
                    <li class="li_content_additional_information">
                   
                       <a href="#"> <i class="fa icon_li_sidbar fa-globe fa-spin"></i>  {{trans('admin.additional_information')}}</a>
 
                           <ul class="content_additional_information">
                           
                            {{-------start sid 1  -------------------------------------------------------------}}
                            <li class=" sid_1">
                                 <a href="#">
                                      <!--<i class="fa icon_li_sidbar fa-globe fa-spin"></i>-->

                             <img src="{{url('default')}}/general_manager.png" alt="general_manager.png"  class="  icon_img_sidbar">
                                      
                                      {{trans('admin.general_manager')}}  </a>
                                <ul class="content_one_sid">
                                    <li>
                                        <a  >
                                            <!-- Message Start -->
                                            <div class="media">
                                                <img src="{{url('default')}}/general_manager.png" alt="teacher.png"  class="img_manager">
                                               
                                              <div class="content_text_manager">{{trans('admin.text_general_manager')}} </div>
 
  
 
                                            <!-- Message End -->
                                            </div>
                                           </a>
                                           </li>
                                            {{--------------------------------------}}
                                    <li class="language">
                                        {{-----------------------------------------------------------}}
                                       
                                             <a href="#">
                                    <img src="{{url('default')}}/executive_director.png" alt="executive_director.png"  class=" icon_img_sidbar">

                                 {{trans('admin.executive_director')}}  </a>
                                <ul class="content_one_sid">
                                    <li>
                                        <a  >
                                            <!-- Message Start -->
                                            <div class="media">
                                                <img src="{{url('default')}}/executive_director.png" alt="executive_director.png"  class="img_manager">
                                               
                                              <div class="content_text_manager"> {{trans('admin.text_executive_director')}} </div>
 
  
  
                                            <!-- Message End -->
                                            </div>
                                           </a>
                                           </li>
                                            {{--------------------------------------}}
                                    <li class="language">
                                        {{-----------------------------------------------------------}}
                                        <a href="#">
                                                                                  <img src="{{url('default')}}/marketing_director.png" alt="executive_director.png"  class=" icon_img_sidbar">
                                        {{trans('admin.marketing_director')}} </a>
                                        <ul class="content_login">
                                            <li>
                                                    <a  >
                                            <!-- Message Start -->
                                            <div class="media">
                                                <img src="{{url('default')}}/marketing_director.png" alt="marketing_director.png"  class="img_manager">
                                               
                                              <div class="content_text_manager"> {{trans('admin.text_marketing_director')}} </div>
  
  
                                            <!-- Message End -->
                                            </div>
                                           </a>
                                            {{----------------------------- start 4-----------------}}
                                            
                                            {{----------------------------- start 5-----------------}}
                                        </ul><!--content_login-->
                                    </li>
                                            {{--------------------------------------}}
                                          </ul><!--content_one_sid-->
                                       
                                    </li>
                                            {{--------------------------------------}}
                                          </ul><!--content_one_sid-->
                           </li> 
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                           {{-----------------------  End   sid_1 -------------------}}
                           {{-------start sid 2 executive_director ----------------------------------}}
                            
                            <li class=" sid_2">
                                 <a href="#">
                                                                                  <img src="{{url('default')}}/developed_by2.png" alt="teacher.png"  class=" icon_img_sidbar">

                                 {{trans('admin.developed_by')}}  </a>
                                <ul class="content_one_sid">
                                    <li>
                                        <a  >
                                            <!-- Message Start -->
                                            <div class="media">
                                                <img src="{{url('default')}}/developed_by.png" alt="teacher.png"  class="img_manager">
                                               
                                              <div class="content_text_manager">
  {{trans('admin.text_developed_by')}}
  <br>
  <br>
   {{trans('admin.text_in_sayadweb')}}

  
  </div>
                                            <!-- Message End -->
                                            </div>
                                           </a>
                                           </li>
                                            {{--------------------------------------}}
                                    <li class="language d-none">
                                        {{-----------------------------------------------------------}}
                                        <a href="#"> <i class="fa icon_li_sidbar fa-globe fa-spin"></i> {{trans('admin.developed_by')}} </a>
                                        <ul class="content_login">
                                            <li>
                                                    <a  >
                                            <!-- Message Start -->
                                            <div class="media">
                                                <img src="{{url('default')}}/developed_by.png" alt="teacher.png"  class="img_manager">
                                               
                                              <div class="content_text_manager">
  developed_by Eng: MOhamed El Saeed  
  additional_informationadl 
  additional_informationadl 
  additional_informationadl 
  additional_informationadl 
  additional_informationadl 
  additional_informationadl   additional_informationadl 
  additional_informationadl 
  additional_informationadl   additional_informationadl 
  additional_informationadl 
  additional_informationadl 
  additional_informationadl 
  additional_informationadl 
  additional_informationadl 
  additional_informationadl   additional_informationadl 
  additional_informationadl 
  additional_informationadl   additional_informationadl 
  additional_informationadl 
  additional_informationadl 
  additional_informationadl 
  additional_informationadl 
  additional_informationadl 
  additional_informationadl   additional_informationadl 
  additional_informationadl 
  additional_informationadl   additional_informationadl 
  additional_informationadl 
  additional_informationadl 
  additional_informationadl 
  additional_informationadl 
  additional_informationadl 
  additional_informationadl   additional_informationadl 
  additional_informationadl 
  additional_informationadl 
  
 
   l 
 
  
  </div>
                                            <!-- Message End -->
                                            </div>
                                           </a>
                                            {{----------------------------- start 4-----------------}}
                                                <ul class="content_login">
                                                    <li>
                                                        <a href="{{url('lang_front_en')}}" >
                                                            <!-- Message Start -->
                                                            <div class="media">
                                                                <img src="{{url('default')}}/en.png" alt="teacher.png"  class="img_lang">
                                                                <div class="media-body"><h6 class="dropdown-item-title"> number3 </h6> </div></div>
                                                            <!-- Message End -->
                                                        </a>
                                                </ul><!--content_login-->
                                            {{----------------------------- start 5-----------------}}
                                    
                                            {{--------------------------------------}}
                                          </ul><!--content_one_sid-->
                           </li> 
                           {{-----------------------  End   sid_2 -------------------}}
                         

                        </ul><!--u_content_additional_information-->
                        {{-----------------------------------------------------------}}
                    </li><!-- -->
                    {{--End   language ---------------  --}}

















 



















                    {{---------------------------------------start li End  btn like--}}
                    <li class="like_facebook">
                        <a href="">
                            <aside class="content_button_like_in_sidbar">

                                <!-- start btn like --------------------->

                                <!-- Go to www.addthis.com/dashboard to customize your tools --><div id="fb-root"></div>
                                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ar_AR/sdk.js#xfbml=1&version=v6.0"></script>

                                <!-- start btn like --------------------->
                                <!-- Load Facebook SDK for JavaScript -->
                                <div id="fb-root"></div>

                                <!-- Your like button code -->
                                <div class="fb-like"
                                     data-href="http://cracky-eg.com"
                                     data-layout="standard"
                                     data-action="like"
                                     data-show-faces="true">
                                </div>
                                <style>
                                    .content_button_like_in_sidbar {
                                        overflow: visible;
                                        text-align: left;
                                        position: absolute;
                                        left: -186px;
                                        width: 100%;
                                        height: 93px;
                                        top: 4px;
                                    }
                                    .content_button_like_in_sidbar ..._2tga._8j9v {
                                        border-radius: 3px;
                                        font-size: 12px;
                                        height: 20px;
                                        padding: 0 6px;
                                        display: block;
                                        position: absolute;
                                        left: 204px;
                                        top: 0px;
                                    }
                                </style>

                                <!-- End  btn like --------------------->
                            </aside>
                        </a>
                    </li>
                    {{---------------------------------------End li End  btn like--}}
                      {{---------------------------------------start li End  btn shera --}}
                    <li class="shera_facebook">

                        {{---------------------------------------start  li    btn share facf book ----------------}}
                             <aside>
                                <!-- start btn like --------------------->
                                <!-- Load Facebook SDK for JavaScript -->
                                <div id="fb-root"></div>
                                <script>(function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) return;
                                        js = d.createElement(s); js.id = id;
                                        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>

                                <!-- Your share button code -->
                                <div class="fb-share-button"
                                     data-href="http://cracky-eg.com"
                                     data-layout="button_count">
                                </div>
                                <!-- End  btn like --------------------->

                            </aside>
                        {{---------------------------------------End    li    btn share facf book ----------------}}
                    </li>
                    {{---------------------------------------End li End  btn share --}}

                    {{--Start genral manger     mulitlevel ---------------  --}}


                    {{--End   genral manger     mulitlevel ---------------  --}}



                </ul>


                <ul class="bottom-nav">



                    <li class="email">
                        <a href="mailto:hi@somewebmedia.com" target="_blank">
                          
                         </a>
                    </li>

                    <li class="email">
                        <a href="mailto:hi@somewebmedia.com" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                    </li>
{{--                    <li class="ko-fi">--}}
{{--                        <a href="https://ko-fi.com/somewebguy" target="_blank">--}}
{{--                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.881 8.948c-.773-4.085-4.859-4.593-4.859-4.593H.723c-.604 0-.679.798-.679.798s-.082 7.324-.022 11.822c.164 2.424 2.586 2.672 2.586 2.672s8.267-.023 11.966-.049c2.438-.426 2.683-2.566 2.658-3.734 4.352.24 7.422-2.831 6.649-6.916zm-11.062 3.511c-1.246 1.453-4.011 3.976-4.011 3.976s-.121.119-.31.023c-.076-.057-.108-.09-.108-.09-.443-.441-3.368-3.049-4.034-3.954-.709-.965-1.041-2.7-.091-3.71.951-1.01 3.005-1.086 4.363.407 0 0 1.565-1.782 3.468-.963 1.904.82 1.832 3.011.723 4.311zm6.173.478c-.928.116-1.682.028-1.682.028V7.284h1.77s1.971.551 1.971 2.638c0 1.913-.985 2.667-2.059 3.015z"/></svg>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                </ul>

            </nav>





            <a class="toggle toggle_icon navbar-toggler">
                <span style="width: 50px" class="d-block"></span>

            </a>

        </div>

        </aside>
        </aside>



        <script>
            (function($) {
                var $main_nav = $('#main-nav');
                var $toggle = $('.toggle');

                var defaultData = {
                    maxWidth: false,
                    customToggle: $toggle,
                    navTitle: '',
                    levelTitles: true,
                    pushContent: '#container',
                    insertClose: 2,
                    closeLevels: false
                };

                // add new items to original nav
                $main_nav.find('li.add').children('a').on('click', function() {
                    var $this = $(this);
                    var $li = $this.parent();
                    var items = eval('(' + $this.attr('data-add') + ')');

                    $li.before('<li class="new"><a>'+items[0]+'</a></li>');

                    items.shift();

                    if (!items.length) {
                        $li.remove();
                    }
                    else {
                        $this.attr('data-add', JSON.stringify(items));
                    }

                    Nav.update(true);
                });

                // call our plugin
                var Nav = $main_nav.hcOffcanvasNav(defaultData);

                // demo settings update

                const update = (settings) => {
                    if (Nav.isOpen()) {
                        Nav.on('close.once', function() {
                            Nav.update(settings);
                            Nav.open();
                        });

                        Nav.close();
                    }
                    else {
                        Nav.update(settings);
                    }
                };

                $('.actions').find('a').on('click', function(e) {
                    e.preventDefault();

                    var $this = $(this).addClass('active');
                    var $siblings = $this.parent().siblings().children('a').removeClass('active');
                    var settings = eval('(' + $this.data('demo') + ')');

                    update(settings);
                });

                $('.actions').find('input').on('change', function() {
                    var $this = $(this);
                    var settings = eval('(' + $this.data('demo') + ')');

                    if ($this.is(':checked')) {
                        update(settings);
                    }
                    else {
                        var removeData = {};
                        $.each(settings, function(index, value) {
                            removeData[index] = false;
                        });

                        update(removeData);
                    }
                });
            })(jQuery);
        </script>

    </div>

</section><!--content_sidbar-->
<!--====== End   Slider  show in mobile=============================== -->


