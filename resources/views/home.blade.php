<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Current Weather</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @vite('resources/css/home.css')
</head>
<body>
    <x-header />

    <div class="container">
        <div class="weather-container">
            <h1 class="text-center title">
                <i class="fas fa-cloud-sun me-2"></i>Current Weather
            </h1>    
        
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="input-group">
                        <i class="fas fa-map-marker-alt"></i>
                        <input type="text" id="cep" class="form-control custom-input" maxlength="9" 
                               placeholder="Enter the zip code">
                    </div>
            
                    <div class="input-group">
                        <i class="fas fa-city"></i>
                        <input type="text" id="cityName" class="form-control custom-input" 
                               placeholder="Enter the city name">
                    </div>
            
                    <div class="text-center">
                        <button id="consultButton" class="btn consult-btn btn-lg px-5 py-3">
                            <i class="fas fa-search me-2"></i>Check Weather
                        </button>
                    </div>
                </div>
            </div>

        <x-weather-card />

        </div>
    </div>  

    <x-footer />

    @vite('resources/js/home.js')
</body>
</html>


