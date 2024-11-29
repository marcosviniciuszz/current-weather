import { getFavorites } from './api/api';

document.addEventListener('DOMContentLoaded', async () => {
    const data = await getFavorites();

    const favoritesList = document.getElementById('favorites-list');

    if (data.length > 0) {
        const emptyState = favoritesList.querySelector('.empty-state');
        if (emptyState) emptyState.remove();

        populateFavorites(data, favoritesList);
    }
});

function populateFavorites(data, container) {
    const template = document.getElementById('favorite-item-template')

    data.forEach(favorite => {
        const favoriteItem = template.content.cloneNode(true);

        favoriteItem.querySelector('.location-name').textContent = `${favorite.name}, ${favorite.country}`;
        favoriteItem.querySelector('.weather-details').textContent = `${favorite.temperature}°C - ${favorite.weather_description}`;
        favoriteItem.querySelector('.additional-info').textContent = `Humidity: ${favorite.humidity}% | Wind: ${favorite.wind_speed} km/h`;
        favoriteItem.querySelector('.local-time').textContent = `Local Time: ${favorite.observation_time}`;

        container.appendChild(favoriteItem);
    });
    
}
