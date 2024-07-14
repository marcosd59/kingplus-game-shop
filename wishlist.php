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
                                <h1 class="section-title white-color">Wishlist</h1>
                            </div>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li class="ltn__secondary-color-4">Wishlist</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <!-- WISHLIST AREA START -->
        <div class="liton__wishlist-area mb-105">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping-cart-inner">
                            <div class="shoping-cart-table table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="cart-product-remove">x</td>
                                            <td class="cart-product-image">
                                                <a href="product-details.html"><img src="img/product/1.png" alt="#"></a>
                                            </td>
                                            <td class="cart-product-info">
                                                <h4><a href="product-details.html">Vegetables Juices</a></h4>
                                            </td>
                                            <td class="cart-product-price">$85.00</td>
                                            <td class="cart-product-stock">In Stock</td>
                                            <td class="cart-product-add-cart">
                                                <a class="submit-button-1" href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">Add to Cart</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="cart-product-remove">x</td>
                                            <td class="cart-product-image">
                                                <a href="product-details.html"><img src="img/product/2.png" alt="#"></a>
                                            </td>
                                            <td class="cart-product-info">
                                                <h4><a href="product-details.html">Orange Fresh Juice</a></h4>
                                            </td>
                                            <td class="cart-product-price">$89.00</td>
                                            <td class="cart-product-stock">In Stock</td>
                                            <td class="cart-product-add-cart">
                                                <a class="submit-button-1" href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">Add to Cart</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="cart-product-remove">x</td>
                                            <td class="cart-product-image">
                                                <a href="product-details.html"><img src="img/product/4.png" alt="#"></a>
                                            </td>
                                            <td class="cart-product-info">
                                                <h4><a href="product-details.html">Poltry Farm Meat</a></h4>
                                            </td>
                                            <td class="cart-product-price">$149.00</td>
                                            <td class="cart-product-stock">In Stock</td>
                                            <td class="cart-product-add-cart">
                                                <a class="submit-button-1" href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">Add to Cart</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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

</body>

</html>