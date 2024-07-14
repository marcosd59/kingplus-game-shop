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

<body>

  <!-- Body main wrapper start -->
  <div class="wrapper">

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
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image plr--9---" data-bg="">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
              <div class="section-title-area ltn__section-title-2">
                <h6 class="section-subtitle ltn__secondary-color-4">// Welcome to our company</h6>
                <h1 class="section-title white-color">Tienda</h1>
              </div>
              <div class="ltn__breadcrumb-list">
                <ul>
                  <li><a href="index.php">Inicio</a></li>
                  <li class="ltn__secondary-color-4">Tienda</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- PRODUCT DETAILS AREA START -->
    <div class=" ltn__product-area ltn__product-gutter mb-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="ltn__shop-options">
              <ul>
                <li>
                  <div class="ltn__grid-list-tab-menu ">
                    <div class="nav">
                      <a class="active show" data-bs-toggle="tab" href="#liton_product_grid"><i class="fas fa-th-large"></i></a>
                      <a data-bs-toggle="tab" href="#liton_product_list"><i class="fas fa-list"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="showing-product-number text-right text-end">
                    <span>Mostrando 1–12 de 18 resultados</span>
                  </div>
                </li>
                <li>
                  <div class="short-by text-center">
                    <select class="nice-select">
                      <option>Ordenar por defecto</option>
                      <option>Ordenar por popularidad</option>
                      <option>Ordenar por novedades</option>
                      <option>Ordenar por precio: de menor a mayor</option>
                      <option>Ordenar por precio: de mayor a menor</option>
                    </select>
                  </div>
                </li>
              </ul>
            </div>
            <div class="tab-content" id="vue-app-productos">
              <div class="tab-pane fade active show" id="liton_product_grid">
                <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                  <div class="row">
                    <!-- ltn__product-item -->
                    <div class="col-xl-4 col-sm-6 col-6" v-for="p in productos" id="vue-app-carrito">
                      <div class="ltn__product-item ltn__product-item-3 text-center">
                        <div class="product-img">
                          <a :href="'./detalle-producto/' + p.PERMALINK"><img :src="'<?php echo $global_public_repo; ?>/' + p.IMAGEN" alt="#"></a>
                          <div class="product-badge">
                            <ul>
                              <li class="sale-badge">New</li>
                            </ul>
                          </div>
                          <div class="product-hover-action">
                            <ul>
                              <li>
                                <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                  <i class="far fa-eye"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#" @click="addToCart(p.ID)" title="Añadir al carrito" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                  <i class="fas fa-shopping-cart"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                  <i class="far fa-heart"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="product-info">
                          <div class="product-ratting">
                            <ul>
                              <li><a href="#"><i class="fas fa-star"></i></a></li>
                              <li><a href="#"><i class="fas fa-star"></i></a></li>
                              <li><a href="#"><i class="fas fa-star"></i></a></li>
                              <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                              <li><a href="#"><i class="far fa-star"></i></a></li>
                            </ul>
                          </div>
                          <h2 class="product-title"><a :href="'./detalle-producto/' + p.PERMALINK">{{p.NOMBRE}}</a></h2>
                          <div class="product-price">
                            <span>{{p.PRECIO}}</span>
                            <del>{{p.PRECIO_ORIGINAL}}</del>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ltn__product-item end-->
                  </div>
                </div>
              </div>
            </div>
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
          <div class="col-lg-4">
            <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar">
              <!-- Category Widget -->
              <div class="widget ltn__menu-widget" id="vue-app-productos">
                <h4 class="ltn__widget-title ltn__widget-title-border">Categorías de Productos</h4>
                <ul>
                  <li><a data-bs-toggle="tab" href="#plant1" role="tab" aria-controls="plant1" aria-selected="true" onclick="changeFilter('Videojuegos');">Videojuegos <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                  <li><a href="#">Consolas <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                  <li><a href="#">Controles <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                  <li><a href="#">Teclados <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                  <li><a href="#">PC Gamer <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                  <li><a href="#">Móviles Gamer <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                  <li><a href="#">Gadgets <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                </ul>
              </div>
              <!-- Price Filter Widget -->
              <div class="widget ltn__price-filter-widget">
                <h4 class="ltn__widget-title ltn__widget-title-border">Filtrar por precio</h4>
                <div class="price_filter">
                  <div class="price_slider_amount">
                    <input type="submit" value="Tu rango:" />
                    <input type="text" class="amount" name="price" placeholder="Añade tu precio" />
                  </div>
                  <div class="slider-range"></div>
                </div>
              </div>

              <!-- TOP RATED PRODUCTS START -->
              <?php require_once('./modules/top-rated-product.php'); ?>
              <!-- TOP RATED PRODUCTS END -->

              <!-- Search Widget -->
              <div class="widget ltn__search-widget">
                <h4 class="ltn__widget-title ltn__widget-title-border">Buscar Objetos</h4>
                <form action="#">
                  <input type="text" name="search" placeholder="Palabra clave...">
                  <button type="submit"><i class="fas fa-search"></i></button>
                </form>
              </div>
              <!-- Tagcloud Widget -->
              <div class="widget ltn__tagcloud-widget">
                <h4 class="ltn__widget-title ltn__widget-title-border">Etiquetas Populares</h4>
                <ul>
                  <li><a href="#">Popular</a></li>
                  <li><a href="#">desgin</a></li>
                  <li><a href="#">ux</a></li>
                  <li><a href="#">usability</a></li>
                  <li><a href="#">develop</a></li>
                  <li><a href="#">icon</a></li>
                  <li><a href="#">Car</a></li>
                  <li><a href="#">Service</a></li>
                  <li><a href="#">Repairs</a></li>
                  <li><a href="#">Auto Parts</a></li>
                  <li><a href="#">Oil</a></li>
                  <li><a href="#">Dealer</a></li>
                  <li><a href="#">Oil Change</a></li>
                  <li><a href="#">Body Color</a></li>
                </ul>
              </div>
              <!-- Size Widget -->
              <div class="widget ltn__tagcloud-widget ltn__size-widget">
                <h4 class="ltn__widget-title ltn__widget-title-border">Tamaño del Producto</h4>
                <ul>
                  <li><a href="#">S</a></li>
                  <li><a href="#">M</a></li>
                  <li><a href="#">L</a></li>
                  <li><a href="#">XL</a></li>
                  <li><a href="#">XXL</a></li>
                </ul>
              </div>
              <!-- Color Widget -->
              <div class="widget ltn__color-widget">
                <h4 class="ltn__widget-title ltn__widget-title-border">Color del Producto</h4>
                <ul>
                  <li class="black"><a href="#"></a></li>
                  <li class="white"><a href="#"></a></li>
                  <li class="red"><a href="#"></a></li>
                  <li class="silver"><a href="#"></a></li>
                  <li class="gray"><a href="#"></a></li>
                  <li class="maroon"><a href="#"></a></li>
                  <li class="yellow"><a href="#"></a></li>
                  <li class="olive"><a href="#"></a></li>
                  <li class="lime"><a href="#"></a></li>
                  <li class="green"><a href="#"></a></li>
                  <li class="aqua"><a href="#"></a></li>
                  <li class="teal"><a href="#"></a></li>
                  <li class="blue"><a href="#"></a></li>
                  <li class="navy"><a href="#"></a></li>
                  <li class="fuchsia"><a href="#"></a></li>
                  <li class="purple"><a href="#"></a></li>
                  <li class="pink"><a href="#"></a></li>
                  <li class="nude"><a href="#"></a></li>
                  <li class="orange"><a href="#"></a></li>

                  <li><a href="#" class="orange"></a></li>
                  <li><a href="#" class="orange"></a></li>
                </ul>
              </div>
              <!-- Banner Widget -->
              <div class="widget ltn__banner-widget">
                <a href="shop.php"><img src="img/banner/banner-2.jpg" alt="#"></a>
              </div>

            </aside>
          </div>
        </div>
      </div>
    </div>
    <!-- PRODUCT DETAILS AREA END -->

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
                        <img src="img/product/4.png" alt="#">
                      </div>
                    </div>
                    <div class="col-lg-6 col-12">
                      <div class="modal-product-info">
                        <div class="product-ratting">
                          <ul>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                            <li><a href="#"><i class="far fa-star"></i></a></li>
                            <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
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
                                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                              </div>
                            </li>
                            <li>
                              <a href="#" class="theme-btn-1 btn btn-effect-1" title="Añadir al carrito" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
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
                        <hr>
                        <div class="ltn__social-media">
                          <ul>
                            <li>Share:</li>
                            <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>

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
                        <h5><a href="product-details.php"></a></h5>
                        <p class="added-cart"><i class="fa fa-check-circle"></i> Añadido exitosamente a su carrito</p>
                        <div class="btn-wrapper">
                          <a href="<?php echo $ref_rel; ?>cart.php" class="theme-btn-1 btn btn-effect-1">Ver Carrito</a>
                          <a href="<?php echo $ref_rel; ?>checkout.php" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                        </div>
                      </div>
                      <!-- additional-info -->
                      <div class="additional-info d-none">
                        <p>We want to give you <b>10% discount</b> for your first order, <br> Use discount code at checkout</p>
                        <div class="payment-method">
                          <img src="img/icons/payment.png" alt="#">
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