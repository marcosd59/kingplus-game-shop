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
        <?php require_once('./modules/cart-menu.php'); ?>
        <!-- Utilize Cart Menu End -->

        <!-- Utilize Mobile Menu Start -->
        <?php require_once('./modules/mobile-menu.php'); ?>
        <!-- Utilize Mobile Menu End -->

        <div class="ltn__utilize-overlay"></div>

        <!-- BREADCRUMB AREA START -->
        <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="img/bg/5.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                            <div class="section-title-area ltn__section-title-2">
                                <h6 class="section-subtitle ltn__secondary-color-4">// Welcome to our company</h6>
                                <h1 class="section-title white-color">About Us</h1>
                            </div>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li class="ltn__secondary-color-4">About Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <!-- ABOUT US AREA START -->
        <div class="ltn__about-us-area pt-120--- pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="about-us-img-wrap about-img-left">
                            <img src="img/others/6.png" alt="About Us Image">
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="about-us-info-wrap">
                            <div class="section-title-area ltn__section-title-2">
                                <h6 class="section-subtitle ltn__secondary-color">Know More About Shop</h6>
                                <h1 class="section-title">Trusted Organic <br class="d-none d-md-block"> Food Store</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                            </div>
                            <p>sellers who aspire to be good, do good, and spread goodness. We
                                democratic, self-sustaining, two-sided marketplace which thrives
                                on trust and is built on community and quality content.</p>
                            <div class="about-author-info d-flex">
                                <div class="author-name-designation  align-self-center">
                                    <h4 class="mb-0">Jerry Henson</h4>
                                    <small>/ Shop Director</small>
                                </div>
                                <div class="author-sign">
                                    <img src="img/icons/icon-img/author-sign.png" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT US AREA END -->

        <!-- FEATURE AREA START ( Feature - 6) -->
        <?php require_once('./modules/features.php'); ?>
        <!-- FEATURE AREA END -->

        <!-- TEAM AREA START (Team - 3) -->
        <?php require_once('./modules/team.php'); ?>
        <!-- TEAM AREA END -->

        <!-- CALL TO ACTION START (call-to-action-5) -->
        <div class="call-to-action-area call-to-action-5 bg-image bg-overlay-theme-90 pt-40 pb-25 d-none" data-bg="img/bg/13.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="call-to-action-inner call-to-action-inner-5 text-center">
                            <h2 class="white-color text-decoration">24/7 Availability, Make <a href="contact.php">An Appointment</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CALL TO ACTION END -->

        <!-- TESTIMONIAL AREA START (testimonial-4) -->
        <?php require_once('./modules/testimonial.php'); ?>
        <!-- TESTIMONIAL AREA END -->

        <!-- FAQ AREA START (faq-2) (ID > accordion_2) -->
        <?php require_once('./modules/faq-area.php'); ?>
        <!-- FAQ AREA START -->

        <!-- NEWSLETTER AREA START -->
        <?php require_once('./modules/newsletter-area.php'); ?>
        <!-- NEWSLETTER AREA END -->

        <!-- BLOG AREA START (blog-3) -->
        <?php require_once('./modules/blog-carousel.php'); ?>
        <!-- BLOG AREA END -->

        <!-- FEATURE AREA START ( Feature - 3) -->
        <?php require_once('./modules/feature-area.php'); ?>
        <!-- FEATURE AREA END -->

        <!-- FOOTER AREA START -->
        <?php require_once('./modules/footer.php'); ?>
        <!-- FOOTER AREA END -->

    </div>
    <!-- Body main wrapper end -->

    <!-- preloader area start -->
    <?php require_once('./modules/preloader.php'); ?>
    <!-- preloader area end -->

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