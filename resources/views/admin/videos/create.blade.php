@extends('admin.index')
@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('videos'),'files'=>true]) !!}
   
    <div class="form-group">
        {!! Form::label('link',trans('admin.link')) !!}
        {!! Form::url('link',old('link'),['class'=>'form-control','pattern'=>'https?://.+','required'=>'required']) !!}
          <!-- <input type="url" pattern="https?://.+" required /> -->
      </div>
       <div class="form-group">
        {!! Form::label('img',trans('admin.image')) !!}
          {!! Form::file('img',old('img'),['class'=>'form-control img','required'=>'required']) !!}
      </div>
     <div class="form-group">
       <img name="img" class="image" src="{{ asset( 'no_image/no-image.png')}} "   > 
     </div>
        {!! Form::submit(trans('admin.add'),['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
@endsection