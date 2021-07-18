<!DOCTYPE html>
<html>
<head>
    <title>Weather in {{ $city }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/css/weather.css') }}">
</head>
<body>
<!------ Include the above in your HEAD tag ---------->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Local Weather Application</title>
</head>
<body>
<div id="background">
    <section id='itroBackground' class="intro">
        <div class="inner">
            <div class="content">
                <div class="weather-app">
                    <div class="left">
                        <div id="toggleCelsius" class="temperature-celsius"><span id="temperatureCelsius">{{ intval($data->{'temperature'}) }}°</span></div>
                        <div class="location"><span id="loc">{{ $city }}</span></div>
                    </div>
                    <div class="right">
                        <div class="top">
                            <img class="img-fluid" src="{{"https://assetambee.s3-us-west-2.amazonaws.com/weatherIcons/PNG/".$data->{'icon'}.".png"}}" width="50"/>
                            <p id="description"></p>
                        </div>
                        <div class="top2">
                            <div class="top23">
                                <img class="water" src="https://cdn.pixabay.com/photo/2017/09/19/20/49/water-2766592_960_720.png" height="25px">
                            </div>
                            <div class="top23">
                                    <p class="up"> {{ $data->{'humidity'} }} </p>
                                    <p class="down"> MM </p>
                            </div>

                            <div class="top23">
                                <img class="drow" src="https://img.pngio.com/gust-of-wind-icons-noun-project-gust-of-wind-png-200_200.png">
                            </div>

                            <div class="top23">
                                <p class="up"> {{ $data->{'windSpeed'} }} </p>
                                <p class="down"> MPH </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

<style>

</style>

</body>
</html>

</body>
</html>
