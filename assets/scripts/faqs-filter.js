document.addEventListener("DOMContentLoaded", function () {
	const buttons = document.querySelectorAll(".faq-pill");
	const faqItems = document.querySelectorAll(".accordion-item");

	// Function to filter items
	function filterFAQs(category) {
		faqItems.forEach((item) => {
			const itemCategory = item.getAttribute("data-category");

			// If category matches, show it. Otherwise, hide it.
			if (category === "all" || itemCategory === category) {
				item.style.display = "block";
			} else {
				item.style.display = "none";
			}
		});
	}

	// Add click event to buttons
	buttons.forEach((button) => {
		button.addEventListener("click", function () {
			// 1. Remove 'active' class from all buttons
			buttons.forEach((btn) => btn.classList.remove("active"));

			// 2. Add 'active' class to clicked button
			this.classList.add("active");

			// 3. Get the category from the button
			const category = this.getAttribute("data-filter");

			// 4. Run filter
			filterFAQs(category);
		});
	});

	// Run once on load to show the default category (General)
	// If you want to show ALL by default, change "general" to "all" below
	// and make sure the 'General' button in HTML doesn't have class="active"
	filterFAQs("general");
});
