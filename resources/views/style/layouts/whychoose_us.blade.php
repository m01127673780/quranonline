{{-----------------------------------}}
@php

    if (empty (session('lang')))
    {
    $lang ='ar';
    }
        $lang = session('lang');

@endphp

{{-----------------------------------}}
<!-- ------------------------------------------------------------------------------ -->
<section>
    
</section>  

<!-- ------------------------------------------------------------------------------ -->

<!--====== start Why Choose Us ?=============================== -->

<!----------------start  section title---------------------->
<section class=" title back-fff"    >
    <div class="container ">
        <div class="section-header text-center">
            <h2 class="h2-section-title" id="whyus_top" >
                {{trans('admin.Why_hoose_Us')}} <i  class="fa fa-question-circle-o"></i>
            </h2>
            <div class="line">
            </div><!--/.heazder-->
            <span class="span-border"></span>
        </div><!--/.cont div-title-->
    </div><!--/.line-->
</section><!--/.sec-title-->
<!----------------End section title------------------------->
<!-- Button to Open the Modal -->
<!-- The Modal -->

<!-- ===================================== -->
<!--start section  statistk-->
<div id=""></div>
<section>
    <div class="div-whyus back-fff" >
        <div class="container-fluid custom_new">
            <div class="row">
                @foreach($whyus as $why)
                    <div  class="col-sm-6 col-lg-3  col-lg-padding">
                        <div class="  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility:    visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <div class=" text-center">
                                <img src="storage/{{$why->icon}}"class="img-whyus">
                                <div class="box_text_whyus">

                                <h2 class="h2-whyus">{{$why['head_'.$lang]}}</h2>
                                <h4 class="h4-whyus">{{$why['text_'.$lang]}} <span class="span-whyus">  {{$why['color_diffe_'.$lang]}} </span> </h4>
                            </div><!-- box_text_whyus -->
                            </div><!-- contant -->
                        </div><!-- col-sm-6 -->
                    </div><!-- col-sm-6 -->
                @endforeach

                    {{--            -------------------------------start news --}}
                    <article class="content_news_bar">
                    <div class="slideUp " id="news-bar">
                        <marquee direction="right" scrollamount="3" behavior="scroll" onmouseover="this.stop()" onmouseout="this.start()">
                    <!--------------------------------------------------------------------------------------------------------------------------------------->
                    <font dir=rtl class="fontnews">        <a class=linknews href="https://www.ashefaa.com/play-31030.html">انشودة انا حربجي</a> => البوم حماس 32       &#1758;  </font><font dir=rtl class="fontnews">        <a class=linknews href="https://www.ashefaa.com/play-31031.html">انشودة حماس 32</a> => البوم حماس 32       &#1758;  </font><font dir=rtl class="fontnews">        <a class=linknews href="https://www.ashefaa.com/play-31033.html">زيت جوز الهند.. بين الفوائد والاضرار ..</a> => العلاج بالأعشاب والنباتات      &#1758;  </font><font dir=rtl class="fontnews">        <a class=linknews href="https://www.ashefaa.com/play-31034.html">علماء تنبؤوا بأن فيروس كورونا قد يقتل 65 مليون شخص </a> => مقالات طبية وعلمية      &#1758;  </font><font dir=rtl class="fontnews">        <a class=linknews href="https://www.ashefaa.com/play-31035.html">ما هو فيروس كورونا وما هي اعراضه ومخاطره</a> => مقالات طبية وعلمية      &#1758;  </font><font dir=rtl class="fontnews">        <a class=linknews href="https://www.ashefaa.com/play-31036.html">الخضروات والفواكه الزرقاء مفيدة بشكل خاص للقلب</a> => العلاج بالأعشاب والنباتات      &#1758;  </font><font dir=rtl class="fontnews">        <a class=linknews href="https://www.ashefaa.com/play-31037.html">فيروس كورونا</a> => مقالات طبية وعلمية      &#1758;  </font><font dir=rtl class="fontnews">        <a class=linknews href="https://www.ashefaa.com/play-31038.html">رقية تفكك عقد العين والحسد</a> => الرقية الشرعية والأذكار      &#1758;  </font><font dir=rtl class="fontnews">        <a class=linknews href="https://www.ashefaa.com/play-31039.html">الصين تعلن رسميا عن علاج لفيروس كورونا</a> => مقالات وابحاث طبية وعلمية      &#1758;  </font><font dir=rtl class="fontnews">        <a class=linknews href="https://www.ashefaa.com/play-31041.html">انشودة مالي اراك من الوباء مفتونا</a> => أناشيد مؤثرة وحزينة      &#1758;  </font>
                    <!--------------------------------------------------------------------------------------------------------------------------------------->
                        </marquee>
                    </div>
                    <style>

                        #news-bar {
                            width: 100%;
                            background: white;
                            box-shadow: 0 4px 10px black, 0 0 10px black inset;
                            border-radius: 15px;
                            font: 21px bold;
                            padding: 0;
                            padding-top: 2px;
                            padding-left: 20px;
                            padding-right: 20px;
                        }

                        #news-bar:hover {
                            transition: 0.37s;
                        }

                        #news-bar a {
                            padding:8px 2px;
                            color: black;
                            text-decoration: none;
                        }

                        #news-bar a:hover {
                            transition: 0.37s;
                            color: red;
                        }


                        /* Pop */

                        @-webkit-keyframes hvr-pop {
                            50% {
                                -webkit-transform: scale(1.2);
                                transform: scale(1.2);
                            }
                        }

                        @keyframes hvr-pop {
                            50% {
                                -webkit-transform: scale(1.2);
                                transform: scale(1.2);
                            }
                        }

                        .hvr-pop {
                            display: inline-block;
                            vertical-align: middle;
                            -webkit-transform: translateZ(0);
                            transform: translateZ(0);
                            box-shadow: 0 0 1px rgba(0, 0, 0, 0);
                            -webkit-backface-visibility: hidden;
                            backface-visibility: hidden;
                            -moz-osx-font-smoothing: grayscale;
                        }

                        .hvr-pop:hover,
                        .hvr-pop:focus,
                        .hvr-pop:active {
                            -webkit-animation-name: hvr-pop;
                            animation-name: hvr-pop;
                            -webkit-animation-duration: 0.3s;
                            animation-duration: 0.3s;
                            -webkit-animation-timing-function: linear;
                            animation-timing-function: linear;
                            -webkit-animation-iteration-count: 1;
                            animation-iteration-count: 1;
                        }


                        /* Float */

                        .hvr-float {
                            display: inline-block;
                            vertical-align: middle;
                            -webkit-transform: translateZ(0);
                            transform: translateZ(0);
                            box-shadow: 0 0 1px rgba(0, 0, 0, 0);
                            -webkit-backface-visibility: hidden;
                            backface-visibility: hidden;
                            -moz-osx-font-smoothing: grayscale;
                            -webkit-transition-duration: 0.3s;
                            transition-duration: 0.3s;
                            -webkit-transition-property: transform;
                            transition-property: transform;
                            -webkit-transition-timing-function: ease-out;
                            transition-timing-function: ease-out;
                        }

                        .hvr-float:hover,
                        .hvr-float:focus,
                        .hvr-float:active {
                            -webkit-transform: translateY(-8px);
                            transform: translateY(-8px);
                        }


                        /* slideUp */

                        .slideUp {
                            animation-name: slideUp;
                            -webkit-animation-name: slideUp;
                            animation-duration: 1s;
                            -webkit-animation-duration: 1s;
                            animation-timing-function: ease;
                            -webkit-animation-timing-function: ease;
                            visibility: visible !important;
                        }

                        @keyframes slideUp {
                            0% {
                                transform: translateY(100%);
                            }
                            50% {
                                transform: translateY(-8%);
                            }
                            65% {
                                transform: translateY(4%);
                            }
                            80% {
                                transform: translateY(-4%);
                            }
                            95% {
                                transform: translateY(2%)
                            }
                            100% {
                                transform: translateY(0%);
                            }
                        }

                        @-webkit-keyframes slideUp {
                            0% {
                                -webkit-transform: translateY(100%);
                            }
                            50% {
                                -webkit-transform: translateY(-8%);
                            }
                            65% {
                                -webkit-transform: translateY(4%);
                            }
                            80% {
                                -webkit-transform: translateY(-4%);
                            }
                            95% {
                                -webkit-transform: translateY(2%);
                            }
                            100% {
                                -webkit-transform: translateY(0%);
                            }
                        }
                    </style>
                    </article>
                    {{--            -------------------------------End   news --}}
            </div><!-- row" -->
        </div><!--  container -->
    </div><!--  data-n -->

</section><!--End section  -->
<!--End section stitstk -->
<!--====================================== End  Why Choose Us ?=============================== -->
