<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <title>Underground River Tour</title>
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
style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../assets/images/tour-card-img1.jpg');
    background-size: cover;
    background-position: center;">
    <div class="container text-center text-md-start">
        <div class="row">
            <div class="col-lg-8">
                <span class="badge bg-dark text-light mb-2 px-3 py-2 rounded-pill fw-bold"><i
                            class="bi bi-star-fill me-1"></i>4.9 Ratings</span>
                <h1 class="display-3 fw-bold">Puerto Princesa Underground River</h1>
                <p class="lead"><i class="bi bi-geo-alt-fill"></i> Sabang, Puerto Princesa City
            </div>
        </div>
    </div>
</div>


<div class="container py-5">
    <div class="row g-5">

        <div class="col-lg-8">

            <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
                <h3 class="fw-bold mb-3">Experience the World Wonder</h3>
                <p class="text-secondary lh-lg">
                    Explore one of the "New 7 Wonders of Nature" and a UNESCO World Heritage Site. This tour takes you
                    deep into a spectacular cave system featuring cathedral-like caverns and stunning limestone
                    formations. You will paddle through dark, quiet waters while listening to an audio guide explaining
                    the history and geology of this natural masterpiece.
                </p>
            </div>

            <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="fw-bold mb-0">
                        Tour Location
                    </h4>

                    <a href="https://maps.app.goo.gl/L18SiFyBBvXL9GQm8"
                       target="_blank"
                       class="btn btn-outline-dark btn-sm rounded-pill">
                        <i class="bi bi-map me-1"></i> Open in Google Maps
                    </a>
                </div>

                <div id="map" class="border"
                     data-lng="118.926065"
                     data-lat="10.199443"
                     data-title="Puerto Princesa Underground River"
                     data-desc="UNESCO World Heritage Site">
                </div>
            </div>

            <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
                <h4 class="fw-bold mb-4">Tour Itinerary</h4>

                <div class="timeline-container">
                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">06:30 AM - 07:30 AM</span>
                        <h5 class="fw-bold">Hotel Pickup</h5>
                        <p class="text-muted small mb-0">Pickup from hotels within Puerto Princesa City proper. Please
                            be ready in the lobby.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">09:00 AM</span>
                        <h5 class="fw-bold">Arrival at Sabang Wharf</h5>
                        <p class="text-muted small mb-0">Scenic drive through the countryside. Guide processes permits
                            while you enjoy the view of Sabang Beach.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">09:30 AM - 11:30 AM</span>
                        <h5 class="fw-bold">The Underground River Experience</h5>
                        <p class="text-muted small mb-0">Board a motorized boat to the park, then transfer to a paddle
                            boat to enter the massive cave system.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">12:00 PM</span>
                        <h5 class="fw-bold">Buffet Lunch</h5>
                        <p class="text-muted small mb-0">Feast on local Filipino dishes (Grilled liempo, chicken, fresh
                            fruits) at a beachside restaurant.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">01:00 PM</span>
                        <h5 class="fw-bold">Optional Side Trip</h5>
                        <p class="text-muted small mb-0">Free time at the beach or optional stop at Ugong Rock
                            Adventures.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">05:00 PM</span>
                        <h5 class="fw-bold">Hotel Drop-off</h5>
                        <p class="text-muted small mb-0">Arrive back at your accommodation in the city.</p>
                    </div>
                </div>
            </div>

            <div class="alert alert-warning border-0 shadow-sm rounded-4 d-flex" role="alert">
                <i class="bi bi-exclamation-triangle-fill fs-4 me-3"></i>
                <div>
                    <h6 class="fw-bold">Important Reminders</h6>
                    <ul class="mb-0 small ps-3">
                        <li>Strictly no talking inside the cave to protect bat populations.</li>
                        <li>Wearing of life vests and hard hats is mandatory.</li>
                        <li>Wait times may vary during peak season.</li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 sticky-sidebar">
                <div class="card-body p-4">
                    <p class="text-muted fw-bold small mb-1">STARTS AT</p>
                    <div class="d-flex align-items-center mb-4">
                        <h2 class="fw-bold mb-0 tour-price currency-target" data-base-price="2000">₱2,000</h2>
                        <span class="text-muted ms-2">/ person</span>
                    </div>

                    <hr class="my-4">

                    <h6 class="fw-bold mb-3">What's Included</h6>
                    <ul class="list-unstyled list-check text-secondary">
                        <li><i class="bi bi-check-circle text-dark"></i> Hotel Pickup & Drop-off</li>
                        <li><i class="bi bi-check-circle text-dark"></i> Buffet Lunch</li>
                        <li><i class="bi bi-check-circle text-dark"></i> Boat Transfers & Permits</li>
                        <li><i class="bi bi-check-circle text-dark"></i> Licensed Tour Guide</li>
                        <li><i class="bi bi-check-circle text-dark"></i> Audio Guide Device</li>
                    </ul>

                    <h6 class="fw-bold mb-3 mt-4">Not Included</h6>
                    <ul class="list-unstyled list-check text-secondary">
                        <li class="opacity-75"><i class="bi bi-x-circle text-dark"></i> Eco-Fee (₱150/head)</li>
                        <li class="opacity-75"><i class="bi bi-x-circle text-dark"></i> Ugong Rock Zipline</li>
                    </ul>

                    <h6 class="fw-bold mb-2 mt-4">What to bring</h6>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="badge bg-light text-dark border">Sunblock</span>
                        <span class="badge bg-light text-dark border">Aqua Shoes</span>
                        <span class="badge bg-light text-dark border">Insect Repellent</span>
                        <span class="badge bg-light text-dark border">Waterproof Bag</span>
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