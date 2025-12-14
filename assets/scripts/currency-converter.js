// assets/scripts/currency-converter.js

document.addEventListener("DOMContentLoaded", () => {
	const savedCurrency = localStorage.getItem("selectedCurrency");
	if (savedCurrency) {
		changeCurrency(savedCurrency);
	}
});

// 2. Main Function to Change Currency
async function changeCurrency(currency) {
	// Update the button text immediately for UX (Show loading spinner)
	const btn = document.getElementById("currencyBtn");
	btn.innerHTML = `${currency} <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>`;

	try {
		let rate = 1;

		// If not PHP, fetch the conversion rate
		if (currency !== "PHP") {
			// UPDATED: Fetch from our local secure proxy instead of external API
			// Determine the correct path: Use the global variable if set, otherwise default to root 'api/'
			const proxyPath =
				typeof currencyProxyPath !== "undefined"
					? currencyProxyPath
					: "api/currency-proxy.php";

			// Fetch from the correct path
			const response = await fetch(proxyPath);

			if (!response.ok) throw new Error("Network response was not ok");

			const data = await response.json();

			// The logic remains the same
			rate = data.conversion_rates[currency];
		}

		// 3. Update all price tags on the website
		const priceTags = document.querySelectorAll(".currency-target");

		priceTags.forEach((tag) => {
			// Get the original PHP price from the data attribute we added earlier
			const basePrice = parseFloat(tag.getAttribute("data-base-price"));

			// Calculate new price
			const convertedPrice = (basePrice * rate).toLocaleString(
				undefined,
				{
					minimumFractionDigits: 0,
					maximumFractionDigits: 2,
				},
			);

			// Update text based on currency symbol
			let symbol = "";
			switch (currency) {
				case "PHP":
					symbol = "₱";
					break;
				case "USD":
					symbol = "$";
					break;
				case "EUR":
					symbol = "€";
					break;
				case "KRW":
					symbol = "₩";
					break;
				case "JPY":
					symbol = "¥";
					break;
				default:
					symbol = currency + " ";
			}

			tag.innerText = `${symbol}${convertedPrice}`;
		});

		// 4. Update Button Text & Save to LocalStorage
		btn.innerText = `${symbol(currency)} ${currency}`;
		localStorage.setItem("selectedCurrency", currency);
	} catch (error) {
		console.error("Error fetching currency:", error);
		btn.innerText = "Error";
		alert(
			"Could not convert currency. Please check your internet connection.",
		);
	}
}

// Helper to get symbol quickly for the button
function symbol(currency) {
	if (currency === "PHP") return "₱";
	if (currency === "USD") return "$";
	if (currency === "EUR") return "€";
	if (currency === "KRW") return "₩";
	if (currency === "JPY") return "¥";
	return "";
}
