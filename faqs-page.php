<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAQs | Palawander</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet"/>

    <link rel="stylesheet" href="assets/styles/navbar.css">
    <link rel="stylesheet" href="assets/styles/footer.css">
    <link rel="stylesheet" href="assets/styles/faqs.css">
</head>
<body>

<?php include 'includes/navbar.php'; ?>

<div class="container my-5 py-5">

    <div class="row justify-content-center text-center mb-5">
        <div class="col-12 col-lg-8">
            <h1 class="display-5 faq-header">Frequently Asked Questions</h1>
            <p class="faq-subtext">
                Everything you need to know about booking your Palawan adventure with us.
            </p>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-auto d-flex gap-2 flex-wrap justify-content-center">
            <button class="btn faq-pill active" data-filter="general">General</button>
            <button class="btn faq-pill" data-filter="bookings">Bookings</button>
            <button class="btn faq-pill" data-filter="tours">Tours</button>
            <button class="btn faq-pill" data-filter="safety">Safety</button>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-lg-9">
            <div class="accordion" id="faqAccordion">

                <div class="accordion-item" data-category="general">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqGen1">
                            <div class="faq-icon-wrapper"><i class="bi bi-geo-alt"></i></div>
                            Which destinations do you cover?
                        </button>
                    </h2>
                    <div id="faqGen1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We currently offer premium tours across Palawan's top spots: <strong>Puerto
                                Princesa</strong> (Underground River), <strong>El Nido</strong> (Island Hopping Tour A),
                            <strong>Coron</strong> (Ultimate Tour), <strong>San Vicente</strong> (Port Barton), <strong>Balabac</strong>
                            (Island Expedition), and <strong>Taytay</strong> (Heritage Tour).
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-category="bookings">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqBook1">
                            <div class="faq-icon-wrapper"><i class="bi bi-wallet2"></i></div>
                            What payment methods do you accept?
                        </button>
                    </h2>
                    <div id="faqBook1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We accept major <strong>Credit Cards</strong> and local e-wallets including
                            <strong>GCash</strong> and <strong>Maya</strong>. All payments are processed securely online
                            at the time of booking.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-category="bookings">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqBook2">
                            <div class="faq-icon-wrapper"><i class="bi bi-person-badge"></i></div>
                            Why do I need to upload an ID?
                        </button>
                    </h2>
                    <div id="faqBook2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            To comply with Philippine Coast Guard and local tourism regulations, we are required to
                            submit a passenger manifest before departure. We accept Passports, Driver's Licenses,
                            National IDs, or SSS/UMID cards.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-category="tours">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqTour1">
                            <div class="faq-icon-wrapper"><i class="bi bi-ticket-perforated"></i></div>
                            Are Ecological Fees included?
                        </button>
                    </h2>
                    <div id="faqTour1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <strong>Yes!</strong> Unlike many other agencies, Palawander includes the mandatory
                            Ecological Fee in your total booking price. You won't need to line up or pay extra cash at
                            the port.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-category="tours">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqTour2">
                            <div class="faq-icon-wrapper"><i class="bi bi-cloud-sun"></i></div>
                            What happens if the weather is bad?
                        </button>
                    </h2>
                    <div id="faqTour2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We monitor the weather daily using our real-time forecast system. If the Coast Guard cancels
                            tours due to a typhoon or rough seas, you are entitled to a full refund or a free
                            reschedule. You can check the 5-day forecast directly on our Booking page.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-category="safety">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqSafe1">
                            <div class="faq-icon-wrapper"><i class="bi bi-life-preserver"></i></div>
                            Do I need to know how to swim?
                        </button>
                    </h2>
                    <div id="faqSafe1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Not necessarily! All our boats are equipped with life vests, and our guides are trained
                            swimmers who will assist you. For non-swimmers, we recommend staying in shallow areas or
                            enjoying the view from the boat.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-category="tours">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqTour3">
                            <div class="faq-icon-wrapper"><i class="bi bi-bus-front"></i></div>
                            Is hotel pickup included?
                        </button>
                    </h2>
                    <div id="faqTour3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, we provide pickup services for guests staying within the town proper of your tour
                            destination. Please ensure you enter your specific <strong>Pickup Hotel / Location</strong>
                            correctly in the booking form so our driver can find you.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-category="general">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqGen2">
                            <div class="faq-icon-wrapper"><i class="bi bi-egg-fried"></i></div>
                            Is lunch provided? What if I have allergies?
                        </button>
                    </h2>
                    <div id="faqGen2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, a picnic-style buffet lunch is included in most island-hopping tours (El Nido, Coron,
                            Balabac). If you have dietary restrictions or medical conditions, please list them in the
                            <strong>"Notes & Preferences"</strong> section when you book so we can prepare accordingly.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="assets/scripts/faqs-filter.js"></script>

</body>
</html>