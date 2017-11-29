<div id="main">
	<div class="container">
		{if $get_response neq 1}
			<div class="row">
				<div class="col-md-12 title-wrap">
					<h3>Su pago fue declinado</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					Lamentablemente su pago no pudo ser procesado. <b>CREDOMATIC</b> nos respondió lo siguiente:
				</div>
			</div>
			<br /><br />
			<div class="row">
				<div class="col-12 text-center">
					<div class="alert alert-danger">
						{$get_responsetext}
					</div>
				</div>
			</div>
			<br /><br />
			<div class="row">
				<div class="col-12 text-center">
					<a href="carrito">Volver a intentarlo</a>
				</div>
			</div>
		{else}
			    <section class="pasos-carrito">
    
					<div class="container">
						<div class="row">
							<div class="d-none d-md-block col-md-2"><img src="{$PAGE.ruta}tarjetas/images/elements/rombo-category-left.png"/></div>
							<div class="col-md-8"><img src="{$PAGE.ruta}tarjetas/images/elements/pasos003.jpg" alt="Carrito - Paso tres" /></div>
							<div class="d-none d-md-block col-md-2"><img src="{$PAGE.ruta}tarjetas/images/elements/rombo-category-right.png"/></div>
						</div>
					</div>
				</section>
				<div class="row">
					{$secciones['07451112201728']['codigo']}
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-7">
						<h3>Elije una tarjeta de honor</h3>
						<label for="selTipo">Selecciona el tipo de tarjeta</label>
						<select id="selTipo" name="selTipo" class="form-control">
							<option value="ecard">E-Card Tarjeta Digital</option>
							<option value="imprimir">Tarjeta para imprimir</option>
						</select>
						<br />
						<div class="row">
							{foreach from=$archivos item="archivo"}
							<div class="col-xs-6 col-sm-4 text-center">
								<img class="img-responsive winTarjeta" src="{$directorio}{$archivo}" data-toggle="modal" data-target="#winTarjeta"/>
							</div>
							{/foreach}
						</div>
					</div>
					<div class="col-xs-12 col-sm-5"></div>
				</div>
				
				{include file=$PAGE.rutaModulos|cat:"modulos/front-end/winTarjeta.tpl"}
		{/if}
	</div>
</div>
<input type="hidden" id="producto" name="producto" value="{$producto}" />