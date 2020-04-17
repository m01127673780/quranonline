{{-----------------------------------}}
@php
    $lang = session('lang');

    if (empty (session('lang')))
    {
    $lang ='ar';
    }
 @endphp
{{-----------------------------------}}
 
    <style>
 body{

 }
.show_one_course {
    color: red;
    height: 127vh;
     /*max-height: 130vh;*/
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
    /* text-align: center!important; */
     position: relative; 
    box-shadow: 0 -18px 113px rgba(0,0,0,0.30), 0 2px 10px rgba(0,0,0,0.22);
      background-size: cover!important; 
    background-repeat: no-repeat;
        background-position: top;
            margin-top: 52px;
          background-image:url({{url('/')}}/storage/{{$coursesfind->icon}})!important;

 }
.overlay_show_one_course {
    background-color: rgba(0, 0, 0, 0.7);
    color: #fff;
position: absolute;
    width: 100%;
    height:100%;
}

.img_show_course {
     width: 100%;
    height: 500px;
}
 
.content_show_course {
 
        background-color: rgba(0, 0, 0, 0.6);
    color: #fff;
    padding:30px;
            line-height: 2.5;
padding-bottom:0!important;
    width:70%;
    text-align:left;
        box-shadow: 2px 2px 10px rgb(93, 93, 139);
}
.icon_features_course {
    /* overflow: hidden; */
    width: 20px;
    height: 20px;
    /*float: left;*/
    width: 30px;
    height: 30px;
    border-radius: 50%;
    margin-right: 10px;
}
   .icon_ditls{  font-size: 28px;}
   footer .col-lg-3 {
    margin-top: 0!important;
    background: transparent;
    margin-bottom: 8px;
}
/*-------------------------------------------*/
@media(max-width:1500px){
    .show_one_course{
   height:200vh!important;
}
}
@media(max-width:768px){
    .content_show_course {
 
    width: 100%;
   
}
.content_show_course .container {
    
    padding-right: 0!important;
    padding-left: 0!important;
    margin-right: 0!important;
    margin-left: 0!important;
}
.show_one_course{
   height: 205vh!important;
}
}
@media(max-width:500px){
    .show_one_course{
   height: 240vh!important;
}
}
/*----------------------start section recommended*/
.Content_read_greatest_content_paym.recommended {
     background: #000!important;
    border-top: 3px solid #ffcc00!important;
}
.Content_read_greatest_content_paym.recommended .cardText {
    min-height: 100%;
    padding: 20px;
    color: #fff;
    background: #0f0421;
    line-height: 2;
    /* height: auto; */
}
/*.paths-setionpath-footre {*/
/*    fill: #444;*/
/*    stroke: #444;*/
/*}*/
.bg_000 {
    background: #000;
}
svg:not(:root) {
    overflow: hidden;
    border-top: 5px solid #ffcc00;
    border-top-left-radius: 50%;
    border-top-right-radius: 50%;
}
</style>

<!--==============Start the perfect student blog ===================-->

    <br>
         <section class="show_one_course" style="">
             <div class="overlay_show_one_course ">
            
              <!----------------start  section title---------------------->
        <section class=" title " id="courses">
            <div class="container " >
                <div class="section-header text-center">

                    <h2 class="h2-section-title color_fff">
                          {{$coursesfind['head_'.$lang]}} <i class="fa fa-hand-o-left"></i>
                    </h2>
                    <div class="line">
                    </div><!--/.heazder-->
                    <span class="span-border"></span>
                </div><!--/.cont div-title-->
            </div><!--/.line-->
        </section><!--/.sec-title-->
        <!----------------End section title------------------------->
              <div class="container ">

            <div class="row">
                <!--=======start    =========================-->
                 <div class="col-lg-6">
                    <img src="{{url('/')}}/storage/{{$coursesfind->icon}}"class="img_show_course">
                </div>
                 <div class="col-lg-6">
                <div class="content_show_course">
                    <center><h2>Course Features</h2></center>
                 <p>
<span> <img src="{{url('default/icon_curses_features/1.png')}}" class="icon_features_course"></span>
<span> {{trans('admin.Free_Trial_Classs')}}  </span>
</p>
<p>
<span> <img src="{{url('default/icon_curses_features/2.png')}}" class="icon_features_course"></span>
<span> {{trans('admin.Completion_Certificates')}}  </span>
</p>
<p>
<span> <img src="{{url('default/3-removebg-preview (1).png')}}" class="icon_features_course"></span>
<span> {{trans('admin.Classes_Around_The_Clock')}}  </span>
</p>
<p>
<span> <img src="{{url('default/icon_curses_features/4.png')}}" class="icon_features_course"></span>
<span> {{trans('admin.One_To_One_Live_Sessions')}}  </span>
</p>
<p>
<span> <img src="{{url('default/icon_curses_features/5.png')}}" class="icon_features_course"></span>
<span> {{trans('admin.Male_Female_Tutors')}}  </span>
</p>
<center>  <i   class="icon_features_course icon_ditls  fa fa-hand-o-down"> </i>  </center>
<p>
<span><i   class="icon_features_course icon_ditls  fa fa-gift"> </i> </span>
<span>   {{$coursesfind['text_'.$lang]}}  </span>
</p>

 
                  </div><!-- /.content_show_course -->
                </div><!-- /.col-lg-6 -->

                
                <!--=======Ens      =========================-->
                
                <!--=======Ens      =========================-->
                 

               </div><!-- /.row -->
               </div><!-- /.container -->

           </div><!-- /.overlay_show_one_course -->
 </section><!-- /.  -->
 
<!--=======End read_greatest=========================-->

 