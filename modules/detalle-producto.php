<?php

if (!isset($_GET["p"]) || $_GET["p"] == "") {
	echo '<script type="text/javascript">window.history.back();</script>';
}
$data = array(
	"p" => $_GET['p'],
);

$PRODUCTO = get_ecommerce_producto($token, $data['p']);
$PRODUCTO_GENERAL = $PRODUCTO["DATOS_GENERALES_PRODUCTO"];
$PRODUCTO_ADICIONAL = $PRODUCTO["DATOS_ADICIONALES_PRODUCTO"];
$PRODUCTO_FOTOS = $PRODUCTO["FOTOS_PRODUCTO"];
$imagenPrincipal = $global_public_repo . '/' . $PRODUCTO_GENERAL["IMAGEN"];
$imagen2 = $global_public_repo . "/foto_producto/" . $PRODUCTO_FOTOS[0]["IMAGEN"];

echo "<script type='text/javascript'> var idGlobalProducto = " . $PRODUCTO_GENERAL["ID"] . "; var existenciasProducto = " . $PRODUCTO_GENERAL["EXISTENCIAS"] . "; var productoEnVista = " . json_encode($PRODUCTO_GENERAL) . "; </script>";

$etiquetas = explode(', ', $PRODUCTO_GENERAL["ETIQUETAS"]);
?>

<html class="no-js" lang="es">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<title>KingPlus | Game Shop</title>
	<meta name="robots" content="noindex, follow" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!-- Place favicon.png in the root directory -->
	<link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon" />
	<!-- Font Icons css -->
	<link rel="stylesheet" href="../css/font-icons.css" />
	<!-- plugins css -->
	<link rel="stylesheet" href="../css/plugins.css" />
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="../css/style.css" />
	<!-- Responsive css -->
	<link rel="stylesheet" href="../css/responsive.css" />
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
								<h1 class="section-title black-color">Detalles del Producto</h1>
							</div>
							<div class="ltn__breadcrumb-list">
								<ul>
									<li><a href="index.html" style="color:black">Inicio</a></li>
									<li class="ltn__secondary-color-4">Producto</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- BREADCRUMB AREA END -->

	<!-- SHOP DETAILS AREA START -->
	<div class="ltn__shop-details-area pb-85">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="ltn__shop-details-inner mb-60">
						<div class="row">
							<div class="col-md-6">
								<div class="ltn__shop-details-img-gallery">
									<div class="ltn__shop-details-large-img">
										<div class="single-large-img">
											<a href="<?php echo $imagenPrincipal; ?>" data-rel="lightcase:myCollection">
												<img src="<?php echo $imagenPrincipal; ?>" alt="Image">
											</a>
										</div>

										<?php
										foreach ($PRODUCTO_FOTOS as $key => $value) {
											echo '
                    <div class="slider-item">
                        <a href="' . $global_public_repo . '/foto_producto/' . $value["IMAGEN"] . '" data-rel="lightcase:myCollection">
                            <img class="img__producto" src="' . $global_public_repo . '/foto_producto/' . $value["IMAGEN"] . '" alt="Image">
                        </a>
                    </div>
                    ';
										}
										?>
									</div>

									<div class="ltn__shop-details-small-img slick-arrow-2">
										<div class="single-small-img">
											<img src="<?php echo $imagenPrincipal; ?>" alt="Image">
										</div>
										<?php
										foreach ($PRODUCTO_FOTOS as $key => $value) {
											echo '
                    <div class="single-small-img">
                        <img src="' . $global_public_repo . '/foto_producto/' . $value["IMAGEN"] . '" alt="Image">
                    </div>
                    ';
										}
										?>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="modal-product-info shop-details-info pl-0">
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
									<h3><?php echo $PRODUCTO_GENERAL["NOMBRE"]; ?></h3>
									<div class="product-price">
										<span style="font-size: 0.8em;">$<?php echo $PRODUCTO_GENERAL["PRECIO"]; ?></span>
										<del style="font-size: 0.6em;">$<?php echo $PRODUCTO_GENERAL["PRECIO_ORIGINAL"]; ?></del>
									</div>
									<div class="modal-product-meta ltn__product-details-menu-1">
										<ul>
											<li>
												<strong>Categoria:</strong>
												<span>
													<a href="#"><?php echo $PRODUCTO_GENERAL["CATEGORIA"]; ?></a>
												</span>
											</li>
											<li>
												<strong>Etiquetas:</strong>
												<span>
													<?php foreach ($etiquetas as $etiqueta) : ?>
														<a href="#"><?php echo $etiqueta; ?></a>
													<?php endforeach; ?>
												</span>
											</li>

										</ul>
									</div>
									<div class="ltn__product-details-menu-2">
										<ul>
											<li>
												<div class="cart-plus-minus">
													<input id="cantidad_producto" min="1" max="<?php echo $PRODUCTO_GENERAL["EXISTENCIAS"]; ?>" value="1" type="number" :id="p.ID" :value="cantidad[index]" type="text" name="qtybutton" class="cart-plus-minus-box" style="font-size: 13px;">
												</div>
											</li>
											<li>
												<strong>Disponibles:</strong>
												<span><?php echo $PRODUCTO_GENERAL["EXISTENCIAS"]; ?></span>
											</li>
											<li>
												<a href="#" @click="addToCart(p.ID)" class="theme-btn-1 btn btn-effect-1" title="Añadir al carrito" data-bs-toggle="modal">
													<i class="fas fa-shopping-cart"></i>
													<span>AÑADIR AL CARRITO</span>
												</a>
											</li>
										</ul>
									</div>
									<div class="ltn__product-details-menu-3">
										<ul>
											<li>
												<a href="#" class="" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
													<i class="far fa-heart"></i>
													<span>Añadir a la lista de deseos</span>
												</a>
											</li>
											<li>
												<a href="#" class="" title="Compare" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
													<i class="fas fa-exchange-alt"></i>
													<span>Comparar</span>
												</a>
											</li>
										</ul>
									</div>
									<hr>
									<div class="ltn__social-media">
										<ul>
											<li>Compartir:</li>
											<li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
											<li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>

										</ul>
									</div>
									<hr>
									<div class="ltn__safe-checkout">
										<h5>Guaranteed Safe Checkout</h5>
										<img src="<?php echo $ref_rel; ?>img/icons/payment-2.png" alt="Payment Image">
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Shop Tab Start -->
					<div class="ltn__shop-details-tab-inner ltn__shop-details-tab-inner-2">
						<div class="ltn__shop-details-tab-menu">
							<div class="nav">
								<a class="active show" data-bs-toggle="tab" href="#liton_tab_details_1_1">Descripción</a>
								<a data-bs-toggle="tab" href="#liton_tab_details_1_2" class="">Reviews</a>
							</div>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active show" id="liton_tab_details_1_1">
								<div class="ltn__shop-details-tab-content-inner">
									<h4 class="title-2"><?php echo $PRODUCTO_GENERAL["NOMBRE"]; ?></h4>
									<a><?php echo $PRODUCTO_GENERAL["DESCRIPCION"]; ?></a>
								</div>
							</div>
							<div class="tab-pane fade" id="liton_tab_details_1_2">
								<div class="ltn__shop-details-tab-content-inner">
									<h4 class="title-2">Customer Reviews</h4>
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
									<hr>
									<!-- comment-area -->
									<div class="ltn__comment-area mb-30">
										<div class="ltn__comment-inner">
											<ul>
												<li>
													<div class="ltn__comment-item clearfix">
														<div class="ltn__commenter-img">
															<img src="<?php echo $ref_rel; ?>img/testimonial/1.jpg" alt="Image">
														</div>
														<div class="ltn__commenter-comment">
															<h6><a href="#">Adam Smit</a></h6>
															<div class="product-ratting">
																<ul>
																	<li><a href="#"><i class="fas fa-star"></i></a></li>
																	<li><a href="#"><i class="fas fa-star"></i></a></li>
																	<li><a href="#"><i class="fas fa-star"></i></a></li>
																	<li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
																	<li><a href="#"><i class="far fa-star"></i></a></li>
																</ul>
															</div>
															<p>¡Gran producto, estoy muy satisfecho con mi compra!</p>
															<span class="ltn__comment-reply-btn">Marzo 30, 2024</span>
														</div>
													</div>
												</li>
												<li>
													<div class="ltn__comment-item clearfix">
														<div class="ltn__commenter-img">
															<img src="<?php echo $ref_rel; ?>img/testimonial/2.jpg" alt="Image">
														</div>
														<div class="ltn__commenter-comment">
															<h6><a href="#">Samantha Lee</a></h6>
															<div class="product-ratting">
																<ul>
																	<li><a href="#"><i class="fas fa-star"></i></a></li>
																	<li><a href="#"><i class="fas fa-star"></i></a></li>
																	<li><a href="#"><i class="fas fa-star"></i></a></li>
																	<li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
																	<li><a href="#"><i class="far fa-star"></i></a></li>
																</ul>
															</div>
															<p>Excelente calidad, lo recomiendo mucho!</p>
															<span class="ltn__comment-reply-btn">Marzo 15, 2024</span>
														</div>
													</div>
												</li>
												<li>
													<div class="ltn__comment-item clearfix">
														<div class="ltn__commenter-img">
															<img src="<?php echo $ref_rel; ?>img/testimonial/3.jpg" alt="Image">
														</div>
														<div class="ltn__commenter-comment">
															<h6><a href="#">Carlos Mendoza</a></h6>
															<div class="product-ratting">
																<ul>
																	<li><a href="#"><i class="fas fa-star"></i></a></li>
																	<li><a href="#"><i class="fas fa-star"></i></a></li>
																	<li><a href="#"><i class="fas fa-star"></i></a></li>
																	<li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
																	<li><a href="#"><i class="far fa-star"></i></a></li>
																</ul>
															</div>
															<p>Producto increíble, superó mis expectativas!</p>
															<span class="ltn__comment-reply-btn">Marzo 24, 2024</span>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<!-- comment-reply -->
									<div class="ltn__comment-reply-area ltn__form-box mb-30">
										<form action="#">
											<h4 class="title-2">Agregar una reseña</h4>
											<div class="mb-30">
												<div class="add-a-review">
													<h6>Tus calificaciones:</h6>
													<div class="product-ratting">
														<ul>
															<li><a href="#"><i class="fas fa-star"></i></a></li>
															<li><a href="#"><i class="fas fa-star"></i></a></li>
															<li><a href="#"><i class="fas fa-star"></i></a></li>
															<li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
															<li><a href="#"><i class="far fa-star"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="input-item input-item-textarea ltn__custom-icon">
												<textarea placeholder="Escribe tus comentarios...."></textarea>
											</div>
											<div class="input-item input-item-name ltn__custom-icon">
												<input type="text" placeholder="Escribe tu nombre....">
											</div>
											<div class="input-item input-item-email ltn__custom-icon">
												<input type="email" placeholder="Escribe tu correo electrónico....">
											</div>
											<div class="input-item input-item-website ltn__custom-icon">
												<input type="text" name="website" placeholder="Escribe tu sitio web....">
											</div>
											<label class="mb-0"><input type="checkbox" name="agree"> Guardar mi nombre, correo electrónico en este navegador para la próxima vez que comente.</label>
											<div class="btn-wrapper">
												<button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Enviar</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Shop Tab End -->
				</div>
				<div class="col-lg-4">
					<aside class="sidebar ltn__shop-sidebar ltn__right-sidebar">

						<!-- TOP RATED PRODUCTS START -->
						<?php require_once('./modules/top-rated-product.php'); ?>
						<!-- TOP RATED PRODUCTS END -->

						<!-- Banner Widget -->
						<div class="widget ltn__banner-widget">
							<a href="<?php echo $ref_rel; ?>shop.php"><img src="<?php echo $ref_rel; ?>img/banner/2.jpg" alt="#"></a>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>
	<!-- SHOP DETAILS AREA END -->

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

</html>