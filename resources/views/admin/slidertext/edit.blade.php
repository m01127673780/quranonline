@extends('admin.index')
@section('content')


<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('slidertext/'.$slidertext->id),'method'=>'put','files'=>true ]) !!}
 
<!--   {{--================================================================== --}}
 -->   

    
     <div class="form-group">
        {!! Form::label('link',trans('admin.link')) !!}
        {!! Form::url('link',$slidertext->link,['class'=>'form-control','pattern'=>'https?://.+']) !!}
 
     </div>

<div class="form-group">
        {!! Form::label('head_ar',trans('admin.head_ar')) !!}
        {!! Form::text('head_ar',$slidertext->head_ar,['class'=>'form-control']) !!}
      </div>
       <div class="form-group">
        {!! Form::label('head_en',trans('admin.head_en')) !!}
        {!! Form::text('head_en',$slidertext->head_en,['class'=>'form-control']) !!}
      </div>
   <div class="form-group">
        {!! Form::label('title_ar',trans('admin.title_ar')) !!}
        {!! Form::text('title_ar',$slidertext->title_ar,['class'=>'form-control']) !!}
      </div>
   <div class="form-group">
        {!! Form::label('title_en',trans('admin.title_en')) !!}
        {!! Form::text('title_en',$slidertext->title_en,['class'=>'form-control']) !!}
      </div>
   <div class="form-group">
        {!! Form::label('text1_ar',trans('admin.text1_ar')) !!}
        {!! Form::text('text1_ar',$slidertext->text1_ar,['class'=>'form-control']) !!}
      </div>
   <div class="form-group">
        {!! Form::label('text1_en',trans('admin.text1_en')) !!}
        {!! Form::text('text1_en',$slidertext->text1_en,['class'=>'form-control']) !!}
      </div>
   <div class="form-group">
        {!! Form::label('text2_ar',trans('admin.text2_ar')) !!}
        {!! Form::text('text2_ar',$slidertext->text2_ar,['class'=>'form-control']) !!}
      </div>
   <div class="form-group">
        {!! Form::label('text2_en',trans('admin.text2_en')) !!}
        {!! Form::text('text2_en',$slidertext->text2_en,['class'=>'form-control']) !!}
      </div>
   <div class="form-group">
        {!! Form::label('text3_ar',trans('admin.text3_ar')) !!}
        {!! Form::text('text3_ar',$slidertext->text3_ar,['class'=>'form-control']) !!}
      </div>
   <div class="form-group">
        {!! Form::label('text3_en',trans('admin.text3_en')) !!}
        {!! Form::text('text3_en',$slidertext->text3_en,['class'=>'form-control']) !!}
      </div>
 
<!--     {{--================================================================== --}}
 -->


     {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->



@endsection