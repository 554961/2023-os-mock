const url = "https://api.open-meteo.com/v1/forecast?latitude=50.8557&longitude=0.5801&hourly=temperature_2m";

fetch(url)
  .then(response => {
    if (!response.ok) {
      throw new Error("Network response was not ok " + response.statusText);
    }
    return response.json(); // parse JSON
  })
  .then(data => {
    console.log("Weather data:", data);

    // the first few hourly temperatures
    const times = data.hourly.time;
    const temps = data.hourly.temperature_2m;
    
    // display YYYY-MM-DD
    document.getElementById("weather_data").innerHTML += `<p style="text-decoration: underline;"><em>Date: ${times[0].substring(0,10)} </em><br></p>`;
    for (let i = 0; i < 24; i++) {
        // display exact hours
        document.getElementById("weather_data").innerHTML += `<p><strong>${times[i].substring(11)}</strong> : ${temps[i]} °C <br></p>`;
    }
  })
  .catch(error => {
    console.error("Fetch error:", error);
  });

    