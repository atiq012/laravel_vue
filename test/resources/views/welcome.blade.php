<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
         <meta name="csrf-token" content="{{csrf_token()}}" >
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

      
        

           
    </head>
    <body>
    <div id="app">
    <example-component></example-component>
    </div>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    </body>
</html>
