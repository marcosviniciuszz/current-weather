<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @vite('resources/css/history.css')
</head>
<body>
    <x-header />

    <div class="container">
        <div class="history-container">
            
            <h1 class="text-center title">
                <i class="fas fa-history me-2"></i>
                Search History
            </h1>

            <div id="history-list" class="row">
                <div class="col-12 empty-state">
                    <i class="fas fa-search"></i>
                    <h3>No search history yet</h3>
                    <p>Your weather search history will appear here!</p>
                </div>
            </div>
            
            <template id="history-item-template">
                <div class="col-12 history-item">
                    <div class="history-content">
                        <div class="history-left">
                            <span class="location"></span>
                            <span class="timestamp"></span>
                        </div>
                        <span class="weather-info"></span>
                    </div>
                    <hr>
                </div>
            </template>

        </div>
    </div>

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    @vite('resources/js/history.js')
</body>
</html>
