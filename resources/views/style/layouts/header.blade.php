<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>quransquare :: ONLINE QURAN </title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @foreach($setting as $sett)
        <link rel="icon" type="image/png" sizes="16x16" href="storage/{{$sett->icon}}"   >
    @endforeach
    <link rel="icon" type="image/png" sizes="16x16" href="">
    <meta name="msapplication-TileColor" content="#ffffff">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="{{ url('design/style') }}/css/style.css">
    <link rel="stylesheet" href="{{ url('design/style') }}/css/style_en.css">
    <link href="https://fonts.googleapis.com/css?family=Cairo:300,400&amp;subset=arabic,latin-ext" rel="stylesheet">
    {{--------------strat          section testimonials in lang  ----------- --}}

    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css" rel="stylesheet" type="text/css">
    <link href="{{ url('design/style/teestmonls_in_arabic') }}/dist/css/cardslider.css" rel="stylesheet">
    <link href="{{ url('design/style/teestmonls_in_arabic') }}/demo.css" rel="stylesheet">

    {{--------------End           section testimonials in lang  ----------- --}}


{{--  <!--- start    countdown-------------------------------{{ url('design/style') }}/countdown/----->--}}
    <link rel="stylesheet" type="text/css" href="{{ url('design/style') }}/cochin_slider/css/styles.zuperSlider.css" />

     <link rel="stylesheet" type="text/css" href="{{ url('design/style') }}/countdown/css/flipdown/flipdown.css">
    <link rel="stylesheet" type="text/css" href="{{ url('design/style') }}/newsticker/css/style.css">
   <!--- End   countdown------------------------------------>

{{--------------------------------------}}
    <link rel="stylesheet" type="text/css" href="{{ url('design/style') }}/cochin_slider/css/styles.zuperSlider.css" />


{{--------------------------------------}}


    {{-------------- start   shere right  with color to link ----------- --}}

    <script async src="https://platform-api.sharethis.com/js/sharethis.js#property=5e7d3a6c92f54300123e5998&product=sticky-share-buttons"></script>

    {{-------------- End     shere right  with color to link ----------- --}}


    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,600,700">
    <link rel="stylesheet" href="{{ url('design/style/Multi-Level-Sidebar-Menu') }}/demo.css?ver=3.4.0">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="{{ url('design/style/Multi-Level-Sidebar-Menu') }}/hc-offcanvas-nav.js?ver=3.4.1"></script>
    <style type="text/css">
    .dropdown-menu.lang
    {
        left: -97px!important;
    }
    
        .toggle_icon span{

            position: fixed;
            top: 28px;
            z-index: 99999;
            left: 85%;

        }
       .font-lato.gallery.bottom.right  img{
                display: none!important;
        }
        .hc-nav-trigger span::before, .hc-nav-trigger span::after,.toggle_icon span{
            background: #444;

        }
        #container33{
            position: absolute;
        }
        .toggle_icon {
            /*background: red;*/
            width: -36px;
            padding: 0 17px;
            color: #fff;
            /*background-color: rgba(0, 0, 0, .6);*/
            color: #107bed!important;
        }
        header .toggle span, header .toggle span::before, header .toggle span::after {
            display: block;
            position: absolute;
            left: 0;
            height: 4px;
            background: #0080e5;
            transition: all .25s ease;
        }

        header .toggle {

        }
        .navbar,header {

            padding: 0!important;
            background: rgba(24,48,89,0.1);
        }
    </style>





    <style type="text/css">
        a{

            text-decoration: none!important;
        }
        .logo-img{
            width: 165px;
            height: 65px;
        }
        .sticky_head {
            background: #fff!important;
            color: #fff;
            color: #000;
            box-shadow  :0 -18px 3px rgba(0,0,0,0.30), 0 2px 10px rgba(0,0,0,0.22);
            z-index: 99999;

height: 57px
        }

        .img_login_user{
    width: 25px;
    height: 25px;
    border-radius: 50%;
}
        .nav-link {
            color: #fff;
        }
        .slider .carousel-inner .overlay {

            background-color: rgba(0, 0, 0, 0);

        }

        .single.nav-link:hover {
            color: #eee!important;
            -webkit-transition: all 0.5s ease-out ;
            -moz-transition: all 0.5s ease-out ;
            -o-transition: all 0.5s ease-out ;
            transition: all 0.5s ease-out ;
       color: #eee!important;
    text-decoration: line-through!important;
    border-bottom: 2px solid #ffcc00;
        }
            .call_us:hover {
            color: #eee!important;
            -webkit-transition: all 0.5s ease-out ;
            -moz-transition: all 0.5s ease-out ;
            -o-transition: all 0.5s ease-out ;
            transition: all 0.5s ease-out ;
      border-bottom: 2px solid #ffcc00;
      color: #ffcc00!important;
      font-weight: bold;
        }
                  .dropdown-menu .dropdown-item:hover {
            background-color:#444;
            -webkit-transition: all 0.5s ease-out ;
            -moz-transition: all 0.5s ease-out ;
            -o-transition: all 0.5s ease-out ;
            transition: all 0.5s ease-out ;
            color: #fff
         }

.img_world_flag {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    margin-top: -7px;
}
  .img_world_flag:hover .dropdown-menu {
    display: block!important;

}
        .nav_link_contact_us{
         cursor: pointer;
        }
.dropdown-toggle::after {

    display: none!important;
}

        header {

            text-shadow:none;
        }

        .nav-link.nav-link_sticky_head{
            /*display: none!important;*/
            color:#000;
        }


        .navbar-toggler {
            padding: .25rem .75rem;
            font-size: 1.25rem;
            background: none;
            color: #000;
        }

        @media (max-width: 968px){
            .fixed-top {
                z-index: 1 !important;
                background: #fff!important;

            }
            .company-name-logo{
                color:#000!important;
            }

            .nav-link-black.nav-link.nav-link  {
                color: #000;
            }
            .nav-link {
                color: #000!important;
            }
        }


        .company-name-logo{
            color:#fff;
            font-size: 18px;
            font-family: roboto;

        }





        .company-name-logo.black{
            color:#000!important;
        }
        .image-icon-whatsapp{

            height:50px;

        }


        .dropdown-item {
            font-weight: normal;
            transition: padding-left .5s ease;
            font-size: 16px;
        }



        @media (max-width: 1280px)
        {
            .main-slider-next {
                bottom: 680%!important;
            }
        }

        /* .main-slider-next {*/
        /*bottom: 400%!important;*/
        /* }*/


        .section-header {
            padding:30px 0px;
        }
        /*-------------start Why Us --------------*/
        #whyus{
            margin-bottom: 0px !important;

        }
        /*-------------End  Why Us --------------*/

        /*-------------start course --------------*/
        .descriptions{
            border-bottom-right-radius: 100%;
            text-align: left!important;
            border-bottom-left-radius: 0;
        }

        /*-------------End  course --------------*/
        /*-------------start course --------------*/
        .descriptions{
            border-bottom-right-radius: 100%;
            text-align: left!important;
            border-bottom-left-radius: 0;
        }

        /*-------------End  course --------------*/

        /*-------------start Our prices --------------*/
        .price-package .package-price .price span {
            font-size: 20px;
        }
        .price-package .package-price .term {
            font-size:15px;
            text-decoration: line-through;
        }
        .a-color-whathe{
            color: #fff;
        }
        .a-color-whathe:hover{
            color: #fff;
        }
        /*-----------start virgin 2*/
.price-package .package-features ul li {
    font-size: 15px!important;
    text-align: center!important;
    line-height: 1.5;
}
        /*-----------End   virgin 2*/

        /*-------------End  Our prices --------------*/

        .stats .icon-sta, .c-col-services i {
            padding:10px;
        }
        /*timenews------------------------------------------------------------*/
        {

        }
        /*timenews------------------------------------------------------------*/
        /*-----------------start section move_tabs ---------------------------*/
        @import url('http://fonts.googleapis.com/css?family=Open+Sans:400,600');
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }


        pre {
            font-family: Consolas, "Courier New", Courier, monospace;
            font-size: 11px;
        }
        .content_tabs .container {
            max-width: 700px;
        }
        .container > :last-child {
            /*padding-bottom: 12px;*/
        }
        .container-half {
            width: 50%;
            padding: 0 10px;
            float: left;
        }
        .ui-tabgroup {
            position: relative;
            display: inline-block;
            width: 100%;
        }
        .ui-tabgroup:after {
            visibility: hidden;
            display: block;
            font-size: 0;
            content: " ";
            clear: both;
            height: 0;
        }
        .ui-tabgroup > .ui-tabs {
            float: left;
            width: 100%;
        }
        .ui-tabgroup > .ui-tabs > [class^="ui-tab"] {
            position: relative;
            float: left;
            display: block;
            background-color: #fff;
            color: #b9c5c8;
            margin: 0 0 1px 0;
            padding: 9px 15px;
            cursor: pointer;
            min-width: 100%;
            min-height: 40px;
            border-width: 1px 1px 0 1px;
            border-style: solid;
            border-color: #d9e5e8;
            font-size: 13px;
            font-weight: bold;
            -webkit-transition: all 0.15s ease-in;
            -moz-transition: all 0.15s ease-in;
            -o-transition: all 0.15s ease-in;
            transition: all 0.15s ease-in;
        }
        .ui-tabgroup > .ui-tabs > [class^="ui-tab"] > .fa {
            padding-right: 10px;
            font-size: 15px;
        }
        .ui-tabgroup > input[class^="ui-tab"] {
            -webkit-appearance: none;
            -moz-appearance: none !important;
            position: relative;
            float: left;
            left: -99999px;
            padding: 0;
            margin: 0 0 0 -5px; /* FireFox hack */
            height: 0;
            width: 0;
            z-index: -100;
            overflow: hidden;
            outline: 0;
            float: left;
        }
        .ui-tabgroup > input.ui-tab1:focus ~ .ui-tabs > .ui-tab1,
        .ui-tabgroup > input.ui-tab2:focus ~ .ui-tabs > .ui-tab2,
        .ui-tabgroup > input.ui-tab3:focus ~ .ui-tabs > .ui-tab3,
        .ui-tabgroup > input.ui-tab4:focus ~ .ui-tabs > .ui-tab4,
        .ui-tabgroup > input.ui-tab5:focus ~ .ui-tabs > .ui-tab5,
        .ui-tabgroup > input.ui-tab6:focus ~ .ui-tabs > .ui-tab6,
        .ui-tabgroup > input.ui-tab7:focus ~ .ui-tabs > .ui-tab7,
        .ui-tabgroup > input.ui-tab8:focus ~ .ui-tabs > .ui-tab8,
        .ui-tabgroup > input.ui-tab9:focus ~ .ui-tabs > .ui-tab9 {
            text-decoration: underline;
            box-shadow: inset 0 40px 60px -40px rgba(255, 255, 255, 0.2);
        }
        .ui-tabgroup > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1,
        .ui-tabgroup > input.ui-tab2:checked ~ .ui-tabs > .ui-tab2,
        .ui-tabgroup > input.ui-tab3:checked ~ .ui-tabs > .ui-tab3,
        .ui-tabgroup > input.ui-tab4:checked ~ .ui-tabs > .ui-tab4,
        .ui-tabgroup > input.ui-tab5:checked ~ .ui-tabs > .ui-tab5,
        .ui-tabgroup > input.ui-tab6:checked ~ .ui-tabs > .ui-tab6,
        .ui-tabgroup > input.ui-tab7:checked ~ .ui-tabs > .ui-tab7,
        .ui-tabgroup > input.ui-tab8:checked ~ .ui-tabs > .ui-tab8,
        .ui-tabgroup > input.ui-tab9:checked ~ .ui-tabs > .ui-tab9 {
            background-color: #fff;
            color: #4a6e78;
            position: relative;
        }
        .ui-tabgroup > .ui-panels > [class^="ui-tab"] {
            background-color: #fff;
            color: #4a6e78;
            border-width: 1px 0;
            border-style: solid;
            border-color: #d9e5e8;
            min-height: 200px;
            padding: 25px;
            display: none;
            word-wrap: break-word;
            word-break: break-word;
            overflow-wrap: break-word;
            -webkit-hyphens: auto;
            -moz-hyphens: auto;
            hyphens: auto;
            float: left;
            width: 100%;
        }
        .ui-tabgroup.left-side > .ui-panels > [class^="ui-tab"] {
            border-width: 1px;
        }
        .ui-tabgroup > .ui-panels > [class^="ui-tab"]:after {
            visibility: hidden;
            display: block;
            font-size: 0;
            content: " ";
            clear: both;
            height: 0;
        }
        .ui-tabgroup > input.ui-tab1:checked ~ .ui-panels > .ui-tab1,
        .ui-tabgroup > input.ui-tab2:checked ~ .ui-panels > .ui-tab2,
        .ui-tabgroup > input.ui-tab3:checked ~ .ui-panels > .ui-tab3,
        .ui-tabgroup > input.ui-tab4:checked ~ .ui-panels > .ui-tab4,
        .ui-tabgroup > input.ui-tab5:checked ~ .ui-panels > .ui-tab5,
        .ui-tabgroup > input.ui-tab6:checked ~ .ui-panels > .ui-tab6,
        .ui-tabgroup > input.ui-tab7:checked ~ .ui-panels > .ui-tab7,
        .ui-tabgroup > input.ui-tab8:checked ~ .ui-panels > .ui-tab8,
        .ui-tabgroup > input.ui-tab9:checked ~ .ui-panels > .ui-tab9 {
            display: block;
        }
        .ui-tabs:not(.left-side) > .ui-panels > [class^="ui-tab"] {
            width: 100%;
        }
        .ui-tabgroup.left-side.icons-only > .ui-tabs {
            width: 50px;
            float: left;
        }
        .ui-tabgroup.left-side.icons-only > .ui-panels {
            margin-left: 50px;
        }
        .ui-tabgroup.left-side.icons-only > .ui-tabs > .ui-tab:first-child {
            margin: 5px 0 0 0;
        }
        .ui-tabgroup.left-side.icons-only > .ui-tabs > [class^="ui-tab"] {
            border-width: 2px 0 2px 2px;
            margin: 1px 0 0 0;
            width: 100%;
        }

        @media screen and (min-width: 639px) {
            .ui-tabgroup.left-side > .ui-tabs {
                width: 140px;
                float: left;
            }
            .ui-tabgroup.left-side > .ui-panels {
                margin-left: 140px;
            }
            .ui-tabgroup.left-side.icons-only > .ui-tabs {
                width: 50px;
                float: left;
            }
            .ui-tabgroup.left-side.icons-only > .ui-panels {
                margin-left: 50px;
            }
            .ui-tabs:not(.left-side) > .ui-panels {
                float: left;
                width: 100%;
            }
            .ui-tabgroup > .ui-tabs > [class^="ui-tab"]:first-child {
                margin: 1px 0 0 5px;
            }
            .ui-tabgroup > .ui-tabs > [class^="ui-tab"] {
                margin: 1px 0 0 1px;
                min-width: 50px;
            }
            .ui-tabgroup > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1:after,
            .ui-tabgroup > input.ui-tab2:checked ~ .ui-tabs > .ui-tab2:after,
            .ui-tabgroup > input.ui-tab3:checked ~ .ui-tabs > .ui-tab3:after,
            .ui-tabgroup > input.ui-tab4:checked ~ .ui-tabs > .ui-tab4:after,
            .ui-tabgroup > input.ui-tab5:checked ~ .ui-tabs > .ui-tab5:after,
            .ui-tabgroup > input.ui-tab6:checked ~ .ui-tabs > .ui-tab6:after,
            .ui-tabgroup > input.ui-tab7:checked ~ .ui-tabs > .ui-tab7:after,
            .ui-tabgroup > input.ui-tab8:checked ~ .ui-tabs > .ui-tab8:after,
            .ui-tabgroup > input.ui-tab9:checked ~ .ui-tabs > .ui-tab9:after {
                position: absolute;
                content: '';
                background-color: #fff;
                top: 38px;
                left: 0;
                width: 100%;
                height: 3px;
            }
            .ui-tabgroup.left-side > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1:after,
            .ui-tabgroup.left-side > input.ui-tab2:checked ~ .ui-tabs > .ui-tab2:after,
            .ui-tabgroup.left-side > input.ui-tab3:checked ~ .ui-tabs > .ui-tab3:after,
            .ui-tabgroup.left-side > input.ui-tab4:checked ~ .ui-tabs > .ui-tab4:after,
            .ui-tabgroup.left-side > input.ui-tab5:checked ~ .ui-tabs > .ui-tab5:after,
            .ui-tabgroup.left-side > input.ui-tab6:checked ~ .ui-tabs > .ui-tab6:after,
            .ui-tabgroup.left-side > input.ui-tab7:checked ~ .ui-tabs > .ui-tab7:after,
            .ui-tabgroup.left-side > input.ui-tab8:checked ~ .ui-tabs > .ui-tab8:after,
            .ui-tabgroup.left-side > input.ui-tab9:checked ~ .ui-tabs > .ui-tab9:after {
                position: absolute;
                content: '';
                background-color: #fff;
                top: 0;
                left: 138px;
                height: 100%;
                width: 3px;
            }
            .ui-tabgroup.left-side > .ui-tabs > .ui-tab:first-child {
                margin: 5px 0 0 0;
            }
            .ui-tabgroup.left-side > .ui-tabs > [class^="ui-tab"] {
                border-width: 1px 0 1px 1px;
                margin: 1px 0 0 0;
                width: 100%;
            }
        }

        /* --- Theme Plum --- */

        .theme-plum.container,
        .theme-plum .container {
            color: #fff;
        }
        .theme-plum .ui-tabgroup > .ui-tabs > [class^="ui-tab"] {
            border-radius: 2px 2px 0 0;
            border: 2px solid #8e44ad;
            color: #f3d5ff;
        }
        .theme-plum .ui-tabgroup.left-side > .ui-tabs > [class^="ui-tab"] {
            border-radius: 2px 2px 0 0;
        }
        .theme-plum .ui-tabgroup > .ui-panels > [class^="ui-tab"] {
            background-color: #612e76;
            color: #fff;
            border: 2px solid #612e76;
        }
        .theme-plum .ui-tabgroup > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1,
        .theme-plum .ui-tabgroup > input.ui-tab2:checked ~ .ui-tabs > .ui-tab2,
        .theme-plum .ui-tabgroup > input.ui-tab3:checked ~ .ui-tabs > .ui-tab3,
        .theme-plum .ui-tabgroup > input.ui-tab4:checked ~ .ui-tabs > .ui-tab4,
        .theme-plum .ui-tabgroup > input.ui-tab5:checked ~ .ui-tabs > .ui-tab5,
        .theme-plum .ui-tabgroup > input.ui-tab6:checked ~ .ui-tabs > .ui-tab6,
        .theme-plum .ui-tabgroup > input.ui-tab7:checked ~ .ui-tabs > .ui-tab7,
        .theme-plum .ui-tabgroup > input.ui-tab8:checked ~ .ui-tabs > .ui-tab8,
        .theme-plum .ui-tabgroup > input.ui-tab9:checked ~ .ui-tabs > .ui-tab9 {
            background-color: #612e76;
            color: #fff;
            border: 2px solid #612e76;
        }
        .theme-plum .ui-tabgroup > input[class^="ui-tab"]:checked ~ .ui-tabs > [class^="ui-tab"]:after {
            content: none;
        }
        .theme-plum a:link,
        .theme-plum a:visited,
        .theme-plum a:hover,
        .theme-plum a:active {
            color: #ceb4cd;
        }
        .theme-plum .ui-tabgroup.left-side.icons-only > .ui-tabs > [class^="ui-tab"] {
            border-radius: 2px 0 0 2px;
        }
        .theme-plum .ui-tabgroup.left-side.icons-only > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1,
        .theme-plum .ui-tabgroup.left-side.icons-only > input.ui-tab2:checked ~ .ui-tabs > .ui-tab2,
        .theme-plum .ui-tabgroup.left-side.icons-only > input.ui-tab3:checked ~ .ui-tabs > .ui-tab3,
        .theme-plum .ui-tabgroup.left-side.icons-only > input.ui-tab4:checked ~ .ui-tabs > .ui-tab4,
        .theme-plum .ui-tabgroup.left-side.icons-only > input.ui-tab5:checked ~ .ui-tabs > .ui-tab5,
        .theme-plum .ui-tabgroup.left-side.icons-only > input.ui-tab6:checked ~ .ui-tabs > .ui-tab6,
        .theme-plum .ui-tabgroup.left-side.icons-only > input.ui-tab7:checked ~ .ui-tabs > .ui-tab7,
        .theme-plum .ui-tabgroup.left-side.icons-only > input.ui-tab8:checked ~ .ui-tabs > .ui-tab8,
        .theme-plum .ui-tabgroup.left-side.icons-only > input.ui-tab9:checked ~ .ui-tabs > .ui-tab9 {
            min-height: 40px;
            width: 54px;
            margin-left: -4px;
            margin-top: 1px;
        }
        .theme-plum .ui-tabgroup.left-side.icons-only > input.ui-tab1 ~ .ui-tabs > .ui-tab1,
        .theme-plum .ui-tabgroup.left-side.icons-only > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1 {
            margin-top: 5px;
        }

        @media screen and (min-width: 639px) {
            .theme-plum .ui-tabgroup.left-side > .ui-tabs > [class^="ui-tab"] {
                border-radius: 2px 0 0 2px;
            }
            .theme-plum .ui-tabgroup.left-side > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1,
            .theme-plum .ui-tabgroup.left-side > input.ui-tab2:checked ~ .ui-tabs > .ui-tab2,
            .theme-plum .ui-tabgroup.left-side > input.ui-tab3:checked ~ .ui-tabs > .ui-tab3,
            .theme-plum .ui-tabgroup.left-side > input.ui-tab4:checked ~ .ui-tabs > .ui-tab4,
            .theme-plum .ui-tabgroup.left-side > input.ui-tab5:checked ~ .ui-tabs > .ui-tab5,
            .theme-plum .ui-tabgroup.left-side > input.ui-tab6:checked ~ .ui-tabs > .ui-tab6,
            .theme-plum .ui-tabgroup.left-side > input.ui-tab7:checked ~ .ui-tabs > .ui-tab7,
            .theme-plum .ui-tabgroup.left-side > input.ui-tab8:checked ~ .ui-tabs > .ui-tab8,
            .theme-plum .ui-tabgroup.left-side > input.ui-tab9:checked ~ .ui-tabs > .ui-tab9 {
                min-height: 40px;
                width: 144px;
                margin-left: -4px;
                margin-top: 1px;
            }
            .theme-plum .ui-tabgroup.left-side > input.ui-tab1 ~ .ui-tabs > .ui-tab1,
            .theme-plum .ui-tabgroup.left-side > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1 {
                margin-top: 5px;
            }
            .theme-plum .ui-tabgroup > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1,
            .theme-plum .ui-tabgroup > input.ui-tab2:checked ~ .ui-tabs > .ui-tab2,
            .theme-plum .ui-tabgroup > input.ui-tab3:checked ~ .ui-tabs > .ui-tab3,
            .theme-plum .ui-tabgroup > input.ui-tab4:checked ~ .ui-tabs > .ui-tab4,
            .theme-plum .ui-tabgroup > input.ui-tab5:checked ~ .ui-tabs > .ui-tab5,
            .theme-plum .ui-tabgroup > input.ui-tab6:checked ~ .ui-tabs > .ui-tab6,
            .theme-plum .ui-tabgroup > input.ui-tab7:checked ~ .ui-tabs > .ui-tab7,
            .theme-plum .ui-tabgroup > input.ui-tab8:checked ~ .ui-tabs > .ui-tab8,
            .theme-plum .ui-tabgroup > input.ui-tab9:checked ~ .ui-tabs > .ui-tab9 {
                min-height: 45px;
                margin-top: -4px;
            }
        }

        /* --- Theme Lime --- */

        .theme-lime.container,
        .theme-lime .container {
            color: #fff;
        }
        .theme-lime .ui-tabgroup > .ui-tabs > [class^="ui-tab"] {
            border-radius: 4px 25px 0 0;
            border: 2px solid #56CE87;
            color: #DBDBDB;
        }
        .theme-lime .ui-tabgroup > .ui-panels > [class^="ui-tab"] {
            background-color: #27AE60;
            color: #fff;
            border: 2px solid #5EcC91;
        }
        .theme-lime .ui-tabgroup > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1,
        .theme-lime .ui-tabgroup > input.ui-tab2:checked ~ .ui-tabs > .ui-tab2,
        .theme-lime .ui-tabgroup > input.ui-tab3:checked ~ .ui-tabs > .ui-tab3,
        .theme-lime .ui-tabgroup > input.ui-tab4:checked ~ .ui-tabs > .ui-tab4,
        .theme-lime .ui-tabgroup > input.ui-tab5:checked ~ .ui-tabs > .ui-tab5,
        .theme-lime .ui-tabgroup > input.ui-tab6:checked ~ .ui-tabs > .ui-tab6,
        .theme-lime .ui-tabgroup > input.ui-tab7:checked ~ .ui-tabs > .ui-tab7,
        .theme-lime .ui-tabgroup > input.ui-tab8:checked ~ .ui-tabs > .ui-tab8,
        .theme-lime .ui-tabgroup > input.ui-tab9:checked ~ .ui-tabs > .ui-tab9 {
            background-color: #27AE60;
            color: #fff;
            border: 2px solid #5EcC91;
        }
        .theme-lime .ui-tabgroup > input[class^="ui-tab"]:checked ~ .ui-tabs > [class^="ui-tab"]:after {
            content: none;
        }
        .theme-lime a:link,
        .theme-lime a:visited,
        .theme-lime a:hover,
        .theme-lime a:active {
            color: #aEdCd1;
        }
        @media screen and (min-width: 639px) {
            .theme-lime .ui-tabgroup.left-side > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1,
            .theme-lime .ui-tabgroup.left-side > input.ui-tab2:checked ~ .ui-tabs > .ui-tab2,
            .theme-lime .ui-tabgroup.left-side > input.ui-tab3:checked ~ .ui-tabs > .ui-tab3,
            .theme-lime .ui-tabgroup.left-side > input.ui-tab4:checked ~ .ui-tabs > .ui-tab4,
            .theme-lime .ui-tabgroup.left-side > input.ui-tab5:checked ~ .ui-tabs > .ui-tab5,
            .theme-lime .ui-tabgroup.left-side > input.ui-tab6:checked ~ .ui-tabs > .ui-tab6,
            .theme-lime .ui-tabgroup.left-side > input.ui-tab7:checked ~ .ui-tabs > .ui-tab7,
            .theme-lime .ui-tabgroup.left-side > input.ui-tab8:checked ~ .ui-tabs > .ui-tab8,
            .theme-lime .ui-tabgroup.left-side > input.ui-tab9:checked ~ .ui-tabs > .ui-tab9 {
                min-height: 40px;
                width: 144px;
                margin-left: -4px;
                margin-top: 1px;
                border-width: 2px 0 2px 2px;
            }
            .theme-lime .ui-tabgroup.left-side > .ui-tabs > [class^="ui-tab"] {
                border-radius: 25px 0 0 4px;
                border-width: 2px 0 2px 2px;
            }
            .theme-lime .ui-tabgroup.left-side > input.ui-tab1 ~ .ui-tabs > .ui-tab1,
            .theme-lime .ui-tabgroup.left-side > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1 {
                margin-top: 5px;
            }
            .theme-lime .ui-tabgroup > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1,
            .theme-lime .ui-tabgroup > input.ui-tab2:checked ~ .ui-tabs > .ui-tab2,
            .theme-lime .ui-tabgroup > input.ui-tab3:checked ~ .ui-tabs > .ui-tab3,
            .theme-lime .ui-tabgroup > input.ui-tab4:checked ~ .ui-tabs > .ui-tab4,
            .theme-lime .ui-tabgroup > input.ui-tab5:checked ~ .ui-tabs > .ui-tab5,
            .theme-lime .ui-tabgroup > input.ui-tab6:checked ~ .ui-tabs > .ui-tab6,
            .theme-lime .ui-tabgroup > input.ui-tab7:checked ~ .ui-tabs > .ui-tab7,
            .theme-lime .ui-tabgroup > input.ui-tab8:checked ~ .ui-tabs > .ui-tab8,
            .theme-lime .ui-tabgroup > input.ui-tab9:checked ~ .ui-tabs > .ui-tab9 {
                min-height: 45px;
                margin-top: -4px;
                border-width: 2px 2px 0 2px;
            }
            .theme-lime .ui-tabgroup:not(.left-side) > .ui-tabs > [class^="ui-tab"] {
                border-width: 2px 2px 0 2px;
            }
        }

        /* --- Theme Cactus --- */

        .theme-cactus.container,
        .theme-cactus .container {
            color: #fff;
        }
        .theme-cactus .ui-tabgroup > .ui-tabs > [class^="ui-tab"] {
            border: 2px solid #16B08C;
            color: #56E2C6;
        }
        .theme-cactus .ui-tabgroup > .ui-panels > [class^="ui-tab"] {
            background-color: #00796b;
            color: #fff;
            border: 10px solid #16A085;
            padding: 17px;
        }
        .theme-cactus .ui-tabgroup > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1,
        .theme-cactus .ui-tabgroup > input.ui-tab2:checked ~ .ui-tabs > .ui-tab2,
        .theme-cactus .ui-tabgroup > input.ui-tab3:checked ~ .ui-tabs > .ui-tab3,
        .theme-cactus .ui-tabgroup > input.ui-tab4:checked ~ .ui-tabs > .ui-tab4,
        .theme-cactus .ui-tabgroup > input.ui-tab5:checked ~ .ui-tabs > .ui-tab5,
        .theme-cactus .ui-tabgroup > input.ui-tab6:checked ~ .ui-tabs > .ui-tab6,
        .theme-cactus .ui-tabgroup > input.ui-tab7:checked ~ .ui-tabs > .ui-tab7,
        .theme-cactus .ui-tabgroup > input.ui-tab8:checked ~ .ui-tabs > .ui-tab8,
        .theme-cactus .ui-tabgroup > input.ui-tab9:checked ~ .ui-tabs > .ui-tab9 {
            background-color: #00796b;
            color: #fff;
            border: 2px solid #00796b;
        }
        .theme-cactus .ui-tabgroup > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1:after,
        .theme-cactus .ui-tabgroup > input.ui-tab2:checked ~ .ui-tabs > .ui-tab2:after,
        .theme-cactus .ui-tabgroup > input.ui-tab3:checked ~ .ui-tabs > .ui-tab3:after,
        .theme-cactus .ui-tabgroup > input.ui-tab4:checked ~ .ui-tabs > .ui-tab4:after,
        .theme-cactus .ui-tabgroup > input.ui-tab5:checked ~ .ui-tabs > .ui-tab5:after,
        .theme-cactus .ui-tabgroup > input.ui-tab6:checked ~ .ui-tabs > .ui-tab6:after,
        .theme-cactus .ui-tabgroup > input.ui-tab7:checked ~ .ui-tabs > .ui-tab7:after,
        .theme-cactus .ui-tabgroup > input.ui-tab8:checked ~ .ui-tabs > .ui-tab8:after,
        .theme-cactus .ui-tabgroup > input.ui-tab9:checked ~ .ui-tabs > .ui-tab9:after,
        .theme-cactus .ui-tabgroup > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1:before,
        .theme-cactus .ui-tabgroup > input.ui-tab2:checked ~ .ui-tabs > .ui-tab2:before,
        .theme-cactus .ui-tabgroup > input.ui-tab3:checked ~ .ui-tabs > .ui-tab3:before,
        .theme-cactus .ui-tabgroup > input.ui-tab4:checked ~ .ui-tabs > .ui-tab4:before,
        .theme-cactus .ui-tabgroup > input.ui-tab5:checked ~ .ui-tabs > .ui-tab5:before,
        .theme-cactus .ui-tabgroup > input.ui-tab6:checked ~ .ui-tabs > .ui-tab6:before,
        .theme-cactus .ui-tabgroup > input.ui-tab7:checked ~ .ui-tabs > .ui-tab7:before,
        .theme-cactus .ui-tabgroup > input.ui-tab8:checked ~ .ui-tabs > .ui-tab8:before,
        .theme-cactus .ui-tabgroup > input.ui-tab9:checked ~ .ui-tabs > .ui-tab9:before {
            top: 39px;
            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            background-color: transparent;
        }
        .theme-cactus .ui-tabgroup > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1:after,
        .theme-cactus .ui-tabgroup > input.ui-tab2:checked ~ .ui-tabs > .ui-tab2:after,
        .theme-cactus .ui-tabgroup > input.ui-tab3:checked ~ .ui-tabs > .ui-tab3:after,
        .theme-cactus .ui-tabgroup > input.ui-tab4:checked ~ .ui-tabs > .ui-tab4:after,
        .theme-cactus .ui-tabgroup > input.ui-tab5:checked ~ .ui-tabs > .ui-tab5:after,
        .theme-cactus .ui-tabgroup > input.ui-tab6:checked ~ .ui-tabs > .ui-tab6:after,
        .theme-cactus .ui-tabgroup > input.ui-tab7:checked ~ .ui-tabs > .ui-tab7:after,
        .theme-cactus .ui-tabgroup > input.ui-tab8:checked ~ .ui-tabs > .ui-tab8:after,
        .theme-cactus .ui-tabgroup > input.ui-tab9:checked ~ .ui-tabs > .ui-tab9:after {
            top: 38px;
            border-color: rgba(0, 121, 107, 0);
            border-top-color: #00796b;
            border-width: 8px;
            margin-left: -8px;
            z-index: 1;
        }
        .theme-cactus .ui-tabgroup > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1:before,
        .theme-cactus .ui-tabgroup > input.ui-tab2:checked ~ .ui-tabs > .ui-tab2:before,
        .theme-cactus .ui-tabgroup > input.ui-tab3:checked ~ .ui-tabs > .ui-tab3:before,
        .theme-cactus .ui-tabgroup > input.ui-tab4:checked ~ .ui-tabs > .ui-tab4:before,
        .theme-cactus .ui-tabgroup > input.ui-tab5:checked ~ .ui-tabs > .ui-tab5:before,
        .theme-cactus .ui-tabgroup > input.ui-tab6:checked ~ .ui-tabs > .ui-tab6:before,
        .theme-cactus .ui-tabgroup > input.ui-tab7:checked ~ .ui-tabs > .ui-tab7:before,
        .theme-cactus .ui-tabgroup > input.ui-tab8:checked ~ .ui-tabs > .ui-tab8:before,
        .theme-cactus .ui-tabgroup > input.ui-tab9:checked ~ .ui-tabs > .ui-tab9:before {
            border-color: rgba(22, 160, 133, 0);
            border-top-color:  #16A085;
            border-width: 21px;
            margin-left: -21px;
        }
        .theme-cactus a:link,
        .theme-cactus a:visited,
        .theme-cactus a:hover,
        .theme-cactus a:active {
            color: #aEdCd1;
        }
        @media screen and (min-width: 639px) {
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab2:checked ~ .ui-tabs > .ui-tab2,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab3:checked ~ .ui-tabs > .ui-tab3,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab4:checked ~ .ui-tabs > .ui-tab4,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab5:checked ~ .ui-tabs > .ui-tab5,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab6:checked ~ .ui-tabs > .ui-tab6,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab7:checked ~ .ui-tabs > .ui-tab7,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab8:checked ~ .ui-tabs > .ui-tab8,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab9:checked ~ .ui-tabs > .ui-tab9 {
                min-height: 40px;
                width: 144px;
                margin-left: -4px;
                margin-top: 1px;
            }
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab1 ~ .ui-tabs > .ui-tab1,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1 {
                margin-top: 5px;
            }
            .theme-cactus .ui-tabgroup > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1,
            .theme-cactus .ui-tabgroup > input.ui-tab2:checked ~ .ui-tabs > .ui-tab2,
            .theme-cactus .ui-tabgroup > input.ui-tab3:checked ~ .ui-tabs > .ui-tab3,
            .theme-cactus .ui-tabgroup > input.ui-tab4:checked ~ .ui-tabs > .ui-tab4,
            .theme-cactus .ui-tabgroup > input.ui-tab5:checked ~ .ui-tabs > .ui-tab5,
            .theme-cactus .ui-tabgroup > input.ui-tab6:checked ~ .ui-tabs > .ui-tab6,
            .theme-cactus .ui-tabgroup > input.ui-tab7:checked ~ .ui-tabs > .ui-tab7,
            .theme-cactus .ui-tabgroup > input.ui-tab8:checked ~ .ui-tabs > .ui-tab8,
            .theme-cactus .ui-tabgroup > input.ui-tab9:checked ~ .ui-tabs > .ui-tab9 {
                min-height: 45px;
                margin-top: -4px;
            }
            .theme-cactus .ui-tabgroup > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1:after,
            .theme-cactus .ui-tabgroup > input.ui-tab2:checked ~ .ui-tabs > .ui-tab2:after,
            .theme-cactus .ui-tabgroup > input.ui-tab3:checked ~ .ui-tabs > .ui-tab3:after,
            .theme-cactus .ui-tabgroup > input.ui-tab4:checked ~ .ui-tabs > .ui-tab4:after,
            .theme-cactus .ui-tabgroup > input.ui-tab5:checked ~ .ui-tabs > .ui-tab5:after,
            .theme-cactus .ui-tabgroup > input.ui-tab6:checked ~ .ui-tabs > .ui-tab6:after,
            .theme-cactus .ui-tabgroup > input.ui-tab7:checked ~ .ui-tabs > .ui-tab7:after,
            .theme-cactus .ui-tabgroup > input.ui-tab8:checked ~ .ui-tabs > .ui-tab8:after,
            .theme-cactus .ui-tabgroup > input.ui-tab9:checked ~ .ui-tabs > .ui-tab9:after {
                top: 43px;
                border-width: 7px;
                margin-left: -7px;

            }
            .theme-cactus .ui-tabgroup > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1:before,
            .theme-cactus .ui-tabgroup > input.ui-tab2:checked ~ .ui-tabs > .ui-tab2:before,
            .theme-cactus .ui-tabgroup > input.ui-tab3:checked ~ .ui-tabs > .ui-tab3:before,
            .theme-cactus .ui-tabgroup > input.ui-tab4:checked ~ .ui-tabs > .ui-tab4:before,
            .theme-cactus .ui-tabgroup > input.ui-tab5:checked ~ .ui-tabs > .ui-tab5:before,
            .theme-cactus .ui-tabgroup > input.ui-tab6:checked ~ .ui-tabs > .ui-tab6:before,
            .theme-cactus .ui-tabgroup > input.ui-tab7:checked ~ .ui-tabs > .ui-tab7:before,
            .theme-cactus .ui-tabgroup > input.ui-tab8:checked ~ .ui-tabs > .ui-tab8:before,
            .theme-cactus .ui-tabgroup > input.ui-tab9:checked ~ .ui-tabs > .ui-tab9:before {
                top: 43px;
            }
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1:after,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab2:checked ~ .ui-tabs > .ui-tab2:after,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab3:checked ~ .ui-tabs > .ui-tab3:after,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab4:checked ~ .ui-tabs > .ui-tab4:after,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab5:checked ~ .ui-tabs > .ui-tab5:after,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab6:checked ~ .ui-tabs > .ui-tab6:after,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab7:checked ~ .ui-tabs > .ui-tab7:after,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab8:checked ~ .ui-tabs > .ui-tab8:after,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab9:checked ~ .ui-tabs > .ui-tab9:after,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1:before,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab2:checked ~ .ui-tabs > .ui-tab2:before,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab3:checked ~ .ui-tabs > .ui-tab3:before,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab4:checked ~ .ui-tabs > .ui-tab4:before,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab5:checked ~ .ui-tabs > .ui-tab5:before,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab6:checked ~ .ui-tabs > .ui-tab6:before,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab7:checked ~ .ui-tabs > .ui-tab7:before,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab8:checked ~ .ui-tabs > .ui-tab8:before,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab9:checked ~ .ui-tabs > .ui-tab9:before {
                top: -3px;
                left: 143px;
                border: 21px solid transparent;
                content: " ";
                height: 0;
                width: 0;
                position: absolute;
                pointer-events: none;
                z-index: 1;
            }
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1:after,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab2:checked ~ .ui-tabs > .ui-tab2:after,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab3:checked ~ .ui-tabs > .ui-tab3:after,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab4:checked ~ .ui-tabs > .ui-tab4:after,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab5:checked ~ .ui-tabs > .ui-tab5:after,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab6:checked ~ .ui-tabs > .ui-tab6:after,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab7:checked ~ .ui-tabs > .ui-tab7:after,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab8:checked ~ .ui-tabs > .ui-tab8:after,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab9:checked ~ .ui-tabs > .ui-tab9:after {
                border-color: rgba(0, 121, 107, 0);
                border-left-color: #00796b;
                border-width: 7px;
                margin-left: -1px;
                margin-top: 14px;
            }
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1:before,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab2:checked ~ .ui-tabs > .ui-tab2:before,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab3:checked ~ .ui-tabs > .ui-tab3:before,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab4:checked ~ .ui-tabs > .ui-tab4:before,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab5:checked ~ .ui-tabs > .ui-tab5:before,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab6:checked ~ .ui-tabs > .ui-tab6:before,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab7:checked ~ .ui-tabs > .ui-tab7:before,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab8:checked ~ .ui-tabs > .ui-tab8:before,
            .theme-cactus .ui-tabgroup.left-side > input.ui-tab9:checked ~ .ui-tabs > .ui-tab9:before {
                border-color: rgba(22, 160, 133, 0);
                border-left-color:  #16A085;
                border-width: 21px;
                margin-left: 0;
                z-index: 1;
            }
        }
       

        /*  -------------------- start custom by Me*/




        
        
        
        
/*         .content_tabe p {*/
/*    font-size: 19px;*/
/*    font-style: italic;*/
/*    font-family: sans-serif;*/
/*    max-height: inherit!important;*/

/*}*/
        /*  -------------------- End   custom by Me*/
        /*-----------------start    section accordion ---------------------------*/

        .col_content_accordion{
            padding: 10px 10px 10px 10px;
            /*border: 1px solid #eee;*/
            /* border-bottom: none; */
            margin: 0;
            /*border: 2px solid #888;*/
            padding-top: 0;
        }

        .accordion {
            /* padding: 10px 10px 10px 10px; */
            border: 10px solid #16a085;
            margin-top: 20px;
        }
        .accordion article{
            font-size: 16px;
            font-style: italic;
            font-family: sans-serif;
            color: #1c1b1b;
            background: #ffffff;
            padding: 13px;
        }
        /*.theme-cactus .ui-tabgroup > .ui-panels > [class^="ui-tab"] {*/
        /*    background-color: #ffffff;*/
        /*    color: #4c5a59;*/
        /*    border: 10px solid #16A085;*/
        /*    padding: 17px;*/
        /*}*/
        .accordion .link {

            color: #fff!important;

            background: #444;
        }
        .theme-cactus .ui-tabgroup > .ui-panels > [class^="ui-tab"] {
            background-color: #444444;
        }
        }
        .theme-cactus .ui-tabgroup > input.ui-tab1:checked ~ .ui-tabs > .ui-tab1, .theme-cactus .ui-tabgroup > input.ui-tab2:checked ~ .ui-tabs > .ui-tab2, .theme-cactus .ui-tabgroup > input.ui-tab3:checked ~ .ui-tabs > .ui-tab3, .theme-cactus .ui-tabgroup > input.ui-tab4:checked ~ .ui-tabs > .ui-tab4, .theme-cactus .ui-tabgroup > input.ui-tab5:checked ~ .ui-tabs > .ui-tab5, .theme-cactus .ui-tabgroup > input.ui-tab6:checked ~ .ui-tabs > .ui-tab6, .theme-cactus .ui-tabgroup > input.ui-tab7:checked ~ .ui-tabs > .ui-tab7, .theme-cactus .ui-tabgroup > input.ui-tab8:checked ~ .ui-tabs > .ui-tab8, .theme-cactus .ui-tabgroup > input.ui-tab9:checked ~ .ui-tabs > .ui-tab9 {
            background-color: #444!important;
            color: #fff;
            border: 2px solid #00796b;
        }
        .accordion .fa-chevron-down {
            color: #fff !important;
        }
        /*-----------------End   section move_tabs ---------------------------*/
body{
    {{--background-image: url("{{url('default/bg.webp')}}");--}}
}

/*---------------------------- start Edit in server -------------------*/
/*@media(max-width:768px)*/
/*{*/
/*    .toggle_icon span {*/
/*    position: fixed;*/
/*    top: 28px;*/
/*    z-index: 99999;*/
/*    left: 75%!important;*/
/*}*/
/*}*/

.title{
        /*display: inline-block;*/
    /*background: red;*/
}

.flipdown.flipdown__theme-light .rotor-bottom, .flipdown.flipdown__theme-light .rotor-leaf-rear {
    color:red;
    background-color: #ffcc00!important;
}
.flipdown.flipdown__theme-light .rotor, .flipdown.flipdown__theme-light .rotor-top, .flipdown.flipdown__theme-light .rotor-leaf-front {
    color: red;
    background-color: #ffcc00!important;
}
.flipdown.flipdown__theme-dark .rotor-group-heading:before {
    color: #b19c9c;
}
.carousel-control-next:hover .control_icon_slider, .carousel-control-prev:hover .control_icon_slider
{
   background: rgb(13, 12, 12)!important;
   transition: all .5s ease-in-out!important;
    
}
.color_yellow{
  color:#ffcc00!important;
  }
.sidbar_offers {
     font-weight:bold;
        color:#ffcc00!important;
        font-size:30px;

  }
  #u_0_4{
      color:#fff!important;
  }
/*---------------------------- start section sidbar     -------------------*/

/*------start virgin --------2*/
.content_text_manager {
    height: 333px;
    width: 100%;
    /*overflow: hidden;*/
 
    color: #fff;
    margin-top: 115px!important;
    line-height: 1.5!important;
}
/*------End   virgin --------2*/
         
/*---------------------------- End   section sidbar      -------------------*/
/*---------------------------- start section why choos us    -------------------*/

/*---------------------------- start section header    -------------------*/
@media (max-width:768px){

.carousel-control-prev-slider-main{
    left:10px!important;
}
.carousel-control-prev-slider-main{
    right:10px!important;
}
.control_icon_slider {
  
    padding: 10px 13px;
 }
 section > div {
     margin-bottom: 0!important;
}
/*virgin 2 -------- */
/*.cd-headline.clip b{*/
/*    margin-left:10px!important;*/
    /*margin:0!important;*/
/*    width:289px;*/
    
/*}*/
/*.slider .carousel-inner h1*/
/*{*/
/* margin:24px 0!important;*/
 /*margin-left:28px!important;*/
/*left:0!important; */
/*}*/

/*.head_box.head_title_offer_price {*/
/*    box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.5294117647058824);*/
    /*margin-top: -24px;*/
    /*width: 300px;*/
/*}*/
/*.head_box.head_title_offer_price{*/
/*    margin-left:-13px;*/
/*}*/
.cd-headline.clip b{
    margin-bottom:30px;
    
}
.span-clip-title.state_text{
    /*font-size:30px;*/
}
 }



         

/*---------------------------- End   section  header   -------------------*/
.h2-whyus {
 
    margin: 9px 10px 6px 10px;
    color:#64696f;
}
.col-lg-padding {
 
    margin-bottom: 0;
}
.content_news_bar{
    margin-top: 45px!important;
}
@media (max-width:768px){
    .col-lg-padding {
    
    margin-bottom:-25px;
}
.box_text_whyus {
        width: 115%;
    margin-left: -22px;
}
}
/*--------------virgin 2---------*/
/*.div-whyus .text-center{*/
/*    overflow: hidden;*/
/*}*/
/*---------------------------- End  section why choos us    -------------------*/
/*---------------------------- start   section courses    -------------------*/
@media (max-width:768px){
  .AllCource  .container-fluid.custom_new {
    width: 100% !important;
        padding-right: 0px!important;
    padding-left: 0!important;
}
    .cardhover {
 
    margin-bottom: 1px;
 }
    footer .by-me a>i {
 
    margin-bottom: 1px!important;
}
.AllCource .card:hover {
     margin-top: 30px;
              box-shadow:12px 38px 24px rgb(93, 93, 139);
              box-shadow:0 4px 10px black, 0 0 10px black inset;


}
.col_allCource {
    margin: 6px 0!important;

}
.AllCource .card:hover .col_allCource {
    margin: 20px 0!important;
             box-shadow:12px 38px 24px rgb(93, 93, 139);
             box-shadow:0 4px 10px black, 0 0 10px black inset;


 
}
.box_text_whyus {
     z-index: 1;
}
.img-whyus
{
    z-index:2!important;
}
}
/*-----------virgin 2 ------------------*/
.cardhover p {
    padding: 0;
    /* margin: 0; */
    text-align: left;
    /* position: absolute; */
    margin-left: -3px;
    font-size: 17px;
    line-height: 1.6;
}
.descriptions h3 {
 
    font-size: 19px!important;
     font-weight: 1000;
    margin-bottom: 10px;
}
/*---------------------------- End     section courses    -------------------*/
/*---------------------------- start   section videos    -------------------*/
#demo-video {
    /* width: 840px; */
    height: 500px;
    padding: 30px 47px;
    border-radius: 20px;
    background: #111;
    border: 3px solid white;
    margin: 0 auto;
    position: relative;
    box-shadow: 0px 0px 5px #000;
    overflow: hidden;
    width: 90%;
}
#demo-video .carousel-indicators li {
 
    width: 15px;
    height: 13px;
 
    background-color: rgba(255,255,255,.5);
    top: 7px;
    margin-bottom: 1px;
}
@media (max-width:768px){
#demo-video {
    /* width: 840px; */
    height: 440px;
    padding: 14px 24px;
    border-radius: 20px;
    background: #111;
    border: 3px solid white;
    margin: 0 auto;
    position: relative;
    box-shadow: 0px 0px 5px #000;
    overflow: hidden;
    width: 100%;
    /* padding-bottom: 120px; */
}
.img-slider-vido {
    width: 100%;
    height: 400px;
    padding-bottom: -20px;
border-bottom: 8px inset #111;
padding: -21px;
}
#demo-video .carousel-control-next{
    left: 87%;
}
#demo-video .carousel-control-prev {
    left: -12px;
}
#demo-video .carousel-indicators li{
    top:4px;
}
#demo-video .container {
     padding-right: 6px!important;
    padding-left: 6px!important;
}
 
/*---------------------------- End     section videos    -------------------*/

/*---------------------------- start      section prices    -------------------*/
   @media (max-width:768px){

 .prograss_bar {
    width: 201px!important;
 } 
}
    
/*---------------------------- End     section prices    -------------------*/
 /*---------------------------- start      section tabs cardoun     -------------------*/
 .theme-cactus .ui-tabgroup > .ui-panels > [class^="ui-tab"]{
     /*max-height:500px;*/
     /*overflow:hidden;*/
 }

 /*.section-desc{*/
  
 /*   max-height: 110px;*/
 
 /*   overflow: auto;*/
 /* }*/
 .theme-cactus .section-desc{
  
    height: 500px;
    overflow: scroll;
  }
  ::-webkit-scrollbar {
  width: 20px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
/* .theme-cactus ::-webkit-scrollbar {*/
/*  width: 10px;*/
/*  background:red!important;*/
/*}*/

@media(max-width:768px)
{
     .container-fluid.custom_new.sectino_tabs {
    width: 100% !important;
}
}
/*---------------------------- End        section tabs cardoun     -------------------*/
/*---------------------------- start      section q_s_videos    -------------------*/
/*virgin 2 ----------------*/
.img_q_s_videos{
    height:118%!important;
}
/*virgin 2 ----------------*/
@media (max-width: 768px) {
    .img_q_s_videos{

        padding:0px 3px 42px 3px;
        height: 129%;
        box-shadow:none!important;
    }
    .card_q_s_videos{
        height:266px;
        margin-bottom:-58px;
    }
    
      .all_q_s_videos  .app-review .owl-carousel .owl-stage-outer
        {
            padding:0!important;
    }
   .all_q_s_videos  .app-review .owl-theme .owl-nav
   {
       margin-top:-44px;
       margin-bottom:15px;
   }
}
/*---------------------------- End     section q_s_videos    -------------------*/
/*--------------- start      section ISLAMIC ARTICLES------- -------------------*/
   
.flip > .front p, .flip   {
          font-size: 0.9125rem;
    line-height: 160%;
    color: #999;
    text-align: left!important;
}
  @media (max-width:768px){

.discount_custtomized_payment {
    height: auto;
    height: auto;
    margin-top: 100px;
    padding-top: 80px;
    padding-bottom: 0;
}
}
.cardText{
    text-align:left
}
/*.flip > .front p, .flip > .back p {*/
/*    font-size: 0.9125rem;*/
/*     color: #fff!important;*/
/*    line-height: 2!important;*/
/*    font-size: 20px!important;*/
/*}*/

 
@media(max-width:768px)

{
    .cardHoverText {
    visibility: visible!important;
}
.discount_custtomized_payment_content{
    margin-top:122px;
}
}
 
 /*-------------------virgin 2 -------------*/
 .cardBottom{
     height:auto!important;
 }
 .read_greatest_content .card{
     height:500px;
     overflow:hidden;
 }
 .flip > .front p, .flip > .back p {
    font-size: 17px;
    line-height: 1;
    color: #999;
    text-align: left;
}
 /*-------------------virgin 2 -------------*/
/*---------------------------- End       section  ISLAMIC ARTICLES    -------------------*/

/*---------------------------- start        section    Testimony     -------------------*/
/*start virgin 2 */
.testimonials .post-inf {
     font-size: 18px;
 
    line-height: 1.5;
}
/*End  virgin 2 */
  @media (max-width:768px){

.adj-layer {
     padding: 22px 0;
    
}
.adj-layer{
    padding:0!important;
}
 
.testimonial-quote img {
    border: 3px solid #39BBCE;
    border-radius: 50%;
    display: block!important;
    width: 65px!important;
    height: 65px;
    position: relative!important;
    top: -27px;
    /* z-index: 99999999999999999999999999; */
    display: block;
    left: 22px;
}
.testimonial-quote blockquote p {
     font-size: 20px;
    text-align: left;

}
.testimonial-quote .quote-container
{
    padding-left:0!important;
}
.cardslider__nav-next, .cardslider__nav-prev {
 
    width: 25px;
    height: 25px;
  
}
.cardslider__dots-nav{
    display:none;
}
}



/*---------------------------- End       section  Testimony     -------------------*/

/* --  start my-slider two Cochin Testimony ------------------------------------------------------------------ */

.our-tteam-inf.Testimony_move .p-ul-inf span {
    top:-185px!important;
    background:red;
}
.owl-theme.owl_Cochin .owl-dots {
      display: none!important;
}
#kudo-wrap{
width: 100%;
height: 94%;
margin: 0 auto;
background-image: url(https://s3.amazonaws.com/tlcmedicalmassage/wp-content/uploads/WaterStandingWave.jpg);
background-size: cover;
}

.adj-layer {
background-color: rgba(255, 255, 255, 0.8);
padding: 40px;
top: 0;
/* left: 0; */
width: 100%;

}

#kudo-wrap h1 {
font-family: 'Pinyon Script', cursive;
font-size: 22px;
font-weight: bold;
margin-bottom: 0;
color: rgba(206,76,57,0.8);
margin-left: 96px;
}

.testimonial-quote blockquote {
/* Negate theme styles */
border: 0;
margin: 0;
padding: 0;
background: none;
color: gray;
font-family: Georgia, serif;
font-size: 1.5em;
font-style: italic;
line-height: 1.4 !important;
margin: 0 25px 0;
position: relative;
text-shadow: 0 1px #fff;
z-index: 1;
}

.testimonial-quote blockquote * {
box-sizing: border-box;
}

.testimonial-quote blockquote p {
color: #75808a;
line-height: 1!important;
font-size: 20px;
text-align: left;
}

.testimonial-quote blockquote p:first-child:before { /* quotemarks */
content: '\201C';
color: #39BBCE;
font-size: 65px;
font-weight: 700;
opacity: .3;
position: absolute;
top: -34px;
left: 83px;
text-shadow: none;
z-index: -300;
}

.testimonial-quote img {
border: 3px solid #39BBCE;
border-radius: 50%;
display: block;
width: 90px!important;
height: 90px;
position: absolute;
top: -.2em;
left: 0;
}

.testimonial-quote cite {
color: gray;
display: block;
font-size: .8em;
}

.testimonial-quote cite span {
color: #39BBCE;
font-size: 1em;
font-style: normal;
font-weight: 700;
letter-spacing: 1px;
text-transform: uppercase;
text-shadow: 0 1px white;
}

.testimonial-quote {
position: relative;
}

.testimonial-quote .quote-container {
padding-left: 80px;
}
.cardslider__card--index-0{
background:  transparent!important;
}
.cardslider__direction-nav
{
background: transparent;
display: inline-table!important;
}
.cardslider__card--index-0 {
background: #470505!important;
}
.cardslider__card--index-0 {
background: #e84343;
}
#kudo-wrap {
width: 100%;
height: 100%!important;
margin: 0 auto;
background-image: url(https://s3.amazonaws.com/tlcmedicalmassage/wp-content/uploads/WaterStandingWave.jpg);
background-size: cover;
filter: opacity(0.5);
overflow:hidden;
}
.adj-layer{height:100%!important;}
.adj-layer {
background-color: rgba(255, 255, 255, 0.8);
padding: 40px;
top: 0;
/* left: 0; */
width: 100%;
padding-bottom: 107px;
}

/* --  End   my-slider two Cochin------------------------------------------------------------------*/

/*---------------------------- start         section    stat     -------------------*/
 
.stats .icon-sta, .c-col-services i {
   
    width: 80px!important;
    height: 85px!important;
        padding: 5px!important;
}

 .statistics-n:hover .stats .icon-sta{
    background:red!important;
}
.stats:hover .icon-sta, .c-col-services:hover i {
     background: #474343;
         display:none;
         transform: rotate(45deg);

}
.stats .icon-sta, .c-col-services i {
    padding: 10px;
    background: red;
}
/*---------------------------- End           section    stat     -------------------*/
 /*---------------------------- start      section Our  Teachers    -------------------*/
.app-review .owl-carousel .owl-stage-outer {
    padding-top: 0;
}
/*---------------------------- End        section Our  Teachers    -------------------*/
  @media (max-width:768px){
 .img_jobs{
    width: 144%!important;
    margin-left: 10;
    margin-left: -55px;
    min-height: 375px;
    margin-bottom: -85px;
 
 }
   .content_jobs{
       overflow: hidden;
   }
        
    }
}
  
 

  
/*---------------------------- End     section jobs    -------------------*/
/*---------------------------- start      section the perfect student
    -------------------*/
.name-Author{
    margin-left:39px!important;
}
/*---------------------------- End       section the perfect student
    -------------------*/
/*---------------------------- start      section footer    -------------------*/
.p-capy{
    margin: 0 9px;
    border-left: 2px solid #ffcc00!important;
    display: inline-block;
}

  @media (max-width:768px){

   footer .by-me a>i{
    margin-top: 9px;
    font-weight: bold;
    margin-left: 3px;
}
footer p {
    border-left: 2px solid #a28e3e;
    padding-left: 8px!important;
}
.p-capy{
        border-left: none!important;
        color:#ccc;
        margin-bottom: 47px;

}
.icon-whatsapp-bootom {
   
    bottom: 69px;
}
footer .by-me a>i {
 
    margin-left: 1px;
}
}
/*---------------------------- End        section footer    -------------------*/
/*---------------------------- End   Edit in server -------------------*/

/*------------------start page course ----------------------------*/
 .page_course .cardhover {
    background: transparent!important;
    animation: zoominoutsinglefeatured 5s infinite;
    transition: all 9900s ease!important;
}
/*------------------End   page course ----------------------------*/

    </style>

</head>
<body class=" ">

<!--Success!-->
@include('style.layouts.sidbar')
 @include('style.message')