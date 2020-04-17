@if(session()->has('success'))

<div class="alert   alert-block content_MULTIPLE_BORDERS">
    <button type="button" class="  btn btn-danger btn_close_BORDERS " data-dismiss="alert">×</button>
    <aside>
        <div class="body dark-background" style=" background-image: url(https://i.ibb.co/nrmkm7d/five-bells-washed-out-logo.png) , linear-gradient(to right, rgba(58, 61, 62, 1) 0%, rgba(58, 61, 62, 1) 100%);">
            <div class="outer-border">
                <div class="mid-border">
                    <div class="inner-border">
                        <img class="corner-decoration corner-left-top" src="https://i.ibb.co/4mKvK3N/corner-decoration.jpg"></img>
                        <img class="corner-decoration corner-right-top" src="https://i.ibb.co/4mKvK3N/corner-decoration.jpg"></img>
                        <img class="corner-decoration corner-right-bottom" src="https://i.ibb.co/4mKvK3N/corner-decoration.jpg"></img>
                        <img class="corner-decoration corner-left-bottom" src="https://i.ibb.co/4mKvK3N/corner-decoration.jpg"></img>
                        {{--                            <img class="vertical-decoration top" src="https://i.ibb.co/JRTK9z4/horizontally-centered-vertical-decoration.png"></img>--}}
                        {{--                            <img class="vertical-decoration bottom" src="https://i.ibb.co/JRTK9z4/horizontally-centered-vertical-decoration.png"></img>--}}

                        <!-- Page Content -->
                        <div class="container">
                            <div class="row social-row">
                                <a href="#" target="_blank" class="d-none" style="background-image: url(https://i.ibb.co/k0JQYv4/instagram-social-button.png)"></a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    @if(session()->has('image'))

                                    <img class="image_user_register m_t_70px" src="storage/teachersignup/{{ Session::get('image') }}" alt="Five Bells logo">
                                    @else
                                    {{--                                            @foreach($setting as $sett)--}}
                                    {{--                                                <div class=" "><img class="image_user_register m_t_70px" src="storage/{{$sett->logo}}" alt="Five Bells logo"></div>--}}
                                    {{--                                            @endforeach--}}
                                    @endif

                                    <h1 class="text-uppercase white-text countach"> {{trans('admin.welcome')}}</h1>
                                    <center class="text_name_user_fo_seesion">{{session()->get('name')}}</center>

                                    <h6 class="text-uppercase text_Wait_for__account countach">{{trans('admin.Wait_for_your_account_to_be_activated_And_Communicate_with_you')}}</h6>
                                    <h6 class="text-uppercase text_Wait_for__account countach">

                                    </h6>
                                    <p class="lead skintone-text">
                                        {{--                                                    <span class="name skintone-text countach">Add your own washed</span>--}}
                                        {{--                                                    <span class="place skintone-text tilda-petite">Creative Logo<span>--}}
                                    </p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>
@endif
<style>
    .body {
        background-image: url(https://i.ibb.co/nrmkm7d/five-bells-washed-out-logo.png), linear-gradient(to right, rgb(58, 61, 62) 0%, rgb(58, 61, 62) 10%);
        width: 233px;
        height: 238px;
        position: absolute;
        z-index: 999999;
    }
    .text_Wait_for__account {
        color: #fff;
        font-size: 19px;
        margin-top: -25px;
        margin-bottom: 0px!important;
    }
    .text_name_user_fo_seesion {
        color: #fff;
        margin: 16px;
        /* margin-top: -3px; */
    }
    .white-text {
        color: #fff;
        font-size: 25px;
        margin-bottom: -9px;
    }
    .text_name_user_fo_seesion {
        color: #fff;
        margin: 16px;
        margin-top: 4px;
        margin-bottom: 35px;
    }




    @media (min-width: 1200px){
        .corner-decoration {
            width: 4em;
            margin: -6px;
        }
    }
    .outer-border {

        width: 100%;
    }
    .content_MULTIPLE_BORDERS {
        margin-top: 30px;
        margin-bottom: -38px;
        z-index: 9999;
    }
    .content_MULTIPLE_BORDERS {
        top: 124px;
        margin-bottom: -38px;
        z-index: 99999999;
        position: absolute;
        right: 30.7%;
    }
    .btn_close_BORDERS {
        margin-left: -7px;
        margin-top: -37px;
        position: absolute;
        /* left: 264%; */
    }
    @media (max-width: 992px){
        .content_MULTIPLE_BORDERS {
            margin-top: 103px;
            margin-bottom: -38px;
            z-index: 99999999;
            position: relative!important;
            /* left: 101%; */
            left: 14%!important;
        }
    }
    @media (max-width:400px){
        .content_MULTIPLE_BORDERS {

            left: 161%!important;
        }
    }

</style>
<div class="content_error_message_home_page">@include('style.message_error')</div>
<style>
   .content_error_message_home_page {
        width: 300px;
        height: auto;
        position: absolute;
        z-index: 999999;
    /* display: inline-block; */
        margin-top: 151px;
    }
   .content_error_message_home_page .button_close_alert_eroor {
       position: absolute;
       right: -10px;
       top: -25px;
   }
   .content_alert_eroor
   {
       width: 100%;
       padding: 0;
       margin: 0;
   }
   @media (max-width:992px){
       .content_error_message_home_page {
           width: 225px;
            position: relative;
           z-index: 999999;
            left: 39%;
       }
   }
</style>