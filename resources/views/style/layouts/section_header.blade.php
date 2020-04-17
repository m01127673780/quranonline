
{{-----------------------------------}}
@php
    $lang = session('lang');

    if (empty (session('lang')))
    {
    $lang ='ar';
    }
@endphp
{{-----------------------------------}}
<!--------------start section Welcom 1 ------------->
<section style="height: 100vh">
    <header class="header-nav " style="background: #f8f9fa;">
        <!--start nav Bar-->
        @include('style.layouts.navbar_home')
        @include('style.section_message_session')
    </header><!-- </header>-->
    <!-- ==================================== -->
    <!----------------End section title------------------------->
    <!--Carousel Wrapper-->
    <section class="overlay" style=" ">
        <div class="slider" style="height:100vh">
            <div id="main-slider" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner" id="">
                    {{--                    <h1 class="heade_offer_price">30 Minutes Free Trial Class</h1>--}}
                    <h1 class="wow fadeInLeft text-slader" data-wow-duration="1s"
                           data-wow-iteration="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeft;">

                        <div class="text-colip">
                            @foreach($Slidertext as $slidtext)
                                <span class="span-clip-title wow  head_box   animated" style="visibility: visible;">{{$slidtext['head_'.$lang]}}</span>
                                <section class="  bounceIn head_box head_title_offer_price" style="visibility: visible; animation-name: bounceIn;">
                                    <span class="span-clip-title state_text ">  {{$slidtext['title_'.$lang]}} </span>
                                    <span class="cd-headline clip is-full-width">
                                  <span class="cd-words-wrapper    bounceIn" style="width: 52.1313px; visibility: visible; animation-name: bounceIn; ">
                                    <b class="bold is-visible" style="font-size:15xp!important;"> </b>
                                    <b class="bold is-hidden">{{$slidtext['text1_'.$lang]}}   </b>
                                    <b class="bold is-hidden">{{$slidtext['text2_'.$lang]}}   </b>
                                    <b class="bold is-hidden">{{$slidtext['text3_'.$lang]}}   </b>
                                    @endforeach
                              </span>
                         </span>
                                </section> <!-- cd-intro -->
                        </div> <!-- text-colip -->
                    </h1>
                    <a style="display:none;" href="#one"><i data-brackets-id="2485" class=" man   fa fa-angle-down"></i></a>
                    <div class="overlay"></div>
                    <div class="">
                    <?php
                    $slide = 0 ;
                    ?>
                    <!---------------->
                        @foreach($Slider as $slid)
                            <div class="carousel-item carousel-one {{ $slide == 0 ? 'active':''}}" style="height:100vh">
                                <img class="d-block w-100" src="storage/{{$slid->img}} " alt="Third slide">
                            </div>
                        <?php
                        $slide++;
                        ?>
                    @endforeach
                    <!---------------->
                    </div>
                </h1>
                <!--/.Slides-->
            </div>
            <ol class="carousel-indicators">
                <?php
                $i = 0;
                ?>
                @foreach($Slider as $slid)

                    <li data-target="#main-slider" data-slide-to="{{$i}}">
                    <?php
                    $i++;
                    ?>
                @endforeach
            </ol>
            <a class="carousel-control-prev carousel-control-prev-slider-main  " href="#main-slider" role="button" data-slide="prev">
                <span class="control_icon_slider"><span class="carousel-control-prev-icon main-slider-prev" aria-hidden="true"></span></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next " href="#main-slider" role="button" data-slide="next">
                <span class="control_icon_slider"><span class="carousel-control-next-icon nextsilder-top main-slider-next" aria-hidden="true"></span></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!--/.Carousel Wrapper-->
    <!-- =======End Videos ========================= -->
</section>
<!--======      End   section header  =============================== -->
