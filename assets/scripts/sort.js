function sortTours(criteria, order) {
	const container = document.getElementById("tourContainer");
	// Get all tour cards
	const cards = Array.from(
		container.getElementsByClassName("tour-card-fixed"),
	);

	cards.sort((a, b) => {
		let valA, valB;

		if (criteria === "price") {
			// Get price from the data-base-price attribute
			valA = parseInt(
				a
					.querySelector(".currency-target")
					.getAttribute("data-base-price"),
			);
			valB = parseInt(
				b
					.querySelector(".currency-target")
					.getAttribute("data-base-price"),
			);
		} else {
			// Get name from the card title
			valA = a.querySelector(".card-title").innerText.toLowerCase();
			valB = b.querySelector(".card-title").innerText.toLowerCase();
		}

		if (criteria === "price") {
			return order === "asc" ? valA - valB : valB - valA;
		} else {
			if (valA < valB) return order === "asc" ? -1 : 1;
			if (valA > valB) return order === "asc" ? 1 : -1;
			return 0;
		}
	});

	// Re-append sorted cards to the container
	cards.forEach((card) => container.appendChild(card));
}
