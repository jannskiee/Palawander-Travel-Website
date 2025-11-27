document.querySelector(".see-all-btn").addEventListener("click", function () {
	// Show all hidden cards
	document.querySelectorAll(".hidden-card").forEach((card) => {
		card.style.display = "block";
	});

	// Optionally hide the "See All" button after clicking
	this.style.display = "none";
});
