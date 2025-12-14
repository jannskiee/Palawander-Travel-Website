<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <title>Balabac Expedition</title>
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
     style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../assets/images/tour-card-img5.jpg');
    background-size: cover;
    background-position: center;">
    <div class="container text-center text-md-start">
        <div class="row">
            <div class="col-lg-8">
                <span class="badge bg-dark text-light mb-2 px-3 py-2 rounded-pill fw-bold"><i
                        class="bi bi-star-fill me-1"></i>4.7 Ratings</span>
                <h1 class="display-3 fw-bold">Balabac Expedition</h1>
                <p class="lead"><i class="bi bi-geo-alt-fill"></i> Balabac, Palawan
            </div>
        </div>
    </div>
</div>


<div class="container py-5">
    <div class="row g-5">

        <div class="col-lg-8">

            <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
                <h3 class="fw-bold mb-3">The Last Frontier of Paradise</h3>
                <p class="text-secondary lh-lg">
                    Experience the raw, untouched beauty of Balabac, often called the "Maldives of the Philippines."
                    This expedition takes you to the southernmost tip of Palawan to walk on the finest white sand
                    beaches, swim in blindingly turquoise waters, and visit the iconic Onuk Island. It is a journey for
                    true adventurers seeking paradise away from civilization.
                </p>
            </div>

            <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="fw-bold mb-0">
                        Tour Location
                    </h4>

                    <a href="https://maps.app.goo.gl/YzD5jucAFPDKkrD67"
                       target="_blank"
                       class="btn btn-outline-dark btn-sm rounded-pill">
                        <i class="bi bi-map me-1"></i> Open in Google Maps
                    </a>
                </div>

                <div id="map" class="border"
                     data-lng="117.21057420955226"
                     data-lat="8.01682123567733"
                     data-title="Onuk Island, Balabac"
                     data-desc="The Last Frontier">
                </div>
            </div>

            <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
                <h4 class="fw-bold mb-4">Tour Itinerary</h4>

                <div class="timeline-container">
                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">07:00 AM – 08:00 AM</span>
                        <h5 class="fw-bold">Assembly at Buliluyan Port</h5>
                        <p class="text-muted small mb-0">Meet up at the southernmost port of mainland Palawan. Coast
                            Guard clearance and boat dispatch.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">09:00 AM – 11:00 AM</span>
                        <h5 class="fw-bold">Onuk Island</h5>
                        <p class="text-muted small mb-0">The icon of Balabac. Snorkel in the shallow house reef and take
                            photos on the famous wooden boardwalk.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">11:30 AM – 12:30 PM</span>
                        <h5 class="fw-bold">Mansalangan Sandbar</h5>
                        <p class="text-muted small mb-0">A massive stretch of white sand appearing in the middle of the
                            ocean during low tide.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">12:30 PM – 01:30 PM</span>
                        <h5 class="fw-bold">Seafood Lunch</h5>
                        <p class="text-muted small mb-0">Enjoy a fresh seafood feast (crabs, fish, squid) prepared by
                            the locals on Candaraman Island.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">02:00 PM – 03:30 PM</span>
                        <h5 class="fw-bold">Punta Sebaring (Bugsuk)</h5>
                        <p class="text-muted small mb-0">Relax on the finest, powder-like white sand in the Philippines.
                            The pine trees here offer a unique tropical vibe.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">05:00 PM</span>
                        <h5 class="fw-bold">Return to Port</h5>
                        <p class="text-muted small mb-0">Boat ride back to Buliluyan Port before sunset.</p>
                    </div>
                </div>
            </div>

            <div class="alert alert-warning border-0 shadow-sm rounded-4 d-flex" role="alert">
                <i class="bi bi-exclamation-triangle-fill fs-4 me-3"></i>
                <div>
                    <h6 class="fw-bold">Important Reminders</h6>
                    <ul class="mb-0 small ps-3">
                        <li><strong>Sand Flies (Nik-nik):</strong> Insect repellent is MANDATORY. Balabac is famous for
                            biting sand flies.
                        </li>
                        <li><strong>Limited Signal:</strong> Expect zero to weak cellular signal in most islands.</li>
                        <li><strong>Travel Time:</strong> Boat rides between islands can be long (1-2 hours).</li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 sticky-sidebar">
                <div class="card-body p-4">
                    <p class="text-muted fw-bold small mb-1">STARTS AT</p>
                    <div class="d-flex align-items-center mb-4">
                        <h2 class="fw-bold mb-0 tour-price currency-target" data-base-price="2500">₱2,500</h2>
                        <span class="text-muted ms-2">/ person</span>
                    </div>

                    <hr class="my-4">

                    <h6 class="fw-bold mb-3">What's Included</h6>
                    <ul class="list-unstyled list-check text-secondary">
                        <li><i class="bi bi-check-circle text-dark"></i> Boat Transfers (Island Hopping)</li>
                        <li><i class="bi bi-check-circle text-dark"></i> Seafood Lunch</li>
                        <li><i class="bi bi-check-circle text-dark"></i> Entrance Fees (Onuk/Sebaring)</li>
                        <li><i class="bi bi-check-circle text-dark"></i> Licensed Tour Guide</li>
                        <li><i class="bi bi-check-circle text-dark"></i> Life Vest</li>
                    </ul>

                    <h6 class="fw-bold mb-3 mt-4">Not Included</h6>
                    <ul class="list-unstyled list-check text-secondary">
                        <li class="opacity-75"><i class="bi bi-x-circle text-dark"></i> Van Transfer from Puerto
                            Princesa
                        </li>
                        <li class="opacity-75"><i class="bi bi-x-circle text-dark"></i> Environmental Fees</li>
                    </ul>

                    <h6 class="fw-bold mb-2 mt-4">What to bring</h6>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="badge bg-light text-dark border">Insect Repellent</span>
                        <span class="badge bg-light text-dark border">Malong/Sarong</span>
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