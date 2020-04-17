<!-- The Modal -->
<div class="modal modal_quick" id="myModal2">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <h2 class="head_form_2"> {{trans('admin.contactus')}}</h2>
            <div class="modal-header">
{{--                <h4 class="modal-title">    Contact us  </h4>--}}
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                 <form method="post"  class="form-contact "action ="{{url('user/register')}}" >
                    <input type="hidden" name="_token" value="{{ csrf_token ()}}">
                    <div class="row">
                        <div class="col-lg-6 left-3-input">
                            <input type="text" class="form-control input_border_bottom"  name="name"    placeholder="{{trans('admin.full_name')}}">
                        </div>
                        <div class="col-lg-6 left-3-input">
                        <input type="email" class="form-control input_border_bottom" name="email"   placeholder="{{trans('admin.email')}}">
                    </div>
                        <div class="col-lg-12">
                            <input type="text" class="form-control"     name="phone"    placeholder="{{trans('admin.phone')}}">
                            <textarea class="form-control"              name="message"   placeholder="  ☺ {{trans('admin.Leave_us_a_message')}}  "></textarea>
                        </div>
                    </div><!-- ./row -->
                    <center class="center_margin" style="margin: 20px 0;">
                        <button class="btn btn-primary btn-lg btn-block    type="submit">   {{trans('admin.send')}}<i class="fa fa-paper-plane-o "></i> </button>
                    </center>
                </form>




                <!-- Modal footer -->
{{--                <div class="modal-footer"></div>--}}

            </div><!-- ./modal-body -->
        </div><!-- ./modal-content -->
    </div><!-- ./modal-dialog -->
</div><!-- #/ myModal2-->




{{---start modal_countdown --------------}}
<div class="modal fade modal_countdown" id="modal_countdown" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close btn-danger btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{--                                    ⏰--}}
                <div class="col-lg-6">
                    <div class="example">
                        <h1 class="content_OFFER">  <p class="d-inline bg vc">{!! trans('admin.OFFER') !!} </p>  <p class="d-inline">{{trans('admin.OF_THE_DAY')}}</p> </h1>
                        <h3> <p class="d-inline bg_color"> {{trans('admin.one_any')}}</p>    <p class="d-inline "> {{trans('admin.couurse_at_website')}}</p></h3>
                        <p class="text_OFFER">Welcome to our site, if you need help simply reply to this message, we are online and ready to help.if  </p>

                        <span class="color_fff">{{trans('admin.OFFER_end_in')}}</span>
                        <div id="flipdown" class="flipdown"></div>
                        <div class="buttons">
                            <a  class="button">
                                <img class="img_clock" src="https://img.pngio.com/fileanalogclockanimation1-2hands-1h-in-realtimegif-wikimedia-clock-png-gif-900_900.gif">
                                <span>
                                               <!----------------------------------->
                                                <aside class="digitalClock"> <div id='digitalClock'></div></aside></span></a>
                            <!----------------------------------->
                            <!----------------------------------->
                            <form method="post"  class="form-contact "action ="{{url('user/register')}}" >
                                <input type="hidden" name="_token" value="{{ csrf_token ()}}">
                                <div class="row">
                                    <div class="col-lg-6 left-3-input">
                                        <input type="text" class="form-control input_border_bottom"  name="name"    placeholder="{{trans('admin.full_name')}}">
                                    </div>
                                    <div class="col-lg-6 left-3-input">
                                        <input type="email" class="form-control input_border_bottom" name="email"   placeholder="{{trans('admin.email')}}">
                                    </div>


                                </div><!-- ./row -->
                                <center class="center_margin" style="margin: 20px 0;">
                                    <button class="btn btn-dark  btn-lg btn-block    type="submit">   {{trans('admin.send')}}<i class="fa fa-paper-plane-o "></i> </button>
                                </center>
                            </form>
                                                    <div class="content_tols_facebook" style="color:#fff!important" >
                                                          
                                                         <br>
                                                         
                {{---------------------------------------start li End  btn like--}}
                
                
                <aside class="content_button_like">
                
                <!-- start btn like --------------------->
                
                <!-- Go to www.addthis.com/dashboard to customize your tools --><div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ar_AR/sdk.js#xfbml=1&version=v6.0"></script>
                
                <!-- start btn like --------------------->
                <!-- Load Facebook SDK for JavaScript -->
                <div id="fb-root"></div>
                
                <!-- Your like button code -->
                <div class="fb-like"
                data-href="http://cracky-eg.com"
                data-layout="standard"
                data-action="like"
                data-show-faces="true">
                </div>
                <style>
                .content_button_like {
             color:#fff!important;
                }
                ._2tga._8j9v {
                          color:#fff!important;

                display: inline-block;
                /*position: absolute;*/
                
                }
             #u_0_4{
                  color:#fff!important;  
                }
                /*-------------- start -my coustom style ----------------*/
                .content_button_like {
    color: #fff!important;
    background: #fff;
    margin-bottom: 10px;
    position: absolute;
    display: block;
    bottom: 39px;
    font-weight: bold;
}
@media(max-width:768px)
{
    .content_button_like {
    color: #fff!important;
    background: rgba(255,255,255,.5)important;
    /* margin-bottom: 10px; */
    position: absolute;
    display: block;
    bottom: 39px;
    left: -137pximportant;
    padding: 1pximportant;
    /* font-weight: bold; */
}
}
._51mz ._51m-:first-child {
    padding-right: 0;
    background: red!important;
    color: #fff;
}
                /*-------------- End   -my coustom style ----------------*/
                </style>
                
                <!-- End  btn like --------------------->
                </aside>
                
                {{---------------------------------------End   End  btn like--}}
                
                                                    
                 {{---------------------------------------start  li    btn share facf book ----------------}}
                             <aside>
                                <!-- start btn like --------------------->
                                <!-- Load Facebook SDK for JavaScript -->
                                <div id="fb-root"></div>
                                <script>(function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) return;
                                        js = d.createElement(s); js.id = id;
                                        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>

                                <!-- Your share button code -->
                                <div class="fb-share-button"
                                     data-href="http://cracky-eg.com"
                                     data-layout="button_count">
                                </div>
                                <!-- End  btn like --------------------->

                            </aside>
                        {{---------------------------------------End    li    btn share facf book ----------------}}
                                                    </div>

                            <!----------------------------------->
                        </div>

                    </div>

 
                </div><!-- col-lg-6" -->
            </div>

        </div>
    </div>
</div>
<style>

    /*start    CountDown And digitalClock   ---------------------------- */
    #digitalClock{
        font-family: Lato;
        font-size: 20px;
        font-weight: 200px;
    }
    /*------------------------- End digitalClock*/

    .modal_countdown .img_clock {
        width: 30px!important;
        background-color: white;
        height: 30px!important;
        filter: invert(1);
    }
    .modal_countdown .content_OFFER {
        margin: 11px 0;
    }
    .modal_countdown .text_OFFER {
        margin-top: 16px;
    }
    .modal_countdown .bg_color {
        background: #ffcc00;
    }
    .modal_countdown .bg {
        background: #ffcc00;
        margin: 0 10px;
        margin-right: 26px;

    }
    /*---------*/
    .vc {
        background: #ffcc00;
        color: #fff;
        width: 58px;
        text-align: center;
        /*padding: 6.5px 18px;*/
        position: relative;
    }
    .vc:after {
        width: 0;
        height: 0;
        border: 12.5px solid transparent;
        position: absolute;
        content: "";
        border-top-color: #ffcc00;
        right: -23px;
        top: 4px;
        border-left-color: #ffcc00;
    }
    .vc:before {
        width: 0;
        height: 0;
        border: 13px solid transparent;
        position: absolute;
        content: "";
        border-bottom-color: #ffcc00;
        right: -23px;
        top: 3px;
    }
    /*---------*/
    .modal_countdown .form-contact .form-control {
         border: 1px solid #3a3a3b;
       background: rgba(255,255,255,.2)!important;
        color:yellow;
    }
    .modal_countdown p {
        color: #fff;
    }

    .modal_countdown .example {
        font-family: 'Roboto', sans-serif;
        width: 550px;
        height: auto;
        margin: auto;
        padding: 20px;
        box-sizing: border-box;
        background: rgba(0,0,0,.8)!important;
    }
    @media (max-width: 768px) {
        .modal_countdown .example {
            width: 300px;
            padding:8px;
        }
 .flipdown .rotor-group {
    padding-right: 5px;
 

    }
    }
    .modal_countdown .modal {
        z-index: 999999!important;
        background: rgba(0,0,0,.6)!important;
    }
    .modal_countdown button.close:hover  {
        transform: rotate(180deg);
        transition: all .3s ease-in-out;

    }
    .modal_countdown button.close {
        padding: 0;
        background-color: rgba(0,0,0.5);
        color: #fff;
        border: 0;
        -webkit-appearance: none;
        /* margin-bottom: -72px!important; */
        position: absolute;
        /* right: -65px; */
        left: 29px;
        width: 37px;
        height: 37px;
        top: 27px;
        opacity: 1!important;
        transition: all .3s ease-in-out;

    }


    .modal_countdown .modal-header    {

        border-bottom: none;


    }
    .modal_countdown .modal-content   {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: transparent;
        background-clip: padding-box;
        border: none;
        border-radius: .3rem;
        outline: 0;
    }
    /*End      CountDown And Clock   ---------------------------- */
</style>
{{---End   modal_countdown --------------}}