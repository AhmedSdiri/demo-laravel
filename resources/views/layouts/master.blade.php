<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Demo</title>
    </head>
    <body>
        @include('layouts/partial/_nav')
        
        @yield('content')
       <h1>Demo</h1>
    
    </body>
</html>
