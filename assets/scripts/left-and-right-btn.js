document.addEventListener("DOMContentLoaded", function () {
	const scrollContainer = document.getElementById("tourContainer");
	const leftBtn = document.getElementById("scrollLeftBtn");
	const rightBtn = document.getElementById("scrollRightBtn");

	// Amount to scroll = Card Width + Gap
	// We estimate around 370px (340px card + 30px gap)
	const scrollAmount = 370;

	if (rightBtn) {
		rightBtn.addEventListener("click", () => {
			scrollContainer.scrollBy({
				left: scrollAmount,
				behavior: "smooth",
			});
		});
	}

	if (leftBtn) {
		leftBtn.addEventListener("click", () => {
			scrollContainer.scrollBy({
				left: -scrollAmount,
				behavior: "smooth",
			});
		});
	}
});
