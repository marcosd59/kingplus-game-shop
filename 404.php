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
        <?php require_once('./modules/header-2.php'); ?>
        <!-- HEADER AREA END -->

        <!-- Utilize Cart Menu Start -->
        <?php require_once("./modules/cart-menu.php") ?>
        <!-- Utilize Cart Menu End -->

        <!-- Utilize Mobile Menu Start -->
        <?php require_once('./modules/mobile-menu.php'); ?>
        <!-- Utilize Mobile Menu End -->

        <div class="ltn__utilize-overlay"></div>

        <!-- BREADCRUMB AREA START -->
        <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image pt-115 pb-110" data-bg="img/bg/7.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                            <div class="section-title-area ltn__section-title-2">
                                <h6 class="section-subtitle ltn__secondary-color-4">// Welcome to our company</h6>
                                <h1 class="section-title white-color">404 Page</h1>
                            </div>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li><a href="index.html">Inicio</a></li>
                                    <li class="ltn__secondary-color-4">404</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <!-- 404 area start -->
        <div class="ltn__404-area ltn__404-area-1 mb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="error-404-inner text-center">
                            <!-- Título del error 404 -->
                            <h1 class="error-404-title">404</h1>
                            <!-- Mensaje de página no encontrada -->
                            <h2>¡Página No Encontrada!</h2>
                            <!-- Mensaje de error adicional (comentado por defecto) -->
                            <h3>¡Vaya! Parece que algo salió mal</h3>
                            <!-- Descripción del error -->
                            <p>¡Vaya! La página que estás buscando no existe. Puede que haya sido movida o eliminada.</p>
                            <!-- Botón para volver al inicio -->
                            <div class="btn-wrapper">
                                <a href="index.html" class="btn btn-transparent">
                                    <i class="fas fa-long-arrow-alt-left"></i> VOLVER AL INICIO
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 404 area end -->

        <!-- FOOTER AREA START -->
        <?php require_once('./modules/footer.php'); ?>
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

</body>

</html>