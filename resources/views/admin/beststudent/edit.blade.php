@extends('admin.index')
@section('content')


<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('beststudent/'.$beststudent->id),'method'=>'put','files'=>true ]) !!}
 
<!--   {{--================================================================== --}}
 -->     
  <div class="form-group">
        {!! Form::label('name_ar',trans('admin.name_ar')) !!}
        {!! Form::text('name_ar',$beststudent->name_ar,['class'=>'form-control' ,'required'=>'required']) !!}
  </div>
     <div class="form-group">
        {!! Form::label('name_en',trans('admin.name_en')) !!}
        {!! Form::text('name_en',$beststudent->name_en,['class'=>'form-control' ,'required'=>'required']) !!}
     </div> 
     <div class="form-group">
        {!! Form::label('date_ar',trans('admin.date_ar')) !!}
        {!! Form::text('date_ar',$beststudent->date_ar,['class'=>'form-control' ,'required'=>'required']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('date_en',trans('admin.date_en')) !!}
        {!! Form::text('date_en',$beststudent->date_en,['class'=>'form-control' ,'required'=>'required']) !!}
     </div>
      <div class="form-group">
        {!! Form::label('Lecture_ar',trans('admin.Lecture_ar')) !!}
        {!! Form::text('Lecture_ar',$beststudent->Lecture_ar,['class'=>'form-control' ,'required'=>'required']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('Lecture_en',trans('admin.Lecture_en')) !!}
        {!! Form::text('Lecture_en',$beststudent->Lecture_en,['class'=>'form-control' ,'required'=>'required']) !!}
     </div>
      <div class="form-group">
        {!! Form::label('job_ar',trans('admin.job_ar')) !!}
        {!! Form::text('job_ar',$beststudent->job_ar,['class'=>'form-control' ,'required'=>'required']) !!}
     </div>
           <div class="form-group">
        {!! Form::label('job_ar',trans('admin.job_en')) !!}
        {!! Form::text('job_en',$beststudent->job_en,['class'=>'form-control' ,'required'=>'required']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('text_en',trans('admin.text_en')) !!}
        {!! Form::text('text_en',$beststudent->text_en,['class'=>'form-control' ,'required'=>'required']) !!}
     </div>
      <div class="form-group">
        {!! Form::label('text_ar',trans('admin.text_ar')) !!}
        {!! Form::text('text_ar',$beststudent->text_ar,['class'=>'form-control' ,'required'=>'required']) !!}
     </div>
 
 
 <div class="form-group">
        {!! Form::label('name_Teacher_ar',trans('admin.name_Teacher_ar')) !!}
        {!! Form::text('name_Teacher_ar',$beststudent->name_Teacher_ar,['class'=>'form-control' ,'required'=>'required']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('name_Teacher_en',trans('admin.name_Teacher_en')) !!}
        {!! Form::text('name_Teacher_en',$beststudent->name_Teacher_en,['class'=>'form-control' ,'required'=>'required']) !!}
     </div>
     <!-- -------------- -->
     <div class="form-group">
        {!! Form::label('img',trans('admin.image_st')) !!}
        {!! Form::file('img',['class'=>'form-control' ]) !!}
          @if(!empty($beststudent->img))
       <img src="{{ Storage::url($beststudent->img) }}"  class="img-create-Edit" />
      @endif

     </div>  
     <!-- -------------- --> 
     <!-- -------------- -->
     <div class="form-group">
        {!! Form::label('img_Teacher',trans('admin.image_te')) !!}
        {!! Form::file('img_Teacher',['class'=>'form-control' ]) !!}
          @if(!empty($beststudent->img_Teacher))
       <img src="{{ Storage::url($beststudent->img_Teacher) }}"  class="img-create-Edit" />
      @endif
     </div> 
     <!-- -------------- -->

<!--     {{--================================================================== --}}
 -->


     {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->



@endsection