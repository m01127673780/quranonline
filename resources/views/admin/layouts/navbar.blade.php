
 <header class="main-header">
  <!-- Logo -->
  <a href="{{ aurl('') }}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>qur</b>an</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>quran</b>square</span>
    
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    @include('admin.layouts.menu')
  </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
                <img src="{{ url('no_image') }}/logo.png" class="img-circle" alt="User Image">

       </div>
      <div class="pull-left info">
        <p>{{ admin()->user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form"style="display: none;">
      <div class="input-group" >
        <input type="text" name="q" class="form-control" disabled="disabled" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header"></li>

      <li class="treeview {{ active_menu('')[0] }}">
        <a href="#">
          <i class="fa fa-list"></i> <span>{{ trans('admin.dashboard') }}</span>
          <span class="pull-right-container">
            
          </span>
        </a>
        <ul class="treeview-menu" style="{{ active_menu('admin')[1] }}">
          <li class=""><a href="{{ aurl('') }}">
            <i class="fa fa-cog fa-spin"></i> <span>{{ trans('admin.dashboard') }}</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class=""><a href="{{ aurl('settings') }}">
          <i class="fa fa-cogs"></i> <span>{{ trans('admin.settings') }}</span>
          <span class="pull-right-container">
          </span>
        </a>
      </li>
    </ul>
  </li>
  <li class="treeview {{ active_menu('admin')[0] }}">
    <a href="#">
      <i class="fa fa-users"></i> <span>{{ trans('admin.admin') }}</span>
      <span class="pull-right-container">
        
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('admin')[1] }}">
      <li class=""><a href="{{ aurl('admin') }}"><i class="fa fa-users"></i> {{ trans('admin.admin') }}</a></li>
      <li class=""><a href="{{ aurl('admin/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
          
    </ul>
  </li>
  <li class="treeview {{ active_menu('users')[0] }}">
    <a href="#">
      <i class="fa fa-users"></i> <span>{{ trans('admin.users') }}</span>
      <span class="pull-right-container">
        
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('users')[1] }}">
      <li class=""><a href="{{ aurl('users') }}"><i class="fa fa-address-card
"></i> {{ trans('admin.users') }}</a></li>
      <li class=""><a href="{{ aurl('users') }}?level=user"><i class="fa fa-user-secret
"></i> {{ trans('admin.user') }}</a></li>
      <li class=""><a href="{{ aurl('users') }}?level=vendor"><i class="fa fa-shopping-cart"></i> {{ trans('admin.vendor') }}</a></li>
      <li class=""><a href="{{ aurl('users') }}?level=company"><i class="fa fa-ship"></i> {{ trans('admin.company') }}</a></li>
            <li class=""><a href="{{ aurl('users/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>

    </ul>
  </li>

<!-- ============================ -->
   <li class="treeview {{ active_menu('whyus')[0] }}">
    <a href="#">
      <i class="fa fa-question-circle-o"></i> <span>{{ trans('admin.whyus') }}</span>
      <span class="pull-right-container">
       </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('whyus')[1] }}">
      <li class=""><a href="{{ aurl('whyus') }}"><i class="fa  fa-question-circle-o"></i> {{ trans('admin.whyus') }}</a></li>
      <li class=""><a href="{{ aurl('whyus/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>
 <!-- ============================ --> 
<!-- ============================ -->
   <li class="treeview {{ active_menu('courses')[0] }}">
    <a href="#">
      <i class="fa fa-book"></i> <span>{{ trans('admin.courses') }}</span>
      <span class="pull-right-container">
       </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('courses')[1] }}">
      <li class=""><a href="{{ aurl('courses') }}"><i class="fa  fa-book"></i> {{ trans('admin.courses') }}</a></li>
      <li class=""><a href="{{ aurl('courses/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>
 <!-- ============================ -->
 <!-- ============================ -->
   <li class="treeview {{ active_menu('videos')[0] }}">
    <a href="#">
      <i class="fa fa-video-camera"></i> <span>{{ trans('admin.videos') }}</span>
      <span class="pull-right-container">
       </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('videos')[1] }}">
      <li class=""><a href="{{ aurl('videos') }}"><i class="fa  fa-video-camera"></i> {{ trans('admin.videos') }}</a></li>
      <li class=""><a href="{{ aurl('videos/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>
 <!-- ============================ -->
  <!-- ============================ -->
   <li class="treeview {{ active_menu('teachers')[0] }}">
    <a href="#">
      <i class="fa fa-user-secret"></i> <span>{{ trans('admin.teachers') }}</span>
      <span class="pull-right-container">
       </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('teachers')[1] }}">
      <li class=""><a href="{{ aurl('teachers') }}"><i class="fa  fa-user-secret"></i> {{ trans('admin.teachers') }}</a></li>
      <li class=""><a href="{{ aurl('teachers/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>
 <!-- ============================ -->
  <!-- ============================ -->
   <li class="treeview {{ active_menu('stat')[0] }}">
    <a href="#">
      <i class="fa fa-sort-numeric-asc"></i> <span>{{ trans('admin.stat') }}</span>
      <span class="pull-right-container">
       </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('stat')[1] }}">
      <li class=""><a href="{{ aurl('stat') }}"><i class="fa  fa-sort-numeric-asc"></i> {{ trans('admin.stat') }}</a></li>
      <li class=""><a href="{{ aurl('stat/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>
 <!-- ============================ -->

  <!-- ============================ -->
   <li class="treeview {{ active_menu('testimonial')[0] }}">
    <a href="#">
      <i class="fa fa-heartbeat"></i> <span>{{ trans('admin.testimonial') }}</span>
      <span class="pull-right-container">
       </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('testimonial')[1] }}">
      <li class=""><a href="{{ aurl('testimonial') }}"><i class="fa  fa-heartbeat"></i> {{ trans('admin.testimonial') }}</a></li>
      <li class=""><a href="{{ aurl('testimonial/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>
 <!-- ============================ -->

  <!-- ============================ -->
   <li class="treeview {{ active_menu('beststudent')[0] }}">
    <a href="#">
      <i class="fa fa-graduation-cap"></i> <span>{{ trans('admin.beststudent') }}</span>
      <span class="pull-right-container">
       </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('beststudent')[1] }}">
      <li class=""><a href="{{ aurl('beststudent') }}"><i class="fa  fa-graduation-cap"></i> {{ trans('admin.beststudent') }}</a></li>
      <li class=""><a href="{{ aurl('beststudent/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>
 <!-- ============================ -->
  <!-- ============================ -->
   <li class="treeview {{ active_menu('halfhour')[0] }}">
    <a href="#">
      <i class="fa fa-clock-o"></i> <span>{{ trans('admin.halfhour') }}</span>
      <span class="pull-right-container">
       </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('halfhour')[1] }}">
      <li class=""><a href="{{ aurl('halfhour') }}"><i class="fa  fa-clock-o"></i> {{ trans('admin.halfhour') }}</a></li>
      <li class=""><a href="{{ aurl('halfhour/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>
 <!-- ============================ --> 

  <!-- ============================ -->
   <li class="treeview {{ active_menu('hour')[0] }}">
    <a href="#">
      <i class="fa fa-clock-o"></i> <span>{{ trans('admin.hour') }}</span>
      <span class="pull-right-container">
       </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('hour')[1] }}">
      <li class=""><a href="{{ aurl('hour') }}"><i class="fa  fa-clock-o"></i> {{ trans('admin.hour') }}</a></li>
      <li class=""><a href="{{ aurl('hour/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>
 <!-- ============================ -->
   <!-- ============================ -->
   <li class="treeview {{ active_menu('footer')[0] }}">
    <a href="#">
      <i class="fa fa-map-o"></i> <span>{{ trans('admin.footer') }}</span>
      <span class="pull-right-container">
       </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('footer')[1] }}">
      <li class=""><a href="{{ aurl('footer') }}"><i class="fa  fa-map-o"></i> {{ trans('admin.footer') }}</a></li>
      <li class=""><a href="{{ aurl('footer/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>
 <!-- ============================ -->
  
   <li class="treeview {{ active_menu('slider')[0] }}">
    <a href="#">
      <i class="fa fa-sliders"></i> <span>{{ trans('admin.slider') }}</span>
      <span class="pull-right-container">
       </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('slider')[1] }}">
      <li class=""><a href="{{ aurl('slider') }}"><i class="fa  fa-sliders"></i> {{ trans('admin.slider') }}</a></li>
      <li class=""><a href="{{ aurl('slider/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>
 <!-- ============================ --> 
 <!-- ============================ -->
   <li class="treeview {{ active_menu('slidertext')[0] }}">
    <a href="#">
      <i class="fa fa-text-width"></i> <span>{{ trans('admin.slidertext') }}</span>
      <span class="pull-right-container">
       </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('slidertext')[1] }}">
      <li class=""><a href="{{ aurl('slidertext') }}"><i class="fa  fa-text-width"></i> {{ trans('admin.slidertext') }}</a></li>
      <li class=""><a href="{{ aurl('slidertext/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>
 <!-- ============================ -->   <!-- ============================ -->


  <!-- ============================ -->
   <li class="treeview {{ active_menu('contact')[0] }}">
    <a href="#">
      <i class="fa fa-handshake-o"></i> <span>{{ trans('admin.contact') }}</span>
      <span class="pull-right-container">
       </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('contact')[1] }}">
      <li class=""><a href="{{ aurl('contact') }}"><i class="fa  fa-contacts"></i> {{ trans('admin.contact') }}</a></li>
      <li class=""><a href="{{ aurl('contact/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>
 <!-- ============================ --> 

  <!-- ============================ -->
   <li class="treeview {{ active_menu('student')[0] }}">
    <a href="#">
      <i class="fa fa-address-card-o"></i> <span>{{ trans('admin.student') }}</span>
      <span class="pull-right-container">
       </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('student')[1] }}">
      <li class=""><a href="{{ aurl('student') }}"><i class="fa  fa-students"></i> {{ trans('admin.student') }}</a></li>
      <li class=""><a href="{{ aurl('student/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>
 <!-- ============================ --> 


 <!-- ============================ -->
   <li class="treeview {{ active_menu('teachersignup')[0] }}">
    <a href="#">
      <i class="fa fa-users"></i> <span>{{ trans('admin.teachersignup') }}</span>
      <span class="pull-right-container">
       </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('teachersignup')[1] }}">
      <li class=""><a href="{{ aurl('teachersignup') }}"><i class="fa  fa-users"></i> {{ trans('admin.teachersignup') }}</a></li>
      <li class=""><a href="{{ aurl('teachersignup/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>
 <!-- ============================ -->

 <!-- ============================ -->
   <li class="treeview {{ active_menu('quick')[0] }}">
    <a href="#">
      <i class="fa fa-rocket"></i> <span>{{ trans('admin.quick') }}</span>
      <span class="pull-right-container">
       </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('quick')[1] }}">
      <li class=""><a href="{{ aurl('quick') }}"><i class="fa  fa-rocket"></i> {{ trans('admin.quick') }}</a></li>
      <li class=""><a href="{{ aurl('quick/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>
 <!-- ============================ -->
   <!-- ============================ -->
   <li style="display: block;" class="treeview {{ active_menu('news')[0] }}">
    <a href="#">
      <i class="fa fa-globe fa-spin"></i> <span>{{ trans('admin.news') }}</span>
      <span class="pull-right-container">
       </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('news')[1] }}">
      <li class=""><a href="{{ aurl('news') }}"><i class="fa  fa-newss"></i> {{ trans('admin.news') }}</a></li>
      <li class=""><a href="{{ aurl('news/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>
 <!-- ============================ -->

</ul>
</section>
<!-- /.sidebar -->
</aside>
