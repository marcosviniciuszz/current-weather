import { getWeather } from './api/api';
import { getCEP } from './api/api';
import { saveWeatherHistory } from './api/api';
import { saveWeatherFavorite } from './api/api';

async function weather(cityName) {
    try {
        const weatherData = await getWeather(cityName);
        return weatherData
    } catch (error) {
        console.error('Erro ao buscar os dados do clima:', error);
    }
}

async function CEP(input) {
    try {
        const cepData = await getCEP(input);
        return cepData
    } catch (error) {
        console.error('Erro ao buscar dados do CEP:', error);
    }
}

async function saveHistory(weatherData) {
    try {
        const savedData = await saveWeatherHistory(weatherData);
        return savedData
    } catch (error) {
        console.error('Erro ao salvar os dados do clima:', error);
    }
}

async function saveFavorite(weatherData) {
    try {
        const savedFavorite = await saveWeatherFavorite(weatherData);
        return savedFavorite
    } catch (error) {
        console.error('Erro ao salvar o favorito:', error);
    }
}

async function displayWeatherData(data) {
    const weatherCard = document.getElementById('weatherCard');

    if (weatherCard.style.display !== 'none') {
        weatherCard.style.opacity = '0';
        await new Promise(r => setTimeout(r, 300));
    }

    document.getElementById('location').textContent = `${data.location.name}, ${data.location.country}`;
    document.getElementById('temperature').textContent = `${data.current.temperature}°C`;
    document.getElementById('description').textContent = `${data.current.weather_descriptions[0]}`;
    document.getElementById('humidity').textContent = `Humidity: ${data.current.humidity}%`;
    document.getElementById('wind').textContent = `Wind: ${data.current.wind_speed} km/h ${data.current.wind_dir}`;
    document.getElementById('observation-time').textContent = `Local Time: ${data.location.localtime.split(' ')[1]}`;

    weatherCard.style.display = 'block';
    weatherCard.style.opacity = '1';
}

async function fetchAndSaveHistory(cityName) {
    try {
        const weatherData = await weather(cityName);

        await displayWeatherData(weatherData);

        await saveHistory(weatherData);

    } catch (error) {
        console.error('Erro geral:', error);
        alert('Não foi possível localizar, tente novamente.');
    }
}

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('consultButton').addEventListener('click', function () {

        var cityName = document.getElementById('cityName').value;

        if (!cityName) {
            alert('Por favor, insira o nome da cidade!');
            return;
        }

        fetchAndSaveHistory(cityName);
    });

    document.getElementById('favoriteButton').addEventListener('click', async function () {
        try {
            const cityName = document.getElementById('cityName').value;
            const weatherData = await getWeather(cityName);
            await saveFavorite(weatherData);

            this.classList.add('active');
            this.querySelector('i').classList.remove('far');
            this.querySelector('i').classList.add('fas');

        } catch (error) {
            console.error('Erro ao adicionar favorito:', error);
            alert('Houve um erro ao adicionar aos favoritos. Por favor, tente novamente.');
        }
    });

    document.getElementById('cep').addEventListener('blur', async function () {
        try {

            if (document.getElementById('cep').value == '') {
                return;
            }

            const cityName = document.getElementById('cityName');
            cityName.value = '';

            const cep = await CEP(document.getElementById('cep').value);
            cityName.value = cep.localidade;

        } catch (error) {
            console.error('Erro ao buscar CEP:', error);
        }
    });
});