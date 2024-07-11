<div class="widget ltn__top-rated-product-widget" id="vue-app-top-productos">
	<h4 class="ltn__widget-title ltn__widget-title-border">Productos Destacados</h4>
	<ul>
		<li v-for="p in productos">
			<div class="top-rated-product-item clearfix">
				<div class="top-rated-product-img">
					<a :href="'<?php echo $ref_rel; ?>./detalle-producto/' + p.PERMALINK"><img :src="'<?php echo $global_public_repo; ?>/' + p.IMAGEN" alt="#"></a>
				</div>
				<div class="top-rated-product-info">
					<div class="product-ratting">
						<ul>
							<li><a href="#"><i class="fas fa-star"></i></a></li>
							<li><a href="#"><i class="fas fa-star"></i></a></li>
							<li><a href="#"><i class="fas fa-star"></i></a></li>
							<li><a href="#"><i class="fas fa-star"></i></a></li>
							<li><a href="#"><i class="fas fa-star"></i></a></li>
						</ul>
					</div>
					<h6><a :href="'<?php echo $ref_rel; ?>./detalle-producto/' + p.PERMALINK">{{p.NOMBRE}}</a></h6>
					<div class="product-price">
						<span>{{p.PRECIO}}</span>
						<del>{{p.PRECIO_ORIGINAL}}</del>
					</div>
				</div>
			</div>
		</li>
	</ul>
</div>