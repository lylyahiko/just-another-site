@extends('layouts.app')
@section('content')
    <body>
    <div class="flex-center position-ref">
        <div class="content">
            <div class="title m-b-md">
                Hello!
            </div>
            <section class="page">
            <div>
                <p><strong>This part is still in development.</strong></p>
                <br>
                <p class="align-left">I'm currently working on implementing the creation, reading, updating, and deleting of Code Golf problems. No official problems have been setup yet but as functionality improves I will update this dashboard with the updates. - <strong>April 18, 2017</strong></p>
                <p class="align-left">Set up the update for Problems - <strong>April 19, 2017</strong></p>
                <br>
            </div>
            <div>
                <p><strong>Click below to checkout some Code Golf problems.</strong></p>
                <button onclick="window.location.href='/problems'">Check out Problems</button>
            </div>
            </section>
        </div>
    </div>
    </body>
@stop