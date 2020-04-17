
{{-----------------------------------}}
@php
    $lang = session('lang');

    if (empty (session('lang')))
    {
    $lang ='ar';
    }
@endphp
<style>
.img_larg_top {
    color: red;
     /*background: url({{url('default/kaba.png')}}) no-repeat center center fixed;*/
    height: 60vh;
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
    position: relative;
    box-shadow: 0 -18px 113px rgba(0,0,0,0.30), 0 2px 10px rgba(0,0,0,0.22);
    background: url({{url('default/kaba.png')}}) 100% 31% no-repeat;
    background-size: cover;
    min-height: 400px;
    padding: 100px 0;
}
.overlay_img_larg_top {
    background-color: rgba(0, 0, 0, 0.0);
    color: #fff;
position: absolute;
    width: 100%;
    height: 100%;
}

header{
    background: transparent!important;
}



.content_text_img_larg_top h1 {
     font-size: 60px;
    margin-top: 60px;
 }

.content_text_img_larg_top h2 {
    font-size: 32px;
    color: #dacb8f;
    color: #e5b14c;
    margin: 20px 0;
}
</style>
<style>
    @media(max-width:768px)
{
.page_all_cou_rse .content_text_img_larg_top {
    margin-top: 104px!important;
}
.content_text_img_larg_top h1 {
    font-size: 27px!important;
 }
 .content_text_img_larg_top h2 {
    font-size: 16px;
 
    margin: 20px 0;
    padding: 0px 68px;
}
 .content_text_img_larg_top h3{
    font-size: 15px;
    font-size: 15px!important;
    line-height: 2;
    padding: 0 31px;
}
}
</style>
{{-----------------------------------}}
<!--------------start section Welcom 1 ------------->
<section class="img_larg_top  " >
     <div class="overlay_img_larg_top" style=" ">

    <header class="  " style="">
        <!--start nav Bar-->
        @include('style.layouts.navbar')
        @include('style.section_message_session')
    </header><!-- </header>-->
            <div class="content_text_img_larg_top">
            <h1 >{{trans('admin.Recite_it_right_to_recite_it')}}</h1>
            <h2 >{{trans('admin.eaching_the_correct_reading_of_the_Quran')}}</h2>
            <h3 >{{trans('admin.Now_you_can_learn_clock')}}</h3>
            </div>
</section><!--img_larg_top-->
<!--======      End   section header  =============================== -->
