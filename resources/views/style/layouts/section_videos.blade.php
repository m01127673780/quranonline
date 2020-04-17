
<!-- ==============start Videos ======================================== -->
<!----------------start  section title---------------------->
<section class=" title d-none--" id="Videos">
    <div class="container ">
        <div class="section-header text-center">

            <h2 class="h2-section-title">
                <!--All our Training Videos-->
                {{trans('admin.videos_example')}} <i class="fa  fa-laptop"></i> 


            </h2>
            <div class="line">
            </div><!--/.heazder-->
            <span class="span-border"></span>
        </div><!--/.cont div-title-->
    </div><!--/.line-->
</section><!--/.sec-title-->
<!----------------End section title------------------------->
<section class="cection-videos" >
    <div class="container ">
        <div class="row ">
            <div class="  container">
                <div id="demo-video" class=" demo-video carousel slide" data-ride="carousel" >
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <?php
                        $i = 0;
                        ?>
                        @foreach($videos as $video)
                            <li data-target="#demo-video" data-slide-to="{{$i}}">
                                <?php
                                $i++;
                                ?>
                                @endforeach
                            </li>
                    </ul>
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                    <?php
                    $slide = 0 ;
                    ?>
                    <!---------------->
                        @foreach($videos as $video)
                            <div class="carousel-item slider-bootstrap  {{ $slide == 0 ? 'active':''}} ">
                                <img class="img-slider-vido" src="storage/{{$video->img}}" alt="Chicago" style=" ">
                                <a  class="video-icon " href=
                                " {{$video->link}}"
                                    data-lity="">
                                    <i class=" fa-ico-play fa fa-youtube-play" ></i>
                                </a>
                            </div>
                        <?php
                        $slide++;
                        ?>
                    @endforeach
                    <!---------------->
                    </div>
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo-video" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo-video" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div><!-- ./demo-video-->
            </div><!-- ./container-->
        </div><!-- ./row-->
    </div><!-- ./container -->
</section><!-- ./section-videos-->
<!-- =======End Videos ========================= -->