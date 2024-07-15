<!doctype html>
<html class="no-js" lang="zxx">

<?php require_once("./modules/head.php") ?>

<body>

	<!-- Body main wrapper start -->
	<div class="body-wrapper">

		<!-- HEADER AREA START (header-5) -->
		<?php require_once("./modules/header-2.php") ?>
		<!-- HEADER AREA END -->

		<!-- Utilize Cart Menu Start -->
		<?php require_once("./modules/cart-menu.php") ?>
		<!-- Utilize Cart Menu End -->

		<!-- Utilize Mobile Menu Start -->
		<?php require_once("./modules/mobile-menu.php") ?>
		<!-- Utilize Mobile Menu End -->

		<div class="ltn__utilize-overlay"></div>

		<!-- BREADCRUMB AREA START -->
		<div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="img/bg/9.jpg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
							<div class="section-title-area ltn__section-title-2">
								<h6 class="section-subtitle ltn__secondary-color-4">// Welcome to our company</h6>
								<h1 class="section-title white-color">Account</h1>
							</div>
							<div class="ltn__breadcrumb-list">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li class="ltn__secondary-color-4">Login</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- BREADCRUMB AREA END -->

		<!-- LOGIN AREA START -->
		<div class="ltn__login-area pb-65">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title-area text-center">
							<h1 class="section-title">Iniciar Sesión <br>En Tu Cuenta</h1>
							<p>Accede a tu cuenta para disfrutar de todas nuestras funcionalidades y servicios. <br>
								Gestiona tus pedidos, revisa tu historial de compras y más.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="account-login-inner">
							<form action="#" class="ltn__form-box contact-form-box">
								<input type="text" name="email" placeholder="Correo Electrónico*">
								<input type="password" name="password" placeholder="Contraseña*">
								<div class="btn-wrapper mt-0">
									<button class="theme-btn-1 btn btn-block" type="submit">INICIAR SESIÓN</button>
								</div>
								<div class="go-to-btn mt-20">
									<a href="#"><small>¿OLVIDASTE TU CONTRASEÑA?</small></a>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="account-create text-center pt-50">
							<h4>¿NO TIENES UNA CUENTA?</h4>
							<p>Añade artículos a tu lista de deseos, recibe recomendaciones personalizadas <br>
								compra más rápido, rastrea tus pedidos, regístrate</p>
							<div class="btn-wrapper">
								<a href="register.php" class="theme-btn-1 btn black-btn">CREAR CUENTA</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- LOGIN AREA END -->

		<!-- FEATURE AREA START ( Feature - 3) -->
		<?php require_once("./modules/feature-area.php") ?>
		<!-- FEATURE AREA END -->

		<!-- FOOTER AREA START -->
		<?php require_once("./modules/footer.php") ?>
		<!-- FOOTER AREA END -->

	</div>
	<!-- Body main wrapper end -->

	<!-- All JS Plugins -->
	<script src="js/plugins.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>

</body>

</html>