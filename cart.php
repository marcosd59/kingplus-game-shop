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

<!-- preloader area start -->
<?php require_once('./modules/preloader.php'); ?>
<!-- preloader area end -->

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
                                <h1 class="section-title white-color">Carrito</h1>
                            </div>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li class="ltn__secondary-color-4">Carrito</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <!-- SHOPING CART AREA START -->
        <div class="liton__shoping-cart-area mb-120" id="vue-app-carrito">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping-cart-inner">
                            <div class="shoping-cart-table table-responsive">
                                <table class="table">
                                    <thead>
                                        <th class="cart-product-remove">Remover</th>
                                        <th class="cart-product-image">Imagen</th>
                                        <th class="cart-product-info">Producto</th>
                                        <th class="cart-product-price">Precio</th>
                                        <th class="cart-product-quantity">Cantidad</th>
                                        <th class="cart-product-subtotal">Subtotal</th>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(p, index) in filtered_productos">
                                            <td class="cart-product-remove" @click="eliminarProducto(p.ID)">
                                                x
                                            </td>
                                            <td class="cart-product-image">
                                                <a :href="'./detalle-producto/' + p.PERMALINK"><img :src="'<?php echo $global_public_repo; ?>/' + p.IMAGEN" alt="#"></a>
                                            </td>
                                            <td class="cart-product-info">
                                                <h4>
                                                    <a :href="'./detalle-producto/' + p.PERMALINK" style="display: inline-block; max-width: 250px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; vertical-align: top;">
                                                        {{p.NOMBRE}}
                                                    </a>
                                                </h4>
                                            </td>
                                            <td class="cart-product-price">${{p.PRECIO}}
                                            </td>
                                            <td class="cart-product-quantity">
                                                <div class="cart-plus-minus">
                                                    <div type="button" value="-" @click="cambiarCantidad(p.ID, false, p.EXISTENCIAS)" class="dec qtybutton">-</div>
                                                    <input id="cantidad_producto" min="1" :max="p.EXISTENCIAS" value="1" type="number" :id="p.ID" :value="cantidad[index]" type="text" name="qtybutton" class="cart-plus-minus-box" style="font-size: 13px;">
                                                    <div type="button" value="+" @click="cambiarCantidad(p.ID, true, p.EXISTENCIAS)" class="inc qtybutton">+</div>
                                                </div>
                                                <div class="disponibles">
                                                    <strong style="font-size: 12px; ">Disponibles:</strong>
                                                    <span style="font-size: 12px;">{{p.EXISTENCIAS}}</span>
                                                </div>

                                                <style>
                                                    .disponibles {
                                                        display: flex;
                                                        align-items: center;
                                                        font-size: 10px;
                                                    }

                                                    /* Estilos para pantallas grandes (modo PC) */
                                                    @media (min-width: 768px) {
                                                        .disponibles {
                                                            justify-content: flex-start;
                                                            margin-left: 2rem;
                                                        }

                                                        .disponibles strong {
                                                            margin-right: 5px;
                                                        }
                                                    }

                                                    /* Estilos para pantallas pequeñas (modo teléfono) */
                                                    @media (max-width: 767px) {
                                                        .disponibles {
                                                            justify-content: center;
                                                            text-align: center;
                                                            margin-left: 0;
                                                        }

                                                        .disponibles strong,
                                                        .disponibles span {
                                                            margin: 0 5px;
                                                        }
                                                    }
                                                </style>
                                            </td>
                                            <td class="cart-product-subtotal">${{ filtered_amount[index] }}</td>
                                        </tr>
                                        <tr class="cart-coupon-row">
                                            <td colspan="6">
                                                <div class="cart-coupon">
                                                    <input type="text" name="cart-coupon" placeholder="Código del Cupón">
                                                    <button type="submit" class="btn theme-btn-2 btn-effect-2">Aplicar cupón</button>
                                                </div>
                                            </td>
                                            <td>
                                                <button type="button" :disabled="!hasProductsInCart" onclick="window.location.reload(true);" class="btn theme-btn-2 btn-effect-2-- ">Actualizar carrito</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="shoping-cart-total mt-50">
                                <h4>Total del Carrito</h4>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Envío</td>
                                            <td>GRATIS</td>
                                        </tr>
                                        <tr>
                                            <td>IVA</td>
                                            <td>${{iva}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Total del Pedido</strong></td>
                                            <td><strong>${{total}}.00</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="btn-wrapper text-right text-end">
                                    <a href="checkout.php" class="theme-btn-1 btn btn-effect-1">Proceder al Pago</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SHOPING CART AREA END -->

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
    <!-- Carrito JS -->
    <script src="js/carrito.js"></script>
    <!-- Carrito Header -->
    <script src="js/carrito-header.js"></script>
    <!-- Carrito Header Number-->
    <script src="js/cart-number.js"></script>
</body>

</html>