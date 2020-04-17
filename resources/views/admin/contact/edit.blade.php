@extends('admin.index')
@section('content')


<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('contact/'.$contact->id),'method'=>'put','files'=>true ]) !!}
 
<!--   {{--================================================================== --}} --> 
     <div class="form-group">
        {!! Form::label('name',trans('admin.name')) !!}
        {!! Form::text('name',$contact->name,['class'=>'form-control']) !!}
     </div>

     <div class="form-group">
        {!! Form::label('email',trans('admin.email')) !!}
        {!! Form::email('email',$contact->email,['class'=>'form-control']) !!}
     </div>

     <div class="form-group">
        {!! Form::label('subject',trans('admin.subject')) !!}
        {!! Form::text('subject',$contact->subject,['class'=>'form-control']) !!}
     </div>

     <div class="form-group">
        {!! Form::label('phone',trans('admin.phone')) !!}
        {!! Form::text('phone',$contact->phone,['class'=>'form-control']) !!}
     </div>

     <div class="form-group">
        {!! Form::label('message',trans('admin.message')) !!}
        {!! Form::textarea('message',$contact->message,['class'=>'form-control']) !!}
     </div>
   

  

     <div class="form-group">
        {!! Form::label('icon',trans('admin.contact')) !!}
        {!! Form::file('icon',['class'=>'form-control']) !!}

      
    @if(!empty($contact->icon))
       <img src="{{ Storage::url($contact->icon) }}" class="img-create-Edit"  />
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