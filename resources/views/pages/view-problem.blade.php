@extends('layouts.app')
@section('content')
    <body>
    <div class="flex-center position-ref">
        <div class="content">
            <div class="title m-b-md">
               Code Golf Problem
            </div>
            <section class="page">
            <div>

            <div class="form-group"> 
                {!! Form::label('Title') !!}
                {!! Form::text('title', $problem->title, 
                    array('required', 
                          'class'=>'form-control', 
                          'disabled',
                          'placeholder'=>'Title')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Description') !!}
                {!! Form::textarea('description', $problem->description, 
                    array('required', 
                          'class'=>'form-control', 
                          'disabled',
                          'placeholder'=>'Insert the description of your code golf problem')) !!}
                <input type="hidden" name="id" value="{{ $problem->id }}">
            </div>
            <button type="button" class="btn btn-default" onclick="location.href='{{ URL::previous() }}'">Back</button>
            </div>
            </section>
        </div>
    </div>
    </body>
@stop