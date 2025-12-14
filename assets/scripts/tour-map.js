mapboxgl.accessToken = mapbox_accessToken;

const mapContainer = document.getElementById("map");

const lng = parseFloat(mapContainer.dataset.lng) || 118.926065;
const lat = parseFloat(mapContainer.dataset.lat) || 10.199443;
const title = mapContainer.dataset.title || "Tour Destination";
const desc = mapContainer.dataset.desc || "Palawan, Philippines";

const map = new mapboxgl.Map({
	container: "map",
	style: "mapbox://styles/mapbox/standard",
	center: [lng, lat],
	zoom: 11,
	pitch: 45,
});

const popup = new mapboxgl.Popup({ offset: 25, focusAfterOpen: false })
	.setHTML(`
        <div style="text-align: center;">
            <h6 class="fw-bold mb-0">${title}</h6>
            <small class="text-muted">${desc}</small>
            <br>
            <span class="badge bg-success mt-1">Main Destination</span>
        </div>
    `);

const marker1 = new mapboxgl.Marker({ color: "#dc3545" })
	.setLngLat([lng, lat]) // Use the variables here
	.setPopup(popup)
	.addTo(map);

marker1.togglePopup();

map.addControl(new mapboxgl.NavigationControl(), "top-right");
