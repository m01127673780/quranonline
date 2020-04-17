@extends('admin.index')
@section('content')


<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('news/'.$news->id),'method'=>'put','files'=>true ]) !!}
 
<!--   {{--================================================================== --}} --> 
     <div class="form-group">
        {!! Form::label('name',trans('admin.name')) !!}
        {!! Form::text('name',$news->name,['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('text',trans('admin.text')) !!}
        {!! Form::text('text',$news->password,['class'=>'form-control']) !!}
     </div> 
 

     <div class="form-group">
        {!! Form::label('icon',trans('admin.news')) !!}
        {!! Form::file('icon',['class'=>'form-control']) !!}

          @if(!empty($news->icon))
       <img src="{{ Storage::url($news->icon) }}" style="width:50px;height: 50px;" />
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