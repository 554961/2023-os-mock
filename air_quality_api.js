document.addEventListener("DOMContentLoaded", () => {
  //api url
  const url = "https://air-quality-api.open-meteo.com/v1/air-quality?latitude=52.52&longitude=13.41&hourly=pm10,pm2_5";

  fetch(url)
    .then(response => {
      if (!response.ok) {
        throw new Error("Network response was not ok " + response.statusText);
      }
      return response.json();
    })
    .then(data => {
      console.log("Air quality data:", data);

      const times = data.hourly.time;
      const pm10 = data.hourly.pm10;

      const container = document.getElementById("air_quality_data");
      if (!container) {
        console.error("Element with id 'air_quality_data' not found");
        return;
      }

      container.innerHTML += `
        <h3 style="text-decoration: underline;">
          <em>Date: ${times[0].substring(0, 10)}</em>
        </h3>
        <br>
      `;

      for (let i = 0; i < 24 && i < times.length; i++) {
        container.innerHTML += `
          <p><strong>${times[i].substring(11)}</strong> : ${pm10[i]} µg/m³<br></p>
        `;
      }
    })
    .catch(error => {
      console.error("Fetch error:", error);
    });
});
