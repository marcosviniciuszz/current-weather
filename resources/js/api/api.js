import axios from 'axios';

export const getCEP = async (input) => {
    try {
        const response = await axios.get(`https://viacep.com.br/ws/${input}/json/`);

        return response.data;
    } catch (error) {
        console.error('Erro no GET:', error);
        throw error;
    }
};

export const getWeather = async (cityName) => {
    try {
        const response = await axios.get(`/api/weather/${cityName}`);

        return response.data;
    } catch (error) {
        console.error('Erro no GET:', error);
        throw error;
    }
};

export const getHistory = async () => {
    try {
        const response = await axios.get('/api/history');
        return response.data;
    } catch (error) {
        console.error('Erro ao carregar os dados:', error);
        return [];
    }
};

export const getFavorites = async () => {
    try {
        const response = await axios.get('/api/favorites');
        return response.data;
    } catch (error) {
        console.error('Erro ao carregar os favoritos:', error);
        return [];
    }
};

export const saveWeatherHistory = async (weatherData) => {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    try {
        const response = await axios.post('/api/history', {
            name: weatherData.location.name,
            country: weatherData.location.country,
            temperature: weatherData.current.temperature,
            weather_description: weatherData.current.weather_descriptions[0]
        }, {
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
            }
        });

        return response.data;
    } catch (error) {
        console.error('Erro ao salvar histórico:', error);
        throw error;
    }
};

export const saveWeatherFavorite = async (weatherData) => {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    try {
        const response = await axios.post('/api/favorites', {
            name: weatherData.location.name,
            country: weatherData.location.country,
            temperature: weatherData.current.temperature,
            weather_description: weatherData.current.weather_descriptions[0],
            humidity: weatherData.current.humidity,
            wind_speed: weatherData.current.wind_speed,
            wind_dir: weatherData.current.wind_dir,
            observation_time: weatherData.location.localtime
        }, {
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
            }
        });

        return response.data;
    } catch (error) {
        console.error('Erro ao salvar favorito:', error);
        throw error;
    }
};