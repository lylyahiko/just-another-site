@extends('layouts.app')
@section('content')
    <body>
    <div class="flex-center position-ref">
        <div class="content">
            <div class="title m-b-md">
                Hello!
            </div>
            <section class="page">
            <?php if ( $user->isUser() ) { ?>
            <div>
                <p><strong>This part is still in development.</strong></p>
                <br>
                <p class="align-left">I'm currently working on implementing the creation, reading, updating, and deleting of Code Golf problems. No official problems have been setup yet but as functionality improves I will update this dashboard with the updates. - <strong>April 18, 2017</strong></p>
                <p class="align-left">Set up the update for Problems - <strong>April 19, 2017</strong></p>
                <br>
                <p class="align-left">Set up roles for users. These will need to be updated in the future to extend to all functionality of the site. Next on the agenda is the ability to CRUD users. This will only be accessable to super admins. - <strong>April 24, 2017</strong></p>
            </div>
                <p><strong>Click below to checkout some Code Golf problems.</strong></p>
                <button onclick="window.location.href='/problems'">Check out Problems</button>
            <?php } else { ?>
            <div>
                <p><strong>You do not have the right to be here.</strong></p> 
            <div>
            <?php } ?>

<?php /*
if ( $user->hasRole('create-user') ) {
    echo '<p>create-user</p>';
}
if ( $user->hasRole('delete-user') ) {
    echo '<p>delete-user</p>';
}
if ( $user->hasRole('update-user') ) {
    echo '<p>update-user</p>';
}
if ( $user->hasRole('delete-problem') ) {
    echo '<p>delete-problem</p>';
}
if ( $user->hasRole('update-problem') ) {
    echo '<p>update-problem</p>';
}
if ( $user->hasRole('create-problem') ) {
    echo '<p>create-problem</p>';
}*/
?> 

            </div>
            </section>
        </div>
    </div>
    </body>
@stop