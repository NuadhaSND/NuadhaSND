<!DOCTYPE html>
<html>
    <head>
        
        
        <title> @yield('title') </title>

        <meta charset="utf-8">

        <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css">

        <link rel= stylesheet href= https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: flex;
                font-weight: 100;
                font-family: Arial, Helvetica, sans-serif;
            }

            .container {
                display: flex;
                align-items: center;
            }

            .content {
                text-align: center;
                display: inline-block;

            }

            .title {
                font-size: 96px;
            }
            aside
            {
                font-size: 36px;
                position: fixed;
                top: 50%;
                margin-top: -50px;
            }   

                  @yield('style')
        </style>

    </head>

    <body>
    <aside> 

        <a href="/"> Home </a> <br>
        <a href="/publications"> Publications </a>

    </aside>
        <div class="container">   
            @yield('content')
        </div>
    </body>
</html>
