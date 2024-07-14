<?php
require "../../functions/apicalls.php";
require "../../functions/apiserver.php";
$token = 'a0fc98488d395f6c2e6565d91c4747ee792';

$dos_niveles = array("articulo");
$ref_rel = "./";
if (in_array($_REQUEST["view"], $dos_niveles)) {
    $ref_rel = "../";
};
?>

<!doctype html>
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
        <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="img/bg/8.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                            <div class="section-title-area ltn__section-title-2">
                                <h6 class="section-subtitle ltn__secondary-color-4">// Welcome to our company</h6>
                                <h1 class="section-title white-color">Blog</h1>
                            </div>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li><a href="index.php" class="white-color">Inicio</a></li>
                                    <li class="ltn__secondary-color-4">Blog</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <!-- BLOG AREA START -->
        <div class="ltn__blog-area mb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="ltn__blog-list-wrap" id="vue-app-blog">
                            <!-- Blog Item -->
                            <div class="ltn__blog-item ltn__blog-item-5" v-for="a in articulos">
                                <div class="ltn__blog-img">
                                    <a :href="'./articulo/' + a.PERMALINK"><img :src="'<?php echo $global_public_repo; ?>/'+a.IMAGEN" alt="Image"></a>
                                </div>
                                <div class="ltn__blog-brief">
                                    <div class="ltn__blog-meta">
                                        <ul>
                                            <li class="ltn__blog-category">
                                                <a :href="'./articulo/' + a.PERMALINK">{{a.CATEGORIA}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="ltn__blog-title"><a :href="'./articulo/' + a.PERMALINK">{{a.TITULO_ARTICULO}}</a></h3>
                                    <div class="ltn__blog-meta">
                                        <ul>
                                            <li>
                                                <a :href="'./articulo/' + a.PERMALINK"><i class="far fa-eye"></i>232 Vistas</a>
                                            </li>
                                            <li>
                                                <a :href="'./articulo/' + a.PERMALINK"><i class="far fa-comments"></i>35 Comentarios</a>
                                            </li>
                                            <li class="ltn__blog-date">
                                                <i class="far fa-calendar-alt"></i>{{a.FECHA_PUBLICACION}}
                                            </li>
                                        </ul>
                                    </div>
                                    <p>{{a.RESUMEN}}</p>
                                    <div class="ltn__blog-meta-btn">
                                        <div class="ltn__blog-meta">
                                            <ul>
                                                <li class="ltn__blog-author">
                                                    <a :href="'./articulo/' + a.PERMALINK"><img src="img/blog/author.jpg" alt="#">{{a.AUTOR_ARTICULO}}</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ltn__blog-btn">
                                            <a :href="'./articulo/' + a.PERMALINK"><i class="fas fa-arrow-right"></i>Leer más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ltn__pagination-area text-center">
                                    <div class="ltn__pagination">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                            <li><a href="#">1</a></li>
                                            <li class="active"><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">...</a></li>
                                            <li><a href="#">10</a></li>
                                            <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- BLOG BARRA DERECHA START -->
                    <div class="col-lg-4">
                        <aside class="sidebar-area blog-sidebar ltn__right-sidebar">
                            <?php require_once('./modules/blog-barra.php'); ?>
                        </aside>
                    </div>
                    <!-- BLOG BARRA DERECHA END -->
                </div>
            </div>
        </div>
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
    <!-- Blog JS -->
    <script src="<?php echo $ref_rel; ?>js/blog.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <!-- Carrito Number JS-->
    <script src="<?php echo $ref_rel; ?>js/cart-number.js"></script>
    <!-- Carrito Header JS -->
    <script src="<?php echo $ref_rel; ?>js/carrito-header.js"></script>
</body>

</html>