<?php

namespace App\Http\Controllers\Weather;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class WeatherController extends Controller
{
    public function lvivWeatherCURL()
    {
        return $this->weatherCURL(49.8397, 24.0297, "Lviv");
    }

    public function kharkivWeatherCURL()
    {
       return $this->weatherCURL(49.8397, 24.0297, "Kharkiv");
    }

    public function lvivWeatherLaravel(){
        return $this->weatherLaravel(49.8397, 24.0297, "Lviv");
    }

    public function kharkivWeatherLaravel(){
        return $this->weatherLaravel(49.8397, 24.0297, "Kharkiv");
    }


    private function weatherLaravel($latitude, $longitude, $city)
    {
        $client = new Client();
        $request = new Request(
            'GET',
            "https://api.ambeedata.com/weather/latest/by-lat-lng?lat=" . $latitude . "&lng=" . $longitude,
            ["Content-type:" => "application/json", "x-api-key" => "94255c6cbf61e210acde0f12fa5435a4b6ba5e5cbdce7d6d4d95df2b30392e40"]);
        $response = $client->send($request, ['timeout' => 30]);
        $body = $response->getBody();
        $stringBody = (string)$body;
        $data = json_decode($stringBody)->{'data'};
        return view('weather/index', [
            'data' => $data,
            'city' => $city
        ]);
    }

    private function weatherCURL($latitude, $longitude, $city)
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.ambeedata.com/weather/latest/by-lat-lng?lat=" . $latitude . "&lng=" . $longitude,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "Content-type: application/json",
                "x-api-key: 94255c6cbf61e210acde0f12fa5435a4b6ba5e5cbdce7d6d4d95df2b30392e40"
            ],
        ]);
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        }
        $data = json_decode($response)->{'data'};
        return view('weather/index', [
            'data' => $data,
            'city' => $city
        ]);
    }
}
