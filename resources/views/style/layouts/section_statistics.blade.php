{{-----------------------------------}}
@php
    $lang = session('lang');

    if (empty (session('lang')))
    {
    $lang ='ar';
    }
@endphp
{{-----------------------------------}}
<!--=========================Start Statistics =================-->
<!----------------start  section title---------------------->
<section class=" title">
    <div class="container ">
        <div class="section-header text-center">

            <h2 class="h2-section-title">{{trans('admin.statistics')}}</h2>



            <div class="line">
            </div><!--/.heazder-->
            <span class="span-border"></span>
        </div><!--/.cont div-title-->
    </div><!--/.line-->
</section><!--/.sec-title-->
<!----------------End section title------------------------->
<!-- ===================================== -->
<!--start section  statistk-->


<section class="statistics-n " id="statistics">
    <div class="data-n"  >
        <div class="container-fluid">
            <div class="row">
                <!-- ------------------------------------------ -->
                @foreach($stat as $st)
                    <div  class=" col-md-2">
                        <div class="stats wow fadeInUp" data-wow-duration="1s" data-wow-delay=""
                             style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInUp;  ">
                            <div class="contant">
                            <!--  <i class="fa {{$st->font_awesome}} icon-sta"></i> -->
                            @if(empty($st->img))
                           <i class=" {{$st->font_awesome}} icon-sta"></i> 
                            @else
                             <img src="storage/{{$st->img}}" class="icon-sta">
                            @endif
                                <span class="timer nuumber coutn-div-countTo" data-from="0" data-to="{{$st->number}}"
                                      data-speed="5000" data-refresh-interval="50">{{$st->number}}</span>
                                <p class="p-p-statst">{{$st['head_'.$lang]}} </p>
                            </div><!-- contant -->
                        </div><!-- col-sm-6 -->
                    </div><!-- col-sm-6 -->
            @endforeach
            <!-- ------------------------------------------ -->
            </div><!--  container -->
        </div><!--  data-n -->
</section><!--End section  -->
<!--==============End section stitstk  ===================-->
<style type="text/css">
    .statistics-n{
        color: red;
        background:url({{url('default/statistics.png')}}) no-repeat center center  fixed;
        min-height: 400px;
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
    }
    .single-review{
        color: red;
        background:url({{url('default/statistics.png')}}) no-repeat center center  fixed!important;
        min-height: 400px;
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
    }


    .our-tteam-inf{

        background-image: url({{url('default/testimonial.gif')}})!important;
    }

</style>
