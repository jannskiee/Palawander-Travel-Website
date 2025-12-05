<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta content="width=device-width, initial-scale=1" name="viewport" />
		<title>Bootstrap demo</title>
		<link
			crossorigin="anonymous"
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
			integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
			rel="stylesheet"
		/>
		<link href="assets/styles/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/styles/navbar.css">
        <link rel="stylesheet" href="assets/styles/footer.css">
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
			rel="stylesheet"
		/>
	</head>
	<body>
        <?php include 'navbar.php'; ?>

		<section class="first-section position-relative" id="home">
			<div class="container-fluid h-100">
				<div class="row h-100">
					<!-- Carousel wrapper -->
					<div class="col-12 h-100 position-relative p-0">
						<div
							id="carouselExampleIndicators"
							class="carousel slide carousel-fade h-100 rounded-4 overflow-hidden"
							data-bs-ride="carousel"
						>
							<!-- Indicators -->
							<div class="carousel-indicators">
								<button
									type="button"
									data-bs-target="#carouselExampleIndicators"
									data-bs-slide-to="0"
									class="active"
									aria-current="true"
									aria-label="Slide 1"
								></button>
								<button
									type="button"
									data-bs-target="#carouselExampleIndicators"
									data-bs-slide-to="1"
									aria-label="Slide 2"
								></button>
								<button
									type="button"
									data-bs-target="#carouselExampleIndicators"
									data-bs-slide-to="2"
									aria-label="Slide 3"
								></button>
							</div>

							<!-- Slides -->
							<div class="carousel-inner h-100">
								<div
									class="carousel-item active h-100"
									data-bs-interval="2000"
								>
									<img
										src="assets/images/crsl_image1.jpg"
										class="d-block w-100 h-100"
										alt="..."
									/>
									<div class="overlay"></div>
								</div>
								<div
									class="carousel-item h-100"
									data-bs-interval="3000"
								>
									<img
										src="assets/images/crsl_image2.jpg"
										class="d-block w-100 h-100"
										alt="..."
									/>
									<div class="overlay"></div>
								</div>
								<div
									class="carousel-item h-100"
									data-bs-interval="3000"
								>
									<img
										src="assets/images/crsl_image3.jpg"
										class="d-block w-100 h-100"
										alt="..."
									/>
									<div class="overlay"></div>
								</div>
							</div>
						</div>

						<!-- Carousel text -->
						<div class="carousel-fixed-text text-center">
							<h1 class="crsl-h1">
								Discover the Hidden Gems of Palawan
							</h1>
							<p class="crsl-p">
								A place where nature and adventure unite
							</p>
							<button
								class="btn btn-outline-dark btn-lg icon-toggle crsl-btn"
								type="button"
							>
								Book Now
								<i class="bi bi-calendar normal-icon ms-2"></i>
								<i
									class="bi bi-calendar-check hover-icon ms-2"
								></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</section>





		<div class="container my-5" id="our-tours">
			<div class="row justify-content-center text-center">
				<div class="col-12">
					<h1 class="tours-h1">Top values for you</h1>
					<p class="tours-p">
						Try variety of benefits when using our services
					</p>
				</div>
			</div>

			<div class="row mt-4 justify-content-center text-center">
				<div class="col-6 col-md-3 mb-3">
					<i class="bi bi-send fs-5 circle-icon"></i>
					<h5 class="tours-h5">Airport pickup</h5>
					<p class="tours-h5-p">
						We provide escort form the airport to the hotel
					</p>
				</div>
				<div class="col-6 col-md-3 mb-3">
					<i class="bi bi-calendar4-week fs-5 circle-icon"></i>
					<h5 class="tours-h5">Easy booking</h5>
					<p class="tours-h5-p">
						Quick and easy booking of tour for upcoming dates
					</p>
				</div>
				<div class="col-6 col-md-3 mb-3">
					<i class="bi bi-people fs-5 circle-icon"></i>
					<h5 class="tours-h5">Best tour guide</h5>
					<p class="tours-h5-p">
						Our best tour guide is ready to guide your trip
					</p>
				</div>
				<div class="col-6 col-md-3 mb-3">
					<i class="bi bi-percent fs-5 circle-icon"></i>
					<h5 class="tours-h5">Lots of promos</h5>
					<p class="tours-h5-p">
						Various promotions and drawings of tours
					</p>
				</div>
			</div>
		</div>


        <div class="container-fluid px-0 position-relative" id="tour">

            <div class="container-fluid px-3 px-md-5 mb-4">
                <div class="row">
                    <div class="col-12">
                        <h1 class="tours-h1">Choose your tour</h1>
                    </div>
                </div>
            </div>

            <div class="tour-carousel-wrapper position-relative">

                <button class="scroll-arrow scroll-left d-none d-sm-flex" id="scrollLeftBtn">
                    <i class="bi bi-chevron-left"></i>
                </button>

                <div class="tours-scroll-container" id="tourContainer">

                    <div class="tour-card-fixed">
                        <div class="card h-100 rounded-4 card-price card-tour">
                            <img src="assets/images/tour-card-img-1.jpg" class="card-img-top rounded-4 img-price" alt="...">
                            <div class="rating-badge">4.7<i class="bi bi-star-fill"></i></div>
                            <div class="card-body">
                                <p class="rounded-2 card-round">PUERTO PRINCESA</p>
                                <h5 class="card-title">Underground River Tour</h5>
                                <p class="card-text">Paddle through a world-famous underground cave system filled with stunning rock formations.</p>
                                <div class="price-container">
                                    <p class="price-text">STARTS AT</p>
                                    <p class="price-tag">₱2,000</p>
                                </div>
                            </div>
                            <button type="button" class="btn btn-outline-dark rounded-circle card-btn">
                                <i class="bi bi-arrow-right fs-4"></i>
                            </button>
                        </div>
                    </div>

                    <div class="tour-card-fixed">
                        <div class="card h-100 rounded-4 card-price card-tour">
                            <img src="assets/images/tour-card-img2.jpg" class="card-img-top rounded-4 img-price" alt="...">
                            <div class="rating-badge">5.0<i class="bi bi-star-fill"></i></div>
                            <div class="card-body">
                                <p class="rounded-2 card-round">EL NIDO</p>
                                <h5 class="card-title">Island Hopping Tour</h5>
                                <p class="card-text">Explore lagoons, beaches, and limestone cliffs — including the iconic Big Lagoon.</p>
                                <div class="price-container">
                                    <p class="price-text">STARTS AT</p>
                                    <p class="price-tag">₱1,500</p>
                                </div>
                            </div>
                            <button type="button" class="btn btn-outline-dark rounded-circle card-btn">
                                <i class="bi bi-arrow-right fs-4"></i>
                            </button>
                        </div>
                    </div>

                    <div class="tour-card-fixed">
                        <div class="card h-100 rounded-4 card-price card-tour">
                            <img src="assets/images/tour-card-img3.jpg" class="card-img-top rounded-4 img-price" alt="...">
                            <div class="rating-badge">4.8<i class="bi bi-star-fill"></i></div>
                            <div class="card-body">
                                <p class="rounded-2 card-round">CORON</p>
                                <h5 class="card-title">Ultimate Island Tour</h5>
                                <p class="card-text">Swim in crystal-clear lakes, snorkel WWII shipwrecks, and relax on white-sand beaches.</p>
                                <div class="price-container">
                                    <p class="price-text">STARTS AT</p>
                                    <p class="price-tag">₱1,800</p>
                                </div>
                            </div>
                            <button type="button" class="btn btn-outline-dark rounded-circle card-btn">
                                <i class="bi bi-arrow-right fs-4"></i>
                            </button>
                        </div>
                    </div>

                    <div class="tour-card-fixed">
                        <div class="card h-100 rounded-4 card-price card-tour">
                            <img src="assets/images/tour-card-img4.jpg" class="card-img-top rounded-4 img-price" alt="...">
                            <div class="rating-badge">4.7<i class="bi bi-star-fill"></i></div>
                            <div class="card-body">
                                <p class="rounded-2 card-round">SAN VICENTE</p>
                                <h5 class="card-title">Port Barton Hopping</h5>
                                <p class="card-text">Visit remote islands, vibrant coral reefs, and turtle sanctuaries around peaceful Port Barton.</p>
                                <div class="price-container">
                                    <p class="price-text">STARTS AT</p>
                                    <p class="price-tag">₱1,200</p>
                                </div>
                            </div>
                            <button type="button" class="btn btn-outline-dark rounded-circle card-btn">
                                <i class="bi bi-arrow-right fs-4"></i>
                            </button>
                        </div>
                    </div>

                    <div class="tour-card-fixed">
                        <div class="card h-100 rounded-4 card-price card-tour">
                            <img src="assets/images/tour-card-img5.jpg" class="card-img-top rounded-4 img-price" alt="...">
                            <div class="rating-badge">4.7<i class="bi bi-star-fill"></i></div>
                            <div class="card-body">
                                <p class="rounded-2 card-round">BALABAC</p>
                                <h5 class="card-title">Balabac Expedition</h5>
                                <p class="card-text">Hop across pristine islands and sandbars with turquoise waters.</p>
                                <div class="price-container">
                                    <p class="price-text">STARTS AT</p>
                                    <p class="price-tag">₱2,500</p>
                                </div>
                            </div>
                            <button type="button" class="btn btn-outline-dark rounded-circle card-btn">
                                <i class="bi bi-arrow-right fs-4"></i>
                            </button>
                        </div>
                    </div>

                    <div class="tour-card-fixed">
                        <div class="card h-100 rounded-4 card-price card-tour">
                            <img src="assets/images/tour-card-img6.jpg" class="card-img-top rounded-4 img-price" alt="...">
                            <div class="rating-badge">4.6<i class="bi bi-star-fill"></i></div>
                            <div class="card-body">
                                <p class="rounded-2 card-round">TAYTAY</p>
                                <h5 class="card-title">Fort Santa Isabel</h5>
                                <p class="card-text">Discover Taytay’s 17th-century Spanish fort, then sail to nearby islands.</p>
                                <div class="price-container">
                                    <p class="price-text">STARTS AT</p>
                                    <p class="price-tag">₱1,500</p>
                                </div>
                            </div>
                            <button type="button" class="btn btn-outline-dark rounded-circle card-btn">
                                <i class="bi bi-arrow-right fs-4"></i>
                            </button>
                        </div>
                    </div>

                    <div style="min-width: 20px;"></div>

                </div> <button class="scroll-arrow scroll-right d-none d-sm-flex" id="scrollRightBtn">
                    <i class="bi bi-chevron-right"></i>
                </button>

            </div>
        </div>

		<div class="container-fluid py-5 px-5" id="blogs">
			<div class="row">
				<!-- Left Column: Title -->
				<div class="col-12 col-md-6 mb-4">
					<h1 class="blogs-h5">Palawan Adventure Blogs</h1>
					<p class="blogs-p">
						Discover Palawan, one story at a time.
					</p>
				</div>

				<!-- Right Column: Description and Button -->
				<div class="col-12 col-md-6 mb-4">
					<p class="blogs-p">
						Explore captivating stories, travel tips, and
						unforgettable adventures from fellow travelers as they
						journey through the pristine beaches, lush landscapes,
						and hidden gems of Palawan, offering you inspiration,
						guidance, and a glimpse of the vibrant local culture and
						breathtaking natural beauty this paradise has to offer.
					</p>
					<a
						class="btn btn-outline-primary rounded-pill rd-al-artcls my-4"
						href="#cards-blogs"
					>
						Read all articles
					</a>
				</div>
			</div>

			<!-- Exactly 2 cards per row -->
			<div class="row row-cols-1 row-cols-md-2 g-4" id="cards-blogs">
				<!-- Card 1 -->
				<div class="col">
					<div class="card h-100 rounded-4 card-price card-blog">
						<img
							alt="..."
							class="card-img-top rounded-4 img-price"
							src="assets/images/blog-elnido.jpg"
						/>
						<div class="rating-badge">
							<i class="bi bi-clock"></i> 4 min read
						</div>
						<div class="card-body">
							<h5 class="card-title">
								Chasing Sunlight in El Nido
							</h5>
							<p>
								There’s a reason travelers call El Nido the
								crown jewel of Palawan. With towering limestone
								cliffs, hidden lagoons, and beaches that feel
								untouched by time, every corner feels like
								stepping into a postcard. My journey here was
								more than sightseeing—it was a dance with
								nature, adventure, and moments of pure awe.
							</p>
							<p class="rounded-2 card-round">EL NIDO</p>
							<p class="rounded-2 card-round">LAGOON</p>
							<p class="rounded-2 card-round">PARADISE</p>
							<p class="rounded-2 card-round">ADVENTURE</p>
						</div>
						<a
							class="btn btn-outline-primary rounded-pill rd-al-artcls blog-btn my-4"
							type="button"
							href="el-nido-blog.php"
							target="_blank"
						>
							Read more <i class="bi bi-arrow-right fs-4"></i>
						</a>
					</div>
				</div>

				<!-- Card 2 -->
				<div class="col">
					<div class="card h-100 rounded-4 card-price card-blog">
						<img
							alt="..."
							class="card-img-top rounded-4 img-price"
							src="assets/images/blog-coron.jpg"
						/>
						<div class="rating-badge">
							<i class="bi bi-clock"></i> 4 min read
						</div>
						<div class="card-body">
							<h5 class="card-title">
								Coron Shipwrecks and Sky-High Views
							</h5>
							<p>
								Coron is a destination that surprises you both
								above and below the water. From breathtaking
								mountain vistas to eerie underwater shipwrecks
								teeming with life, this island has a dual
								personality that keeps every traveler on their
								toes. My experience was a mix of adrenaline,
								wonder, and quiet reflection, and it all started
								at sunrise atop Mt. Tapyas.
							</p>
							<p class="rounded-2 card-round">CORON</p>
							<p class="rounded-2 card-round">SHIPWRECK</p>
							<p class="rounded-2 card-round">DIVING</p>
							<p class="rounded-2 card-round">KAYANGAN</p>
							<p class="rounded-2 card-round">HISTORY</p>
						</div>
						<a
							class="btn btn-outline-primary rounded-pill rd-al-artcls blog-btn my-4"
							type="button"
							href="coron-blog.php"
							target="_blank"
						>
							Read more <i class="bi bi-arrow-right fs-4"></i>
						</a>
					</div>
				</div>

				<!-- Card 3 -->
				<div class="col">
					<div class="card h-100 rounded-4 card-price card-blog">
						<img
							alt="..."
							class="card-img-top rounded-4 img-price"
							src="assets/images/blog-puerto-princesa.jpg"
						/>
						<div class="rating-badge">
							<i class="bi bi-clock"></i> 4 min read
						</div>
						<div class="card-body">
							<h5 class="card-title">
								Puerto Princesa Underground Into the Heart of
								the Earth
							</h5>
							<p>
								Deep in Palawan lies a world carved over
								millions of years—Puerto Princesa’s underground
								river. Entering its shadowy caverns feels like
								stepping back in time, surrounded by rock
								formations that defy imagination. Beyond the
								river, the city offers quiet beaches, glowing
								mangroves, and experiences that connect you to
								nature in ways modern life often forgets.
							</p>
							<p class="rounded-2 card-round">PUERTO PRINCESA</p>
							<p class="rounded-2 card-round">CAVE</p>
							<p class="rounded-2 card-round">NATURE</p>
						</div>

						<a
							class="btn btn-outline-primary rounded-pill rd-al-artcls blog-btn my-4"
							type="button"
							href="puerto-princesa-blog.php"
							target="_blank"
						>
							Read more <i class="bi bi-arrow-right fs-4"></i>
						</a>
					</div>
				</div>

				<!-- Card 4 -->
				<div class="col">
					<div class="card h-100 rounded-4 card-price card-blog">
						<img
							alt="..."
							class="card-img-top rounded-4 img-price"
							src="assets/images/blog-balabac.jpg"
						/>
						<div class="rating-badge">
							<i class="bi bi-clock"></i> 5 min read
						</div>
						<div class="card-body">
							<h5 class="card-title">
								The Last Frontier of Paradise
							</h5>
							<p>
								Balabac is where adventure meets raw, untouched
								beauty. Far from tourist crowds, this remote
								archipelago offers sandbars, pink beaches, and
								turquoise waters that seem almost unreal.
								Visiting Balabac isn’t just a trip—it’s a
								journey that challenges you, surprises you, and
								rewards you with moments of pure paradise.
							</p>
							<p class="rounded-2 card-round">BALABAC</p>
							<p class="rounded-2 card-round">WILDERNESS</p>
						</div>
						<a
							class="btn btn-outline-primary rounded-pill rd-al-artcls blog-btn my-4"
							type="button"
							href="balabac-blog.php"
							target="_blank"
						>
							Read more <i class="bi bi-arrow-right fs-4"></i>
						</a>
					</div>
				</div>
			</div>
		</div>



















		<div class="container-fluid px-5 pt-3 pb-5">
			<div class="row text-center pb-3z">
				<div class="col-12 mb-4 text-center">
					<h1 class="tours-h1">What people says</h1>
					<p class="testimonial-p">Hear from our travelers who experienced the beauty and adventure of Palawan. Their stories and feedback show what makes this paradise truly unforgettable.</p>

				</div>
			</div>

			<!-- Row for the cards -->
			<div class="row g-4 justify-content-center">
				<div class="marquee-container">
					<div class="marquee-track-first">

						<!-- ===== ORIGINAL 5 LANDSCAPE CARDS ===== -->

						<div class="card-item">
							<div class="card testimonial-card position-relative">
								<div class="card-body marquee-first">

                                    <div class="stars">
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
                                    </div>

									<p class="card-text mt-2">
										“I had an amazing time exploring Palawan. Everything felt calm and refreshing. I would definitely come back again.”
									</p>

									<div class="profile-section d-flex align-items-center">
										<img src="assets/images/profile_img/profile-pic-sam.jpg" class="profile-img" alt="Profile" />
										<div class="ms-2 profile-text">
											<h6 class="mb-0 fw-bold">Samantha Alamo</h6>
											<p class="mb-0 text-muted profile-role">Travel Vlogger</p>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="card-item">
							<div class="card testimonial-card position-relative">
								<div class="card-body marquee-first">

                                    <div class="stars">
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-half fs-5 text-warning"></i>
                                    </div>

									<p class="card-text mt-2">
										“The trip was very organized from start to finish. The guides were friendly and very helpful. I loved every moment.”
									</p>

									<div class="profile-section d-flex align-items-center">
										<img src="assets/images/profile_img/profile-pic-guy1.jpg" class="profile-img" alt="Profile" />
										<div class="ms-2 profile-text">
											<h6 class="mb-0 fw-bold">Daniel Cruz</h6>
											<p class="mb-0 text-muted profile-role">Outdoor Photographer</p>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="card-item">
							<div class="card testimonial-card position-relative">
								<div class="card-body marquee-first">

                                    <div class="stars">
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
                                    </div>

									<p class="card-text mt-2">
										“Such a beautiful experience. The beaches were stunning and peaceful. Truly worth the visit.”
									</p>

									<div class="profile-section d-flex align-items-center">
										<img src="assets/images/profile_img/profile-pic-girl1.jpg" class="profile-img" alt="Profile" />
										<div class="ms-2 profile-text">
											<h6 class="mb-0 fw-bold">Julia Ramirez</h6>
											<p class="mb-0 text-muted profile-role">Lifestyle Blogger</p>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="card-item">
							<div class="card testimonial-card position-relative">
								<div class="card-body marquee-first">

                                    <div class="stars">
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
                                    </div>

									<p class="card-text mt-2">
										“I enjoyed every part of the island tour. The staff were kind and professional. Highly recommended.”
									</p>

									<div class="profile-section d-flex align-items-center">
										<img src="assets/images/profile_img/profile-pic-guy2.jpg" class="profile-img" alt="Profile" />
										<div class="ms-2 profile-text">
											<h6 class="mb-0 fw-bold">Marco Villanueva</h6>
											<p class="mb-0 text-muted profile-role">Adventure Content Creator</p>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="card-item">
							<div class="card testimonial-card position-relative">
								<div class="card-body marquee-first">

                                    <div class="stars">
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
                                    </div>

									<p class="card-text mt-2">
										“Great value for the experience. Everything was well-planned and smooth. I’ll be recommending this to my friends.”
									</p>

									<div class="profile-section d-flex align-items-center">
										<img src="assets/images/profile_img/profile-pic-guy3.jpg" class="profile-img" alt="Profile" />
										<div class="ms-2 profile-text">
											<h6 class="mb-0 fw-bold">Kevin Santos</h6>
											<p class="mb-0 text-muted profile-role">Backpacking Enthusiast</p>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="card-item">
							<div class="card testimonial-card position-relative">
								<div class="card-body marquee-first">

                                    <div class="stars">
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
                                    </div>

									<p class="card-text mt-2">
										“The entire trip felt magical. The views were breathtaking, and the service was excellent. I couldn’t ask for more.”
									</p>

									<div class="profile-section d-flex align-items-center">
										<img src="assets/images/profile_img/profile-pic-girl2.jpg" class="profile-img" alt="Profile" />
										<div class="ms-2 profile-text">
											<h6 class="mb-0 fw-bold">Angela Flores</h6>
											<p class="mb-0 text-muted profile-role">Travel Influencer</p>
										</div>
									</div>

								</div>
							</div>
						</div>



						<!-- ===== DUPLICATED CARDS FOR INFINITE LOOP ===== -->

						<div class="card-item">
							<div class="card testimonial-card position-relative">
								<div class="card-body marquee-first">

                                    <div class="stars">
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
                                    </div>

									<p class="card-text mt-2">
										“I had an amazing time exploring Palawan. Everything felt calm and refreshing. I would definitely come back again.”
									</p>

									<div class="profile-section d-flex align-items-center">
										<img src="assets/images/profile_img/profile-pic-sam.jpg" class="profile-img" alt="Profile" />
										<div class="ms-2 profile-text">
											<h6 class="mb-0 fw-bold">Samantha Alamo</h6>
											<p class="mb-0 text-muted profile-role">Travel Vlogger</p>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="card-item">
							<div class="card testimonial-card position-relative">
								<div class="card-body marquee-first">

                                    <div class="stars">
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-half fs-5 text-warning"></i>
                                    </div>

									<p class="card-text mt-2">
										“The trip was very organized from start to finish. The guides were friendly and very helpful. I loved every moment.”
									</p>

									<div class="profile-section d-flex align-items-center">
										<img src="assets/images/profile_img/profile-pic-guy1.jpg" class="profile-img" alt="Profile" />
										<div class="ms-2 profile-text">
											<h6 class="mb-0 fw-bold">Daniel Cruz</h6>
											<p class="mb-0 text-muted profile-role">Outdoor Photographer</p>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="card-item">
							<div class="card testimonial-card position-relative">
								<div class="card-body marquee-first">

                                    <div class="stars">
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
                                    </div>

									<p class="card-text mt-2">
										“Such a beautiful experience. The beaches were stunning and peaceful. Truly worth the visit.”
									</p>

									<div class="profile-section d-flex align-items-center">
										<img src="assets/images/profile_img/profile-pic-girl1.jpg" class="profile-img" alt="Profile" />
										<div class="ms-2 profile-text">
											<h6 class="mb-0 fw-bold">Julia Ramirez</h6>
											<p class="mb-0 text-muted profile-role">Lifestyle Blogger</p>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="card-item">
							<div class="card testimonial-card position-relative">
								<div class="card-body marquee-first">

                                    <div class="stars">
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
                                    </div>

									<p class="card-text mt-2">
										“I enjoyed every part of the island tour. The staff were kind and professional. Highly recommended.”
									</p>

									<div class="profile-section d-flex align-items-center">
										<img src="assets/images/profile_img/profile-pic-guy2.jpg" class="profile-img" alt="Profile" />
										<div class="ms-2 profile-text">
											<h6 class="mb-0 fw-bold">Marco Villanueva</h6>
											<p class="mb-0 text-muted profile-role">Adventure Content Creator</p>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="card-item">
							<div class="card testimonial-card position-relative">
								<div class="card-body marquee-first">

                                    <div class="stars">
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
                                    </div>

									<p class="card-text mt-2">
										“Great value for the experience. Everything was well-planned and smooth. I’ll be recommending this to my friends.”
									</p>

									<div class="profile-section d-flex align-items-center">
										<img src="assets/images/profile_img/profile-pic-guy3.jpg" class="profile-img" alt="Profile" />
										<div class="ms-2 profile-text">
											<h6 class="mb-0 fw-bold">Kevin Santos</h6>
											<p class="mb-0 text-muted profile-role">Backpacking Enthusiast</p>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="card-item">
							<div class="card testimonial-card position-relative">
								<div class="card-body marquee-first">

                                    <div class="stars">
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
                                    </div>

									<p class="card-text mt-2">
										“The entire trip felt magical. The views were breathtaking, and the service was excellent. I couldn’t ask for more.”
									</p>

									<div class="profile-section d-flex align-items-center">
										<img src="assets/images/profile_img/profile-pic-girl2.jpg" class="profile-img" alt="Profile" />
										<div class="ms-2 profile-text">
											<h6 class="mb-0 fw-bold">Angela Flores</h6>
											<p class="mb-0 text-muted profile-role">Travel Influencer</p>
										</div>
									</div>

								</div>
							</div>
						</div>

					</div>
				</div>
			</div>


			<div class="row g-4 justify-content-center py-3">

				<div class="marquee-container">
					<div class="marquee-track-second">

						<!-- ===== ORIGINAL 5 LANDSCAPE CARDS ===== -->

						<div class="card-item">
							<div class="card testimonial-card position-relative">
								<div class="card-body marquee-first">

                                    <div class="stars">
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
                                    </div>

									<p class="card-text mt-2">
										“The entire trip felt magical. The views were breathtaking, and the service was excellent. I couldn’t ask for more.”
									</p>

									<div class="profile-section d-flex align-items-center">
										<img src="assets/images/profile_img/profile-pic-girl3.jpg" class="profile-img" alt="Profile" />
										<div class="ms-2 profile-text">
											<h6 class="mb-0 fw-bold">Nicole Reyes</h6>
											<p class="mb-0 text-muted profile-role">Nature Videographer</p>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="card-item">
							<div class="card testimonial-card position-relative">
								<div class="card-body marquee-first">

                                    <div class="stars">
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
                                    </div>

									<p class="card-text mt-2">
										“I loved the peaceful atmosphere. Every spot we visited felt like a postcard. Truly unforgettable.”
									</p>

									<div class="profile-section d-flex align-items-center">
										<img src="assets/images/profile_img/profile-pic-guy4.jpg" class="profile-img" alt="Profile" />
										<div class="ms-2 profile-text">
											<h6 class="mb-0 fw-bold">“Joshua Lim</h6>
											<p class="mb-0 text-muted profile-role">Freediving Hobbyist</p>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="card-item">
							<div class="card testimonial-card position-relative">
								<div class="card-body marquee-first">

                                    <div class="stars">
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
                                    </div>

									<p class="card-text mt-2">
										“Everything exceeded my expectations. The guides were very knowledgeable. I felt safe the whole time.”
									</p>

									<div class="profile-section d-flex align-items-center">
										<img src="assets/images/profile_img/profile-pic-girl4.jpg" class="profile-img" alt="Profile" />
										<div class="ms-2 profile-text">
											<h6 class="mb-0 fw-bold">Mia Delgado</h6>
											<p class="mb-0 text-muted profile-role">Travel Journalist</p>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="card-item">
							<div class="card testimonial-card position-relative">
								<div class="card-body marquee-first">

                                    <div class="stars">
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
                                    </div>

									<p class="card-text mt-2">
										“Such an awesome trip. The scenery was unreal, and the water was crystal clear. Perfect for nature lovers.”
									</p>

									<div class="profile-section d-flex align-items-center">
										<img src="assets/images/profile_img/profile-pic-guy5.jpg" class="profile-img" alt="Profile" />
										<div class="ms-2 profile-text">
											<h6 class="mb-0 fw-bold">Adrian Torres</h6>
											<p class="mb-0 text-muted profile-role">Adventure Seeker</p>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="card-item">
							<div class="card testimonial-card position-relative">
								<div class="card-body marquee-first">

                                    <div class="stars">
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
                                    </div>

									<p class="card-text mt-2">
										“It was one of the best vacations I’ve ever had. The food, the views, the people—perfect. I will definitely recommend this.”
									</p>

									<div class="profile-section d-flex align-items-center">
										<img src="assets/images/profile_img/profile-pic-girl5.jpg" class="profile-img" alt="Profile" />
										<div class="ms-2 profile-text">
											<h6 class="mb-0 fw-bold">Hannah Lee</h6>
											<p class="mb-0 text-muted profile-role">Food & Culture Blogger</p>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="card-item">
							<div class="card testimonial-card position-relative">
								<div class="card-body marquee-first">

                                    <div class="stars">
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
                                    </div>

									<p class="card-text mt-2">
										“The experience was smooth and stress-free. The staff made sure everything was comfortable. I really enjoyed the tour.”
									</p>

									<div class="profile-section d-flex align-items-center">
										<img src="assets/images/profile_img/profile-pic-guy6.jpg" class="profile-img" alt="Profile" />
										<div class="ms-2 profile-text">
											<h6 class="mb-0 fw-bold">Ethan Navarro</h6>
											<p class="mb-0 text-muted profile-role">Drone Pilot</p>
										</div>
									</div>

								</div>
							</div>
						</div>

						<!-- ===== DUPLICATED CARDS FOR INFINITE LOOP ===== -->

						<div class="card-item">
							<div class="card testimonial-card position-relative">
								<div class="card-body marquee-first">

                                    <div class="stars">
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
                                    </div>

									<p class="card-text mt-2">
										“The entire trip felt magical. The views were breathtaking, and the service was excellent. I couldn’t ask for more.”
									</p>

									<div class="profile-section d-flex align-items-center">
										<img src="assets/images/profile_img/profile-pic-girl3.jpg" class="profile-img" alt="Profile" />
										<div class="ms-2 profile-text">
											<h6 class="mb-0 fw-bold">Nicole Reyes</h6>
											<p class="mb-0 text-muted profile-role">Nature Videographer</p>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="card-item">
							<div class="card testimonial-card position-relative">
								<div class="card-body marquee-first">

                                    <div class="stars">
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
                                    </div>

									<p class="card-text mt-2">
										“I loved the peaceful atmosphere. Every spot we visited felt like a postcard. Truly unforgettable.”
									</p>

									<div class="profile-section d-flex align-items-center">
										<img src="assets/images/profile_img/profile-pic-guy4.jpg" class="profile-img" alt="Profile" />
										<div class="ms-2 profile-text">
											<h6 class="mb-0 fw-bold">“Joshua Lim</h6>
											<p class="mb-0 text-muted profile-role">Freediving Hobbyist</p>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="card-item">
							<div class="card testimonial-card position-relative">
								<div class="card-body marquee-first">

                                    <div class="stars">
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
                                    </div>

									<p class="card-text mt-2">
										“Everything exceeded my expectations. The guides were very knowledgeable. I felt safe the whole time.”
									</p>

									<div class="profile-section d-flex align-items-center">
										<img src="assets/images/profile_img/profile-pic-girl4.jpg" class="profile-img" alt="Profile" />
										<div class="ms-2 profile-text">
											<h6 class="mb-0 fw-bold">Mia Delgado</h6>
											<p class="mb-0 text-muted profile-role">Travel Journalist</p>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="card-item">
							<div class="card testimonial-card position-relative">
								<div class="card-body marquee-first">

                                    <div class="stars">
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
                                    </div>

									<p class="card-text mt-2">
										“Such an awesome trip. The scenery was unreal, and the water was crystal clear. Perfect for nature lovers.”
									</p>

									<div class="profile-section d-flex align-items-center">
										<img src="assets/images/profile_img/profile-pic-guy5.jpg" class="profile-img" alt="Profile" />
										<div class="ms-2 profile-text">
											<h6 class="mb-0 fw-bold">Adrian Torres</h6>
											<p class="mb-0 text-muted profile-role">Adventure Seeker</p>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="card-item">
							<div class="card testimonial-card position-relative">
								<div class="card-body marquee-first">

                                    <div class="stars">
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
                                    </div>

									<p class="card-text mt-2">
										“It was one of the best vacations I’ve ever had. The food, the views, the people—perfect. I will definitely recommend this.”
									</p>

									<div class="profile-section d-flex align-items-center">
										<img src="assets/images/profile_img/profile-pic-girl5.jpg" class="profile-img" alt="Profile" />
										<div class="ms-2 profile-text">
											<h6 class="mb-0 fw-bold">Hannah Lee</h6>
											<p class="mb-0 text-muted profile-role">Food & Culture Blogger</p>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="card-item">
							<div class="card testimonial-card position-relative">
								<div class="card-body marquee-first">

                                    <div class="stars">
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
									<i class="bi bi-star-fill fs-5 text-warning"></i>
                                    </div>

									<p class="card-text mt-2">
										“The experience was smooth and stress-free. The staff made sure everything was comfortable. I really enjoyed the tour.”
									</p>

									<div class="profile-section d-flex align-items-center">
										<img src="assets/images/profile_img/profile-pic-guy6.jpg" class="profile-img" alt="Profile" />
										<div class="ms-2 profile-text">
											<h6 class="mb-0 fw-bold">Ethan Navarro</h6>
											<p class="mb-0 text-muted profile-role">Drone Pilot</p>
										</div>
									</div>

								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

				<!-- Duplicate this col for total 5 cards -->
			</div>
		</div>











		<div class="container-fluid px-5">
			<div class="row g-0">
				<div class="col-12">
					<div class="card rounded-4 mb-5 card-end-img card-know">
						<img
							src="assets/images/card-end-img1.jpg"
							class="card-img"
							alt="..."
						/>
						<div class="card-img-overlay card-end-text">
							<h5 class="card-end-h5">
								Let's get to know Palawan
							</h5>
							<button
								class="btn btn-outline-dark btn-lg icon-toggle crsl-btn"
								type="button"
							>
								Book Now
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>





        <?php include 'footer.php'; ?>

		<script src="assets/scripts/left-and-right-btn.js"></script>
		<script src="assets/scripts/typewriter-animation.js"></script>
		<script defer src="assets/scripts/activePage.js"></script>
		<script
			crossorigin="anonymous"
			integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
		></script>
	</body>
</html>
