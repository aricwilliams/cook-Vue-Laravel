<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cook</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        
    </head>
    <body>       
        <h1>Cut The Grass Site</h1>
        <div id="app">
        <mainapp></mainapp>
        </div>
    </body>
    <script src="{{mix('/js/app.js')}}"></script>
</html>
