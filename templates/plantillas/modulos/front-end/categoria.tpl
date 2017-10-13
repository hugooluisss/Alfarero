<section class="category-wrap">   
	<div class="category-intro postBounceInUp">
		<div class="container">
			<div class="row">
				<div class="col-md-3 d-none d-md-block d-xl-block">
					<img class="img-fluid" src="{$PAGE.ruta}tarjetas/images/elements/rombo-category-left.png">
				</div>
				<div class="col-md-6">
					<h2>{$categoria.nombre}</h2>
					<div class="category-intro-txt">
						{$categoria.vista}
					</div>
					<h3>{$categoria.referencia}</h3>
				</div>
				<div class="col-md-3 d-none d-md-block d-xl-block">
					<img class="img-fluid" src="{$PAGE.ruta}tarjetas/images/elements/rombo-category-right.png">
				</div>
			</div>
		</div>
	</div>
	<div class="category-products">
		<div class="container">
			<div class="row">
				{foreach from=$categoria.productos item="producto"}
					<div class="wrap-product col-md-3 postBounceInUp">
						<div class="img-product">
							{if count($producto) == ''}
								<img src="templates/tarjetas/images/products/relleno-sanitario/almuerzo-nutritivo.jpg" />
							{else}
								<img src="{$producto.imagen[0]}">
							{/if}
						</div>
						<div class="title-product">
							{$producto.nombre}
						</div>
						<div class="price-product">Q100</div>
						<div class="button-product">
							<button type="button" class="add-to-cart" data-toggle="modal" data-target="#winProducto" datos='{json_encode($producto)}'>
								Agregar a Carrito
							</button>
						</div>
					</div>
				{/foreach}
			</div>
		</div>
	</div>
</section>