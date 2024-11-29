<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WeatherStackService
{

    public function __construct()
    {
        $this->accessKey = config('services.weatherstack.access_key');
    }

    public function currentWeather($query)
    {
        $url = 'http://api.weatherstack.com/current';
    
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->get($url, [
            'access_key' => $this->accessKey,
            'query'      => $query 
        ]);
    
        return $response->body();
    }
}

