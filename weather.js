const API_KEY = '5ef30053969d8fb1103ba051631aebae';

const getWeatherByCityName = async () => {
    const city = document.getElementById('cityInput').value;
    const country_code = document.getElementById('countryInput').value;
    const api_url = `http://api.openweathermap.org/data/2.5/weather?q=${city},${country_code}&appid=${API_KEY}&units=metric`;

    fetch(api_url)
        .then(response => {
            if (response.status === 200) {
                return response.json();
            } else {
                throw new Error('Error retrieving weather data');
            }
        })
        .then(data => {
            const description = data.weather[0].description;
            const temperature = data.main.temp;
            const humidity = data.main.humidity;

            const cityElement = document.querySelector('.city');
            const countryElement = document.querySelector('.country');
            const descriptionElement = document.querySelector('.description');
            const temperatureElement = document.querySelector('.temperature');
            const humidityElement = document.querySelector('.humidity');

            cityElement.textContent = city;
            countryElement.textContent = country_code.toUpperCase();
            descriptionElement.textContent = description;
            temperatureElement.textContent = `Temperature: ${temperature}°C`;
            humidityElement.textContent = `Humidity: ${humidity}%`;
        })
        .catch(error => {
            console.error('Error:', error);
        });
        
};

