<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <title>Booking | Palawander</title>

    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" rel="stylesheet"/>

    <link href="assets/styles/style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/styles/navbar.css">
    <link rel="stylesheet" href="assets/styles/footer.css">
    <link rel="stylesheet" href="assets/styles/booking.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet"/>
</head>
<body>

<?php
include 'config/secrets.php';
include 'includes/navbar.php';

$weatherKey = $openWeatherMap_apiKey ?? '';
?>

<div class="container py-5 mt-4">

    <div class="row justify-content-center mb-5">
        <div class="col-12 text-center">
            <h1 class="display-5 fw-bold">Start Your Palawan Adventure</h1>
            <p class="text-muted">Enter your trip details below to secure your spot in paradise.</p>
        </div>
    </div>

    <form action="connect.php" method="POST" enctype="multipart/form-data">
        <div class="row g-5">

            <div class="col-lg-8">

                <div class="card rounded-4 shadow-sm border-0 mb-4">
                    <div class="card-body p-4 p-lg-5">
                        <div class="d-flex align-items-center">
                            <h4 class="fw-bold mb-0">Trip Details</h4>
                        </div>
                        <hr class="my-4 border-secondary-subtle opacity-25">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-select" id="tourSelect" name="tour" required>
                                        <option value="" selected disabled>Pick your destination</option>
                                        <option value="Puerto Princesa: Underground River" data-price="2000"
                                                data-fullname="Puerto Princesa: Underground River">Puerto Princesa:
                                            Underground River (₱2,000)
                                        </option>
                                        <option value="El Nido: Island Hopping Tour" data-price="1500"
                                                data-fullname="El Nido: Island Hopping Tour">El Nido: Island Hopping
                                            Tour (₱1,500)
                                        </option>
                                        <option value="Coron: Ultimate Island Tour" data-price="1800"
                                                data-fullname="Coron: Ultimate Island Tour">Coron: Ultimate Island Tour
                                            (₱1,800)
                                        </option>
                                        <option value="San Vicente: Port Barton Hopping" data-price="1200"
                                                data-fullname="San Vicente: Port Barton Hopping">San Vicente: Port
                                            Barton (₱1,200)
                                        </option>
                                        <option value="Balabac: Island Expedition" data-price="2500"
                                                data-fullname="Balabac: Island Expedition">Balabac: Island Expedition
                                            (₱2,500)
                                        </option>
                                        <option value="Taytay: Heritage Tour" data-price="1500"
                                                data-fullname="Taytay: Heritage Tour">Taytay: Heritage Tour (₱1,500)
                                        </option>
                                    </select>
                                    <label>Select Adventure <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="travelDate" name="travel_date" required>
                                    <label>Travel Date <span class="text-danger">*</span></label>

                                    <div class="form-text form-text-indented">
                                        <small>Select your travel date. Real-time weather forecasts are available for
                                            dates within the next 5 days.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="paxCount" name="pax" value="1" min="1"
                                           max="20" required>
                                    <label>Number of Guests <span class="text-danger">*</span></label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="position-relative border rounded-3 d-flex bg-white weather-card"
                                     id="weatherWidget">

                                    <div class="d-flex align-items-center px-3 h-100">
                                        <img id="weatherIcon"
                                             src="assets/images/openweathermap_icon.png"
                                             alt="Weather"
                                             class="weather-icon">
                                    </div>

                                    <div class="d-flex flex-column justify-content-center py-2 flex-grow-1">
                                        <span class="text-muted text-uppercase fw-bold d-block mb-1 weather-label-text">
                                            Forecast
                                        </span>

                                        <div class="position-relative d-flex align-items-center weather-content-area">
                                            <span id="weatherDesc"
                                                  class="fw-bold text-dark d-none w-100 text-truncate weather-text">
                                                --
                                            </span>

                                            <div id="weatherPlaceholder"
                                                 class="placeholder-glow w-100 d-flex align-items-center">
                                                <span class="placeholder col-7 bg-secondary opacity-25 rounded-2 weather-placeholder-bar"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card rounded-4 shadow-sm border-0 mb-4">
                    <div class="card-body p-4 p-lg-5">
                        <div class="d-flex align-items-center">
                            <h4 class="fw-bold mb-0">Guest Details</h4>
                        </div>
                        <hr class="my-4 border-secondary-subtle opacity-25">

                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="firstName" name="first_name"
                                           placeholder="First Name" required>
                                    <label>First Name <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="middleName" name="middle_name"
                                           placeholder="Middle Name">
                                    <label>Middle Name</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="lastName" name="last_name"
                                           placeholder="Last Name" required>
                                    <label>Last Name <span class="text-danger">*</span></label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="dob" name="dob"
                                           placeholder="Date of Birth" required>
                                    <label>Date of Birth <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <select class="form-select" id="gender" name="gender" required>
                                        <option selected disabled value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Prefer not to say</option>
                                    </select>
                                    <label>Gender <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <select class="form-select" id="nationality" name="nationality" required>
                                        <option selected disabled value="">Select...</option>
                                        <option value="Filipino">Filipino</option>
                                        <option value="American">American</option>
                                        <option value="Chinese">Chinese</option>
                                        <option value="Korean">Korean</option>
                                        <option value="European">European</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <label>Nationality <span class="text-danger">*</span></label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                    <label>Email Address <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" name="phone" placeholder="Phone" required>
                                    <label>Mobile Number <span class="text-danger">*</span></label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="idType" name="id_type" required>
                                        <option selected disabled value="">Select Valid ID</option>
                                        <option value="Passport">Passport</option>
                                        <option value="Drivers License">Driver's License</option>
                                        <option value="National ID">National ID</option>
                                        <option value="SSS/UMID">SSS / UMID</option>
                                    </select>
                                    <label>Valid ID Type <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="file" class="form-control pt-3" id="idFile" name="id_file"
                                           accept=".jpg, .png, .jpeg, .pdf" required>
                                    <div class="form-text form-text-indented">
                                        <small>Upload ID (JPG, PNG, PDF) <span class="text-danger">*</span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card rounded-4 shadow-sm border-0 mb-4">
                    <div class="card-body p-4 p-lg-5">
                        <div class="d-flex align-items-center">
                            <h4 class="fw-bold mb-0">Logistics</h4>
                        </div>
                        <hr class="my-4 border-secondary-subtle opacity-25">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="pickup_location" placeholder="Pickup"
                                           required>
                                    <label>Pickup Hotel / Location <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="emergency_name" placeholder="Contact"
                                           required>
                                    <label>Emergency Contact Name <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="emergency_number" placeholder="Number"
                                           required>
                                    <label>Contact Number <span class="text-danger">*</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card rounded-4 shadow-sm border-0 mb-4">
                    <div class="card-body p-4 p-lg-5">
                        <div class="d-flex align-items-center">
                            <h4 class="fw-bold mb-0">Notes & Preferences</h4>
                        </div>
                        <hr class="my-4 border-secondary-subtle opacity-25">

                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="dietary_restrictions"
                                              placeholder="Dietary Restrictions" style="height: 100px"></textarea>
                                    <label>Dietary Restrictions (e.g. Vegetarian, No Seafood)</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="medical_conditions"
                                              placeholder="Medical Conditions" style="height: 100px"></textarea>
                                    <label>Medical Conditions (e.g. Motion Sickness, Asthma)</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="other_requests" placeholder="Other Requests"
                                              style="height: 100px"></textarea>
                                    <label>Other Special Requests (Optional)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card rounded-4 shadow-sm border-0 mb-4">
                    <div class="card-body p-4 p-lg-5">
                        <div class="d-flex align-items-center mb-4">
                            <h4 class="fw-bold mb-0">Payment Method <span class="text-danger">*</span></h4>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="radio" class="btn-check" name="payment" id="payCard" value="Credit Card"
                                       autocomplete="off" required checked>
                                <label class="btn btn-outline-custom w-100 h-100 rounded-4 py-4 d-flex flex-column align-items-center justify-content-center"
                                       for="payCard">
                                    <i class="bi bi-credit-card-2-front fs-2 mb-2"></i>
                                    <span class="fw-normal small">Credit Card</span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <input type="radio" class="btn-check" name="payment" id="payGcash" value="GCash/Maya"
                                       autocomplete="off">
                                <label class="btn btn-outline-custom w-100 h-100 rounded-4 py-4 d-flex flex-column align-items-center justify-content-center"
                                       for="payGcash">
                                    <i class="bi bi-qr-code-scan fs-2 mb-2"></i>
                                    <span class="fw-normal small">GCash / Maya</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <div class="form-check mb-2">
                        <input class="form-check-input border-dark" type="checkbox" name="terms" value="accepted"
                               id="termsCheck" required>
                        <label class="form-check-label small text-muted" for="termsCheck">
                            I agree to the <a href="#" class="text-dark fw-bold text-decoration-underline">Terms &
                                Conditions</a> and Cancellation Policy. <span class="text-danger">*</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input border-dark" type="checkbox" name="privacy" value="accepted"
                               id="privacyCheck" required>
                        <label class="form-check-label small text-muted" for="privacyCheck">
                            I consent to the processing of my personal data in accordance with the <a href="#"
                                                                                                      class="text-dark fw-bold text-decoration-underline">Data
                                Privacy Policy</a>. <span class="text-danger">*</span>
                        </label>
                    </div>
                </div>

            </div> <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <div class="card rounded-4 shadow-sm p-4 border-0">

                        <h5 class="fw-bold mb-4">Booking Summary</h5>

                        <div class="d-flex gap-3 align-items-start mb-4">
                            <div class="bg-light rounded-3 d-flex align-items-center justify-content-center"
                                 style="width: 50px; height: 50px; flex-shrink: 0;">
                                <i class="bi bi-geo-alt-fill text-muted fs-5"></i>
                            </div>
                            <div>
                                <span class="summary-label">Selected Adventure</span>
                                <h6 class="fw-bold mb-0 lh-base" id="summaryTourName">Select a Tour</h6>
                            </div>
                        </div>

                        <div class="row g-2 mb-4">
                            <div class="col-6">
                                <div class="summary-box">
                                    <span class="summary-label">Date</span>
                                    <div class="d-flex align-items-center mt-1">
                                        <i class="bi bi-calendar4-week me-2 text-muted small"></i>
                                        <span class="fw-bold small text-dark" id="summaryDate">--</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="summary-box">
                                    <span class="summary-label">Guests</span>
                                    <div class="d-flex align-items-center mt-1">
                                        <i class="bi bi-people me-2 text-muted small"></i>
                                        <span class="fw-bold small text-dark"><span id="summaryPax">1</span> Pax</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-dashed mb-4"></div>

                        <ul class="list-unstyled mb-4">
                            <li class="d-flex justify-content-between mb-2">
                                <span class="text-muted small">Base Rate</span>
                                <span class="fw-semibold small currency-target" id="summaryPrice"
                                      data-base-price="0">₱0</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span class="text-muted small">Ecological Fee</span>
                                <span class="text-success small fw-bold">Included</span>
                            </li>
                        </ul>

                        <div class="summary-total-box d-flex justify-content-between align-items-center mb-3">
                            <span class="small opacity-75">Total Amount</span>
                            <span class="fs-4 fw-bold currency-target" id="summaryTotal" data-base-price="0">₱0</span>
                        </div>

                        <button class="btn btn-dark w-100 rounded-pill py-3 fw-bold shadow-sm" type="submit">
                            Confirm Booking
                        </button>

                        <div class="text-center mt-3">
                            <small class="text-muted" style="font-size: 0.7rem;">
                                <i class="bi bi-shield-lock-fill me-1"></i> SSL Encrypted & Secure
                            </small>
                        </div>

                    </div>
                </div>
            </div> </div> </form>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card rounded-4 shadow-sm manage-booking-card">

                <div class="manage-booking-bg"></div>

                <div class="card-body manage-booking-content">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <h3 class="fw-bold mb-2">Manage your Booking</h3>
                            <p class="text-white-50 mb-0">
                                Enter your Booking ID (e.g., if your code is PLW-000003, enter <strong>3</strong>) to view or print your ticket.
                            </p>
                        </div>
                        <div class="col-lg-6">

                            <form action="success.php" method="GET" class="d-flex gap-2 manage-booking-form">
                                <div class="flex-grow-1 position-relative">
                                    <i class="bi bi-search manage-booking-icon"></i>

                                    <input type="text" name="id" class="form-control border-0 manage-booking-input" placeholder="Enter Booking ID Number" required>
                                </div>
                                <button type="submit" class="btn btn-outline-dark manage-booking-btn">
                                    Check Now
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include 'includes/footer.php'; ?>

<script>
    const openWeatherMap_apiKey = "<?php echo $weatherKey; ?>";
</script>

<script src="assets/scripts/currency-converter.js"></script>
<script src="assets/scripts/newsletter.js"></script>
<script src="assets/scripts/weather.js"></script>
<script src="assets/scripts/booking.js"></script>

<script
        crossorigin="anonymous"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
></script>
</body>
</html>