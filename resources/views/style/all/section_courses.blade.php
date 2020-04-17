{{-----------------------------------}}
@php
    $lang = session('lang');

    if (empty (session('lang')))
    {
    $lang ='ar';
    }
@endphp

{{-----------------------------------}}
<!-- ==============start section All courses================= -->
<section class="AllCource">
    <svg preserveAspectRatio="none" viewBox="0 0 100 100" height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" id="curveUpColor">
        <path class="paths-setionpath-courses" sty d="M0 100 C 20 0 50 0 100 100 Z"></path>
    </svg>
    <div class="scetionpath-courses">
        <!----------------start  section title---------------------->
        <section class=" title " id="courses">
            <div class="container " >
                <div class="section-header text-center">

                    <h2 class="h2-section-title">
                          {{trans('admin.courses')}}<i class="fa fa-book"></i>
                    </h2>
                    <div class="line">
                    </div><!--/.heazder-->
                    <span class="span-border"></span>
                </div><!--/.cont div-title-->
            </div><!--/.line-->
        </section><!--/.sec-title-->
        <!----------------End section title------------------------->
        <div class="  container-fluid custom_new " >
            {{$all_courses->links('vendor.pagination.bootstrap-4')}}
            <div class="row">
                <!----------------------------------->
                @foreach($all_courses as $all_course)
                    <div  class="col-sm-6 col-lg-3 col_allCource">
                     <a   href="{{url('show/course/'.$all_course->id)}}">
                        <div class="  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <div class="contant">
                                <div class="content">
                                    <div class="card cardhover">
                                        <img src="storage/{{$all_course->icon}}"class="img-whyus">
                                        <div class="descriptions ">
                                            <h3 >{{$all_course['head_'.$lang]}}</h3>
                                            <p class="item-description  " align="justify">

                                                <?php  $str =$all_course['text_'.$lang] ?>
                                                <?php
                                                $arr = explode("," , $str);
                                                for ($i = 0; $i < count($arr); $i ++) {
                                                    echo    $arr[$i] .'<br>';
                                                }?>
                                            </p>
                                        </div><!-- descriptions -->
                                    </div><!-- card cardhover -->
                                </div><!-- content -->
                            </div><!--contant -->
                        </div><!-- wow -->
                        </a>
                    </div><!-- col-sm-6" -->

            @endforeach
            <!----------------------------------->
             <!----------------------------------->
            
            </div><!-- row" -->
        </div><!--  container -->
    </div><!--  data-n -->
</section><!--./ AllCource   -->

<!-- =================================End  section All courses================================= -->
