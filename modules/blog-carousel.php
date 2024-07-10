<div class="ltn__blog-area pt-115 pb-70" id="vue-app-blog">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title-area ltn__section-title-2 text-center">
					<h1 class="section-title white-color---">Último Blog</h1>
				</div>
			</div>
		</div>
		<div class="row ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal">
			<!-- Blog Item -->
			<div class="col-lg-12" v-for="a in articulosLimitados">
				<div class="ltn__blog-item ltn__blog-item-3">
					<div class="ltn__blog-img">
						<a :href="'./articulo/' + a.PERMALINK"><img :src="'<?php echo $global_public_repo; ?>/'+a.IMAGEN" height="80%" alt="#" onerror="this.style.display='none'" /></a>
					</div>
					<div class="ltn__blog-brief">
						<div class="ltn__blog-meta">
							<ul>
								<li class="ltn__blog-author">
									<a href="#"><i class="far fa-user"></i>por: {{a.AUTOR_ARTICULO}}</a>
								</li>
								<li class="ltn__blog-tags">
									<a href="#"><i class="fas fa-tags"></i>{{a.CATEGORIA}}</a>
								</li>
							</ul>
						</div>
						<h3 class="ltn__blog-title">
							<a :href="'./articulo/' + a.PERMALINK">{{a.TITULO_ARTICULO}}</a>
						</h3>
						<div class="ltn__blog-meta-btn">
							<div class="ltn__blog-meta">
								<ul>
									<li class="ltn__blog-date">
										<i class="far fa-calendar-alt"></i>{{a.FECHA_PUBLICACION}}
									</li>
								</ul>
							</div>
							<div class="ltn__blog-btn">
								<a :href="'./articulo/' + a.PERMALINK">Leer más</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Fin del Blog Item -->
		</div>
	</div>
</div>