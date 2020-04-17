@extends('admin.index')
@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('beststudent'),'files'=>true]) !!}

       <div class="form-group">
        {!! Form::label('name_ar',trans('admin.name_ar')) !!}
        {!! Form::text('name_ar',old('name_ar'),['class'=>'form-control','required'=>'required']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('name_en',trans('admin.name_en')) !!}
        {!! Form::text('name_en',old('name_en'),['class'=>'form-control','required'=>'required']) !!}
     </div> 
     <div class="form-group">
        {!! Form::label('date_ar',trans('admin.date_ar')) !!}
        {!! Form::text('date_ar',old('date_ar'),['class'=>'form-control','required'=>'required']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('date_en',trans('admin.date_en')) !!}
        {!! Form::text('date_en',old('date_en'),['class'=>'form-control','required'=>'required']) !!}
     </div> 
     <div class="form-group">
        {!! Form::label('Lecture_ar',trans('admin.Lecture_ar')) !!}
        {!! Form::text('Lecture_ar',old('Lecture_ar'),['class'=>'form-control','required'=>'required']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('Lecture_en',trans('admin.Lecture_en')) !!}
        {!! Form::text('Lecture_en',old('Lecture_en'),['class'=>'form-control','required'=>'required']) !!}
     </div>
          <div class="form-group">
        {!! Form::label('job_ar',trans('admin.job_ar')) !!}
        {!! Form::text('job_ar',old('job_ar'),['class'=>'form-control','required'=>'required']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('job_en',trans('admin.job_en')) !!}
        {!! Form::text('job_en',old('job_en'),['class'=>'form-control','required'=>'required']) !!}
     </div>
          <div class="form-group">
        {!! Form::label('text_ar',trans('admin.text_ar')) !!}
        {!! Form::text('text_ar',old('text_ar'),['class'=>'form-control','required'=>'required']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('text_en',trans('admin.text_en')) !!}
        {!! Form::text('text_en',old('text_en'),['class'=>'form-control','required'=>'required']) !!}
     </div>
     
     <div class="form-group">
        {!! Form::label('name_Teacher_ar',trans('admin.name_Teacher_ar')) !!}
        {!! Form::text('name_Teacher_ar',old('name_Teacher_ar'),['class'=>'form-control','required'=>'required']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('name_Teacher_en',trans('admin.name_Teacher_en')) !!}
        {!! Form::text('name_Teacher_en',old('name_Teacher_en'),['class'=>'form-control','required'=>'required']) !!}
     </div>
     <!-- -------------- -->
     <div class="form-group">
        {!! Form::label('img',trans('admin.image_st')) !!}  
        {!! Form::file('img',old('img'),['class'=>'form-control img','required'=>'required']) !!}
     </div>
     <div class="form-group">
       <img  src="{{ asset( 'no_image/no-image.png')}} "  class="img-create-Edit" > 
     </div>
  <!-- -------------- -->   
  <!-- -------------- -->
     <div class="form-group">
        {!! Form::label('img_Teacher',trans('admin.image_te')) !!}
  
        {!! Form::file('img_Teacher',old('img_Teacher'),['class'=>'form-control img','required'=>'required']) !!}
       </div>
 
  
     </div>
      <div class="form-group">
       <img  src="{{ asset( 'no_image/no-image.png')}} "  class="img-create-Edit" > 
     </div>
<!-- -------------- -->
     {!! Form::submit(trans('admin.add'),['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
@endsection