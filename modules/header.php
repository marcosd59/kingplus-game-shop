<header class="ltn__header-area ltn__header-5 ltn__header-transparent gradient-color-4---">
	<!-- ltn__header-top-area start -->
	<div class="ltn__header-top-area">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="ltn__top-bar-menu">
						<ul>
							<li>
								<a href="<?php echo $ref_rel; ?>locations.php"><i class="icon-placeholder"></i>Cancún, Quintana Roo</a>
							</li>
							<li>
								<a href="mailto:damian.marcospool@gmail.com?Subject=Flower%20greetings%20to%20you"><i class="icon-mail"></i> kingplus@gmail.com</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-5">
					<div class="top-bar-right text-end">
						<div class="ltn__top-bar-menu">
							<ul>
								<li>
									<!-- ltn__language-menu -->
									<div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
										<ul>
											<li>
												<a href="#" class="dropdown-toggle"><span class="active-currency">Español</span></a>
												<ul>
													<li><a href="#">Árabe</a></li>
													<li><a href="#">Bengalí</a></li>
													<li><a href="#">Chino</a></li>
													<li><a href="#">Inglés</a></li>
													<li><a href="#">Francés</a></li>
													<li><a href="#">Hindi</a></li>
												</ul>
											</li>
										</ul>
									</div>
								</li>
								<li>
									<!-- ltn__social-media -->
									<div class="ltn__social-media">
										<ul>
											<li>
												<a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
											</li>
											<li>
												<a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
											</li>

											<li>
												<a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
											</li>
											<li>
												<a href="#" title="Dribbble"><i class="fab fa-dribbble"></i></a>
											</li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ltn__header-top-area end -->

	<!-- ltn__header-middle-area start -->
	<div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white ltn__logo-right-menu-option sticky-active-into-mobile--- plr--9---">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="site-logo-wrap">
						<div class="site-logo">
							<a href="<?php echo $ref_rel; ?>index.php"><img src="<?php echo $ref_rel; ?>img/logo-1.png" width="154px" height="54px" alt="Logo" /></a>
						</div>
					</div>
				</div>
				<div class="col header-menu-column menu-color-white---">
					<div class="header-menu d-none d-xl-block">
						<nav>
							<div class="ltn__main-menu">
								<ul>
									<li class="menu-icon">
										<a href="<?php echo $ref_rel; ?>index.php">Inicio</a>
									</li>
									<li class="menu-icon">
										<a href="<?php echo $ref_rel; ?>shop.php">Tienda</a>
									</li>
									<li class="menu-icon">
										<a href="<?php echo $ref_rel; ?>blog.php">Blog</a>
									</li>
									<li><a href="<?php echo $ref_rel; ?>contact.php">Contacto</a></li>
									<li class="special-link">
										<a href="<?php echo $ref_rel; ?>shop.php">COMPRAR</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
				<div class="ltn__header-options ltn__header-options-2">
					<!-- header-search-1 -->
					<div class="header-search-wrap" id="vue-app-product-search">
						<div class="header-search-1">
							<div class="search-icon">
								<i class="icon-search for-search-show"></i>
								<i class="icon-cancel for-search-close"></i>
							</div>
						</div>
						<div class="header-search-1-form">
							<form id="#" method="get" action="#" submit.prevent="realizarBusqueda">
								<input type="text" name="search" value="" placeholder="Busca aquí..." />
								<button type="submit">
									<span><i class="icon-search"></i></span>
								</button>
							</form>
						</div>
					</div>
					<!-- user-menu -->
					<div class="ltn__drop-menu user-menu">
						<ul>
							<li>
								<a href="#"><i class="icon-user"></i></a>
								<ul>
									<li><a href="<?php echo $ref_rel; ?>login.php">Iniciar Sesión</a></li>
									<li><a href="<?php echo $ref_rel; ?>register.php">Registrarse</a></li>
									<li><a href="<?php echo $ref_rel; ?>account.php">Mi Cuenta</a></li>
									<li><a href="<?php echo $ref_rel; ?>wishlist.php">Lista de Deseos</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<!-- Mini-cart -->
					<div id="vue-app-carrito-number">
						<div class="mini-cart-icon">
							<a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle">
								<i class="icon-shopping-cart"></i>
								<sup>{{ numProductos }}</sup>
							</a>
						</div>
					</div>
					<!-- Mini-cart -->
					<!-- Mobile Menu Button -->
					<div class="mobile-menu-toggle d-xl-none">
						<a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
							<svg viewBox="0 0 800 600">
								<path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
								<path d="M300,320 L540,320" id="middle"></path>
								<path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ltn__header-middle-area end -->
</header>