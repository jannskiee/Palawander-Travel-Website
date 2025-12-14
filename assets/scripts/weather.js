async function fetchWeather(dateString) {
	const widget = document.getElementById("weatherWidget");
	const icon = document.getElementById("weatherIcon");
	const desc = document.getElementById("weatherDesc");
	const placeholder = document.getElementById("weatherPlaceholder");

	// Select the "FORECAST" label
	const label = widget ? widget.querySelector(".text-uppercase") : null;

	if (!widget || !icon || !desc || !placeholder) return;

	// --- 1. RESET LOGIC (Default / Placeholder State) ---
	// This runs if date is empty, invalid, or API key is missing
	const resetToPlaceholder = () => {
		widget.classList.remove("d-none"); // Always visible
		placeholder.classList.remove("d-none"); // Show loading bar
		desc.classList.add("d-none"); // Hide text

		// Reset Icon to Gray
		icon.src = "https://openweathermap.org/img/wn/02d.png";
		icon.style.opacity = "0.4";
		icon.style.filter = "grayscale(100%)";

		if (label) label.innerText = "FORECAST";
	};

	// If no key or no date, reset and stop.
	if (
		typeof openWeatherMap_apiKey === "undefined" ||
		!openWeatherMap_apiKey ||
		!dateString
	) {
		resetToPlaceholder();
		return;
	}

	// --- 2. Date Calculation ---
	const selectedDate = new Date(dateString);
	const today = new Date();
	selectedDate.setHours(0, 0, 0, 0);
	today.setHours(0, 0, 0, 0);

	const diffTime = selectedDate - today;
	const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

	// --- 3. Fetch Data (Only if date is 0-5 days away) ---
	if (diffDays >= 0 && diffDays <= 5) {
		try {
			// UI: Loading State
			resetToPlaceholder(); // Reuse reset function for "Loading" look
			if (label) label.innerText = "CHECKING...";

			const city = encodeURIComponent("Puerto Princesa,PH");
			const url = `https://api.openweathermap.org/data/2.5/forecast?q=${city}&appid=${openWeatherMap_apiKey}&units=metric`;

			const response = await fetch(url);
			if (!response.ok) throw new Error("API Error");

			const data = await response.json();

			if (data.list) {
				// Find forecast
				const targetDay = selectedDate.getDate();

				let forecast =
					data.list.find((item) => {
						const itemDate = new Date(item.dt * 1000);
						return (
							itemDate.getDate() === targetDay &&
							itemDate.getHours() >= 9
						);
					}) ||
					data.list.find((item) => {
						const itemDate = new Date(item.dt * 1000);
						return itemDate.getDate() === targetDay;
					});

				if (forecast) {
					const iconCode = forecast.weather[0].icon;
					const rawDesc = forecast.weather[0].description;
					const temp = Math.round(forecast.main.temp);
					const cleanDesc =
						rawDesc.charAt(0).toUpperCase() + rawDesc.slice(1);

					// Format Date
					const forecastDate = new Date(forecast.dt * 1000);
					const dateDisplay = forecastDate.toLocaleDateString(
						"en-US",
						{
							month: "short",
							day: "numeric",
							year: "numeric",
						},
					);

					// --- UPDATE UI (SUCCESS) ---
					placeholder.classList.add("d-none"); // Hide placeholder
					desc.classList.remove("d-none"); // Show text

					desc.innerHTML = `<span class="text-primary">${temp}°C</span> <span class="text-muted fw-light">|</span> ${cleanDesc}`;

					icon.src = `https://openweathermap.org/img/wn/${iconCode}@2x.png`;
					icon.style.filter = "none"; // Color
					icon.style.opacity = "1";

					if (label)
						label.innerText = `FORECAST • ${dateDisplay.toUpperCase()}`;
				} else {
					// No data for specific day (rare)
					resetToPlaceholder();
				}
			}
		} catch (error) {
			console.error(error);
			resetToPlaceholder();
		}
	} else {
		// Date too far -> Show "Select valid date" (Optional: customize this state)
		resetToPlaceholder();
		placeholder.classList.add("d-none"); // Hide bar
		desc.classList.remove("d-none"); // Show text
		desc.innerText = "Unavailable";
	}
}
