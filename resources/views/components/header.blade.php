<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<div>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="https://camo.githubusercontent.com/9fc65647360c065ad61c9e92b0f4699c0b9c9bcfbb86d79d6c7e3ccb50738161/68747470733a2f2f626d63646e2e6e6c2f6173736574732f776561746865722d69636f6e732f76322e302f6c696e652f7261696e2e737667" 
                    alt="Ícone da Navbar" width="60" height="60">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-3">
                            <a class="nav-link font-weight-bold fs-6" href="{{ route('home') }}" style="font-family: 'Montserrat', sans-serif; color: #8d8e92;">Home</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link font-weight-bold fs-6" href="{{ route('compare') }}" style="font-family: 'Montserrat', sans-serif; color: #8d8e92;">Compare Weather</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link font-weight-bold fs-6" href="{{ route('history') }}" style="font-family: 'Montserrat', sans-serif; color: #8d8e92;">History</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link font-weight-bold fs-6" href="{{ route('favorites') }}" style="font-family: 'Montserrat', sans-serif; color: #8d8e92;">Favorites</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
