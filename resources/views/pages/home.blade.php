@extends('layouts.default')
@section('content')
    <body>
    <div class="flex-center position-ref">
        <div class="content">
            <div class="title m-b-md">
                    Welcome
            </div>
                <section class="page">
                <p>My name is <strong>Jonathan Mead</strong>. I am a Web Developer. This site will have multiple purposes. The first purpose of this site is to act as a sort of portfolio. Nothing says I can do the job better than "Look at my site." The second purpose of this site is to double as a place where people can participate in code golfs.</p><br>
                </section>
                <section class="page">
                <p><strong>Code Golf</strong> is an exercise where you are tasked with completing a problem in as few characters as possible. I primarily am a php and javascript developer so those will be the languages we will primarily work with.</p>
                </section>
                <section class="page">
                <p>An example of a code golf would be make 2 + 2 = 5.</p>

                <p>First we want to echo our 2 + 2 = Something. So we start with <strong>echo 2 + 2 =</strong></p>
                <br>
                <p>Next we will add some ternaries. Ternaries are calculated from left to right so we can do some funkiness to trick php into thinking 2 + 2 = 5.</p>
                <br>
                <p>This can be accomplished by modifying our code to <strong>echo (2 + 2 === 4 ? 4 : 2 + 2 === 5 ? 5 : 'How did we get here?');</strong></p>

                <p>Our result will be 2 + 2 = <?php echo (2 + 2 === 4 ? 4 : 2 + 2 === 5 ? 5 : 'dunno'); ?></p> <br>
                <p>Incuding the php tags this makes 60 characters. Since whitespace counts we will have to trim that down.<br>
                Our new answer is <strong>echo(2+2===4?4:2+2===5?5:'');</strong><br>
                including the shortened php tags this brings it down to 34 characters. The winner of the code golf would be the one who came up with the shorted <strong>working</strong> answer.</p>
                <br>
                <p>Feel free to click the about me to find out more about me, or login/register to get started with code golfs</p>
                </section>
        </div>
    </div>
    </body>
@stop