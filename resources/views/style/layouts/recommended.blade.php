{{-----------------------------------}}
@php
    $lang = session('lang');

    if (empty (session('lang')))
    {
    $lang ='ar';
    }
@endphp
<section class="Content_read_greatest_content_paym recommended"  >

 



<section class="read_greatest_content" id=" ">
    <div class="data-n"  >
        <!----------------start  section title---------------------->
        <section class=" title">
            <div class="container ">
                <div class="section-header text-center">

                    <h2 class="h2-section-title color_fff">{{trans('admin.recommended')}}</h2>




                    <div class="line">
                    </div><!--/.heazder-->
                    <span class="span-border"></span>
                </div><!--/.cont div-title-->
            </div><!--/.line-->
        </section><!--/.sec-title-->
        <!----------------End section title------------------------->
        <div class="container-fluid custom_new">
            <div class="row">
                <!-- start cochin_slider------------------------------------------ -->
                <div  class=" col-md-12">
                    <section class="read_greatest_content">
                        <div class="row">

                            <div class="read_greatest owl-theme owl-carousel wow fadeInUp" data-wow-duration="2s"   data-wow-offset="100">
               
                                {{-----------------------------------}}
      
                                {{-----------------------------------}}
                                @foreach($all_courses as $all_course)
                                 <a   href="{{url('show/course/'.$all_course->id)}}">
                                <div class="item">
                                    <div class="card">
                                        <!--<div class="cardTop" style=" background-image: url({{url('default/latest/5.webp')}});"></div>-->
                                        <div class="cardTop" style=" background-image: url({{url('storage/'.$all_course->icon)}});"></div>
                                        <div class="cardBottom">
                                            <div class="cardText">
                                                <!--       Title and description will always show -->
                                                <h3 class="cardTitle"><i class="fa  fa-hand-o-down"></i> </h3>
                                                <h4 class="cardInfo">   {{$all_course['head_'.$lang]}}</h4>

                                                <!--       Only visibile when parent element is hovered over -->
                                                <div class="cardHoverText">
                                                    
                                                    <ul>
                                                           <li>  

                                                <?php  $str =$all_course['text_'.$lang] ?>
                                                <?php
                                                $arr = explode("," , $str);
                                                for ($i = 0; $i < count($arr); $i ++) {
                                                    echo    $arr[$i] .'<br>';
                                                }?>
                                                           </li>
                                                    </ul>
                                                </div>
                                                <!--       Only visibile when parent element is hovered over -->
                                            </div>
                                        </div>
                                    </div>
                                </div><!--itm-->
                               </a>

                                @endforeach

                                {{-----------------------------------}}
                            
                            </div><!-- /.app-review-carousel owl-theme owl-carousel -->
                            {{--------------------}}
                            <!--<center class="text-center"><a href="" class="text-center">VIEW ALL ARTICLES 2</a></center>-->

                            {{--------------------}}


                        </div><!--col-md-4-->




                </div><!--End cochin_slider-->
            </div><!-- row -->
            <!--<h1>VIEW ALL ARTICLES 3</h1>-->

            <!-- ------------------------------------------ -->
        </div><!--  container -->
        <!--<h1>VIEW ALL ARTICLES 4</h1>-->

    </div><!--  data-n -->
     
</section><!--End section  -->




















<!--==============End section stitstk  ===================-->

<section class="discount_custtomized_payment" id="discount_custtomized_payment">
    <div class="data-n"  >
        <div class="container">
            <!-- start cochin_slider------------------------------------------ -->

            <section class="discount_custtomized_payment_content">


                <div class="row">

                    <div class="col-md-4">
                        <div class="flip">
                            <div class="front" style=" background-image: url({{url('default/latest/7.webp')}});">
                                <h1 class="text-shadow"> </hi>
                            </div>
                            <div class="back">
                                <h2>  {{trans('admin.Family_Package')}} </h2>
                                <p> 
                                  {{trans('admin.text_Family_Package')}}
                                    </p>
                            </div>
                        </div>'
                        </div><!-- col-md-3-->
                    <div class="col-md-4">
                        <div class="flip flip-vertical">
                            <div class="front" style=" background-image: url({{url('default/latest/8.webp')}});">
                                <h1 class="text-shadow"> </hi>
                            </div>
                            <div class="back">
                                <h2>  {{trans('admin.Pay_Per_Class_DISCOUNTTS')}} </h2>
                                <p> 
                                  {{trans('admin.text_Pay_Per_Class_DISCOUNTTS')}}
                                    </p>
                            </div>
                        </div></div><!-- col-md-3-->

                    <div class="col-md-4">
                        <div class="flip">
                            <div class="front" style=" background-image: url({{url('default/latest/9.webp')}});">
                            </div>
                            <div class="back">

                                <div class="box-text-inner">


                                    <h4><span data-text-color="primary">{{trans('admin.payment_methods')}} </h4>
                                    <ul>
                                        <li><p>{{trans('admin.text_payment_methods')}}</p>
                                     
                                       </li>
                                    </ul>

                                </div>                      </div>
                        </div></div><!-- col-md-3-->
                </div><!-- col-sm-6 row-->

            </section><!--End cochin_slider-->
            <!-- ------------------------------------------ -->
        </div><!--  container -->
    </div><!--  data-n -->
</section><!--End section  -->
<!--==============End section stitstk  ===================-->
</section><!--End Content_read_greatest_content_paym  -->

<style>
    /*-------------------------------------------------------*/
    /*start componnt section statstk*/
    .Content_read_greatest_content_paym{
        background:url({{url('default/read_greatest_content.png')}}) no-repeat center center  fixed;

}
    .read_greatest_content{
        color: red;   l;m
        {{--background:url({{url('default/read_greatest_content.png')}}) no-repeat center center  fixed;--}}
        height: 67vh;
        color: #fff;
        background-size: cover;
        -webkit-background-size: cover;
        -o-background-size: cover;
        -moz-background-size: cover;
        -ms-background-size: cover;
        -webkit-background-attachment: fixed;
        -moz-background-attachment: fixed;
        -o-background-attachment: fixed;
        -ms-background-attachment: fixed;
        background-attachment: fixed;
        text-align: center!important;
        /*margin-bottom: 150px;*/
    }





    .read_greatest_content{
        color: red;
        height: 67vh;
        color: #fff;
        background-size: cover;
        -webkit-background-size: cover;
        -o-background-size: cover;
        -moz-background-size: cover;
        -ms-background-size: cover;
        -webkit-background-attachment: fixed;
        -moz-background-attachment: fixed;
        -o-background-attachment: fixed;
        -ms-background-attachment: fixed;
        background-attachment: fixed;
        text-align: center!important;
        margin-bottom: 150px;
    }


    /*-------------------------------------------------------*/
    /*start componnt section statstk*/
    .discount_custtomized_payment {
         height: auto;
        height: auto;
        margin-top: 100px;
        padding-top: 80px;
        padding-bottom: 50px;
    }





    /*   -----------------------------------------------start code cart */
    @import url("https://fonts.googleapis.com/css?family=Roboto+Mono");

    .flip {
        position: relative;
    }
    .flip > .front,
    .flip > .back {
        display: block;
        transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
        transition-duration: 0.5s;
        transition-property: transform, opacity;
    }
    .flip > .front {
        transform: rotateY(0deg);
    }
    .flip > .back {
        position: absolute;
        opacity: 0;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        transform: rotateY(-180deg);
    }
    .flip:hover > .front {
        transform: rotateY(180deg);
    }
    .flip:hover > .back {
        opacity: 1;
        transform: rotateY(0deg);
    }
    .flip.flip-vertical > .back {
        transform: rotateX(-180deg);
    }
    .flip.flip-vertical:hover > .front {
        transform: rotateX(180deg);
    }
    .flip.flip-vertical:hover > .back {
        transform: rotateX(0deg);
    }

    .flip {
        position: relative;
        display: inline-block;
        margin-right: 2px;
        margin-bottom: 1em;
        width: 100%;
    }
    .flip > .front,
    .flip > .back {
        display: block;
        color: white;
        width: inherit;
        background-size: cover !important;
        background-position: center !important;
        height: 220px;
        padding: 1em 2em;
        background: #313131;
        border-radius: 10px;
    }
    .flip > .front p,
    .flip > .back p {
        font-size: 0.9125rem;
        line-height: 160%;
        color: #999;
    }

    .text-shadow {
        text-shadow: 1px 1px rgba(0, 0, 0, 0.04), 2px 2px rgba(0, 0, 0, 0.04), 3px 3px rgba(0, 0, 0, 0.04), 4px 4px rgba(0, 0, 0, 0.04), 0.125rem 0.125rem rgba(0, 0, 0, 0.04), 6px 6px rgba(0, 0, 0, 0.04), 7px 7px rgba(0, 0, 0, 0.04), 8px 8px rgba(0, 0, 0, 0.04), 9px 9px rgba(0, 0, 0, 0.04), 0.3125rem 0.3125rem rgba(0, 0, 0, 0.04), 11px 11px rgba(0, 0, 0, 0.04), 12px 12px rgba(0, 0, 0, 0.04), 13px 13px rgba(0, 0, 0, 0.04), 14px 14px rgba(0, 0, 0, 0.04), 0.625rem 0.625rem rgba(0, 0, 0, 0.04), 16px 16px rgba(0, 0, 0, 0.04), 17px 17px rgba(0, 0, 0, 0.04), 18px 18px rgba(0, 0, 0, 0.04), 19px 19px rgba(0, 0, 0, 0.04), 1.25rem 1.25rem rgba(0, 0, 0, 0.04);
    }

    /*   -----------------------------------------------End   code cart */

</style>