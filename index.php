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
  <link rel="shortcut icon" href="<?php echo $ref_rel; ?>img/favicon.png" type="image/x-icon" />
  <!-- Font Icons css -->
  <link rel="stylesheet" href="<?php echo $ref_rel; ?>css/font-icons.css" />
  <!-- plugins css -->
  <link rel="stylesheet" href="<?php echo $ref_rel; ?>css/plugins.css" />
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="<?php echo $ref_rel; ?>css/style.css" />
  <!-- Responsive css -->
  <link rel="stylesheet" href="<?php echo $ref_rel; ?>css/responsive.css" />
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
  <?php require_once('./modules/header.php'); ?>

  <?php
  if ($_REQUEST["view"] == "")
    echo '<script type="text/javascript">window.location.replace("./inicio");</script>';
  else if (file_exists("modules/" . $_REQUEST["view"] . ".php"))
    include_once "modules/" . $_REQUEST["view"] . ".php";
  else
    echo '<script type="text/javascript">window.location.replace("./inicio");</script>';
  ?>


  <!-- <?php
        if ($_REQUEST["view"] == "") {
          // echo '<script type="text/javascript">window.location.replace("./inicio");</script>';
        } else if (file_exists("modules/" . $_REQUEST["view"] . ".php")) {
          include_once "modules/" . $_REQUEST["view"] . ".php";
        } else {
          // Redirigir a la página 404 si el archivo no existe
          echo '<script type="text/javascript">window.location.replace("./404.php");</script>';
        }
        ?> -->


  <!-- Body main wrapper start -->
  <div class="body-wrapper">

    <!-- Utilize Cart Menu Start -->
    <?php require_once('./modules/cart-menu.php'); ?>
    <!-- Utilize Cart Menu End -->

    <!-- Utilize Mobile Menu Start -->
    <?php require_once('./modules/mobile-menu.php'); ?>
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

    <!-- SLIDER AREA START (slider-3) -->
    <?php require_once('./modules/slider-area.php'); ?>
    <!-- SLIDER AREA END -->

    <!-- BANNER AREA START -->
    <?php require_once('./modules/banner-area.php'); ?>
    <!-- BANNER AREA END -->

    <!-- COUNTDOWN AREA START -->
    <?php require_once('./modules/countdown-area.php'); ?>
    <!-- COUNTDOWN AREA END -->

    <!-- PRODUCT AREA START (product-item-3) -->
    <?php require_once('./modules/product-area.php'); ?>
    <!-- PRODUCT AREA END -->

    <!-- VIDEO AREA START -->
    <?php require_once('./modules/video-area.php'); ?>
    <!-- VIDEO AREA END -->

    <!-- TESTIMONIAL AREA START (testimonial-4) -->
    <?php require_once('./modules/testimonial.php'); ?>
    <!-- TESTIMONIAL AREA END -->

    <!-- BLOG AREA START (blog-3) -->
    <?php require_once('./modules/blog-carousel.php'); ?>
    <!-- BLOG AREA END -->

    <!-- FEATURE AREA START ( Feature - 3) -->
    <?php require_once('./modules/feature-area.php'); ?>
    <!-- FEATURE AREA END -->

    <!-- FOOTER AREA START -->
    <?php require_once('./modules/footer.php'); ?>
    <!-- FOOTER AREA END -->

    <!-- MODAL AREA START (Quick View Modal) -->
    <div class="ltn__modal-area ltn__quick-view-modal-area">
      <div class="modal fade" id="quick_view_modal" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <!-- <i class="fas fa-times"></i> -->
              </button>
            </div>
            <div class="modal-body">
              <div class="ltn__quick-view-modal-inner">
                <div class="modal-product-item">
                  <div class="row">
                    <div class="col-lg-6 col-12">
                      <div class="modal-product-img">
                        <img src="img/product/4.png" alt="#" />
                      </div>
                    </div>
                    <div class="col-lg-6 col-12">
                      <div class="modal-product-info">
                        <div class="product-ratting">
                          <ul>
                            <li>
                              <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                              <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                              <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                              <a href="#"><i class="fas fa-star-half-alt"></i></a>
                            </li>
                            <li>
                              <a href="#"><i class="far fa-star"></i></a>
                            </li>
                            <li class="review-total">
                              <a href="#"> ( 95 Reviews )</a>
                            </li>
                          </ul>
                        </div>
                        <h3>Vegetables Juices</h3>
                        <div class="product-price">
                          <span>$149.00</span>
                          <del>$165.00</del>
                        </div>
                        <div class="modal-product-meta ltn__product-details-menu-1">
                          <ul>
                            <li>
                              <strong>Categories:</strong>
                              <span>
                                <a href="#">Parts</a>
                                <a href="#">Car</a>
                                <a href="#">Seat</a>
                                <a href="#">Cover</a>
                              </span>
                            </li>
                          </ul>
                        </div>
                        <div class="ltn__product-details-menu-2">
                          <ul>
                            <li>
                              <div class="cart-plus-minus">
                                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box" />
                              </div>
                            </li>
                            <li>
                              <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                <i class="fas fa-shopping-cart"></i>
                                <span>ADD TO CART</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="ltn__product-details-menu-3">
                          <ul>
                            <li>
                              <a href="#" class="" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                <i class="far fa-heart"></i>
                                <span>Add to Wishlist</span>
                              </a>
                            </li>
                            <li>
                              <a href="#" class="" title="Compare" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                <i class="fas fa-exchange-alt"></i>
                                <span>Compare</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <hr />
                        <div class="ltn__social-media">
                          <ul>
                            <li>Share:</li>
                            <li>
                              <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                              <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                              <a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <li>
                              <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Add To Cart Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
      <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="ltn__quick-view-modal-inner">
                <div class="modal-product-item">
                  <div class="row">
                    <div class="col-12">
                      <div class="modal-product-info">
                        <h5>
                          <a href="product-details.php"></a>
                        </h5>
                        <p class="added-cart">
                          <i class="fa fa-check-circle"></i> Añadido exitosamente a su carrito
                        </p>
                        <div class="btn-wrapper">
                          <a href="cart.php" class="theme-btn-1 btn btn-effect-1">Ver Carrito</a>
                          <a href="checkout.php" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                        </div>
                      </div>
                      <!-- additional-info -->
                      <div class="additional-info d-none---">
                        <p>
                          We want to give you <b>10% discount</b> for your
                          first order, <br />
                          Use (LoveKingPlus) discount code at checkout
                        </p>
                        <div class="payment-method">
                          <img src="img/icons/payment.png" alt="#" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Wishlist Modal) -->
    <?php require_once('./modules/wishlist-modal.php'); ?>
    <!-- MODAL AREA END -->
  </div>
  <!-- Body main wrapper end -->

  <!-- All JS Plugins -->
  <script src="<?php echo $ref_rel; ?>js/plugins.js"></script>
  <!-- Main JS -->
  <script src="<?php echo $ref_rel; ?>js/main.js"></script>
  <!-- Blog JS -->
  <script src="<?php echo $ref_rel; ?>js/blog.js"></script>
  <!-- Carrito Header JS -->
  <script src="<?php echo $ref_rel; ?>js/carrito-header.js"></script>
  <!-- Carrito Number JS -->
  <script src="<?php echo $ref_rel; ?>js/cart-number.js"></script>
  <!-- Product Area JS -->
  <script src="<?php echo $ref_rel; ?>js/product-area.js"></script>
  <!-- Product Search JS -->
  <script src="<?php echo $ref_rel; ?>js/product-search.js"></script>
  <!-- Checkout JS -->
  <script src="<?php echo $ref_rel; ?>js/checkout.js"></script>
</body>

</html>