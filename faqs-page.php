<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAQs - Palawander</title>

    <!-- 1. Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- 2. Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet"/>

    <!-- 3. Custom Styles -->
    <link rel="stylesheet" href="assets/styles/navbar.css">
    <link rel="stylesheet" href="assets/styles/footer.css">
    <link rel="stylesheet" href="assets/styles/faqs.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container my-5 py-5">

    <!-- Header -->
    <div class="row justify-content-center text-center mb-5">
        <div class="col-12 col-lg-8">
            <h1 class="display-5 faq-header">Frequently asked questions</h1>
            <p class="faq-subtext">
                These are the most commonly asked questions about traveling to Palawan.
            </p>
        </div>
    </div>

    <!-- Filter Buttons -->
    <div class="row justify-content-center mb-5">
        <div class="col-auto d-flex gap-2 flex-wrap justify-content-center">
            <!-- Added data-filter attributes -->
            <button class="btn faq-pill active" data-filter="general">General</button>
            <button class="btn faq-pill" data-filter="bookings">Bookings</button>
            <button class="btn faq-pill" data-filter="tours">Tours</button>
            <button class="btn faq-pill" data-filter="safety">Safety</button>
        </div>
    </div>

    <!-- Accordion List -->
    <div class="row justify-content-center">
        <div class="col-12 col-lg-9">
            <div class="accordion" id="faqAccordion">

                <div class="accordion-item" data-category="bookings">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqBookingSafety">
                            <div class="faq-icon-wrapper"><i class="bi bi-shield-lock"></i></div>
                            Is it safe to book and pay online?
                        </button>
                    </h2>
                    <div id="faqBookingSafety" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, your security is our top priority. We use industry-standard encrypted payment gateways (like PayPal or secure bank portals) to process transactions. We never store your credit card or sensitive bank details on our servers.
                        </div>
                    </div>
                </div>

                <!-- CATEGORY: BOOKINGS -->
                <div class="accordion-item" data-category="bookings">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            <div class="faq-icon-wrapper"><i class="bi bi-calendar-check"></i></div>
                            Do I need to book tours in advance?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, we highly recommend booking at least 1-2 weeks in advance, especially during peak season (December to May). Slots for popular destinations like the Underground River and Big Lagoon in El Nido are limited.
                        </div>
                    </div>
                </div>

                <!-- CATEGORY: TOURS -->
                <div class="accordion-item" data-category="tours">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                            <div class="faq-icon-wrapper"><i class="bi bi-receipt"></i></div>
                            Are environmental fees included in the price?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Most of our tour packages include the boat rental, lunch, and guide fees. However, the Eco-Tourism Development Fee (ETDF) usually needs to be paid separately in cash at the port (approx. ₱200 per person).
                        </div>
                    </div>
                </div>

                <!-- CATEGORY: BOOKINGS -->
                <div class="accordion-item" data-category="bookings">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                            <div class="faq-icon-wrapper"><i class="bi bi-cash-coin"></i></div>
                            How does billing and payment work?
                        </button>
                    </h2>
                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We require a 100% down payment to secure your slot. You can pay via GCash, Bank Transfer, or Credit Card via PayPal.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-category="general">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqGen3">
                            <div class="faq-icon-wrapper"><i class="bi bi-wifi"></i></div>
                            Is the internet connection reliable?
                        </button>
                    </h2>
                    <div id="faqGen3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Signal is generally strong in town centers, but can be spotty or non-existent while out on the islands. Smart and Globe are the main providers. We recommend downloading offline maps before your trip.
                        </div>
                    </div>
                </div>

                <!-- CATEGORY: GENERAL -->
                <div class="accordion-item" data-category="general">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                            <div class="faq-icon-wrapper"><i class="bi bi-chat-dots"></i></div>
                            How does support work during the trip?
                        </button>
                    </h2>
                    <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Our team is available 24/7. You will be given a direct contact number for our local coordinator in El Nido or Coron. If you have issues with hotel pickup or finding the boat, you can call us immediately.
                        </div>
                    </div>
                </div>

                <!-- CATEGORY: SAFETY -->
                <div class="accordion-item" data-category="safety">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                            <div class="faq-icon-wrapper"><i class="bi bi-life-preserver"></i></div>
                            Do I need to know how to swim?
                        </button>
                    </h2>
                    <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Not necessarily! All our boats are equipped with life vests, and our guides are trained swimmers who will assist you. If you are not comfortable in deep water, you can stay in shallow areas.
                        </div>
                    </div>
                </div>


                <div class="accordion-item" data-category="tours">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTourOpt3">
                            <div class="faq-icon-wrapper"><i class="bi bi-camera-video"></i></div>
                            Can I bring and fly my drone?
                        </button>
                    </h2>
                    <div id="faqTourOpt3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, you are generally allowed to fly drones on most islands to capture the beautiful scenery! However, please be mindful of other guests' privacy. Note that some protected areas (like the Underground River entrance) strictly prohibit drones.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-category="tours">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTourOpt4">
                            <div class="faq-icon-wrapper"><i class="bi bi-geo-alt"></i></div>
                            Do you offer hotel pick-up?
                        </button>
                    </h2>
                    <div id="faqTourOpt4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, we provide **free tricycle or van pick-up** for all guests staying within the town proper (poblacion). If your hotel is located in a remote area (like Nacpan or Lio Beach), we can arrange a special pick-up for an additional surcharge, or we can meet you directly at the port.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-category="tours">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTourOpt5">
                            <div class="faq-icon-wrapper"><i class="bi bi-emoji-smile"></i></div>
                            Are the tours suitable for kids or seniors?
                        </button>
                    </h2>
                    <div id="faqTourOpt5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Most island hopping tours are manageable, but please note that boarding the boat often involves walking through waist-deep water. For families with small children or seniors with limited mobility, we highly recommend booking a **calmer tour route** (like Tour A in El Nido) rather than routes with heavy swimming.
                        </div>
                    </div>
                </div>

                <!-- CATEGORY: GENERAL (New) -->
                <div class="accordion-item" data-category="general">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq10">
                            <div class="faq-icon-wrapper"><i class="bi bi-egg-fried"></i></div>
                            Is lunch provided? What if I have allergies?
                        </button>
                    </h2>
                    <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, a buffet-style picnic lunch is included in most island-hopping tours. If you have allergies or dietary restrictions (vegetarian/vegan), please inform us upon booking so we can prepare a separate meal for you.
                        </div>
                    </div>
                </div>

                <!-- CATEGORY: SAFETY (New) -->
                <div class="accordion-item" data-category="safety">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq11">
                            <div class="faq-icon-wrapper"><i class="bi bi-shield-check"></i></div>
                            Do you provide Travel Insurance?
                        </button>
                    </h2>
                    <div id="faq11" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Our standard rate includes basic boat passenger insurance. However, for comprehensive medical coverage, we strongly recommend securing your own travel insurance before flying to Palawan.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<!-- Logic for Filter Buttons -->
<script src="assets/scripts/faqs-filter.js"></script>

</body>
</html>