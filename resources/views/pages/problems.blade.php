@extends('layouts.app')
@section('content')
    <body>
    @include ('partials.message')
    <div class="flex-center position-ref">
        <div class="content">
            <div class="title m-b-md">
               Code Golf Problems
            </div>
            <section class="page">
            <div>
                @if (isset($problems) && count($problems) > 0)
                    <table>
                      <tr>
                        <th>ID</th>
                        <th>Description</th> 
                        <th></th>
                      </tr>
                      @foreach ($problems as $problem)
                          <tr>                               
                            <td>{{ $problem->id }}</td>
                            <td onclick="location.href = '{{ route('view-problem', $problem->id) }}'">{{ $problem->title }}</td> 
                            <td>
                                {!! Form::open(array('method'  => 'delete', 'route' => 'delete-problem', 'class' => 'form')) !!}
                                <?php if ( $user->hasRole('delete-problem') ) { ?>
                                        <input type="hidden" name="id" value="{{ $problem->id }}">
                                            {!! Form::submit('Delete', array('class'=>'btn btn-danger')) !!}
                                <?php } ?>
                                <?php if ( $user->hasRole('update-problem') ) { ?>
                                    <button type="button" class="btn btn-default" onclick="location.href='{{ route('update-problem-view', $problem->id) }}'">Update</button>
                                <?php } ?>
                                {!! Form::close() !!}
                            </td>
                          </tr>
                      @endforeach
                    </table>
                @else
                    No problems exist yet
                @endif
            </div>
            <br>
            <div>
                <button class="btn btn-default" onclick="window.location.href='/create-problem'">Create a Problem</button>
            </div>
            </section>
        </div>
    </div>
    </body>
    <link rel="stylesheet" href="<?php echo asset('css/problem.css')?>" type="text/css">
@stop