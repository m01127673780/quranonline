@extends('admin.index')
@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('halfhour'),'files'=>true]) !!}
   
       <div class="form-group">
        {!! Form::label('head_ar',trans('admin.head_ar')) !!}
        {!! Form::text('head_ar',old('head_ar'),['class'=>'form-control','required'=>'required']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('head_en',trans('admin.head_en')) !!}
        {!! Form::text('head_en',old('head_en'),['class'=>'form-control','required'=>'required']) !!}
     </div> 
         <div class="form-group">
        {!! Form::label('dateshow_ar',trans('admin.dateshow_ar')) !!}
        {!! Form::text('dateshow_ar',old('dateshow_ar'),['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('dateshow_en',trans('admin.dateshow_en')) !!}
        {!! Form::text('dateshow_en',old('dateshow_en'),['class'=>'form-control']) !!}
     </div>
       <div class="form-group">
        {!! Form::label('content_ar',trans('admin.content_ar')) !!}
        {!! Form::text('content_ar',old('content_ar'),['class'=>'form-control','required'=>'required']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('content_en',trans('admin.content_en')) !!}
        {!! Form::text('content_en',old('content_en'),['class'=>'form-control','required'=>'required']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('number',trans('admin.number')) !!}
        {!! Form::text('number',old('number'),['class'=>'form-control']) !!}
     </div>
     <!-- --------- -->
     <div class="form-group">
        {!! Form::label('descount3_en',trans('admin.descount3_en')) !!}
        {!! Form::text('descount3_en',old('descount3_en'),['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('descount3_ar',trans('admin.descount3_ar')) !!}
        {!! Form::text('descount3_ar',old('descount3_ar'),['class'=>'form-control']) !!}
     </div>
    <div class="form-group">
        {!! Form::label('percentage3',trans('admin.percentage3')) !!}
        {!! Form::text('percentage3',old('percentage3'),['class'=>'form-control']) !!}
     </div>
     <!-- --------- -->
     <!-- --------- -->
     <div class="form-group">
        {!! Form::label('descount6_en',trans('admin.descount6_en')) !!}
        {!! Form::text('descount6_en',old('descount6_en'),['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('descount6_ar',trans('admin.descount6_ar')) !!}
        {!! Form::text('descount6_ar',old('descount6_ar'),['class'=>'form-control']) !!}
     </div>
    <div class="form-group">
        {!! Form::label('percentage6',trans('admin.percentage6')) !!}
        {!! Form::text('percentage6',old('percentage6'),['class'=>'form-control']) !!}
     </div>
     <!-- --------- -->
     <!-- --------- -->
     <div class="form-group">
        {!! Form::label('descount12_en',trans('admin.descount12_en')) !!}
        {!! Form::text('descount12_en',old('descount12_en'),['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('descount12_ar',trans('admin.descount12_ar')) !!}
        {!! Form::text('descount12_ar',old('descount12_ar'),['class'=>'form-control']) !!}
     </div>
    <div class="form-group">
        {!! Form::label('percentage12',trans('admin.percentage12')) !!}
        {!! Form::text('percentage12',old('percentage12'),['class'=>'form-control']) !!}
     </div>
     {!! Form::submit(trans('admin.add'),['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
@endsection