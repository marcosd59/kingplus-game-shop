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

		<!-- HEADER AREA START (header-5) -->

		<!-- HEADER AREA END -->

		<!-- Utilize Cart Menu Start -->
		<div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
			<div class="ltn__utilize-menu-inner ltn__scrollbar">
				<div class="ltn__utilize-menu-head">
					<span class="ltn__utilize-menu-title">Cart</span>
					<button class="ltn__utilize-close">×</button>
				</div>
				<div class="mini-cart-product-area ltn__scrollbar">
					<div class="mini-cart-item clearfix">
						<div class="mini-cart-img">
							<a href="#"><img src="img/product/1.png" alt="Image"></a>
							<span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
						</div>
						<div class="mini-cart-info">
							<h6><a href="#">Red Hot Tomato</a></h6>
							<span class="mini-cart-quantity">1 x $65.00</span>
						</div>
					</div>
					<div class="mini-cart-item clearfix">
						<div class="mini-cart-img">
							<a href="#"><img src="img/product/2.png" alt="Image"></a>
							<span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
						</div>
						<div class="mini-cart-info">
							<h6><a href="#">Vegetables Juices</a></h6>
							<span class="mini-cart-quantity">1 x $85.00</span>
						</div>
					</div>
					<div class="mini-cart-item clearfix">
						<div class="mini-cart-img">
							<a href="#"><img src="img/product/3.png" alt="Image"></a>
							<span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
						</div>
						<div class="mini-cart-info">
							<h6><a href="#">Orange Sliced Mix</a></h6>
							<span class="mini-cart-quantity">1 x $92.00</span>
						</div>
					</div>
					<div class="mini-cart-item clearfix">
						<div class="mini-cart-img">
							<a href="#"><img src="img/product/4.png" alt="Image"></a>
							<span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
						</div>
						<div class="mini-cart-info">
							<h6><a href="#">Orange Fresh Juice</a></h6>
							<span class="mini-cart-quantity">1 x $68.00</span>
						</div>
					</div>
				</div>
				<div class="mini-cart-footer">
					<div class="mini-cart-sub-total">
						<h5>Subtotal: <span>$310.00</span></h5>
					</div>
					<div class="btn-wrapper">
						<a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
						<a href="cart.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
					</div>
					<p>Free Shipping on All Orders Over $100!</p>
				</div>

			</div>
		</div>
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
								<h1 class="section-title black-color">Detalles del Articulo</h1>
							</div>
							<div class="ltn__breadcrumb-list">
								<ul>
									<li><a href="index.html" style="color:black">Inicio</a></li>
									<li class="ltn__secondary-color-4">Articulo</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- BREADCRUMB AREA END -->

		<!-- PAGE DETAILS AREA START (blog-details) -->
		<div class="ltn__page-details-area ltn__blog-details-area mb-120">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="ltn__blog-details-wrap">
							<div class="ltn__page-details-inner ltn__blog-details-inner" id="vue-app-articulo">
								<div class="ltn__blog-meta">
									<ul>
										<li class="ltn__blog-category">
											<a href="#">{{datos_generales.CATEGORIA}}</a>
										</li>
									</ul>
								</div>
								<h2 class="ltn__blog-title">{{datos_generales.TITULO_ARTICULO}}</h2>
								<div class="ltn__blog-meta">
									<ul>
										<li class="ltn__blog-author">
											<a href="#"><img src="../img/team/4.jpg" alt="#">By: {{datos_generales.AUTOR_ARTICULO}}</a>
										</li>
										<li class="ltn__blog-date">
											<i class="far fa-calendar-alt"></i>{{datos_generales.FECHA_PUBLICACION}}
										</li>
										<li>
											<a href="#"><i class="far fa-comments"></i>35 Comentarios</a>
										</li>
									</ul>
								</div>

								<img :src="'<?php echo $global_public_repo; ?>/' + datos_generales.IMAGEN" alt="Image">
								<!--Cuerpo del articulo-->
								<span v-for="s in secciones">
									<div v-if="s.TIPO === 'texto'">
										<div v-html="s.VALUE" class="content-text-post">
										</div>
									</div>
									<div v-if="s.TIPO === 'youtube'">
										<iframe width="100%" height="480" style="max-height: 50vw" :src="s.VALUE" frameborder="0"></iframe>
									</div>
									<div v-if="s.TIPO === 'imagen'">
										<div>
											<a>
												<figure>
													<img :src="'<?php echo $global_public_repo; ?>/' + s.VALUE.imagen" :alt="s.VALUE">
												</figure>
											</a>
										</div>
									</div>
								</span>

							</div>
							<!-- comment-area -->
							<div class="ltn__comment-area mb-50">
								<h4 class="title-2">03 Comentarios</h4>
								<div class="ltn__comment-inner">
									<ul>
										<li>
											<div class="ltn__comment-item clearfix">
												<div class="ltn__commenter-img">
													<img src="../img/testimonial/1.jpg" alt="Image">
												</div>
												<div class="ltn__commenter-comment">
													<h6><a href="#">Adam Smit</a></h6>
													<span class="comment-date">20 de mayo de 2020</span>
													<p>¡Me encantó el nuevo juego que lanzaron! La jugabilidad es increíble y los gráficos son impresionantes.</p>
													<a href="#" class="ltn__comment-reply-btn"><i class="icon-reply-1"></i>Responder</a>
												</div>
											</div>
											<ul>
												<li>
													<div class="ltn__comment-item clearfix">
														<div class="ltn__commenter-img">
															<img src="../img/testimonial/2.jpg" alt="Image">
														</div>
														<div class="ltn__commenter-comment">
															<h6><a href="#">Samantha Lee</a></h6>
															<span class="comment-date">21 de mayo de 2020</span>
															<p>Los modos multijugador de este juego son súper divertidos. ¡Pasé horas jugando con mis amigos!</p>
															<a href="#" class="ltn__comment-reply-btn"><i class="icon-reply-1"></i>Responder</a>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li>
											<div class="ltn__comment-item clearfix">
												<div class="ltn__commenter-img">
													<img src="../img/testimonial/3.jpg" alt="Image">
												</div>
												<div class="ltn__commenter-comment">
													<h6><a href="#">Carlos Mendoza</a></h6>
													<span class="comment-date">25 de mayo de 2020</span>
													<p>La historia del juego es fascinante y te mantiene enganchado desde el principio hasta el final. ¡Lo recomiendo totalmente!</p>
													<a href="#" class="ltn__comment-reply-btn"><i class="icon-reply-1"></i>Responder</a>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<hr>
							<!-- comment-reply -->
							<div class="ltn__comment-reply-area ltn__form-box mb-10">
								<h4 class="title-2">Publicar Comentario</h4>
								<form action="#">
									<div class="input-item input-item-textarea ltn__custom-icon">
										<textarea placeholder="Escribe tus comentarios..."></textarea>
									</div>
									<div class="input-item input-item-name ltn__custom-icon">
										<input type="text" placeholder="Escribe tu nombre...">
									</div>
									<div class="input-item input-item-email ltn__custom-icon">
										<input type="email" placeholder="Escribe tu correo electrónico...">
									</div>
									<div class="input-item input-item-website ltn__custom-icon">
										<input type="text" name="website" placeholder="Escribe tu sitio web...">
									</div>
									<label class="mb-0 input-info-save"><input type="checkbox" name="agree"> Guarda mi nombre, correo electrónico y sitio web en este navegador para la próxima vez que comente.</label>
									<div class="btn-wrapper">
										<button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit"><i class="far fa-comments"></i> Publicar Comentario</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- BLOG BARRA DERECHA START -->
					<div class="col-lg-4">
						<aside class="sidebar-area blog-sidebar ltn__right-sidebar">
							<!-- Author Widget -->
							<div class="widget ltn__author-widget">
								<h4 class="ltn__widget-title ltn__widget-title-border">Escrito por: </h4>
								<div class="ltn__author-widget-inner text-center">
									<img src="<?php echo $ref_rel; ?>img/team/4.jpg" alt="Image">
									<h5>Marcos D. Pool</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis distinctio, odio, eligendi suscipit reprehenderit atque.</p>
									<div class="ltn__social-media">
										<ul>
											<li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
											<li><a href="#" title="Behance"><i class="fab fa-behance"></i></a></li>
											<li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<?php require_once('./modules/blog-barra.php'); ?>
						</aside>
					</div>
					<!-- BLOG BARRA DERECHA END -->
				</div>
			</div>
		</div>
		<!-- PAGE DETAILS AREA END -->
	</div>
	<!-- Body main wrapper end -->

	<!-- All JS Plugins -->
	<script src="js/plugins.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>
	<!-- Articulo JS -->
	<script src="<?php echo $ref_rel; ?>js/articulo.js"></script>
</body>

</html>