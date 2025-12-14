<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <title>Taytay Heritage & Island Tour</title>
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
     style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../assets/images/tour-card-img6.jpg');
    background-size: cover;
    background-position: center;">
    <div class="container text-center text-md-start">
        <div class="row">
            <div class="col-lg-8">
                <span class="badge bg-dark text-light mb-2 px-3 py-2 rounded-pill fw-bold"><i
                        class="bi bi-star-fill me-1"></i>4.6 Ratings</span>
                <h1 class="display-3 fw-bold">Fort Santa Isabel & Islands</h1>
                <p class="lead"><i class="bi bi-geo-alt-fill"></i> Taytay, Palawan
            </div>
        </div>
    </div>
</div>


<div class="container py-5">
    <div class="row g-5">

        <div class="col-lg-8">

            <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
                <h3 class="fw-bold mb-3">History Meets Paradise</h3>
                <p class="text-secondary lh-lg">
                    Discover the rich history of Palawan's former capital by visiting the 17th-century Spanish fortress,
                    Fuerza de Santa Isabel. After exploring the ancient coral-stone walls and museum, board a boat to
                    explore Taytay's hidden gems: the hidden lagoons of Elephant Island and the vibrant marine life of
                    the Coral Garden. It is a unique blend of culture and nature.
                </p>
            </div>

            <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="fw-bold mb-0">
                        Tour Location
                    </h4>

                    <a href="https://maps.app.goo.gl/BoBt3WA765pbtPvi7"
                       target="_blank"
                       class="btn btn-outline-dark btn-sm rounded-pill">
                        <i class="bi bi-map me-1"></i> Open in Google Maps
                    </a>
                </div>

                <div id="map" class="border"
                     data-lng="119.51773656908402"
                     data-lat="10.828624194066485"
                     data-title="Fort Santa Isabel"
                     data-desc="Taytay, Palawan">
                </div>
            </div>

            <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
                <h4 class="fw-bold mb-4">Tour Itinerary</h4>

                <div class="timeline-container">
                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">08:00 AM – 08:30 AM</span>
                        <h5 class="fw-bold">Pickup & Registration</h5>
                        <p class="text-muted small mb-0">Tricycle pickup from your lodge in Taytay town proper. Proceed
                            to the Tourism Office for registration.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">08:30 AM – 09:30 AM</span>
                        <h5 class="fw-bold">Fort Santa Isabel Tour</h5>
                        <p class="text-muted small mb-0">Walk through the historic chapel, museum, and bastions of the
                            old Spanish fort overlooking the bay.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">10:00 AM – 11:30 AM</span>
                        <h5 class="fw-bold">Elephant Island (Dinaot)</h5>
                        <p class="text-muted small mb-0">Island hopping begins! Visit the famous Elephant Island and
                            swim in its hidden blue lagoon.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">12:00 PM – 01:00 PM</span>
                        <h5 class="fw-bold">Picnic Lunch</h5>
                        <p class="text-muted small mb-0">Enjoy a grilled lunch (seafood and meat) on a white sand beach
                            (usually Isla Blanca or Nabat).</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">01:30 PM – 02:30 PM</span>
                        <h5 class="fw-bold">Coral Garden Snorkeling</h5>
                        <p class="text-muted small mb-0">Snorkel in Taytay’s protected marine sanctuary known for its
                            giant clams and colorful reefs.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <span class="badge bg-light tour-time border mb-2">03:30 PM</span>
                        <h5 class="fw-bold">Back to Town</h5>
                        <p class="text-muted small mb-0">Return to the mainland pier and transfer back to your
                            accommodation.</p>
                    </div>
                </div>
            </div>

            <div class="alert alert-warning border-0 shadow-sm rounded-4 d-flex" role="alert">
                <i class="bi bi-exclamation-triangle-fill fs-4 me-3"></i>
                <div>
                    <h6 class="fw-bold">Important Reminders</h6>
                    <ul class="mb-0 small ps-3">
                        <li><strong>Respect Heritage:</strong> Do not vandalize or climb restricted walls at the Fort.
                        </li>
                        <li><strong>Low Tide:</strong> Isla Blanca (sandbar) is best viewed during low tide; itinerary
                            may adjust accordingly.
                        </li>
                        <li><strong>Cash Only:</strong> Most establishments in Taytay only accept cash.</li>
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
                        <li><i class="bi bi-check-circle text-dark"></i> Fort Santa Isabel Entrance Fee</li>
                        <li><i class="bi bi-check-circle text-dark"></i> Tourist Boat Transfers</li>
                        <li><i class="bi bi-check-circle text-dark"></i> Picnic Lunch</li>
                        <li><i class="bi bi-check-circle text-dark"></i> Licensed Tour Guide</li>
                        <li><i class="bi bi-check-circle text-dark"></i> Life Vest</li>
                    </ul>

                    <h6 class="fw-bold mb-3 mt-4">Not Included</h6>
                    <ul class="list-unstyled list-check text-secondary">
                        <li class="opacity-75"><i class="bi bi-x-circle text-dark"></i> Eco-Tourism Fee (₱50)</li>
                        <li class="opacity-75"><i class="bi bi-x-circle text-dark"></i> Snorkel Gear Rental</li>
                    </ul>

                    <h6 class="fw-bold mb-2 mt-4">What to bring</h6>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="badge bg-light text-dark border">Sun Hat</span>
                        <span class="badge bg-light text-dark border">Swimwear</span>
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