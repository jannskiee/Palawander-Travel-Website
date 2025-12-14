document.addEventListener("DOMContentLoaded", () => {
	// --- 1. DATE VALIDATION (Fixed for Local Time) ---
	const dateInput = document.getElementById("travelDate");
	if (dateInput) {
		// Create a date object for right now
		const now = new Date();

		// Format it manually to YYYY-MM-DD using Local Time components
		const year = now.getFullYear();
		const month = String(now.getMonth() + 1).padStart(2, "0"); // Jan is 0
		const day = String(now.getDate()).padStart(2, "0");

		const today = `${year}-${month}-${day}`;

		// Set the minimum selectable date to local today
		dateInput.setAttribute("min", today);
	}

	// --- 2. ELEMENT REFERENCES ---
	const tourSelect = document.getElementById("tourSelect");
	const paxInput = document.getElementById("paxCount");
	const sumName = document.getElementById("summaryTourName");
	const sumDate = document.getElementById("summaryDate");
	const sumPax = document.getElementById("summaryPax");
	const sumPrice = document.getElementById("summaryPrice");
	const sumTotal = document.getElementById("summaryTotal");

	// --- 3. MAIN CALCULATION ---
	const calculate = () => {
		const selected = tourSelect.options[tourSelect.selectedIndex];
		const price = parseFloat(selected.getAttribute("data-price")) || 0;
		const name =
			selected.getAttribute("data-fullname") ||
			selected.value ||
			"Select a Tour";

		let pax = parseInt(paxInput.value) || 1;
		if (pax < 1) pax = 1;

		const dateVal = dateInput.value;
		const total = price * pax;

		// Update Summary Text
		if (sumName) sumName.innerText = name;
		if (sumPax) sumPax.innerText = pax;

		// DATE LOGIC
		if (dateVal && sumDate) {
			const d = new Date(dateVal);
			sumDate.innerText = d.toLocaleDateString("en-US", {
				month: "short",
				day: "numeric",
				year: "numeric",
			});

			// Fetch Weather for selected date
			if (typeof fetchWeather === "function") {
				fetchWeather(dateVal);
			}
		} else if (sumDate) {
			sumDate.innerText = "--";

			// --- RESET WEATHER TO PLACEHOLDER ---
			if (typeof fetchWeather === "function") {
				fetchWeather("");
			}
		}

		// Update Base Price Data
		if (sumPrice) sumPrice.setAttribute("data-base-price", price);
		if (sumTotal) sumTotal.setAttribute("data-base-price", total);

		// Handle Currency Display
		const savedCurrency = localStorage.getItem("selectedCurrency") || "PHP";

		if (savedCurrency === "PHP") {
			if (sumPrice) sumPrice.innerText = "₱" + price.toLocaleString();
			if (sumTotal) sumTotal.innerText = "₱" + total.toLocaleString();
		} else {
			if (window.changeCurrency) {
				window.changeCurrency(savedCurrency);
			}
		}
	};

	// --- ATTACH LISTENERS ---
	if (tourSelect) tourSelect.addEventListener("change", calculate);
	if (paxInput) paxInput.addEventListener("input", calculate);
	if (dateInput) dateInput.addEventListener("change", calculate);
});
