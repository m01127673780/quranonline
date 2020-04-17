{{-----------------------------------}}
@php
    $lang = session('lang');

    if (empty (session('lang')))
    {
    $lang ='ar';
    }
@endphp

{{-----------------------------------}}
<!--=======================================================-->
<script type="text/javascript" src="{{ url('design/style') }}/js/jquery.1.7.2.js"></script>




     <script type="text/javascript" src="{{ url('design/style/slider-larg')}}/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="{{ url('design/style/slider-larg')}}/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

</body>
<script src="{{ url('design/style') }}/js/vendrs/jquery.js"></script>
<script src="{{ url('design/style') }}/js/vendrs/owl.carousel.min.js"></script>

<!-- isopte -->
<script src="{{ url('design/style') }}/js/vendrs/isotope.js"></script>
<script src="{{ url('design/style') }}/js/vendrs/jquery.countTo.js"></script>
<script src="{{ url('design/style') }}/js/vendrs/wow.min.js"></script>
<script src="{{ url('design/style') }}/js/bootstrip-slider/bootstrap.min.js"></script>
<script src="{{ url('design/style') }}/js/vendrs/lity.min.js"></script>
<script src="{{ url('design/style') }}/js/vendrs/Animated-Headilines2.js"></script>
<script type="text/javascript" src="{{ url('design/style') }}/js/jquery.syotimer.min.js"></script>

{{--------------start       section cochin_slider ----------- --}}
{{--------------start       teestmonls_in_arabic   ----------- --}}
<script src="{{ url('design/style/teestmonls_in_arabic') }}/jquery.event.move.js"></script>
<script src="{{ url('design/style/teestmonls_in_arabic') }}/jquery.event.swipe.js"></script>
<script src="{{ url('design/style/teestmonls_in_arabic') }}/dist/js/jquery.cardslider.min.js"></script>

{{--------------End         section cochin_slider ----------- --}}
<!--- start    countdown------------------------------------>

<script type="text/javascript" src="{{ url('design/style') }}/countdown/js/flipdown/flipdown.js"></script>
<script type="text/javascript" src="{{ url('design/style') }}/countdown/js/main.js"></script>
<!--- End   countdown------------------------------------>

<!--- start    digitalClock------------------------------------>
<script type="text/javascript">
    function showTime(){
        var date, h, m, s, time, session;
        date = new Date();
        h = date.getHours().toString();
        m = date.getMinutes().toString();
        s = date.getSeconds().toString();
        session = 'AM';

        if(s.length < 2){
            s = '0' + s;
        }
        if(h.length < 2){
            h = '0' + h;
        }
        if(m.length < 2){
            m = '0' + m;
        }

        if(h > 12){
            session = 'PM';
        } else {
            session = "AM";
        }

        time = h + ' : ' + m + ' : ' + s + ' ' + session;
        document.getElementById('digitalClock').textContent = time;

    }
    showTime();
    setInterval(showTime, 1000);

</script>

<!--- End   digitalClock------------------------------------>


<script src="{{ url('design/style') }}/js/script.js"></script>
<script src="{{ url('design/style') }}/js/script.js"></script>
<script>
    $(function() {
        var Accordion = function(el, multiple) {
            this.el = el || {};
            this.multiple = multiple || false;

            // Variables privadas
            var links = this.el.find('.link');
            // Evento
            links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
        }

        Accordion.prototype.dropdown = function(e) {
            var $el = e.data.el;
            $this = $(this),
                $next = $this.next();

            $next.slideToggle();
            $this.parent().toggleClass('open');

            if (!e.data.multiple) {
                $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
            };
        }

        var accordion = new Accordion($('#accordion'), false);
    });
</script>

<script>
    $('.my-slider').cardslider({
        swipe: true,
        dots: true
    });
</script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
<script type="text/javascript">
    @php

        if ( session('lang') == 'ar')
    @endphp
    {{---------start cochin_slider-----------}}
    // add google fonts for ie7 and ie8

    $(document).ready(function() {
        $('.zuperSlider').zuperSlider({
            mode:'none',
            arrows:{
                next:true,
                nextHorizontal:"middle+30",
                nextVertical:"end+20",
                prev:true,
                prevHorizontal:"middle-30",
                prevVertical:"end+20"
            },
            nav:{
                active:true,
                type:"bullets",
                imagesDimension:"105x55",
                navHorizontal:"end-305",
                navVertical:53,
                thumbs:true,
                thumbsDimension:"120x80"
            },
            auto:{
                active:false,
                time:2000,
                timer:"numbers",
                hoverStop:false,
                posHorizontal:'middle',
                posVertical:302,
                playPause:true,
                playPauseHover:true,
                playPauseHorizontal:'middle+102',
                playPauseVertical:24
            },
            animate:{
                type:"carousel",
                speed:1000,
                position:["randomSquare"],
                effect:["fade"],
                cols:4,
                rows:2,
                delay:20,
                easing:"linear",
                car_nr:15,
                perPage:1
            },
            multipleEff:{
                active:false,
                random:false,
                eff:[]
            },
            order:{
                random:false,
                startSlide:1,
                firstSlide:1
            },
            caption:true,
            touchNavigation:false,
            bgImageScaleAndCenter:false,
            responsive:false,
            navigateOnHover:false,
            navigateWithMouseWheel:true,

            captionCallback: function () {}
        });
    });
    {{---------End  cochin_slider-----------}}
    {{---------start   Accordion-----------}}


    $('.price-minus').on('click',function(){
        $('.half-an-hour').slideDown(1000);
        $('.one-hour').slideUp(1000);
        $(".price_value").html('{{trans('admin.30MINS')}}');

    });
    $('.price-plus').on('click',function(){
        $('.half-an-hour').slideUp(1000);
        $('.one-hour').slideDown(1000);
        $(".price_value").html('{{trans('admin.60MINS')}}');

    });



    ///////////////////////////////////////////////////////
    jQuery(function($){
        /* Simple Timer. The countdown to 20:30 2100.05.09 */
        $('#simple-timer').syotimer({
            year: 2020,
            month: 5,
            day: 9,
            hour: 20,
            minute: 30
        });
    });
    // -------------------------------------------------


    // Activating the animation of the news bar
    var totalWidth = 0;

    $(".news-holder .news .new").each(function() {
        var oneWidth = $(this).outerWidth();
        totalWidth += oneWidth;
    });

    function newsBar() {
        var news = $(".news-holder .news") ,
            actualWidth = totalWidth + ($(window).width() - (news.offset().left + news.outerWidth())) ,
            newsSpeed   = (actualWidth / /* Here goes your speed with pixels */100) * 1000;

        $(".news-holder .news").animate({
            "right": -totalWidth
        }, newsSpeed, "linear", function () {
            $(".news-holder .news").css("right", "100%");
            newsBar();
        });

    }
    newsBar();

    $(".news-holder").on("mouseenter", function() {
        var that = $(this).find(".news").stop(true);
    });

    $(".news-holder").on("mouseleave", function() {
        newsBar();
    });
</script>
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->

<script type="text/javascript">

    jQuery(document).ready(function() {



        jQuery('.tp-banner').show().revolution(
            {
                dottedOverlay:"none",
                delay:9000,
                startwidth:1170,
                startheight:700,
                hideThumbs:200,

                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:5,

                navigationType:"none",
                navigationArrows:"solo",
                navigationStyle:"preview1",

                touchenabled:"on",
                onHoverStop:"on",

                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,


                keyboardNavigation:"on",

                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,

                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,

                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,

                shadow:0,
                fullWidth:"on",
                fullScreen:"off",

                spinner:"spinner0",

                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,

                shuffle:"off",

                autoHeight:"off",
                forceFullWidth:"off",



                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,

                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0
            });




    }); //ready

</script>
</html>
