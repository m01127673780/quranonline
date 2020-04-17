@extends('admin.index')
@section('content')


<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('contact'),'files'=>true]) !!}
   
      

    
       <div class="form-group">
        {!! Form::label('name',trans('admin.name')) !!}
        {!! Form::text('name',old('name'),['class'=>'form-control','required'=>'required']) !!}
     </div>
        <div class="form-group">
        {!! Form::label('email',trans('admin.email')) !!}
        {!! Form::email('email',old('email'),['class'=>'form-control','required'=>'required']) !!}
     </div>
        <div class="form-group">
        {!! Form::label('subject',trans('admin.subject')) !!}
        {!! Form::text('subject',old('subject'),['class'=>'form-control']) !!}
     </div>
        <div class="form-group">
        {!! Form::label('phone',trans('admin.phone')) !!}
        {!! Form::text('phone',old('phone'),['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('message',trans('admin.message')) !!}
        {!! Form::textarea('message',old('message'),['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('icon',trans('admin.contact')) !!}
        {!! Form::file('icon',['class'=>'form-control icon']) !!}
     </div>
     <div class="form-group">
       <img  src="{{ asset( 'no_image/user.png')}} "  class="img-create-Edit" >  
     </div>
        {!! Form::submit(trans('admin.add'),['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
 

@endsection