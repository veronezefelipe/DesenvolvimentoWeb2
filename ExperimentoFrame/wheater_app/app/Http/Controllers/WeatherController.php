<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index()
    {
        $apiKey = config('services.openweathermap.api_key');
        $city = 'London'; // Você pode mudar para a cidade desejada
        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric");
        $weatherData = $response->json();
        $temperature = $weatherData['main']['temp'];
        $description = $weatherData['weather'][0]['description'];

        return view('weather', [
            'city' => $city,
            'temperature' => $temperature,
            'description' => $description
        ]);
    }
}
