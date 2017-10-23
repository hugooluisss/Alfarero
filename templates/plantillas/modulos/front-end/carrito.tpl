<div id="main">
	<section class="pasos-carrito">
		<div class="container">
			<div class="row">
				<div class="d-none d-md-block col-md-2"><img src="{$PAGE.ruta}tarjetas/images/elements/rombo-category-left.png"/></div>
				<div class="col-md-8"><img src="{$PAGE.ruta}tarjetas/images/elements/pasos001.jpg" alt="Carrito - Paso Uno" /></div>
				<div class="d-none d-md-block col-md-2"><img src="{$PAGE.ruta}tarjetas/images/elements/rombo-category-right.png"/></div>
			</div>
		</div>
	</section>
	
	<section class="mi-carrito">
		<div class="container">
			<div class="row">
				<div class="col-md-12 title-wrap">
					<h3>Mi Carrito</h3>
				</div>
			</div>
			
			
			<div class="row detalle-head">
				<div class="col-md-7">
					Regalo
				</div>
				<div class="col-md-1 cantidad">
					Cantidad
				</div>
				<div class="col-md-2 precio">
					Contribución
				</div>
				<div class="col-md-2 subtotal">
					SubTotal
				</div>      
			</div>
			
			{assign var="total" value=0 nocache}

			{foreach from=$carrito item="row"}
				{assign var="total" value=$total+($row.cantidad*$row.precio) nocache}
				<td>{$row.cantidad}</td>
					<td>{$row.descripcion}</td>
					<td class="text-right">Q.{$row.precio}</td>
				<div class="row detalle-item">
					<div class="col-md-7">
						Tutoria para primaria
					</div>
					<div class="col-md-1 cantidad">
						{$row.cantidad}
					</div>
					<div class="col-md-2 precio">
						Q{$row.precio}
					</div>
					<div class="col-md-2 subtotal">
						Q{$row.cantidad*$row.precio}
					</div>  
				</div>
			{/foreach}
			
			<div class="row detalle-total">
				<div class="col-md-8"></div>
				<div class="col-md-2 total">
					Total:
				</div>
				<div class="col-md-2">
					Q{$row.total}
				</div>
			</div>
		</div>   
	</section>
	
	
	<section class="form">
		<div class="container">
			<div class="col-md-6 form-wrap" id="frmTarjeta">
				<form action="confirmar.php" method="">
					<h2>Información de Contacto</h2>
    
					<div class="row wrap-input nombre">
						<div class="col-md-4">
							Nombre y Apellido
						</div>
						<div class="col-md-8">
							<input name="nombreapellido" type="text" required="true" value="Hugo Santiago"/>
						</div>
					</div>

					<div class="row wrap-input telefono">
						<div class="col-md-4">
							Teléfono
						</div>
						<div class="col-md-8">
							<input name="telefono" type="text" required="true" value="9515705278"/>
						</div>
					</div>

					<div class="row wrap-input email">
						<div class="col-md-4">
							Email
						</div>
						<div class="col-md-8">
							<input name="email" type="email" required="true" value="hugooluisss@gmail.com"/>
						</div>
					</div>

					<h2>Información de Pago</h2>

					<div class="row wrap-input numerotarjeta">
						<div class="col-md-4">
							Numero de Tarjeta
						</div>
						<div class="col-md-8">
							<input name="numerotarjeta" type="text" required="true" value="4111411141114111"/>
						</div>
					</div>

					<div class="row wrap-input fechaexpiracion">
						<div class="col-md-4">
							Fecha de Expiración
						</div>
						<div class="col-md-2">
							<select name="exmes" required="true">
								<option value="0">Mes</option>
								<option value="1">01</option>
								<option value="2">02</option>
								<option value="3">03</option>
								<option value="4">04</option>
								<option value="5">05</option>
								<option value="6">06</option>
								<option value="7">07</option>
								<option value="8">08</option>
								<option value="9">09</option>
								<option value="10" selected="selected">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
							</select>
						</div>
						<div class="col-md-2">
							<select name="exano" required="true">
								<option value="0">Año</option>
								<option value="2017" selected="selected">2017</option>
								<option value="2018">2018</option>
								<option value="2019">2019</option>
								<option value="2020">2020</option>
								<option value="2021">2021</option>
								<option value="2022">2022</option>
								<option value="2023">2023</option>
								<option value="2024">2024</option>
								<option value="2025">2025</option>
								<option value="2026">2026</option>
							</select>
						</div>
					</div>

					<div class="row wrap-input cvv">
						<div class="col-md-4">
							Codigo CVV
						</div>
						<div class="col-md-8">
							<input name="cvv" type="text" required="true" value="987"/>
						</div>
					</div>

					<button type="submit" class="guardar">Guardar</button>
				</form>
			</div>
		</div>
	</section>
	
	
	<section class="confirmar" style="display: none">
		<div class="container">
			<div class="row">
				<div class="col-md-6 confirmar-wrap">
					<h2>Información Personal</h2>
					<div class="row wrap-input nombre">
						<div class="col-md-4 txt-input">
							Nombre y Apellido:
						</div>
						<div class="col-md-8" campo="nombreapellido">
							Luisa Rodriguez
						</div>
					</div>

					<div class="row wrap-input telefono">
						<div class="col-md-4 txt-input">
							Teléfono:
						</div>
						<div class="col-md-8" campo="telefono">
							5512 5580
						</div>
					</div>

					<div class="row wrap-input email">
						<div class="col-md-4 txt-input">
							Email:
						</div>
						<div class="col-md-8" campo="email">
							luisadinosaur@gmail.com
						</div>
					</div>
				</div>

				<div class="col-md-6 confirmar-wrap">
					<h2>Información de Pago</h2>
					<div class="row wrap-input numerotarjeta">
						<div class="col-md-4 txt-input">
							Numero de Tarjeta:
						</div>
						<div class="col-md-8" campo="numerotarjeta">
							xxxx xxxx xxxx 1111
						</div>
					</div>

					<div class="row wrap-input fechaexpiracion">
						<div class="col-md-4 txt-input">
							Fecha de Expiración:
						</div>
						<div class="col-md-8" campo="caducidad">
							11/2020
						</div>
					</div>

					<div class="row wrap-input cvv">
						<div class="col-md-4 txt-input">
							Codigo CVV:
						</div>
						<div class="col-md-8" campo="cvv">
						</div>
					</div>
				</div>
			</div>
			<div class="wrap-confirmar-total">
				Cantidad a Donar: Q
			</div>
			<div class="wrap-donar-button">
				<button class="donar">Donar</button>
			</div>
		</div>
	</section>
	
	
	<form id="payment-form" name="CredomaticPost" action="https://paycom.credomatic.com/PayComBackEndWeb/common/requestPaycomService.go" method="post" novalidate="novalidate">
		<!-- Hash: md5("10|1.00|1343361045|{El numero largo del key}"); -->
		<input type="hidden" name="hash" value="{md5($total)}" id="hash">
		<input type="hidden" name="username" value="">
		<!-- Time: Thu Jul 26 2012 21:50:45 GMT-6 -->
		<input type="hidden" name="time" value="1343361045" id="time">
		<input type="text" name="ccnumber" id="ccnumber" value="4012001011000771" class="valid">
		<input type="text" name="ccexp" id="ccexp" value="1219">
		<input type="hidden" name="amount" value="1.00" id="amount">
		<input type="hidden" name="type" value="auth" id="type">
		<input type="hidden" name="orderid" value="10" id="orderid">
		<input type="hidden" name="key_id" value="2476497" id="key_id">
		<input type="hidden" name="processor_id" value="">
		<input type="text" name="cvv" id="cvv" value="">
		<input type="hidden" name="redirect" value="{$PAGE.url}/validarPago" id="redirect">
		<input type="submit" name="edSubmit" value="Pagar">
	</form>
</div>