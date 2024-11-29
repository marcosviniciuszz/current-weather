<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Favorites</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @vite('resources/css/favorites.css')
</head>
<body>
    <x-header />

    <div class="container">
        <div class="favorites-container">
            <h1 class="text-center title">
                <i class="fas fa-star me-2" style="color: #ffd700;"></i>
                Favorites 
            </h1>

            <div id="favorites-list" class="row">
                <div class="col-12 empty-state">
                    <i class="fas fa-cloud-sun"></i>
                    <h3>No favorites yet</h3>
                    <p>Save to check quickly!</p>
                </div>
            </div>
        </div>
    </div>

    <x-footer />

    <template id="favorite-item-template">
        <div class="col-md-6 mb-4">
            <div class="weather-result">
                <h3 class="location-name"></h3>
                <p class="weather-details"></p>
                <p class="additional-info"></p>
                <p class="local-time"></p>
            </div>
        </div>
    </template>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    @vite('resources/js/favorites.js')
</body>
</html>
