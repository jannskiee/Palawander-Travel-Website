<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <title>Coron Ultimate Island Tour</title>
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
     style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../assets/images/tour-card-img3.jpg');
    background-size: cover;
    background-position: center;">
    <div class="container text-center text-md-start">
        <div class="row">
            <div class="col-lg-8">
                <span class="badge bg-dark text-light mb-2 px-3 py-2 rounded-pill fw-bold"><i
                        class="bi bi-star-fill me-1"></i>4.8 Ratings</span>
                <h1 class="display-3 fw-bold">Coron Ultimate Island Tour</h1>
                <p class="lead"><i class="bi bi-geo-alt-fill"></i> Coron, Palawan
            </div>
        </div>
    </div>
</div>


<div class="container py-5">
    <div class="row g-5">

        <div class="col-lg-8">

            <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
                <h3 class="fw-bold mb-3">Discover the Jewels of Coron</h3>
                <p class="text-secondary lh-lg">
                    Experience the very best of Coron in one day. This ultimate tour takes you to the crystal-clear waters of Kayangan Lake, the breathtaking limestone formations of the Twin Lagoon, and the historic Skeleton Wreck from WWII. Snorkel in vibrant coral gardens and relax on the pristine white sands of CYC Beach.
                </p>
            </div>

            <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="fw-bold mb-0">
                        Tour Location
                    </h4>

                    <a href="https://maps.app.goo.gl/tHMm9RiE7773RD66A"
                       target="_blank"
                       class="btn btn-outline-dark btn-sm rounded-pill">
                        <i class="bi bi-map me-1"></i> Open in Google Maps
                    </a>
                </div>

                <div id="map" class="border"
                     data-lng="120.22435226201014"
                     data-lat="11.954076815917823"
                     data-title="Kayangan Lake, Coron"
                     data-desc="Cleanest Lake in Asia">
                </div>
            </div>

            <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
                <h4 class="fw-bold mb-4">Tour Itinerary</h4>

                <div class="timeline-container">
                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">08:00 AM – 08:30 AM</span>
                        <h5 class="fw-bold">Hotel Pickup</h5>
                        <p class="text-muted small mb-0">Pickup from hotels within Coron town proper. Transfer to the docking area for boat dispatch.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">09:00 AM – 10:30 AM</span>
                        <h5 class="fw-bold">Kayangan Lake</h5>
                        <p class="text-muted small mb-0">Trek up to the iconic viewpoint and swim in the cleanest lake in Asia with its brackish crystal-clear water.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">10:45 AM – 12:00 PM</span>
                        <h5 class="fw-bold">Twin Lagoon</h5>
                        <p class="text-muted small mb-0">Swim through a small hole or climb over a ladder to separate lagoons where salt and fresh water mix.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">12:00 PM – 01:00 PM</span>
                        <h5 class="fw-bold">Beach Picnic Lunch</h5>
                        <p class="text-muted small mb-0">Enjoy a traditional Filipino seafood buffet lunch at Beach 91 or Banol Beach.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">01:30 PM – 02:30 PM</span>
                        <h5 class="fw-bold">Skeleton Wreck</h5>
                        <p class="text-muted small mb-0">Snorkel above a sunken WWII Japanese supply ship that is now home to thousands of fish.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">03:00 PM – 04:30 PM</span>
                        <h5 class="fw-bold">Siete Pecados & CYC Beach</h5>
                        <p class="text-muted small mb-0">Final snorkeling at the Seven Sins marine park and relaxation at CYC white sand beach.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">05:00 PM</span>
                        <h5 class="fw-bold">Return to Town</h5>
                        <p class="text-muted small mb-0">Boat travel back to the port and van transfer to your hotel.</p>
                    </div>
                </div>
            </div>

            <div class="alert alert-warning border-0 shadow-sm rounded-4 d-flex" role="alert">
                <i class="bi bi-exclamation-triangle-fill fs-4 me-3"></i>
                <div>
                    <h6 class="fw-bold">Important Reminders</h6>
                    <ul class="mb-0 small ps-3">
                        <li><strong>Life Vests:</strong> Mandatory at all times while swimming in lakes and open sea.</li>
                        <li><strong>No Sunscreen in Lakes:</strong> Some areas may restrict sunscreen to protect the water ecosystem.</li>
                        <li><strong>Entrance Fees:</strong> Keep your tickets if the guide hands them to you.</li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 sticky-sidebar">
                <div class="card-body p-4">
                    <p class="text-muted fw-bold small mb-1">STARTS AT</p>
                    <div class="d-flex align-items-center mb-4">
                        <h2 class="fw-bold mb-0 tour-price currency-target" data-base-price="1800">₱1,800</h2>
                        <span class="text-muted ms-2">/ person</span>
                    </div>

                    <hr class="my-4">

                    <h6 class="fw-bold mb-3">What's Included</h6>
                    <ul class="list-unstyled list-check text-secondary">
                        <li><i class="bi bi-check-circle text-dark"></i> Hotel Pickup & Drop-off</li>
                        <li><i class="bi bi-check-circle text-dark"></i> Buffet Lunch</li>
                        <li><i class="bi bi-check-circle text-dark"></i> Tourist Boat & Life Vest</li>
                        <li><i class="bi bi-check-circle text-dark"></i> Licensed Tour Guide</li>
                        <li><i class="bi bi-check-circle text-dark"></i> All Entrance Fees</li>
                    </ul>

                    <h6 class="fw-bold mb-3 mt-4">Not Included</h6>
                    <ul class="list-unstyled list-check text-secondary">
                        <li class="opacity-75"><i class="bi bi-x-circle text-dark"></i> Eco-Fee (₱200/head)</li>
                        <li class="opacity-75"><i class="bi bi-x-circle text-dark"></i> Kayak Rental (Twin Lagoon)</li>
                        <li class="opacity-75"><i class="bi bi-x-circle text-dark"></i> Mask & Snorkel Rental</li>
                    </ul>

                    <h6 class="fw-bold mb-2 mt-4">What to bring</h6>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="badge bg-light text-dark border">Sunblock</span>
                        <span class="badge bg-light text-dark border">Aqua Shoes</span>
                        <span class="badge bg-light text-dark border">Goggles/Mask</span>
                        <span class="badge bg-light text-dark border">Towel</span>
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