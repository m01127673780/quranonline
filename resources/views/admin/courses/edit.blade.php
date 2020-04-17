@extends('admin.index')
@section('content')


<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('courses/'.$courses->id),'method'=>'put','files'=>true ]) !!}
 
<!--   {{--================================================================== --}}
 -->     
  <div class="form-group">
        {!! Form::label('head_ar',trans('admin.head_ar')) !!}
        {!! Form::text('head_ar',$courses->head_ar,['class'=>'form-control','required'=>'required']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('head_en',trans('admin.head_en')) !!}
        {!! Form::text('head_en',$courses->head_en,['class'=>'form-control','required'=>'required']) !!}
     </div> 
         <div class="form-group">
        {!! Form::label('text_ar',trans('admin.text_ar')) !!}
        {!! Form::text('text_ar',$courses->text_ar,['class'=>'form-control','required'=>'required']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('text_en',trans('admin.text_en')) !!}
        {!! Form::text('text_en',$courses->text_en,['class'=>'form-control','required'=>'required']) !!}
     </div>
       <div class="form-group">
        {!! Form::label('color_diffe_ar',trans('admin.color_diffe_ar')) !!}
        {!! Form::text('color_diffe_ar',$courses->color_diffe_ar,['class'=>'form-control','required'=>'required']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('color_diffe_en',trans('admin.color_diffe_en')) !!}
        {!! Form::text('color_diffe_en',$courses->color_diffe_en,['class'=>'form-control','required'=>'required']) !!}
     </div>

 


     <div class="form-group">
        {!! Form::label('icon',trans('admin.image')) !!}
        {!! Form::file('icon',['class'=>'form-control']) !!}
       @if(!empty($courses->icon))
       <img src="{{ Storage::url($courses->icon) }}" class="img-create-Edit"  />
      @else 
       <img name="img" class="image" src="{{ asset( 'no_image/no-image.png')}} "   > 
      @endif
       </div>
<!--     {{--================================================================== --}} -->

     {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->



@endsection