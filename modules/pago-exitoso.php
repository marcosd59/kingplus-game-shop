<?php

if (!isset($_REQUEST["orden"])) {
	echo    "<script>
                window.location.replace('./inicio');
            </script>";
}

$opts = [
	"http" => [
		"method" => "GET",
		"header" =>
		"token: " . $token . " \r\n"
	]
];

$context = stream_context_create($opts);
$response = file_get_contents($global_apiserver . '/public/ecommerce/orden/?orden=' . $_REQUEST["orden"], false, $context);
$response = json_decode($response, true)["data"];
$productos = json_decode($response["PRODUCTOS"], true);
$costo_envio = json_decode($response["COSTO_ENVIO"]);
?>



<body>

	<!-- Body main wrapper start -->
	<div class="body-wrapper">

		<!-- Utilize Cart Menu Start -->
		<?php require_once('./modules/cart-menu.php'); ?>
		<!-- Utilize Cart Menu End -->

		<!-- Utilize Mobile Menu Start -->
		<?php require_once('./modules/mobile-menu.php'); ?>
		<!-- Utilize Mobile Menu End -->

		<div class="ltn__utilize-overlay"></div>

		<!-- 404 area start -->
		<div class="ltn__coming-soon-area ltn__primary-bg text-color-white bg-image bg-overlay-theme-black-70" data-bg="img/slider/20.jpg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="coming-soon-inner">
							<div class="section-title-area ltn__section-title-2">
								<h6 class="section-subtitle ltn__secondary-color-4">// Pago Aprobado</h6>
								<h1 class="section-title white-color">¡Gracias por tu compra!</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 404 area end -->

		<!-- Styles -->
		<style>
			body {
				color: #fff;
			}

			.ltn__main-menu>ul>li>a {
				color: #fff;
			}

			.ltn__top-bar-menu>ul>li>i,
			.ltn__top-bar-menu>ul>li>a>i {
				color: #fff;
			}

			.ltn__language-menu .dropdown-toggle::before {
				color: #fff;
			}

			.ltn__main-menu li:hover>a {
				color: var(--ltn__secondary-color-4);
			}

			.ltn__header-top-area {
				border-bottom: 0px solid #e1e1e1;
			}
		</style>

		<!-- All JS Plugins -->
		<script src="<?php echo $ref_rel; ?>js/plugins.js"></script>
		<!-- Main JS -->
		<script src="<?php echo $ref_rel; ?>js/main.js"></script>
		<!-- Detalle Producto JS -->
		<script src="<?php echo $ref_rel; ?>js/detalle-producto.js"></script>
		<!-- Top Products JS -->
		<script src="<?php echo $ref_rel; ?>js/top-products.js"></script>
		<!-- Tienda JS -->
		<script src="<?php echo $ref_rel; ?>js/tienda.js"></script>
</body>