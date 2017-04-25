@extends('layouts.app')
@section('content')
    <body>
    <div class="flex-center position-ref">
        <div class="content">
            <div class="title m-b-md">
               Update A Problem
            </div>
            <section class="page">
            <div>
           {!! Form::open(array('route' => 'update-problem', 'class' => 'form')) !!}

           <div class="form-group"> 
                {!! Form::label('Title') !!}
                {!! Form::text('title', null, 
                    array('required', 
                          'class'=>'form-control', 
                          'placeholder'=>'Title')) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('Description') !!}
                {!! Form::textarea('description', $problem->description, 
                    array('required', 
                          'class'=>'form-control', 
                          'placeholder'=>'Insert the description of your code golf problem')) !!}
                <input type="hidden" name="id" value="{{ $problem->id }}">
            </div>


            <div class="form-group">
                {!! Form::submit('Update Problem!',
                array('class'=>'btn btn-primary')) !!} <button type="button" class="btn btn-default" onclick="location.href='{{ URL::previous() }}'">Back</button>
            </div>
            {!! Form::close() !!}
            </div>
            </section>
        </div>
    </div>
    </body>
@stop