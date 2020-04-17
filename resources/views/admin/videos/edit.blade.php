@extends('admin.index')
@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('videos/'.$videos->id),'method'=>'put','files'=>true ]) !!}
<!--   {{--================================================================== --}}--> 
     <div class="form-group">
        {!! Form::label('link',trans('admin.link')) !!}
        {!! Form::url('link',$videos->link,['class'=>'form-control','pattern'=>'https?://.+','required'=>'required']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('img',trans('admin.image')) !!}
        {!! Form::file('img',['class'=>'form-control']) !!}s
          @if(!empty($videos->img))
       <img src="{{ Storage::url($videos->img) }}" class="img-create-Edit"  />
      @else 
             <img src="http://localhost/git/ff55/public/No_Image/No_Image.jpg" class="img-create-Edit" />
      @endif
     </div>
<!--{{--================================================================== --}}-->
     {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
@endsection