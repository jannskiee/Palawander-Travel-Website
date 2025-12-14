<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Coron Blog</title>
    <link rel="stylesheet" href="../assets/styles/palawander-blog.css">
    <link rel="stylesheet" href="../assets/styles/navbar.css">
    <link rel="stylesheet" href="../assets/styles/footer.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
            rel="stylesheet"
    />
</head>
<body>

<?php
include '../config/secrets.php';
include '../includes/navbar.php';
?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8">

            <div class="mb-4">
                <img
                        src="../assets/images/blog-coron.jpg"
                        class="img-fluid rounded shadow-sm w-100"
                        alt="Scenery of El Nido, Palawan"
                >
            </div>

            <h1 class="display-5 fw-bold mb-4 text-center">Coron Shipwrecks and Sky-High Views</h1>

            <article class="blog-text">
                <p class="lead mb-4 text-muted text-center">
                    <em>Where crystal-clear lakes hide history beneath the waves.</em>
                </p>

                <p>
                    Coron hits you in two ways—above the water and below. On land, it’s rustic and simple, but once you step into the sea, the island reveals its true treasures. I started my journey at Mt. Tapyas, climbing more than 700 steps just before sunrise. Every step was a battle against my laziness, but the view from the top was the kind of reward that makes you forget the burn in your legs—Coron laid out like a painting: islands floating in sapphire water, boats leaving white trails behind them, and the sky breaking open into gold.
                </p>

                <p>
                    The next morning, I finally understood why Coron is a diver’s paradise. The moment I descended into the depths, I was face to face with history frozen in saltwater. The skeleton of a massive WWII Japanese warship appeared through the haze—rusting metal now taken over by vibrant corals and reef fish. Swimming through its hallways felt like exploring underwater ruins, eerie yet alive with color and movement.
                </p>

                <p>
                    For non-divers, there’s still so much to witness. Kayangan Lake, often named the cleanest lake in the Philippines, is as magical as the photos—crystal water where you can see straight to the bottom, surrounded by cliffs carved by centuries of rain and wind. Barracuda Lake is even stranger—warm and cold layers of water mixing in ways that make you feel like you’re swimming through invisible shifts in time.
                </p>

                <p>
                    What sets Coron apart is the sense of discovery. Every stop is like unwrapping a new secret. Every lagoon, every reef, every moment in the water reminds you that beauty can take many forms—wrecked, forgotten, untouched, or wild—and still leave you breathless.
                </p>
            </article>

            <div class="text-center mt-5">
                <a href="../index.php" class="btn btn-outline-primary rounded-pill px-4 blog-btn"><i class="bi bi-arrow-left"></i> Back to Home</a>
            </div>

        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>

<script>
    const currencyProxyPath = "../api/currency-proxy.php";
    const newsletterPath = "../api/send-email-newsletter.php";
</script>

<script src="../assets/scripts/currency-converter.js"></script>
<script src="../assets/scripts/newsletter.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>