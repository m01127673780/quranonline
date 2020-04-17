{{-----------------------------------}}
@php
    $lang = session('lang');

    if (empty (session('lang')))
    {
    $lang ='ar';
    }
@endphp
{{-----------------------------------}}
<!--============start Teachers=================================-->

<section class="app-review " id="review ">
    <div class="thm-container" id="Teachers">
        <section class="custm-head">
            <!----------------start  section title---------------------->
            <section class=" title" style="margin-top: 50px;">
                <div class="container ">
                    <div class="section-header text-center">
                        <!-- <span class="span-title">teacher We Do</span> -->
                        <h2 class="h2-section-title">
                           {{trans('admin.Our_teachers')}} </h2>


                        <div class="line">
                        </div><!--/.heazder-->
                        <span class="span-border"></span>
                    </div><!--/.cont div-title-->
                </div><!--/.line-->
            </section><!--/.sec-title-->

            <!----------------End section title------------------------->
        </section>
        <div class="app-review-carousel owl-theme owl-carousel wow fadeInUp" data-wow-duration="2s"   data-wow-offset="100">
            @foreach($teachers as $teacher)
                <div class="item">
                    <div class="d-hover">
                        <div class="d-ul ">
                            <div class=" d-img-teme">
                                <img src="storage/{{$teacher->img}}">
                                <div class="c-img-video video ">{{$teacher->name}}
                                </div><!--./col-8-->
                            </div>
                            <ul class="ul-icon-det ">
                                <li style="">
                                    <a href="#">
                                        <i class="fa fa-Teacher-record">
                                            {{$teacher['name_'.$lang]}}
                                            <a
                                                    class="video-icon" href=
                                            "{{$teacher->link}}"
                                                    data-lity="">
                                                <i class="fa fa-play record-icon"></i>
                                            </a>
                                        </i>
                                    </a>
                                </li>
                                <span class="back-g"> </span>
                            </ul>
                        </div>
                    </div>
                </div><!--itm-->
            @endforeach

        </div><!-- /.app-review-carousel owl-theme owl-carousel -->
    </div><!-- /.thm-container -->
</section><!-- /.app-review -->
<!--============End  Teachers ( )=================================-->
