<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show
        <p>Isso é um teste para ver o que vai aconte</p>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>