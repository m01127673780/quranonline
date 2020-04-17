@extends('admin.index')
@section('content')


<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('testimonial/'.$testimonial->id),'method'=>'put','files'=>true ]) !!}
 
<!--   {{--================================================================== --}}
 -->     
  <div class="form-group">
        {!! Form::label('name_ar',trans('admin.name_ar')) !!}
        {!! Form::text('name_ar',$testimonial->name_ar,['class'=>'form-control','required'=>'required']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('name_en',trans('admin.name_en')) !!}
        {!! Form::text('name_en',$testimonial->name_en,['class'=>'form-control','required'=>'required']) !!}
     </div> 
     <div class="form-group">
        {!! Form::label('text_ar',trans('admin.text_ar')) !!}
        {!! Form::text('text_ar',$testimonial->text_ar,['class'=>'form-control','required'=>'required']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('text_en',trans('admin.text_en')) !!}
        {!! Form::text('text_en',$testimonial->text_en,['class'=>'form-control','required'=>'required']) !!}
     </div>
 <div class="form-group">
        {!! Form::label('job_ar',trans('admin.job_ar')) !!}
        {!! Form::text('job_ar',$testimonial->job_ar,['class'=>'form-control','required'=>'required']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('job_en',trans('admin.job_en')) !!}
        {!! Form::text('job_en',$testimonial->job_en,['class'=>'form-control','required'=>'required']) !!}
     </div>
  <div class="form-group">
        {!! Form::label('country_ar',trans('admin.country_ar')) !!}
        {!! Form::text('country_ar',$testimonial->country_ar,['class'=>'form-control','required'=>'required']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('country_en',trans('admin.country_en')) !!}
        {!! Form::text('country_en',$testimonial->country_en,['class'=>'form-control','required'=>'required']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('img',trans('admin.image')) !!}
        {!! Form::file('img',['class'=>'form-control' ]) !!}
             @if(!empty($testimonial->img))
       <img src="{{ Storage::url($testimonial->img) }}" class="img-create-Edit"  />
      @else 
             <img src="{{ asset( 'no_image/no-image.png')}}" class="img-create-Edit" />
      @endif
  
     </div>
<!--     {{--================================================================== --}}-->
 


     {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->



@endsection