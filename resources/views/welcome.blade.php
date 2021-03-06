<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .flex-container {
                display: flex;
                justify-content: center;
            }

        </style>
    </head>
    <body>
        <h1 style="text-align:center">Modern Portfolio Theory</h1>
        <p  style="text-align:center">Code: <?php echo $code ?> - <?php $date = new DateTime(); echo $date->getTimestamp(); ?></p>
        <div class="flex-container position-ref"> 
            <div class="content"> 
            <div id="stockprice-chart"></div>
            <div id="returnsprecise-chart"></div>
            <div id="portfolio-chart"></div>
        </div>
    </body>
</html>                
                

