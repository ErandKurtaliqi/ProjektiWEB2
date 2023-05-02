let weatherAPIKey = '5ef30053969d8fb1103ba051631aebae';
let weatherBaseEndpoint = 'http://api.openweathermap.org/data/2.5/weather?q=${city},${country_code}&appid=${API_KEY}' + weatherAPIKey;

let getWeatherByCityName = async (city) =>{
    let endpoint = weatherBaseEndpoint + '&lat=' + city; 
    let response = await fetch(endpoint);

    let weather = await response.json();
    console.log(weather);
}

getWeatherByCityName('New York');

const API_KEY = '5ef30053969d8fb1103ba051631aebae';
const city = 'London';
const country_code = 'uk';

const api_url = `http://api.openweathermap.org/data/2.5/weather?q=${city},${country_code}&appid=${API_KEY}`;

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
    temperatureElement.textContent = `Temperature: ${temperature}K`;
    humidityElement.textContent = `Humidity: ${humidity}%`;
});



// const API_KEY = '5ef30053969d8fb1103ba051631aebae';
// const city = 'London';
// const country_code = 'uk';

// const api_url = `http://api.openweathermap.org/data/2.5/weather?q=${city},${country_code}&appid=${API_KEY}`;

// fetch(api_url)
//   .then(response => {
//     if (response.status === 200) {
//       return response.json();
//     } else {
//       throw new Error('Error retrieving weather data');
//     }
//   })
//   .then(data => {
//     const temperature = Math.round(data.main.temp - 273.15); // convert from Kelvin to Celsius
//     const description = data.weather[0].description;
//     const icon = data.weather[0].icon;
//     const icon_url = `http://openweathermap.org/img/w/${icon}.png`;

//     // display the weather data and photo in the HTML elements
//     document.getElementById('temperature').textContent = temperature + '°C';
//     document.getElementById('description').textContent = description;
//     document.getElementById('weather-photo').setAttribute('src', icon_url);
//   })
//   .catch(error => {
//     console.error(error);
//   });

  

