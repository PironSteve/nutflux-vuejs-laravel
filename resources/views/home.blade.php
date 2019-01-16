<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ URL::asset('/css/login.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Abel|Allerta+Stencil|Allura" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <title>NutFlux</title>
    </head>
    <body>
        <div id="test">
            
        </div>
        <script src="js/app.js"></script>
    <script>
        const login = document.querySelector('.login');
        const signin = document.querySelector('.signin');
        const boxUser = document.querySelector('.boxuser');

        document.querySelector('.register').addEventListener("click", ()=>{
            login.style.display="none";
            signin.style.display="block";
        })

        document.querySelector('.log').addEventListener("click", ()=>{
            login.style.display="block";
            signin.style.display="none";
        })
    </script>
    </body>
</html>
