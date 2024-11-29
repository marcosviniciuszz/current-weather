<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\WeatherStackService;

class ExternalWeatherController extends Controller
{
    protected $WeatherStackService;

    public function __construct(WeatherStackService $WeatherStackService)
    {
        $this->WeatherStackService = $WeatherStackService;
    }

    public function weather($local)
    {
        $weather = $this->WeatherStackService->currentWeather($local);    
        $weather = json_decode($weather); 
        return response()->json($weather);
    }
}
