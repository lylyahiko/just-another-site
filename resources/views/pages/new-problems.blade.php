@extends('layouts.app')
@section('content')
    <body>
    <div class="flex-center position-ref">
        <div class="content">
            <div class="title m-b-md">
               Add New Problem
            </div>
            <section class="page">
            <div>
           {!! Form::open(array('route' => 'create-problem', 'class' => 'form')) !!}

            <div class="form-group">
                {!! Form::label('Description') !!}
                {!! Form::textarea('description', null, 
                    array('required', 
                          'class'=>'form-control', 
                          'placeholder'=>'Insert the description of your code golf problem')) !!}
            </div>


            <div class="form-group">
                {!! Form::submit('Create Problem!', 
                  array('class'=>'btn btn-primary')) !!}
            </div>
            {!! Form::close() !!}
            </div>
            </section>
        </div>
    </div>
    </body>
@stop