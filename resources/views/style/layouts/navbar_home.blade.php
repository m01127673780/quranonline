

<nav class="navbar navbar-expand-lg    fixed-top  ">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/')}}" class="black-comany-name">
            @foreach($setting as $sett)
                <aside class="aside-company-name-logo">
                    <img class="logo-img" src="{{url('storage/'.$sett->logo)}}"  class="img-logo">
                    <!-- <span class="company-name-logo" >  Quran Square</span> -->

        </a>
        </aside>
        @endforeach
        <span class="tybime"></span>
        <button class="navbar-toggler d-none" type="button"data-toggle="collapse" data-target="#navbarSupportedContent"aria-controls=" navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"> <i class="fa fa-align-justify  fa-2x"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item "><a class="nav-link call_us" href="#" id="call_us">  {{trans('admin.call_us')}}  +447418397601<span class="sr-only">(current)</span></a> </li>
                <!------------------------------------------------------->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{trans('admin.pages')}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('Allcourses')}}">
                            <div class="media">
                                <img src="{{url('default')}}/student.jpg" alt="student.jpg" class="img_login_user">
                                <div class="media-body"> <h6 class="dropdown-item-title">{{trans('admin.Allcourses')}}  </h6></div>
                            </div>

                        </a>
                        <a class="dropdown-item" href="{{url('Allwhyus')}}">

                            <div class="media">
                                <img src="{{url('default')}}/teacher.jpg" alt="teacher.jpg" class="img_login_user">
                                <div class="media-body"> <h6 class="dropdown-item-title"> {{trans('admin.why_us')}} </h6></div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="{{url('AllPrices')}}">

                            <div class="media">
                                <img src="{{url('default')}}/teacher.jpg" alt="teacher.jpg" class="img_login_user">
                                <div class="media-body"> <h6 class="dropdown-item-title"> {{trans('admin.all_prices')}} </h6></div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="{{url('Allstatistics')}}">

                            <div class="media">
                                <img src="{{url('default')}}/teacher.jpg" alt="teacher.jpg" class="img_login_user">
                                <div class="media-body"> <h6 class="dropdown-item-title"> {{trans('admin.all_statistics')}} </h6></div>
                            </div>
                        </a>
                   </div>

                </li>
                <!------------------------------------------------------->

                <li class="nav-item ">
                    <a class="nav-link single" href="{{url('/')}}" id="Home"> {{trans('admin.home')}}<span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item ">
                    <a class="nav-link single" href="#whyus_top">{{trans('admin.whyus')}}<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link single" href="#courses">{{trans('admin.courses')}}</a>
                </li>


                <li class="nav-item"  >
                    <a class="nav-link single" href="#Package">  {{trans('admin.prices')}} </a>

                </li>
                <li class="nav-item"  >
                    <a class="nav-link  nav_link_contact_us"   data-toggle="modal" data-target="#myModal2">  {{trans('admin.contactus')}}   </a>
                </li>
      <li class="nav-item"  >
                    <a class="nav-link  nav_link_contact_us" data-toggle="modal" data-target="#modal_countdown">   {{trans('admin.offers')}}  </a>
                </li>
                
     <!--<li class="nav-item"  >-->
     <!--              <a class="toggle toggle_icon navbar-toggler hc-nav-trigger hc-nav-1" style="">-->
     <!--           <span style="width: 50px" class="d-block"></span>-->

     <!--       </a>-->
     <!--           </li>-->


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{trans('admin.login')}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="student">
                            <div class="media">
                                <img src="{{url('default')}}/student.jpg" alt="student.jpg" class="img_login_user">
                                <div class="media-body"> <h6 class="dropdown-item-title">{{trans('admin.student_login')}}  </h6></div>
                            </div>

                        </a>
                        <a class="dropdown-item" href="teacher">

                            <div class="media">
                                <img src="{{url('default')}}/teacher.jpg" alt="teacher.jpg" class="img_login_user">
                                <div class="media-body"> <h6 class="dropdown-item-title"> {{trans('admin.teacher_login')}} </h6></div>
                            </div>
                        </a>
                        </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{trans('admin.register')}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('login/student')}}">
                            <div class="media">
                                <img src="{{url('default')}}/student.jpg" alt="student.jpg" class="img_login_user">
                                <div class="media-body"> <h6 class="dropdown-item-title">{{trans('admin.student_login')}}  </h6></div>
                            </div>

                        </a>
                        <a class="dropdown-item" href="{{url('login/teacher')}}">

                            <div class="media">
                                <img src="{{url('default')}}/teacher.jpg" alt="teacher.jpg" class="img_login_user">
                                <div class="media-body"> <h6 class="dropdown-item-title"> {{trans('admin.teacher_login')}} </h6></div>
                            </div>
                        </a>


                </li> 


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle lang" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{url('default')}}/world_flag.gif" alt="ar.png" class="img_world_flag">
                    </a>
                    <div class="dropdown-menu lang" aria-labelledby="navbarDropdown">
                        <a href="{{url('lang_front_ar')}}" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="{{url('default')}}/ar.png" alt="ar.png" class="img_lang">
                                <div class="media-body"> <h6 class="dropdown-item-title">عربى  </h6></div>
                            </div>
                            <!-- Message End -->
                        </a>


                        <a href="{{url('lang_front_en')}}" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="{{url('default')}}/en.png" alt="en.png"  class="img_lang">
                                <div class="media-body"><h6 class="dropdown-item-title">English </h6> </div>
                                </div>
                            <!-- Message End -->
                        </a>
                        <style>
                            .img_lang,img_dropdown_item{
                                width: 20px;
                                height: 20px;
                                border-radius: 50%;
                            }
                            .dropdown-item-title{
                                float: right;
                            }
                        </style>
                </li>

            </ul>
        </div>
    </div>
</nav>


