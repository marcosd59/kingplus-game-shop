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
$response = file_get_contents($global_apiserver . '/public/config/getall/', false, $context);
$config = json_decode($response, true);
$context = stream_context_create($opts);
$response = file_get_contents($global_apiserver . '/public/ecommerce/orden/?orden=' . $_REQUEST["orden"], false, $context);
$response = json_decode($response, true)["data"];
$orden_de_compra = $response;
$costo_envio = json_decode($orden_de_compra["COSTO_ENVIO"]);
$productos = json_decode($response["PRODUCTOS"], true);
$cupon = json_decode($response["CUPON"], true);

// SDK de Mercado Pago
require '../../functions/vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken($config["AccessToken"]["VALUE"]);

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

$array_productos_mercadopago = array();
for ($i = 0; $i < count($productos); $i++) {
	// Crea un ítem en la preferencia
	$item = new MercadoPago\Item();
	$item->title = $productos[$i]["NOMBRE"];
	$item->quantity = $productos[$i]["CANTIDAD"];
	$item->unit_price = $productos[$i]["PRECIO"];
	array_push($array_productos_mercadopago, $item);
}

if (floatval($response["DESCUENTO"]) > 0) {
	$item = new MercadoPago\Item();
	$item->title = "Descuento";
	$item->quantity = 1;
	$item->unit_price = -floatval($response["DESCUENTO"]);
	array_push($array_productos_mercadopago, $item);
}

if (floatval($costo_envio->COSTO_ENVIO) > 0) {
	$title = "Envio" . " " . $costo_envio->TIPO_ENVIO;
	$item = new MercadoPago\Item();
	$item->title = $title;
	$item->quantity = 1;
	$item->unit_price = $costo_envio->COSTO_ENVIO;
	array_push($array_productos_mercadopago, $item);
}

$subtotal = 0;
for ($i = 0; $i < count($productos); $i++) {
	$subtotal += $productos[$i]["CANTIDAD"] * $productos[$i]["PRECIO"];
}

$descuento = 0;
$total = $response["TOTAL"];

$preference->payment_methods = array(
	"excluded_payment_types" => array(
		array("id" => "ticket"),
		array("id" => "atm")
	),
	"excluded_payment_methods" => array(
		array("id" => "oxxo"),
		array("id" => "mercadopagocard")
	),
);

$preference->external_reference = "orden-" . $orden_de_compra["ID"];
$preference->items = $array_productos_mercadopago;
$preference->back_urls = array(
	"success" => $config["PaymentSuccessLink"]["VALUE"] . "?orden=" . $_REQUEST["orden"],
	"failure" => $config["PaymentFailureLink"]["VALUE"] . "?orden=" . $_REQUEST["orden"],
	"pending" => $config["PaymentPendingLink"]["VALUE"] . "?orden=" . $_REQUEST["orden"]
);
$preference->auto_return = "approved";
$preference->notification_url = $global_apiserver . "/webhook/mp_ecommerce/notificaciones/" . $orden_de_compra["NOTIFICACION"] . "/";
$preference->save();

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

		<!-- BREADCRUMB AREA START -->
		<div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-image" data-bg="">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
							<div class="section-title-area ltn__section-title-2">
								<h6 class="section-subtitle ltn__secondary-color-4">// Welcome to our company</h6>
								<h1 class="section-title black-color">Comfirmación de orden</h1>
							</div>
							<div class="ltn__breadcrumb-list">
								<ul>
									<li><a href="index.html" style="color:black">Inicio</a></li>
									<li class="ltn__secondary-color-4">Confirmar</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- BREADCRUMB AREA END -->

	<!-- PAGO AREA START -->
	<div class="ltn__checkout-area mb-105" id="vue-content-checkout">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="ltn__checkout-inner">
						<div class="ltn__checkout-single-content mt-50">
							<h2 class="title-2">Detalles de facturación</h2>
							<div class="ltn__checkout-single-content-info">
								<form action="#">
									<h3>Información personal</h3>
									<div class="row">
										<div class="col-md-12 mb-20">
											<label><b>Nombre completo: </b> <?= $response["NOMBRE"] . " " . $response["APELLIDOS"] ?></label>
										</div>
										<div class="col-md-12 mb-20">
											<label for="country"> <strong>Fecha: </strong><?= date_format(date_create($response["FECHA_CREACION"]), "d/m/Y") ?></label>
										</div>
										<div class="col-md-12 mb-20">
											<label><b>Datos de contacto: </b> <?= $response["TELEFONO"] . " / " . $response["EMAIL"] ?></label>
										</div>
										<div class="col-md-12 mb-20">
											<label><b>Dirección: </b><?= $response["ESTADO"] . ", " . $response["PAIS"] . ", " . $response["MUNICIPIO"] . ", " . $response["CALLE"] . " No. " . $response["NUM_EXTERIOR"] . " No. int" . $response["NUM_INTERIOR"] ?></label>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="ltn__checkout-payment-method mt-50">
						<h4 class="title-2">Método de Pago</h4>
						<div id="checkout_accordion_1">
							<!-- tarjeta -->
							<div class="card">
								<h5 class="ltn__card-title" aria-expanded="true">
									Mercado Pago <img src="img/icons/mercado-pago.png" alt="#">
								</h5>
								<div id="faq-item-2-2" class="collapse show" data-parent="#checkout_accordion_1">
									<div class="card-body">
										<p>Utiliza Mercado Pago para hacer el pedido.</p>
									</div>
								</div>
							</div>
							<!-- tarjeta -->
							<div class="card">
								<h5 class="ltn__card-title disabled" aria-expanded="false" style="color: gray;">
									Pago con cheque
								</h5>
								<div id="faq-item-2-1" class="collapse" data-parent="#checkout_accordion_1">
									<div class="card-body">
										<p>Por favor, envía un cheque a Nombre de la Tienda, Calle de la Tienda, Ciudad de la Tienda, Estado / Condado de la Tienda, Código Postal de la Tienda.</p>
									</div>
								</div>
							</div>
							<!-- tarjeta -->
							<div class="card">
								<h5 class="ltn__card-title disabled" aria-expanded="false" style="color: gray;">
									ApplePay <img src="img/icons/applepay.png" alt="#">
								</h5>
								<div id="faq-item-2-3" class="collapse" data-parent="#checkout_accordion_1">
									<div class="card-body">
										<p>Apple Pay es la forma moderna de pagar.</p>
									</div>
								</div>
							</div>
							<!-- tarjeta -->
							<div class="card">
								<h5 class="ltn__card-title disabled" aria-expanded="false" style="color: gray;">
									PayPal <img src="img/icons/payment-3.png" alt="#">
								</h5>
								<div id="faq-item-2-4" class="collapse" data-parent="#checkout_accordion_1">
									<div class="card-body">
										<p>Paga a través de PayPal; puedes pagar con tu tarjeta de crédito si no tienes una cuenta PayPal.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="ltn__payment-note mt-30 mb-30">
							<p>Tus datos personales se utilizarán para procesar tu pedido, apoyar tu experiencia en este sitio web y para otros fines descritos en nuestra política de privacidad.</p>
						</div>
						<button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit"><a href="<?php echo $preference->init_point; ?>">Continuar con el pago</a></button>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="shoping-cart-total mt-50">
						<h4 class="title-2">Total del Carrito</h4>
						<table class="table">
							<thead>
								<tr>
									<th>Productos</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($productos as $producto) : ?>
									<tr>
										<td> <?= $producto["NOMBRE"] ?> <strong>&times;&nbsp;<?= $producto["CANTIDAD"] ?></strong></td>
										<td> $ <?= (number_format(intval($producto["CANTIDAD"]) * (float)filter_var($producto["PRECIO"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION), 2)) ?></td>
									</tr>
								<?php endforeach; ?>
								<tr>
									<td>Envío</td>
									<td><strong><?php echo $costo_envio->TIPO_ENVIO . ' GRATIS ' . $costo_envio->COSTO_ENVIO; ?></strong></td>
								</tr>
								<tr>
									<td>Subtotal:</td>
									<td>$ <?= number_format($response["SUBTOTAL"], 2, '.', ',') ?> </td>
								</tr>
								<tr>
									<td>Método de pago:</td>
									<td><?= $response["PAGO_CON"] ?></td>
								</tr>
								<tr class="order_total">
									<td>Total:</td>
									<td><strong>$ <?= number_format($response["TOTAL"], 2, '.', ',') ?> </strong></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- PAGO AREA END -->

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