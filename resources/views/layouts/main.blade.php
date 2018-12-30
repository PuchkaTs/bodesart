<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    </head>

        <title>Bodesart</title>
    
    <body>
        <div id="app">
        @include('layouts.partials.nav')
        
        @yield('body')

        @include('layouts.partials.footer')

        </div>
        <script src="{{ mix('/js/app.js') }}"></script>
        @yield('script')
        <script>
        simpleCart({
          checkout: {
            type: "SendForm",
            email: "info@bodesart.com",
            url: "/checkout",
            method: "GET" ,
            success: "success",      
          },
          cartStyle : "table",
        });
        </script>
    </body>
</html>
