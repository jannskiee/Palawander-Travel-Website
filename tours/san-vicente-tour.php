<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <title>Port Barton Island Hopping</title>
    <link
        crossorigin="anonymous"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        rel="stylesheet"
    />
    <link href="../assets/styles/style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../assets/styles/palawander-tour.css">
    <link rel="stylesheet" href="../assets/styles/navbar.css">
    <link rel="stylesheet" href="../assets/styles/footer.css">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
        rel="stylesheet"
    />
    <link href="https://api.mapbox.com/mapbox-gl-js/v3.17.0-beta.1/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v3.17.0-beta.1/mapbox-gl.js"></script>
</head>
<body>

<?php
include '../config/secrets.php';
include '../includes/navbar.php';

global $mapbox_accessToken;
?>

<div class="hero-section rounded-4"
     style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../assets/images/tour-card-img4.jpg');
    background-size: cover;
    background-position: center;">
    <div class="container text-center text-md-start">
        <div class="row">
            <div class="col-lg-8">
                <span class="badge bg-dark text-light mb-2 px-3 py-2 rounded-pill fw-bold"><i
                        class="bi bi-star-fill me-1"></i>4.7 Ratings</span>
                <h1 class="display-3 fw-bold">Port Barton Island Hopping</h1>
                <p class="lead"><i class="bi bi-geo-alt-fill"></i> Port Barton, San Vicente, Palawan
            </div>
        </div>
    </div>
</div>


<div class="container py-5">
    <div class="row g-5">

        <div class="col-lg-8">

            <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
                <h3 class="fw-bold mb-3">Escape to the Peaceful Islands</h3>
                <p class="text-secondary lh-lg">
                    Discover the laid-back charm of Port Barton, a hidden gem in San Vicente. This tour takes you away
                    from the crowds to swim with Green Sea Turtles, relax on the shallow waters of the Starfish Sandbar,
                    and snorkel in vibrant, preserved coral reefs. It is the perfect island adventure for nature lovers
                    seeking tranquility.
                </p>
            </div>

            <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="fw-bold mb-0">
                        Tour Location
                    </h4>

                    <a href="https://maps.app.goo.gl/KXtJe7qd6X19ErhZA"
                       target="_blank"
                       class="btn btn-outline-dark btn-sm rounded-pill">
                        <i class="bi bi-map me-1"></i> Open in Google Maps
                    </a>
                </div>

                <div id="map" class="border"
                     data-lng="119.17798548952682"
                     data-lat="10.420185755714812"
                     data-title="Port Barton"
                     data-desc="Turtle Sanctuary">
                </div>
            </div>

            <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
                <h4 class="fw-bold mb-4">Tour Itinerary</h4>

                <div class="timeline-container">
                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">08:30 AM – 09:00 AM</span>
                        <h5 class="fw-bold">Meet-up / Boarding</h5>
                        <p class="text-muted small mb-0">Meet at the Port Barton Coast Guard station or beach area for
                            boat dispatch and safety briefing.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">09:30 AM – 10:30 AM</span>
                        <h5 class="fw-bold">Twin Reef & Wide Reef</h5>
                        <p class="text-muted small mb-0">Snorkel in the clearest waters teeming with colorful soft
                            corals and schools of fish.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">10:45 AM – 11:45 AM</span>
                        <h5 class="fw-bold">Turtle Spot</h5>
                        <p class="text-muted small mb-0">The highlight of the tour! Swim alongside wild Green Sea
                            Turtles in their natural habitat.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">12:00 PM – 01:30 PM</span>
                        <h5 class="fw-bold">Lunch at German/Exotic Island</h5>
                        <p class="text-muted small mb-0">Relax on a white sand beach while the crew prepares a fresh
                            grilled seafood and veggie lunch.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">02:00 PM – 03:00 PM</span>
                        <h5 class="fw-bold">Starfish Sandbar</h5>
                        <p class="text-muted small mb-0">Walk along a shallow sandbar populated by numerous chocolate
                            chip starfish.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">04:00 PM</span>
                        <h5 class="fw-bold">Return to Shore</h5>
                        <p class="text-muted small mb-0">Boat ride back to the main beach of Port Barton to catch the
                            sunset.</p>
                    </div>
                </div>
            </div>

            <div class="alert alert-warning border-0 shadow-sm rounded-4 d-flex" role="alert">
                <i class="bi bi-exclamation-triangle-fill fs-4 me-3"></i>
                <div>
                    <h6 class="fw-bold">Important Reminders</h6>
                    <ul class="mb-0 small ps-3">
                        <li><strong>Eco-Card:</strong> A specific Port Barton Eco-Card (approx ₱50) is usually required
                            separately.
                        </li>
                        <li><strong>Do Not Touch:</strong> Strictly do not touch or chase the sea turtles.</li>
                        <li><strong>Cash Only:</strong> ATMs are scarce; please bring enough cash for small expenses.
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 sticky-sidebar">
                <div class="card-body p-4">
                    <p class="text-muted fw-bold small mb-1">STARTS AT</p>
                    <div class="d-flex align-items-center mb-4">
                        <h2 class="fw-bold mb-0 tour-price currency-target" data-base-price="1200">₱1,200</h2>
                        <span class="text-muted ms-2">/ person</span>
                    </div>

                    <hr class="my-4">

                    <h6 class="fw-bold mb-3">What's Included</h6>
                    <ul class="list-unstyled list-check text-secondary">
                        <li><i class="bi bi-check-circle text-dark"></i> Tourist Boat Transfers</li>
                        <li><i class="bi bi-check-circle text-dark"></i> Buffet Lunch</li>
                        <li><i class="bi bi-check-circle text-dark"></i> Licensed Tour Guide</li>
                        <li><i class="bi bi-check-circle text-dark"></i> Entrance Fees (Islands)</li>
                        <li><i class="bi bi-check-circle text-dark"></i> Life Vest</li>
                    </ul>

                    <h6 class="fw-bold mb-3 mt-4">Not Included</h6>
                    <ul class="list-unstyled list-check text-secondary">
                        <li class="opacity-75"><i class="bi bi-x-circle text-dark"></i> Eco-Tourism Card (₱50)</li>
                        <li class="opacity-75"><i class="bi bi-x-circle text-dark"></i> Snorkel Gear Rental (₱150)</li>
                    </ul>

                    <h6 class="fw-bold mb-2 mt-4">What to bring</h6>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="badge bg-light text-dark border">Towel</span>
                        <span class="badge bg-light text-dark border">Sunblock</span>
                    </div>

                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-dark rounded-pill book-now" type="button">Book Now</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include '../includes/footer.php'; ?>

<script>
    const mapbox_accessToken = "<?php echo $mapbox_accessToken; ?>";
    const currencyProxyPath = "../api/currency-proxy.php";
</script>

<script src="../assets/scripts/currency-converter.js"></script>
<script src="../assets/scripts/tour-map.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>