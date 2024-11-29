<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeatherFavorites;

class WeatherFavoritesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $history = WeatherFavorites::all();
        return response()->json($history, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $weather = $request->json()->all();        
        WeatherFavorites::create($weather);
        
        return response()->json($weather, 201);
    }
}
