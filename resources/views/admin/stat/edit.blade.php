@extends('admin.index')
@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('stat/'.$stat->id),'method'=>'put','files'=>true ]) !!}
<!--   {{--==================================================== --}} -->  
         <div class="form-group">
        {!! Form::label('head_ar',trans('admin.head_ar')) !!}
        {!! Form::text('head_ar',$stat->head_ar,['class'=>'form-control','required'=>'required']) !!}
      </div>
    <div class="form-group">
        {!! Form::label('head_en',trans('admin.head_en')) !!}
        {!! Form::text('head_en',$stat->head_en,['class'=>'form-control','required'=>'required']) !!}
      </div>     
     <div class="form-group">
     <span><a target="_blank " href="sssssssssssss">sssssssssssss</a></span>
     <span><a target="_blank " href="sssssssssssss">sssssssssssss</a></span>
     <span><a target="_blank " href="sssssssssssss">sssssssssssss</a></span>
     <span><a target="_blank " href="sssssssssssss">sssssssssssss</a></span>
     <span><a target="_blank " href="sssssssssssss">sssssssssssss</a></span>
     <span><a target="_blank " href="sssssssssssss">sssssssssssss</a></span>
     <span><a target="_blank " href="sssssssssssss">sssssssssssss</a></span>
      </div> 
      <div class="form-group">
        {!! Form::label('font_awesome',trans('admin.font_awesome')) !!}
        {!! Form::text('font_awesome',$stat->font_awesome,['class'=>'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('number',trans('admin.number')) !!}
        {!! Form::number('number',$stat->number,['class'=>'form-control','pattern'=>'number','required'=>'required']) !!}
      </div>
     <div class="form-group">
        {!! Form::label('img',trans('admin.image')) !!}
        {!! Form::file('img',['class'=>'form-control']) !!}
    @if(!empty($stat->img))
       <img src="{{ Storage::url($stat->img) }}" class="img-create-Edit"  />
      @else 
             <img src="{{ asset( 'no_image/no-image.png')}}" class="img-create-Edit" />
      @endif
     </div>
<!--  {{--================================================================== --}} -->
     {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
@endsection