<!doctype html>
<html>
<body>
<div class="container">
    <head>
        @include('includes.head')
    </head>
    <header class="row">
        @include('includes.header')
    </header>

    <div id="main" class="row">

        @yield('content')

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>