async function sendNewsletterEmail() {
	const emailField = document.getElementById("newsletterEmail");
	const btn = document.querySelector(".newsletter-btn");
	const email = emailField.value;

	const originalText = "Get Listed";

	// 1. Validation Logic
	if (email === "") {
		triggerState("is-error", "Enter Email!");
		return;
	}

	// 2. Loading State
	btn.disabled = true;
	// Keep width stable by using a small spinner
	btn.innerHTML =
		'<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending';

	try {
		const response = await fetch("/webdev/api/send-email-newsletter.php", {
			method: "POST",
			body: JSON.stringify({ email: email }),
			headers: { "Content-Type": "application/json" },
		});

		const result = await response.json();

		if (result.success) {
			// Success State
			triggerState("is-success", '<i class="bi bi-check-lg"></i> Listed');
			emailField.value = "";
		} else {
			// API Error State
			triggerState("is-error", "Failed");
			console.error(result.message);
		}
	} catch (error) {
		// Network Error State
		triggerState("is-error", "Error");
	}

	// Helper Function to Handle Transitions
	function triggerState(className, text) {
		// Add the class (triggers CSS transition)
		btn.classList.add(className);
		btn.innerHTML = text;

		// Remove loading state but keep button disabled briefly so they see the message
		if (className === "is-error") {
			btn.disabled = false; // Let them try again immediately if error
		}

		// Reset after 3 seconds
		setTimeout(() => {
			btn.classList.remove(className); // Smoothly fades back to black
			btn.innerHTML = originalText;
			btn.disabled = false;
		}, 3000);
	}
}
