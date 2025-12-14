<div class="container-fluid px-0 py-2 sticky-top rounded-bottom-4">
	<header>
		<div class="container-fluid px-0">
			<div class="row align-items-center">
				<!-- LEFT: PALAWANDER -->
				<div class="col-6 col-md-4">
					<a
						class="header-title text-dark text-decoration-none"
					>
								<span class="fs-4">
									<span class="pala">PALA</span
									><span class="wonder">WANDER</span>
								</span>
					</a>
				</div>

				<!-- CENTER NAV (MD+) -->
				<div
					class="col-md-4 text-center d-none d-md-flex justify-content-center"
				>
					<nav>
						<ul class="nav nav-pills flex-nowrap">
							<li class="nav-item">
								<a class="nav-link text-nowrap hover-underline-animation left" href="/webdev/index.php#home"
								>Home</a
								>
							</li>
							<li class="nav-item">
								<a class="nav-link text-nowrap hover-underline-animation left" href="/webdev/index.php#tour"
								>Our Tours</a
								>
							</li>
							<li class="nav-item">
								<a class="nav-link text-nowrap hover-underline-animation left" href="/webdev/index.php#blogs"
								>Blogs</a
								>
							</li>
							<li class="nav-item">
								<a class="nav-link text-nowrap hover-underline-animation left" href="/webdev/bookings-page.php"
								>Bookings</a
								>
							</li>
							<li class="nav-item">
								<a class="nav-link text-nowrap hover-underline-animation left" href="/webdev/faqs-page.php"
								>FAQs</a
								>
							</li>
						</ul>
					</nav>
				</div>

				<!-- RIGHT: DROPDOWN -->
                <div class="col-6 col-md-4 text-end">
                    <div class="d-flex justify-content-end align-items-center gap-2">

                        <div class="dropdown">
                            <button class="btn btn-outline-dark dropdown-toggle rounded-pill px-3" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="currencyBtn">
                                ₱ PHP
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end shadow border-0 rounded-4">
                                <li><button class="dropdown-item" onclick="changeCurrency('PHP')">🇵🇭 PHP (Peso)</button></li>
                                <li><button class="dropdown-item" onclick="changeCurrency('USD')">🇺🇸 USD (Dollar)</button></li>
                                <li><button class="dropdown-item" onclick="changeCurrency('EUR')">🇪🇺 EUR (Euro)</button></li>
                                <li><button class="dropdown-item" onclick="changeCurrency('KRW')">🇰🇷 KRW (Won)</button></li>
                                <li><button class="dropdown-item" onclick="changeCurrency('JPY')">🇯🇵 JPY (Yen)</button></li>
                            </ul>
                        </div>

                        <div class="dropdown">
                            <button class="btn" data-bs-toggle="dropdown" type="button">
                                <i class="bi bi-list fs-3"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end d-md-none">
                                <li><a class="dropdown-item" href="/webdev/index.php#home">Home</a></li>
                                <li><a class="dropdown-item" href="/webdev/index.php#tour">Our Tours</a></li>
                                <li><a class="dropdown-item" href="/webdev/index.php#blogs">Blogs</a></li>
                                <li><a class="dropdown-item" href="/webdev/bookings-page.php">Bookings</a></li>
                                <li><a class="dropdown-item" href="/webdev/faqs-page.php">FAQs</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
			</div>
		</div>
	</header>
</div>

<script src="/webdev/config/secrets.js"></script>
<script src="/webdev/assets/scripts/currency-converter.js"></script>
