@extends('admin.index')
@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('quick/'.$quick->id),'method'=>'put','files'=>true ]) !!}
<!--   {{--================================================================== --}} --> 
     <div class="form-group">
        {!! Form::label('name',trans('admin.name')) !!}
        {!! Form::text('name',$quick->name,['class'=>'form-control','required'=>'required']) !!}
     </div>
          <div class="form-group">
        {!! Form::label('email',trans('admin.email')) !!}
        {!! Form::email('email',$quick->email,['class'=>'form-control','required'=>'required']) !!}
     </div>
       <div class="form-group">
        {!! Form::label('subject',trans('admin.subject')) !!}
        {!! Form::text('subject',$quick->subject,['class'=>'form-control']) !!}
     </div>
      <div class="form-group">
        {!! Form::label('phone',trans('admin.phone')) !!}
        {!! Form::text('phone',$quick->phone,['class'=>'form-control']) !!}
     </div>

     <div class="form-group">
        {!! Form::label('message',trans('admin.message')) !!}
        {!! Form::textarea('message',$quick->message,['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('icon',trans('admin.image')) !!}
        {!! Form::file('icon',['class'=>'form-control']) !!}

        @if(!empty($quick->icon))
             <img src="{{ Storage::url($quick->icon) }}" class="img-create-Edit"  />
            @else 
                   <img src="{{ asset( 'no_image/user.png')}}" class="img-create-Edit" />
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