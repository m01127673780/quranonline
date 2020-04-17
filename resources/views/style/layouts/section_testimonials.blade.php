{{-----------------------------------}}
@php
    $lang = session('lang');

    if (empty (session('lang')))
    {
    $lang ='ar';
    }
@endphp

{{-----------------------------------}}

<!----------------start  section title---------------------->

<!----------------End section title------------------------->
<!--============= start section teestmonls in quran (9)============ -->
<!-- testimonials -->
{{--<section class=" ">--}}
<div class="  row">
    <div class="  col-md-6">
        <!----------------start  section title---------------------->
        <section class=" title" id="testimonial">
            <div class="container ">
                <div class="section-header text-center">

                    <h2 class="h2-section-title">
                        {{trans('admin.testimonial')}}
                    </h2>
                    <div class="line">
                    </div><!--/.heazder-->
                    <span class="span-border"></span>
                </div><!--/.cont div-title-->
            </div><!--/.line-->
        </section><!--/.sec-title-->
        <!----------------End section title------------------------->
    <section class="testimonials p-relative text-center overlay_testimonial testimonial_in_quran">
             <div class=" sec-padding ">
                <div class="owl-carousel owl-theme one-catousel-custom">
                    <!-- ---------------------- -->
                    @foreach( $last_testimonial as $last_test)
                        <div class="single-review">
                            <div class="carousel-item active">
                                <div class=" our-tteam-inf  Testimony_move " >
                                    <div class="bak-g-c-inf"></div>
                                    <div class=" pic-inf  ">
                                        <img src="storage/{{$last_test->img}}">
                                    </div><!-- pic-->
                                    <div class=" team-content-inf  ">
                                        <h5 class="title-inf">{{$last_test['name_'.$lang]}}</h5>
                                        <p class="post-inf">   {{$last_test['text_'.$lang]}}</p>
                                        <p class=" ">
                                            <i class="fa fa-star fa-spin"></i>
                                            <i class="fa fa-star fa-spin"></i>
                                            <i class="fa fa-star fa-spin"></i>
                                            <i class="fa fa-star fa-spin"></i>
                                            <i class="fa fa-star fa-spin"></i>
                                        </p>
                                        <p class="post-inf text-post-inf">
                                           {{$last_test['job_'.$lang]}}
                                        </p>

                                        <p class="p-ul-inf ">
                      <span class="">
                    <i class="fa fa-star fa-spin"></i>
                           {{$last_test['country_'.$lang]}}
                   </span>
                                        </p>
                                    </div><!--team-content -->
                                </div><!-- test-info-->
                            </div><!--/.carousel-item-->
                        </div>
                @endforeach
                <!-- ---------------------- -->
                </div>
             </div><!--- sec-padding-->

     </section><!--testimonial_in_quran-->
                {{-- --------------------}}
 </div><!--col-md-6 -->
{{---------------------------------------------}}
     <div class="  col-md-6">
        <!----------------start  section title---------------------->
        <section class=" title" id="testimonial">
            <div class="container ">
                <div class="section-header text-center">

                    <h2 class="h2-section-title">
                        {{trans('admin.testimonial')}}
                    </h2>
                    <div class="line">
                    </div><!--/.heazder-->
                    <span class="span-border"></span>
                </div><!--/.cont div-title-->
            </div><!--/.line-->
        </section><!--/.sec-title-->
        <!----------------End section title------------------------->
    <section class="teestmonls_in_arabic_two p-relative text-center overlay_testimonial testimonial_in_quran">
             <div class=" sec-padding ">
                <div class="owl-carousel owl-theme owl_Cochin one-catousel-custom">
                    <!-- ---------------------- -->
                   
                    <!-- ---------------------- -->
                    
                    
                    
                    
                    
                  
                        <div class="single-review">
                            <div class="carousel-item active">
                                {{--                   ---------------------------------------------}}
                                <div class=" our-tteam-inf  " >
                                    <div class="bak-g-c-inf"></div>
                                    <aside class="content_teestmonls_in_arabic">

                                        <div class="container" style="height:500px;">
                                            <div class="my-slider">
                                                <ul>
                                          
                                                 @foreach( $first_testimonial as $f_test)
                                                    <li>
                                                        <div id="kudo-wrap">
                                                            <div class="adj-layer">
                                                                <h1>{{$f_test['name_'.$lang]}}</h1>
                                                                <div class="testimonial-quote group">
                                                                    <img  src="storage/{{$f_test->img}}">
                                                                    <div class="quote-container">
                                                                        <blockquote>
                                                                            <p> 
                                                                            {{$f_test['text_'.$lang]}}
                                                                            </p>
                                                                        </blockquote>
                                                                        <cite><span>  {{$f_test['job_'.$lang]}}</span><br>
                                                                        </cite>
                                                                    </div>
                                                                </div>
                                                        {{--------------------------------------------------------------------}}
                                                    </li>
                                                   @endforeach
                                                </ul>
                                            </div>
                                        </div>

                                    </aside><!--End content_teestmonls_in_arabic-->
                                    <div class=" team-content-inf  ">
                                        <p class="p-ul-inf ">    <span class=""><i class="fa fa-star fa-spin"></i>{{trans('admin.testimonial')}} </span>
                                        </p>
                                        
                                    </div><!--team-content -->
                                </div><!-- test-info-->
                                {{--                   ---------------------------------------------}}
                            </div><!--/.carousel-item-->
                        </div>
               
                <!-- ---------------------- -->
                </div>
             </div><!--- sec-padding-->

     </section><!--testimonial_in_quran-->
                {{-- --------------------}}
 </div><!--col-md-6 -->
{{---------------------------------------------}}

        </section><!--testimonial_in_quran-->
        {{-- --------------------}}
    </div><!--col-md-6 -->
{{---------------------------------------------}}


</div><!--row -->

<!--============= End section teestmonls in quran  (10?)============ -->
