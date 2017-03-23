@extends('layouts.default')
@section('content')
    <body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Login
            </div>
            <form method="post">
                <label id="user-label" for="user">User: </label><input class="input-field" type="text" name="user"><br>
                <label id="password-label" for="password">Password: </label><input class="input-field" type="password" name="password"><br>
                <button type="submit" id="login-submit" value="Submit">Submit</button>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>
    </body>
@stop