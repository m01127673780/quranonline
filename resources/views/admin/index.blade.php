@include('admin.layouts.header')
@include('admin.layouts.navbar')


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{trans('admin.dashboard') }}  
        <small> {{trans('admin.control_panel') }}</small>
      </h1>
      <ol class="breadcrumb">      
        <li class="active"> <i class="fa fa-dashboard"> <a href="{{ aurl('') }}">></i>{{trans('admin.dashboard') }} </a>    </li>
         <li><a href="{{ aurl('../') }}"><i class="fa fa-university"></i> {{trans('admin.visit_websit') }}  </a></li>
          <a href="{{ url()->current() }}" class="dt-button buttons-reload btn btn-default"><span><i class="fa fa-refresh"></i></span></a>
       </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    	@include('admin.layouts.message')
    	@yield('content')
     </section>
    <!-- /.content -->
  </div>

@include('admin.layouts.footer')