<div id="ltn__utilize-cart-menu" class="vue-app-carrito-header ltn__utilize ltn__utilize-cart-menu" data-vue-id="vue-app-carrito-header">
	<div class="ltn__utilize-menu-inner ltn__scrollbar">
		<div class="ltn__utilize-menu-head">
			<span class="ltn__utilize-menu-title">Cart</span>
			<button class="ltn__utilize-close">×</button>
		</div>
		<div class="mini-cart-product-area ltn__scrollbar" v-for="(p, index) in filtered_productos" :key="p.ID">
			<div class="mini-cart-item clearfix">
				<div class="mini-cart-img">
					<a :href="'<?php echo $ref_rel; ?>./detalle-producto/' + p.PERMALINK"><img :src="'<?php echo $global_public_repo; ?>/' + p.IMAGEN" alt="Image"></a>
					<span class="mini-cart-item-delete" @click="eliminarProducto(p.ID)"><i class="icon-cancel"></i></span>
				</div>
				<div class="mini-cart-info">
					<h6><a :href="'<?php echo $ref_rel; ?>./detalle-producto/' + p.PERMALINK">{{p.NOMBRE}}</a></h6>
					<span class="mini-cart-quantity">{{cantidad[index]}} x ${{p.PRECIO}}</span>
				</div>
			</div>
		</div>
		<div class="mini-cart-footer">
			<div class="mini-cart-sub-total">
				<h5>Subtotal: <span>${{total.toFixed(2)}}</span></h5>
			</div>
			<div class="btn-wrapper">
				<a href="<?php echo $ref_rel; ?>cart.php" class="theme-btn-1 btn btn-effect-1">Ver Carrito</a>
				<a href="<?php echo $ref_rel; ?>checkout.php" class="theme-btn-2 btn btn-effect-2">Checkout</a>
			</div>
			<p>¡Envío gratis en todos los pedidos superiores a $1000!</p>
		</div>
	</div>
</div>