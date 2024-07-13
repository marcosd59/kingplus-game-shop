<div class="ltn__product-area ltn__product-gutter pt-115 pb-70" id="vue-app-product-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title-area ltn__section-title-2 text-center">
					<h1 class="section-title">Productos Destacados</h1>
				</div>
			</div>
		</div>
		<div class="row ltn__tab-product-slider-one-active--- slick-arrow-1">
			<!-- ltn__product-item -->
			<div class="col-lg-3 col-md-4 col-sm-6 col-6" v-for="p in productosLimitados">
				<div class="ltn__product-item ltn__product-item-3 text-left">
					<div class="product-img">
						<a :href="'./detalle-producto/' + p.PERMALINK"><img :src="'<?php echo $global_public_repo; ?>/' + p.IMAGEN" alt="Producto" /></a>
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
							</ul>
						</div>
						<h2 class="product-title">
							<a href="<?php echo $ref_rel; ?>product-details.php">{{p.NOMBRE}}</a>
						</h2>
						<div class="product-price">
							<span>{{p.PRECIO}}</span>
							<del>{{p.PRECIO_ORIGINAL}}</del>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>