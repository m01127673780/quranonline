{{-----------------------------------}}
@php
    $lang = session('lang');

    if (empty (session('lang')))
    {
    $lang ='ar';
    }
 @endphp
{{-----------------------------------}}

<!--==============Start the perfect student blog ===================-->

    <br>
    <section class="   content_jobs">

             <div class="container-fluid custom_new">
                 <!----------------start  section title---------------------->
                 <section class="background-perfect-student" style="-n_background:#f4f4f4;">
                     <section class=" title">
                         <div class="container ">
                             <div class="section-header text-center">
                                 <h2 class="h2-section-title color_fff">
                                     {{trans('admin.jobs')}}
                                     
                                 </h2>
                                 <div class="line">
                                 </div><!--/.heazder-->
                                 <span class="span-border"></span>
                             </div><!--/.cont div-title-->
                         </div><!--/.line-->
                     </section><!--/.sec-title-->
                     <!----------------End section title------------------------->
                 <div class="row">
                 <div class="col-md-6 ">
                   <img src= "{{url('default/jobs.png')}}" class="img_jobs">
                    </div><!--./ col-md-6-->
                     <div class="col-md-6 ">
                     <div class="content_text_jobs ">
                         <h4 class="head"> {{trans('admin.Join_our_team')}}   </h4>

                         <p class="p">
                                   {{trans('admin.Quran_Square_Institute')}}

                        </p>

                         <form method="post"  class="form-contact "action ="{{url('user/register')}}" >
                             <input type="hidden" name="_token" value="{{ csrf_token ()}}">
                             <div class="row">
                                 <div class="col-lg-6 left-3-input">
                                     <input type="text" class="form-control input_border_bottom"  name="name"    placeholder="{{trans('admin.full_name')}}">
                                 </div>
                                 <div class="col-lg-6 left-3-input">
                                     <input type="email" class="form-control input_border_bottom" name="email"   placeholder="{{trans('admin.email')}}">
                                 </div>

                                 <div class="col-md-12">
                                     <div class="input-group">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text" id="inputGroupFileAddon01">{{trans('upload_cv')}}</span>
                                         </div>
                                         <div class="custom-file">
                                             {!! Form::file('', array('class' => 'form-control custom-file-input','aria-describedby'=>'inputGroupFileAddon01')) !!}
                                             <label class="custom-file-label" for="inputGroupFile01"> {{trans('Choose_file')}}</label>
                                         </div>
                                     </div>
                                 </div>
                             </div><!-- ./row -->
                             <center class="center_margin" style="margin: 20px 0;">
                                 <button class="btn btn-success  btn-lg btn-block    type="submit">   {{trans('admin.send')}}<i class="fa fa-paper-plane-o "></i> </button>
                             </center>
                         </form>


                     </div><!--./ content_text_jobs->
                    </div><!--./ col-md-6-->
                 </div><!--./ row-->
       </section><!-- /.container-fluid -->
</section><!-- /.content_jobs -->
<style>
    .content_jobs{
        background: #0e1a34;
        color: #fff;
        text-align: left;
    }
   .content_jobs .p{
       margin-top: 17px;
       line-height: 1.6;
   }
   .content_jobs .head{
        margin-top: 49px;
        border-bottom: 1px dashed #eee;
        /* font-weight: bold; */
        /* font-size: 100px; */
        padding-bottom: 13px;
    }
    .img_jobs{
        width: 100%;
        height: auto;
        min-height: 497px;

    }
   .content_jobs .form-contact .form-control{
        background-color: transparent!important;
        padding: 20px;
        border-radius: 7px;
    }
    .content_jobs   .custom-file-input {
        background-color: transparent!important;
    }


</style>
<!--=======End read_greatest=========================-->

