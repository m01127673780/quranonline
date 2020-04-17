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
                    {{trans('admin.q_s_videos')}}
                </h2>
                <div class="line">
                </div><!--/.heazder-->
                <span class="span-border"></span>
            </div><!--/.cont div-title-->
        </div><!--/.line-->
    </section><!--/.sec-title-->
    <!----------------End section title------------------------->
    <br>
         <section class="all_q_s_videos ">
            <div class="container-fluid custom_new">
                <!--=======start   read_greatest=========================-->
                <section class="app-review" id="review">
                         <div class=" q_s_videos owl-theme owl-carousel wow fadeInRight" data-wow-duration="2s" data-wow-offset="100">

                            <!-- ------------------------------------>
                            <div class="item">
                                <div class="  card_q_s_videos">
                                    <div class ="content_img_q_s_videos">
                                        <img class=" img_q_s_videos" src="{{url('default/q_s_videos/1.png')}}" alt="q_s_videos">
                                    </div>1
                                    <a href=
                                       " {{url('https://www.youtube.com/watch?v=8ZTeFyVs3zk')}}"
                                       data-lity="" class ="content_icon_s_videos">  <img class=" icon_q_s_videos" src="{{url('default/youtube.gif')}}" alt="q_s_videos">
                                    </a>
                                </div><!--  card_q_s_videos-->
                            </div><!--  itm-->
                            <!-- ------------------------------------>
                            <!-- ------------------------------------>
                            <div class="item">
                                <div class="  card_q_s_videos">
                                    <div class ="content_img_q_s_videos">
                                        <img class=" img_q_s_videos" src="{{url('default/q_s_videos/2.png')}}" alt="q_s_videos">
                                    </div>2
                                    <a href=
                                       " {{url('https://www.youtube.com/watch?v=R3t9ePIzleU')}}"
                                       data-lity="" class ="content_icon_s_videos">  <img class=" icon_q_s_videos" src="{{url('default/youtube.gif')}}" alt="q_s_videos">
                                    </a>
                                </div><!--  card_q_s_videos-->
                            </div><!--  itm-->
                            <!-- ------------------------------------>
                            <!-- ------------------------------------>
                            <div class="item">
                                <div class="  card_q_s_videos">
                                    <div class ="content_img_q_s_videos">
                                        <img class=" img_q_s_videos" src="{{url('default/q_s_videos/3.png')}}" alt="q_s_videos">
                                    </div>33
                                    <a href=
                                       " {{url('https://www.youtube.com/watch?v=-PqP0BCiTlE')}}"
                                       data-lity="" class ="content_icon_s_videos">3 <img class=" icon_q_s_videos" src="{{url('default/youtube.gif')}}" alt="q_s_videos">
                                    </a>33
                                </div><!--  card_q_s_videos-->
                            </div><!--  itm-->
                            <!-- ------------------------------------>
                            <!-- ------------------------------------>
                            <div class="item">
                                <div class="  card_q_s_videos">
                                    <div class ="content_img_q_s_videos">
                                        <img class=" img_q_s_videos" src="{{url('default/q_s_videos/4.png')}}" alt="q_s_videos">
                                    </div>44
                                    <a href=
                                       " {{url('https://www.youtube.com/watch?v=Y2sfUdJ4e6o')}}"
                                       data-lity="" class ="content_icon_s_videos">4 <img class=" icon_q_s_videos" src="{{url('default/youtube.gif')}}" alt="q_s_videos">
                                    </a>
                                </div><!--  card_q_s_videos-->
                            </div><!--  itm-->
                            <!-- ------------------------------------>
  <!-- ------------------------------------>
                            <div class="item">
                                <div class="  card_q_s_videos">
                                    <div class ="content_img_q_s_videos">
                                        <img class=" img_q_s_videos" src="{{url('default/q_s_videos/5.png')}}" alt="q_s_videos">
                                    </div>55
                                    <a href=
                                       " {{url('https://www.youtube.com/watch?v=Xlf70K7yPZ8')}}"
                                       data-lity="" class ="content_icon_s_videos">4 <img class=" icon_q_s_videos" src="{{url('default/youtube.gif')}}" alt="q_s_videos">
                                    </a>
                                </div><!--  card_q_s_videos-->
                            </div><!--  itm-->
                            <!-- ------------------------------------>

                        </div><!-- /.app-review-carousel owl-theme owl-carousel -->
                    </section><!-- /.wandiw text-center -->

          </div><!-- /.container -->
     </section><!-- /.all_q_s_videos -->
</section><!-- /.background-perfect_student -->
<style>
{{--    ------------------------------}}

  .icon_q_s_videos{
    width: 76px!important;
    height: 94px;
    display: inline-block;
    position: absolute;
    top: 37%;
    left: 48%;
}
{{--    ------------------------------}}
    .card_q_s_videos
    {
        border-radius: 20px;
        /*background: none;*/
        border: none;
        /*background-image: url("http://www.r-infographie.be/codepen/cadre2.png");*/
        /*background-image: url("https://png.pngitem.com/pimgs/s/508-5080323_chairish-small-logo-picture-frame-hd-png-download.png");*/
        background-image: url("https://filacoahuila.com/wp-content/uploads/2019/11/Legend-Motoclub-Franco-Naglia-God-in-Islam-Istighfar-China-Wind-exquisite-pattern-border-yellow-flower-frame-blown-up.jpg");
        padding: 20px;

        height: 300px;
        background-image: url("{{url('default/border1.png')}}");
background-repeat: no-repeat;
        background-size: contain;


    }
</style>
<!--=======End read_greatest=========================-->

