@props(['compare' => false, 'cardId' => 'weatherCard'])

<div>
    <div id="{{ $cardId }}" class="mt-4" style="display: none;">
        <div class="result-container">
            <div class="d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="weather-result">
                        <div class="current-weather text-center">
                            <img id="icon" src="" alt="Weather Icon" class="weather-icon mb-3 d-none">
                            <h2 id="location" class="mb-3"></h2>
                            
                            <div class="temperature-container mb-4">
                                <span id="temperature"></span>
                            </div>
                            
                            @if ($compare === false)
                            <div class="favorite-container mb-3">
                                <button id="favoriteButton" class="btn favorite-btn">
                                    <i class="far fa-heart"></i> Save Weather
                                </button>
                            </div>
                            @endif
                            
                            <div class="weather-details mb-3">
                                <div class="d-flex justify-content-between">
                                    <div class="detail-item text-center">
                                        <i class="fas fa-cloud mb-2"></i>
                                        <div id="description"></div>
                                    </div>
                                    <div class="detail-item text-center">
                                        <i class="fas fa-tint mb-2"></i>
                                        <div id="humidity"></div>
                                    </div>
                                    <div class="detail-item text-center">
                                        <i class="fas fa-wind mb-2"></i>
                                        <div id="wind"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="observation-time-container mt-3">
                                <small id="observation-time" class="text-muted"></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
