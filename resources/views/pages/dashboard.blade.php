@extends('layouts.app')
@section('content')
    <body>
    <div class="flex-center position-ref">
        <div class="content">
            <div class="title m-b-md">
                You are Logged In!
            </div>
            <section class="page">
            <div><p>This part is still in development.</p>
            <br>
            <p>I'm currently working on implementing the creation, reading, updating, and deleting of Code Golf problems. No official problems have been setup yet but as functionality improves I will update this dashboard with the updates. - April 18, 2017</p></div>
            <div>
                <button onclick="window.location.href='/problems'">Check out Problems</button>
            </div>
            </section>
        </div>
    </div>
    </body>
@stop