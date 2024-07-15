<?php
require "../../functions/apicalls.php";
require "../../functions/apiserver.php";
$token = 'a0fc98488d395f6c2e6565d91c4747ee792';

$dos_niveles = array("articulo", "detalle-producto");
$ref_rel = "./";
if (in_array($_REQUEST["view"], $dos_niveles)) {
    $ref_rel = "../";
};
?>

<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>KingPlus | Game Shop</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="css/font-icons.css" />
    <!-- plugins css -->
    <link rel="stylesheet" href="css/plugins.css" />
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Axios -->
    <script src="<?php echo $global_sitio_server; ?>/functions/axios.min.js"></script>
    <!-- Vue -->
    <script src="<?php echo $global_sitio_server; ?>/functions/vue.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?php echo $global_sitio_server; ?>/functions/sweetalert2.all.min.js"></script>
    <!-- jQuery -->
    <script>
        <?php echo 'const global_token = "' . $token . '";'; ?>
        <?php echo 'const global_public_repo = "' . $global_public_repo . '";'; ?>
        <?php echo 'var global_apiserver = "' . $global_apiserver . '";'; ?>
    </script>
</head>

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
                                <h1 class="section-title white-color">Checkout</h1>
                            </div>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li><a href="index.html">Inicio</a></li>
                                    <li class="ltn__secondary-color-4">Checkout</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <!-- WISHLIST AREA START -->
        <div class="ltn__checkout-area mb-105" id="vue-content-checkout">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__checkout-inner">
                            <div class="ltn__checkout-single-content ltn__returning-customer-wrap">
                                <h5>¿Cliente recurrente? <a class="ltn__secondary-color" href="#ltn__returning-customer-login" data-bs-toggle="collapse">Haz clic aquí para iniciar sesión</a></h5>
                                <div id="ltn__returning-customer-login" class="collapse ltn__checkout-single-content-info">
                                    <div class="ltn_coupon-code-form ltn__form-box">
                                        <p>Por favor, inicia sesión en tu cuenta.</p>
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-item input-item-name ltn__custom-icon">
                                                        <input type="text" name="ltn__name" placeholder="Ingresa tu nombre">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-item input-item-email ltn__custom-icon">
                                                        <input type="email" name="ltn__email" placeholder="Ingresa tu correo electrónico">
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn theme-btn-1 btn-effect-1 text-uppercase">Iniciar sesión</button>
                                            <label class="input-info-save mb-0"><input type="checkbox" name="agree"> Recordarme</label>
                                            <p class="mt-30"><a href="register.html">¿Perdiste tu contraseña?</a></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__checkout-single-content ltn__coupon-code-wrap">
                                <h5>¿Tienes un cupón? <a class="ltn__secondary-color" href="#ltn__coupon-code" data-bs-toggle="collapse">Haz clic aquí para ingresar tu código</a></h5>
                                <div id="ltn__coupon-code" class="collapse ltn__checkout-single-content-info">
                                    <div class="ltn__coupon-code-form">
                                        <p>Si tienes un código de cupón, aplícalo a continuación.</p>
                                        <form action="#">
                                            <input type="text" name="coupon-code" placeholder="Código de cupón">
                                            <button class="btn theme-btn-2 btn-effect-2 text-uppercase">Aplicar cupón</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__checkout-single-content mt-50">
                                <h4 class="title-2">Detalles de facturación</h4>
                                <div class="ltn__checkout-single-content-info">
                                    <form action="#">
                                        <h6>Información personal</h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-item input-item-name ltn__custom-icon">
                                                    <input type="text" name="ltn__name" placeholder="Nombre" id="fname" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-item-name ltn__custom-icon">
                                                    <input type="text" name="ltn__lastname" placeholder="Apellido" id="lname" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-item-email ltn__custom-icon">
                                                    <input type="email" name="ltn__email" placeholder="Correo electrónico" id="email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-item-phone ltn__custom-icon">
                                                    <input type="text" name="ltn__phone" placeholder="Número de teléfono" id="phone" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-item-website ltn__custom-icon">
                                                    <input type="text" name="ltn__company" placeholder="Nombre de la empresa (opcional)">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-item-website ltn__custom-icon">
                                                    <input type="text" name="ltn__phone" placeholder="Dirección de la empresa (opcional)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <h6>País</h6>
                                                <div class="input-item">
                                                    <select class="nice-select" id="country" required>
                                                        <option>Selecciona un país</option>
                                                        <option>Australia</option>
                                                        <option>Canadá</option>
                                                        <option>China</option>
                                                        <option>Marruecos</option>
                                                        <option>Arabia Saudita</option>
                                                        <option>Reino Unido (UK)</option>
                                                        <option>Estados Unidos (US)</option>
                                                        <option selected>México</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <h6>Dirección</h6>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="input-item">
                                                            <input type="text" placeholder="Número y nombre de la calle" id="street" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item">
                                                            <input type="text" placeholder="Apartamento, suite, unidad, etc." id="interiornumber" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item">
                                                            <input type="text" placeholder="Numero exterior" id="exteriornumber" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <h6>Ciudad / Pueblo</h6>
                                                <div class="input-item">
                                                    <input type="text" placeholder="Ciudad" id="town" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <h6>Estado</h6>
                                                <div class="input-item">
                                                    <input type="text" placeholder="Estado" id="state" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <h6>Código Postal</h6>
                                                <div class="input-item">
                                                    <input type="text" placeholder="Código Postal" id="zipcode" required>
                                                </div>
                                            </div>
                                        </div>
                                        <p><label class="input-info-save mb-0"><input type="checkbox" name="agree"> ¿Crear una cuenta?</label></p>
                                        <h6>Notas del pedido</h6>
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <textarea name="ltn__message" placeholder="Notas sobre tu pedido, por ejemplo, instrucciones especiales para la entrega." id="notes" required></textarea>
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
                            <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit" @click="realizarOrden()">Realizar pedido</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="shoping-cart-total mt-50">
                            <h4 class="title-2">Total del Carrito</h4>
                            <table class="table">
                                <tbody>
                                    <tr v-for="(p, index) in filtered_productos">
                                        <td> {{p.NOMBRE}} <strong> × {{cantidad[index]}}</strong></td>
                                        <td> $ {{filtered_amount[index]}}</td>
                                    </tr>
                                    <tr>
                                        <td>Envío</td>
                                        <td>GRATIS</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total</strong></td>
                                        <td><strong>${{total}}</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- WISHLIST AREA START -->

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
    <!-- Tienda JS -->
    <script src="js/tienda.js"></script>
    <!-- Top Products JS -->
    <script src="js/top-products.js"></script>
    <!-- Carrito Number JS-->
    <script src="<?php echo $ref_rel; ?>js/cart-number.js"></script>
    <!-- Carrito Header JS -->
    <script src="<?php echo $ref_rel; ?>js/carrito-header.js"></script>
    <!-- Checkout JS-->
    <script src="<?php echo $ref_rel; ?>js/checkout.js"></script>

</body>

</html>