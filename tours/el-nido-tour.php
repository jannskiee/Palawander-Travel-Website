<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <title>El Nido Island Hopping Tour A</title>
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
     style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../assets/images/tour-card-img2.jpg');
    background-size: cover;
    background-position: center;">
    <div class="container text-center text-md-start">
        <div class="row">
            <div class="col-lg-8">
                <span class="badge bg-dark text-light mb-2 px-3 py-2 rounded-pill fw-bold"><i
                            class="bi bi-star-fill me-1"></i>5.0 Ratings</span>
                <h1 class="display-3 fw-bold">El Nido Island Hopping Tour</h1>
                <p class="lead"><i class="bi bi-geo-alt-fill"></i> Bacuit Bay, El Nido, Palawan
            </div>
        </div>
    </div>
</div>


<div class="container py-5">
    <div class="row g-5">

        <div class="col-lg-8">

            <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
                <h3 class="fw-bold mb-3">Experience the Best of El Nido</h3>
                <p class="text-secondary lh-lg">
                    Step into a postcard with El Nido’s most iconic tour. You will navigate through towering limestone
                    cliffs, kayak across the emerald waters of the Big Lagoon, and relax on pristine white-sand beaches.
                    This tour offers the perfect mix of adventure and relaxation in the world-famous Bacuit Bay.
                </p>
            </div>

            <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="fw-bold mb-0">
                        Tour Location
                    </h4>

                    <a href="https://maps.app.goo.gl/M5UUEiywyM2772Sm8"
                       target="_blank"
                       class="btn btn-outline-dark btn-sm rounded-pill">
                        <i class="bi bi-map me-1"></i> Open in Google Maps
                    </a>
                </div>

                <div id="map" class="border"
                     data-lng="119.32115210431037"
                     data-lat="11.155694522672231"
                     data-title="Big Lagoon, El Nido"
                     data-desc="Miniloc Island">
                </div>
            </div>

            <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
                <h4 class="fw-bold mb-4">Tour Itinerary</h4>

                <div class="timeline-container">
                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">08:00 AM – 08:45 AM</span>
                        <h5 class="fw-bold">Hotel Pickup / Meet-up</h5>
                        <p class="text-muted small mb-0">Tricycle pickup from your hotel within El Nido town proper or
                            meet-up at the designated dispatching area near the beach.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">09:00 AM</span>
                        <h5 class="fw-bold">Boarding & Clearance</h5>
                        <p class="text-muted small mb-0">Board the outrigger boat. A short briefing will be conducted by
                            the boat captain regarding safety and environmental policies.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">09:30 AM – 11:00 AM</span>
                        <h5 class="fw-bold">The Big Lagoon</h5>
                        <p class="text-muted small mb-0">The highlight! Transfer to a kayak and paddle between massive
                            limestone walls and through crystal-clear shallow waters.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">11:20 AM – 12:00 PM</span>
                        <h5 class="fw-bold">Secret Lagoon</h5>
                        <p class="text-muted small mb-0">Crawl through a small opening in the rock face to enter a
                            hidden, quiet pool surrounded by cliffs.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">12:00 PM – 01:00 PM</span>
                        <h5 class="fw-bold">Beachside Buffet Lunch</h5>
                        <p class="text-muted small mb-0">Enjoy a freshly prepared lunch (grilled fish, chicken, fruits)
                            at Shimizu Island or Payong-Payong beach.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">01:00 PM – 02:00 PM</span>
                        <h5 class="fw-bold">Snorkeling Activity</h5>
                        <p class="text-muted small mb-0">Dive into the water to see vibrant coral reefs and schools of
                            tropical fish at Shimizu Island.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">02:30 PM – 03:30 PM</span>
                        <h5 class="fw-bold">Seven Commandos Beach</h5>
                        <p class="text-muted small mb-0">Relax on a long stretch of white sand, play volleyball, or
                            enjoy fresh buko juice.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">04:00 PM</span>
                        <h5 class="fw-bold">Return to Town</h5>
                        <p class="text-muted small mb-0">Boat travel back to the main beach in El Nido.</p>
                    </div>
                </div>
            </div>

            <div class="alert alert-warning border-0 shadow-sm rounded-4 d-flex" role="alert">
                <i class="bi bi-exclamation-triangle-fill fs-4 me-3"></i>
                <div>
                    <h6 class="fw-bold">Important Reminders</h6>
                    <ul class="mb-0 small ps-3">
                        <li><strong>Plastic Ban:</strong> Single-use plastics are strictly prohibited on boat tours.
                        </li>
                        <li><strong>No Touching Corals:</strong> Please be mindful not to step on or touch the reefs.
                        </li>
                        <li><strong>Safety First:</strong> Life vests must be worn while the boat is moving.</li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 sticky-sidebar">
                <div class="card-body p-4">
                    <p class="text-muted fw-bold small mb-1">STARTS AT</p>
                    <div class="d-flex align-items-center mb-4">
                        <h2 class="fw-bold mb-0 tour-price currency-target" data-base-price="1500">₱1,500</h2>
                        <span class="text-muted ms-2">/ person</span>
                    </div>

                    <hr class="my-4">

                    <h6 class="fw-bold mb-3">What's Included</h6>
                    <ul class="list-unstyled list-check text-secondary">
                        <li><i class="bi bi-check-circle text-dark"></i> Tourist Boat Transfers</li>
                        <li><i class="bi bi-check-circle text-dark"></i> Buffet Lunch</li>
                        <li><i class="bi bi-check-circle text-dark"></i> Life Vest & Entrance Fees</li>
                        <li><i class="bi bi-check-circle text-dark"></i> Licensed Tour Guide</li>
                    </ul>

                    <h6 class="fw-bold mb-3 mt-4">Not Included</h6>
                    <ul class="list-unstyled list-check text-secondary">
                        <li class="opacity-75"><i class="bi bi-x-circle text-dark"></i> Eco-Fee (ETDF) ₱200</li>
                        <li class="opacity-75"><i class="bi bi-x-circle text-dark"></i> Kayak Rental (₱300-400)</li>
                        <li class="opacity-75"><i class="bi bi-x-circle text-dark"></i> Mask & Snorkel Rental</li>
                        <li class="opacity-75"><i class="bi bi-x-circle text-dark"></i> Aqua Shoes Rental</li>
                    </ul>

                    <h6 class="fw-bold mb-2 mt-4">What to bring</h6>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="badge bg-light text-dark border">Dry Bag</span>
                        <span class="badge bg-light text-dark border">Aqua Shoes</span>
                        <span class="badge bg-light text-dark border">Action Camera</span>
                        <span class="badge bg-light text-dark border">Sun Protection</span>
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