<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BrianWeston.me - @yield('title')</title>

        <!-- Fonts -->
       <link href="https://fonts.googleapis.com/css?family=Expletus+Sans:400,500,500i,600,700" rel="stylesheet">
        <!-- Styles -->
       <link rel="stylesheet" type="text/css" href="/css/style.css">
    </head>

    <body>
        <div class="site">
            @include('elements.header')

            @include('elements.navigation'){{-- aside --}}

            @yield('content'){{-- h1/main --}}

            @include('elements.footer')
        </div>
    </body>
</html>
