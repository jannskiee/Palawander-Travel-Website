document.querySelector(".see-all-btn").addEventListener("click", function () {
	// Show all hidden cards
	document.querySelectorAll(".hidden-card").forEach((card) => {
		card.style.display = "block";
	});

	// Optionally hide the "See All" button after clicking
	this.style.display = "none";
});

function typeWriterSequential(h5El, pEl) {
	const h5Text = h5El.dataset.text;
	const pText = pEl.dataset.text;

	function createCursor() {
		const cursor = document.createElement("span");
		cursor.textContent = "|";
		cursor.style.marginLeft = "2px";
		cursor.style.animation = "blink 1s infinite"; // slower blink
		return cursor;
	}

	function typeH5() {
		let i = 0;
		h5El.textContent = "";
		const cursor = createCursor();
		h5El.appendChild(cursor);

		function addChar() {
			if (i < h5Text.length) {
				h5El.textContent = h5Text.substring(0, i + 1);
				h5El.appendChild(cursor);
				i++;
				setTimeout(addChar, 70); // slower typing for H5
			} else {
				cursor.remove(); // remove cursor after finishing H5
				typeP();
			}
		}
		addChar();
	}

	function typeP() {
		let i = 0;
		pEl.textContent = "";
		const cursor = createCursor();
		pEl.appendChild(cursor);

		function addChar() {
			if (i < pText.length) {
				pEl.textContent = pText.substring(0, i + 1);
				pEl.appendChild(cursor);
				i++;
				setTimeout(addChar, 15); // faster typing for paragraph
			} else {
				cursor.remove(); // remove cursor after finishing P
			}
		}
		addChar();
	}

	typeH5();
}

// Intersection Observer
const observer = new IntersectionObserver(
	(entries, obs) => {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				const h5 = entry.target.querySelector(".travel-h5");
				const p = entry.target.querySelector(".travel-p");

				typeWriterSequential(h5, p);
				obs.unobserve(entry.target);
			}
		});
	},
	{ threshold: 0.5 },
);

document
	.querySelectorAll(".travel-img-card")
	.forEach((card) => observer.observe(card));
