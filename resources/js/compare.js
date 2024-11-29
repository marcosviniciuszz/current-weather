import { getWeather } from './api/api';
import { saveWeatherHistory } from './api/api';

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('consultButton').addEventListener('click', async function ()  {

        const firstCity = document.getElementById('first-city').value
        const secondCity = document.getElementById('second-city').value

        if (firstCity == '') {
            alert('Por favor, insira o nome da primeira cidade!');
            return;
        }

        if (secondCity == '') {
            alert('Por favor, insira o nome da segunda cidade!');
            return;
        }

        loader.style.display = 'block';

        const firstWeather = await getWeather(firstCity);
        const secondWeather = await getWeather(secondCity);

        await displayWeatherData(firstWeather, 'weatherCard1');
        await displayWeatherData(secondWeather, 'weatherCard2');

        loader.style.display = 'none';
    });
});

async function displayWeatherData(data, cardId) {
    const weatherCard = document.getElementById(cardId);

    if (!weatherCard) {
        console.error(`Elemento com o ID '${cardId}' não encontrado no DOM.`);
        return;
    }

    if (weatherCard.style.display !== 'none') {
        weatherCard.style.opacity = '0';
        await new Promise(r => setTimeout(r, 300));
    }

    weatherCard.querySelector('#location').textContent = `${data.location.name}, ${data.location.country}`;
    weatherCard.querySelector('#temperature').textContent = `${data.current.temperature}°C`;
    weatherCard.querySelector('#description').textContent = `${data.current.weather_descriptions[0]}`;
    weatherCard.querySelector('#humidity').textContent = `Humidity: ${data.current.humidity}%`;
    weatherCard.querySelector('#wind').textContent = `Wind: ${data.current.wind_speed} km/h ${data.current.wind_dir}`;
    weatherCard.querySelector('#observation-time').textContent = `Local Time: ${data.location.localtime.split(' ')[1]}`;

    weatherCard.style.display = 'block';
    weatherCard.style.opacity = '1';

    await saveWeatherHistory(data);
}
