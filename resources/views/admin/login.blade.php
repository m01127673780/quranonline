 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ trans('admin.login') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ url('design/adminlte') }}/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('design/adminlte') }}/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->zz
  <link rel="stylesheet" href="{{ url('design/adminlte') }}/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('design/adminlte') }}/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="{{ url('design/adminlte') }}/dist/css/custom-login.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url('design/adminlte') }}/plugins/iCheck/square/blue.css">
 
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<div class="bod"  >
    <div class="blur" id="particles-js"></div>
    <form method="post" >
        <img class='img-login' src="{{ url('design')}}/img\login\admin-img.jpg" class="img-circle" alt="User Image">



        <!-- public\design\img\login -->
<!--         <img class='img-login' src="http://localhost/work-php/55/10/admin/images/login.jpg" class="img-circle" alt="User Image">
 -->      {!! csrf_field() !!}
        <h2 class="text-center heading-login" >{{ trans('admin.supervisor-name') }}</h2>
        <img src="">

      <div class="form-group input_eff">
<!--         <label for="userName">{{ trans('admin.supervisor-name') }}</label>
 -->        <input type="text" name="email" class="form-control" id="userName" placeholder="{{ trans('admin.Enter-supervisor-name') }}"  >
        <span class="eff">
      </div>
      <div class="form-group input_eff">
<!--         <label for="passWord">{{ trans('admin.Enter-password') }}</label>
 -->        <input type="password" name="password" class="form-control" id="passWord" placeholder="{{ trans('admin.Enter-your-password') }}" >
        <span class="eff"></span>
      </div>
       <input type="submit"class="btn btn-success" value="{{ trans('admin.login') }}">
            <div class="checkbox icheck">  
            <label>
              <input type="checkbox" name="rememberme" value="1"  style="color: #fff"> 
                {{ trans('admin.remember_me') }}

            </label>
          </div>
         <a    href="{{ aurl('forgot/password') }}">
{{ trans('admin.i_forgot_my_password') }} 
        </a><br>
    </form>

</div>
<div class='overlay'>
  <span id="load"></span>
</div>

<!--start login-->
<a id="dash" href="dashboard.html"></a>
    </section>
    <div id='overlay'>
    </div>
    <script src="template/js/jquery-3.2.1.min.js" ></script>
    
<style type="text/css">
  
.icheck>label ,a {
    padding-left: 0;
    color: #ff;
    color: #fff;
}

</style>
<!-- jQuery 3 -->
<script src="{{ url('design/adminlte') }}/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url('design/adminlte') }}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="{{ url('design/adminlte') }}/plugins/iCheck/icheck.min.js"></script>
<script src="{{ url('design/adminlte') }}/dist/js/custom-login.js"></script>
<script src="{{ url('design/adminlte') }}/dist/js/piugins-login/particles.min.js"></script>
<script src="{{ url('design/adminlte') }}/dist/js/piugins-login/app.js"></script>

 
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });





</script>
</body>
</html>
