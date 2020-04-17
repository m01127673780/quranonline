@extends('admin.index')
@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('slider'),'files'=>true]) !!}
       <div class="form-group">
        {!! Form::label('link',trans('admin.link')) !!}
        {!! Form::url('link',old('link'),['class'=>'form-control','pattern'=>'https?://.+']) !!}
       </div> 
      
     </div>
     <div class="form-group">
        {!! Form::label('img',trans('admin.slider')) !!}
        {!! Form::file('img',['class'=>'form-control img','required'=>'required']) !!}
             </div>
     <div class="form-group">
       <img  src="{{ asset( 'no_image/no-image.png')}} "  class="img-create-Edit" > 
     </div>
     {!! Form::submit(trans('admin.add'),['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
@endsection