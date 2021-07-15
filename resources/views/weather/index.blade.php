<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Contact add in Zoho CRM - laravelcode.com</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
                                <i class="fa fa-tint mr-2" aria-hidden="true"></i>
                            </div>
                            <div class="top23">
                                    <p> {{ $data->{'humidity'} }} </p>
                                    <p> MM </p>
                            </div>

                            <div class="top23">
                                <img src="https://i.imgur.com/B9kqOzp.png" height="25px">
                            </div>

                            <div class="top23">
                                <p> {{ $data->{'windSpeed'} }} </p>
                                <p> MPH </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

<style>
    /* =========================
    GENERAL START
===========================*/
    @import url('https://fonts.googleapis.com/css?family=Raleway');
    @import url('https://fonts.googleapis.com/css?family=Oswald');
    html, body {
        margin: 0;
        padding: 0;
        height: 100%;
        width: 100%;
        font-family: 'Oswald', sans-serif;
    }
    .intro {
        height: 100%;
        width: 100%;
        margin: auto;
        display: table;
    }
    #background {
        height: 100%;
        width: 100%;
        margin: 0;
        background-size: cover;
        background-repeat: no-repeat;
        display: table;
        background: #b32dff;
    }


    .intro .inner {
        display: table-cell;
        vertical-align: middle;
        width: 100%;
        max-width: none;
    }
    .content {
        max-width: 500px;
        margin: 0 auto;
        text-align: center
    }
    .content h1 {
        font-family: 'Raleway', sans-serif;
        color: #F9F3F4;
        font-size: 250%;
    }
    /* =========================
        GENERAL END
    ===========================*/

    /* =========================
        WEATHER START
    ===========================*/

    .weather-app {
        margin: auto;
        width: 100%;
        height: 200px;
        overflow: hidden;
        text-align:center;
    }

    .left {
        float: left;
        background: #262626;
        padding:10px;
        width:55%;
        height:100%;
        color:white;
    }

    .temperature-celsius {
        margin-top:30px;
        margin-left: 55px;
        margin-bottom:5px;
        font-size:65px;
        font-weight: bold;
        width: 130px;
    }
    .temperature-fahrenheit {
        display: none;
        margin-top:30px;
        margin-bottom:5px;
        font-size:32px;
        font-weight: bold;
        width: 150px;
    }

    .location {
        font-size: 18px;
        width:100%;
    }

    .right {
        float: right;
        width: 45%;
        height:100%;
    }

    .top {
        height: 130px;
        width: 100%;
        margin: auto;
        background: rgba(223,223,223,0.91);
    }

    .top2 {
        height: 70px;
        width: 100%;
        margin: auto;
        background: rgba(73,156,216,0.91);
    }

    .top23 {
        /*margin-top: 10%;*/
        float: left;
        height: 100%;
        width: calc(100%/4);
        /*margin: auto;*/
        background: rgba(216,51,86,0.91);
        text-align: center;
    }

    .top img {
        margin-top: 15px;
    }

    .top p {
        margin-top: -14px;
        position: relative;
        text-transform: capitalize;
    }

    /* =========================
        WEATHER END
    ===========================*/

</style>

</body>
</html>

</body>
</html>
