@extends('admin.index')
@section('content')


<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('footer'),'files'=>true]) !!}
   
       <div class="form-group">
        {!! Form::label('payment_ar',trans('admin.payment_ar')) !!}
        {!! Form::text('payment_ar',old('payment_ar'),['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('payment_en',trans('admin.payment_en')) !!}
        {!! Form::text('payment_en',old('payment_en'),['class'=>'form-control']) !!}
     </div> 
         <div class="form-group">
        {!! Form::label('contact_ar',trans('admin.contact_ar')) !!}
        {!! Form::text('contact_ar',old('contact_ar'),['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('contact_en',trans('admin.contact_en')) !!}
        {!! Form::text('contact_en',old('contact_en'),['class'=>'form-control']) !!}
     </div>
       <div class="form-group">
        {!! Form::label('callus_ar',trans('admin.callus_ar')) !!}
        {!! Form::text('callus_ar',old('callus_ar'),['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('callus_en',trans('admin.callus_en')) !!}
        {!! Form::text('callus_en',old('callus_en'),['class'=>'form-control']) !!}
     </div>
       <div class="form-group">
        {!! Form::label('import_info_ar',trans('admin.import_info_ar')) !!}
        {!! Form::text('import_info_ar',old('import_info_ar'),['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('import_info_en',trans('admin.import_info_en')) !!}
        {!! Form::text('import_info_en',old('import_info_en'),['class'=>'form-control']) !!}
     </div>

       <div class="form-group">
        {!! Form::label('aboutus_ar',trans('admin.aboutus_ar')) !!}
        {!! Form::text('aboutus_ar',old('aboutus_ar'),['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('aboutus_en',trans('admin.aboutus_en')) !!}
        {!! Form::text('aboutus_en',old('aboutus_en'),['class'=>'form-control']) !!}
     </div>

       <div class="form-group">
        {!! Form::label('emaill',trans('admin.emaill')) !!}
        {!! Form::email('emaill',old('emaill'),['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('facebook',trans('admin.facebook')) !!}
        {!! Form::url('facebook',old('facebook'),['class'=>'form-control']) !!}
     </div>  
        <div class="form-group">
        {!! Form::label('twitter',trans('admin.twitter')) !!}
        {!! Form::url('twitter',old('twitter'),['class'=>'form-control']) !!}
     </div>

       <div class="form-group">
        {!! Form::label('instagram',trans('admin.instagram')) !!}
        {!! Form::url('instagram',old('instagram'),['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('googel',trans('admin.googel')) !!}
        {!! Form::url('googel',old('googel'),['class'=>'form-control']) !!}
     </div> 
         <div class="form-group">
        {!! Form::label('youtube',trans('admin.youtube')) !!}
        {!! Form::url('youtube',old('youtube'),['class'=>'form-control']) !!}
     </div> 


      <!-- -------------- -->
     <div class="form-group">
        {!! Form::label('img_appstore',trans('admin.img_appstore')) !!}
        {!! Form::file('img_appstore',['class'=>'form-control img_appstore']) !!}
 
     </div>
     <div class="form-group">
       <img name="img" class="image" src="{{ asset( 'storage/img_appstore/No_Image.jpg')}} "   > 
     </div>
  <!-- -------------- -->  
    <div class="form-group">
        {!! Form::label('link_appstore',trans('admin.link_appstore')) !!}
        {!! Form::url('link_appstore',old('link_appstore'),['class'=>'form-control']) !!}
     </div>
  <!-- -------------- -->
     <div class="form-group">
        {!! Form::label('img_googelplay',trans('admin.img_googelplay')) !!}
        {!! Form::file('img_googelplay',['class'=>'form-control img']) !!}
 
     </div>
     <div class="form-group">
       <img name="img_googelplay" class="image" src="{{ asset( 'storage/footer/img_googelplay/No_Image.jpg')}} "   > 
     </div> 
        <div class="form-group">
        {!! Form::label('link_googelplay',trans('admin.link_googelplay')) !!}
        {!! Form::url('link_googelplay',old('link_googelplay'),['class'=>'form-control']) !!}
     </div>
<!-- -------------- -->
     {!! Form::submit(trans('admin.add'),['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->

 <style type="text/css">
    
.image{
    width: 100px;
    height: 100px;
    border-radius: 50%;  
     /* text-align: center; */
    margin: auto;
 
}
 </style>

@endsection