@extends('admin.index')
@section('content')
 

<!-- ==================================================================================== -->
      <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
         <!-- small box -->
          <a href="{{ aurl('admin') }}">
                <div class="small-box bg-yellow">
                   <div class="inner">
                       <h3>{{  $admins = DB::table('admins')->count()  }}</h3>
                       <p>{{trans('admin.admin')}}</p>
                     </div>
                     <div class="icon">
                    <i class="ion ion-person"></i>
                    </div>
                   </a><!-- ./ aurl  -->
                  <a href="{{ aurl('admin/create') }}" class="small-box-footer">{{trans('admin.add')}}<i class="fa fa-arrow-circle-right">
                  </i>
              </a>
         </div><!-- ./ col  -->
      </div><!-- ./ row-->
      <!-- ------------------------------------- -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <a href="{{ aurl('users') }}">
          <div class="small-box bg-green">
            <div class="inner">
             <h3>{{  $users = DB::table('users')->count()  }}</h3>
            <p>{{trans('admin.users')}}</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            </a><!-- ./ aurl  -->
            <a href="{{ aurl('users/create') }}" class="small-box-footer">{{trans('admin.add')}} <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
            <a href="{{ aurl('whyus') }}">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{  $whyus = DB::table('whyus')->count()}}</h3>

            <p>{{trans('admin.whyus')}}</p>
            </div>
            <div class="icon">
              <i class="fa fa-question-circle-o"></i>
            </div>
          </a><!-- ./ aurl  -->
            <a href="{{ aurl('whyus/create') }}" class="small-box-footer">{{trans('admin.add')}} <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
           <a href="{{ aurl('courses') }}">
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{  $courses = DB::table('courses')->count()}}</h3>
            <p>{{trans('admin.courses')}}</p>
            </div>
            <div class="icon">
              <i class="fa fa-book "></i>
            </div>
             </a><!-- ./ aurl  -->
            <a href="{{ aurl('courses/create') }}" class="small-box-footer">{{trans('admin.add')}} <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


      </div>
<!-- ==================================================================================== -->
<br><br>
    <!-- ==================================================================================== -->
      <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
         <!-- small box -->
          <a href="{{ aurl('videos') }}">
                <div class="small-box bg-red">
                   <div class="inner">
                       <h3>{{  $videos = DB::table('videos')->count()  }}</h3>
                       <p>{{trans('admin.videos')}}</p>
                     </div>
                     <div class="icon">
                    <i class="fa   fa-video-camera"></i>
                    </div>
                   </a><!-- ./ aurl  -->
                  <a href="{{ aurl('videos/create') }}" class="small-box-footer">{{trans('admin.add')}}<i class="fa fa-arrow-circle-right">
                  </i>
              </a>
         </div><!-- ./ col  -->
      </div><!-- ./ row-->
      <!-- ------------------------------------- -->
    
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <a href="{{ aurl('teachers') }}">
          <div class="small-box bg-yellow ">
            <div class="inner">
             <h3>{{  $teachers = DB::table('teachers')->count()  }}</h3>
            <p>{{trans('admin.teachers')}}</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-secret"></i>
            </div>
            </a><!-- ./ aurl  -->
            <a href="{{ aurl('teachers/create') }}" class="small-box-footer">{{trans('admin.add')}} <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col --> 
         <!-- ------------------------------------- -->
     
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
            <a href="{{ aurl('stat') }}">
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{  $stat = DB::table('stat')->count()}}</h3>

            <p>{{trans('admin.stat')}}</p>
            </div>
            <div class="icon">
              <i class="fa fa-sort-numeric-asc"></i>
            </div>
          </a><!-- ./ aurl  -->
            <a href="{{ aurl('stat/create') }}" class="small-box-footer">{{trans('admin.add')}} <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col --> 
        <!-- ------------------------------------- -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
           <a href="{{ aurl('testimonial') }}">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{  $testimonial = DB::table('testimonial')->count()}}</h3>
            <p>{{trans('admin.testimonial')}}</p>
            </div>
            <div class="icon">
              <i class="fa fa-heartbeat"></i>
            </div>
             </a><!-- ./ aurl  -->
            <a href="{{ aurl('testimonial/create') }}" class="small-box-footer">{{trans('admin.add')}} <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
       <!-- ------------------------------------- -->

      </div>
<!-- ==================================================================================== -->
    <br><br>
    <!-- ==================================================================================== -->
      <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
         <!-- small box -->
          <a href="{{ aurl('beststudent') }}">
                <div class="small-box bg-aqua">
                   <div class="inner">
                       <h3>{{  $beststudent = DB::table('beststudent')->count()  }}</h3>
                       <p>{{trans('admin.beststudent')}}</p>
                     </div>
                     <div class="icon">
                    <i class="fa   fa-graduation-cap"></i>
                    </div>
                   </a><!-- ./ aurl  -->
                  <a href="{{ aurl('beststudent/create') }}" class="small-box-footer">{{trans('admin.add')}}<i class="fa fa-arrow-circle-right">
                  </i>
              </a>
         </div><!-- ./ col  -->
      </div><!-- ./ row-->
      <!-- ------------------------------------- -->
    
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <a href="{{ aurl('halfhour') }}">
          <div class="small-box bg-red">
            <div class="inner">
             <h3>{{  $halfhour = DB::table('halfhour')->count()  }}</h3>
            <p>{{trans('admin.halfhour')}}</p>
            </div>
            <div class="icon">
              <i class="fa fa-clock-o"></i>
            </div>
            </a><!-- ./ aurl  -->
            <a href="{{ aurl('halfhour/create') }}" class="small-box-footer">{{trans('admin.add')}} <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col --> 
         <!-- ------------------------------------- -->
     
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
            <a href="{{ aurl('hour') }}">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{  $hour = DB::table('hour')->count()}}</h3>

            <p>{{trans('admin.hour')}}</p>
            </div>
            <div class="icon">
              <i class="fa fa-clock-o"></i>
            </div>
          </a><!-- ./ aurl  -->
            <a href="{{ aurl('hour/create') }}" class="small-box-footer">{{trans('admin.add')}} <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col --> 
        <!-- ------------------------------------- -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
           <a href="{{ aurl('footer') }}">
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{  $footer = DB::table('footer')->count()}}</h3>
            <p>{{trans('admin.footer')}}</p>
            </div>
            <div class="icon">
              <i class="fa fa-map-o"></i>
            </div>
             </a><!-- ./ aurl  -->
            <a href="{{ aurl('footer/create') }}" class="small-box-footer">{{trans('admin.add')}} <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
       <!-- ------------------------------------- -->

      </div>
<!-- ==================================================================================== -->    <br><br>
<!-- ==================================================================================== -->
      <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
         <!-- small box -->
          <a href="{{ aurl('slider') }}">
                <div class="small-box bg-green">
                   <div class="inner">
                       <h3>{{  $slider = DB::table('slider')->count()  }}</h3>
                       <p>{{trans('admin.slider')}}</p>
                     </div>
                     <div class="icon">
                    <i class="fa   fa-sliders"></i>
                    </div>
                   </a><!-- ./ aurl  -->
                  <a href="{{ aurl('slider/create') }}" class="small-box-footer">{{trans('admin.add')}}<i class="fa fa-arrow-circle-right">
                  </i>
              </a>
         </div><!-- ./ col  -->
      </div><!-- ./ row-->
      <!-- ------------------------------------- -->
    
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <a href="{{ aurl('slidertext') }}">
          <div class="small-box bg-aqua">
            <div class="inner">
             <h3>{{  $slidertext = DB::table('slidertext')->count()  }}</h3>
            <p>{{trans('admin.slidertext')}}</p>
            </div>
            <div class="icon">
              <i class="fa fa-text-width"></i>
            </div>
            </a><!-- ./ aurl  -->
            <a href="{{ aurl('slidertext/create') }}" class="small-box-footer">{{trans('admin.add')}} <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col --> 
         <!-- ------------------------------------- -->
     
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
            <a href="{{ aurl('hour') }}">
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{  $hour = DB::table('hour')->count()}}</h3>

            <p>{{trans('admin.contact')}}</p>
            </div>
            <div class="icon">
              <i class="fa fa-handshake-o"></i>
            </div>
          </a><!-- ./ aurl  -->
            <a href="{{ aurl('hour/create') }}" class="small-box-footer">{{trans('admin.add')}} <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col --> 
        <!-- ------------------------------------- -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
           <a href="{{ aurl('student') }}">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{  $student = DB::table('student')->count()}}</h3>
            <p>{{trans('admin.student')}}</p>
            </div>
            <div class="icon">
              <i class="fa fa-address-card-o"></i>
            </div>
             </a><!-- ./ aurl  -->
            <a href="{{ aurl('student/create') }}" class="small-box-footer">{{trans('admin.add')}} <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
       <!-- ------------------------------------- -->

      </div>
<!-- ==================================================================================== -->
     <br><br>
<!-- ==================================================================================== -->
      <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
         <!-- small box -->
          <a href="{{ aurl('teachersignup') }}">
                <div class="small-box bg-yellow">
                   <div class="inner">
                       <h3>{{  $teachersignup = DB::table('teachersignup')->count()  }}</h3>
                       <p>{{trans('admin.teachersignup')}}</p>
                     </div>
                     <div class="icon">
                    <i class="fa   fa-id-card"></i>
                    </div>
                   </a><!-- ./ aurl  -->
                  <a href="{{ aurl('teachersignup/create') }}" class="small-box-footer">{{trans('admin.add')}}<i class="fa fa-arrow-circle-right">
                  </i>
              </a>
         </div><!-- ./ col  -->
      </div><!-- ./ row-->
      <!-- ------------------------------------- -->
    
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <a href="{{ aurl('quick') }}">
          <div class="small-box bg-green">
            <div class="inner">
             <h3>{{  $quick = DB::table('quick')->count()  }}</h3>
            <p>{{trans('admin.quick')}}</p>
            </div>
            <div class="icon">
              <i class="fa fa-rocket"></i>
            </div>
            </a><!-- ./ aurl  -->
            <a href="{{ aurl('quick/create') }}" class="small-box-footer">{{trans('admin.add')}} <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col --> 
         <!-- ------------------------------------- -->
     
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
            <a href="{{ aurl('news') }}">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{  $news = DB::table('news')->count()}}</h3>

            <p>{{trans('admin.news')}}</p>
            </div>
            <div class="icon">
              <i class="fa fa-globe fa-spin"></i>
            </div>
          </a><!-- ./ aurl  -->
            <a href="{{ aurl('news/create') }}" class="small-box-footer">{{trans('admin.add')}} <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col --> 
        <!-- ------------------------------------- -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
           <a href="{{ aurl('student') }}">
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{  $student = DB::table('student')->count()}}</h3>
            <p>{{trans('admin.student')}}</p>
            </div>
            <div class="icon">
              <i class="fa fa-address-card-o"></i>
            </div>
             </a><!-- ./ aurl  -->
            <a href="{{ aurl('student/create') }}" class="small-box-footer">{{trans('admin.add')}} <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
       <!-- ------------------------------------- -->

      </div>
<!-- ==================================================================================== -->
    
       


      @endsection