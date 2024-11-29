<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeatherFavorites extends Model
{
    use HasFactory;
    
    protected $table = 'weather_favorites';

    protected $fillable = ['name', 'country', 'temperature', 'weather_description', 'humidity', 'wind_speed', 'wind_dir', 'observation_time'];
}
