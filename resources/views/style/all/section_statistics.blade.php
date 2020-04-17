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

            <h2 class="h2-section-title">{{trans('admin.Statistics')}}</h2>



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
                @foreach($all_statistics as $all_stat)
                    <div  class=" col-md-2">
                        <div class="stats wow fadeInUp" data-wow-duration="1s" data-wow-delay=""
                             style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInUp;  ">
                            <div class="contant">
                            @if(empty($all_stat->img))
                           <i class="fa {{$all_stat->font_awesome}} icon-sta"></i> 
                            @else
                             <img src="storage/{{$all_stat->img}}" class="icon-sta">
                            @endif
                                <span class="timer nuumber coutn-div-countTo" data-from="0" data-to="{{$all_stat->number}}"
                                      data-speed="5000" data-refresh-interval="50">{{$all_stat->number}}</span>
                                <p class="p-p-statst">{{$all_stat['head_'.$lang]}} </p>
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


    /*.img_larg_top{*/

    /*    background-image: url({{url('default/kaba.png')}})!important;*/
    /*}*/

</style>
