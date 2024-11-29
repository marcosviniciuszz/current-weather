<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Comparator</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @vite('resources/css/home.css')
</head>

<body>
    <x-header />

    <div class="container">
        <div class="weather-container">
            <h1 class="text-center title">
                <i class="fa-solid fa-code-compare"></i> Compare Weather
            </h1>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form id="compareForm" class="d-flex flex-column gap-3">

                        <div class="input-group">
                            <input type="text" id="first-city" class="form-control custom-input"
                                placeholder="Enter first City name">


                            <input type="text" id="second-city" class="form-control custom-input"
                                placeholder="Enter second City name">
                        </div>

                        <div class="text-center">
                            <button id="consultButton" type="button" class="btn consult-btn btn-lg px-5 py-3">
                                <i class="fas fa-search me-2"></i>Compare Weather
                            </button>
                        </div>

                        <div id="loader" style="display: none; justify-content: center; align-items: center;"">Loading...</div>

                    </form>
                </div>
            </div>

            <div class="justify-content-center">
                <x-weather-card compare=true cardId="weatherCard1" />
                <x-weather-card compare=true cardId="weatherCard2" />
            </div>
        </div>
    </div>

    <x-footer />

    @vite('resources/js/compare.js')
</body>

</html>
