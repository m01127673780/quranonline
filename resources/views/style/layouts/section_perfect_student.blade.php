{{-----------------------------------}}
@php
    $lang = session('lang');

    if (empty (session('lang')))
    {
    $lang ='ar';
    }
 @endphp
{{-----------------------------------}}

<!--==============Start the perfect student blog ===================-->
<!----------------start  section title---------------------->
<section class="background-perfect-student" style="-n_background:#f4f4f4;">
    <section class=" title">
        <div class="container ">
            <div class="section-header text-center">
                <h2 class="h2-section-title">
                    {{trans('admin.the_perfect_student')}}
                </h2>
                <div class="line">
                </div><!--/.heazder-->
                <span class="span-border"></span>
            </div><!--/.cont div-title-->
        </div><!--/.line-->
    </section><!--/.sec-title-->
    <!----------------End section title------------------------->
    <br>
    <section class="wandiw text-center">
        <section class="section-all-fotar">
            <div class="statstk">
                <!--=======start   read_greatest=========================-->
                <section class="app-review" id="review">
                    <div class="thm-container">
                        <div class=" read_greatest owl-theme owl-carousel wow fadeInUp" data-wow-duration="2s" data-wow-offset="100">
                            <!-- ------------------------------------>
                            @foreach( $beststudent as $best)
                                <div class="item">
                                    <div class="card card-beststudan">
                                        <div class ="background-f4">
                                            <img class="card-img-top" src="storage/{{$best->img}}"    alt="Card image cap">
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">{{$best['name_'.$lang]}} </h4>
                                            <article class="article-subtitle" >
                                                <i class="icon-calendar"></i>
                                                <span class="card-subtitle">  {{$best['date_'.$lang]}} </span>
                                                <i class="icon-chat"></i>
                                                <span class="card-subtitle">  {{$best['Lecture_'.$lang]}} </span>
                                            </article><!--  article-subtitle -->
                                            <p class="card-text section-desc text-left myBox">{{$best['text_'.$lang]}} </p>
                                            <a href="#Package" class="a-img-Ather ">
                                  <span class="span-a-bolog">
                                  <i>{{trans('admin.in_course')}}</i>
                                  <i class="fa fa-long-arrow-right"></i>
                                  </span>
                                            </a>
                                            <hr>
                                            <a href="#" class="a-img-Ather ">
                                                <img  src="storage/{{$best->img_Teacher}}" alt="">
                                                <span class="span-Author">
                                    <span >
                                     <span class="name-Author" >{{$best->name_Teacher_en}}</span>
                                    <author>({{$best['job_'.$lang]}})</author>
                                    </span>
                                  </span>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--  itm-->
                        @endforeach
                        <!-- ------------------------------------>
                        </div><!-- /.app-review-carousel owl-theme owl-carousel -->
                </section><!-- /.app-review -->
            </div><!-- /.statstk -->
        </section><!-- /.section-all-fotar -->
    </section><!-- /.wandiw text-center -->
</section><!-- /.background-perfect_student -->

<!--=======End read_greatest=========================-->

