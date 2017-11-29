<form class="form-horizontal" action="#" id="frmSendTarjeta">
	<div class="modal fade" id="winTarjeta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" datos="">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="wrap-modal-title row">
							<div class="col-md-3"><img src="{$PAGE.ruta}tarjetas/images/elements/rombo-modal-left.png"></div>
							<div class="col-md-6"><h4>Tarjetas de honor</h4></div>
							<div class="col-md-3"><img src="{$PAGE.ruta}tarjetas/images/elements/rombo-modal-right.png"></div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-6 dvTarjeta">
								<img id="imgEncabezado" />
								<img id="imgPie" src="repositorio/tarjetas/pie/producto{$producto}.jpg" />
							</div>
							<div class="col-xs-12 col-sm-6 text-left ecard">
								<h3 class="text-left">Esta tarjeta es para</h3>
								<div class="form-group">
									<label for="txtNombrePara" class="col-xs-6">Nombre y apellidos:</label>
									<div class="col-xs-6">
										<input type="text" class="form-control" id="txtNombrePara" name="txtNombrePara" required="true">
									</div>
								</div>
								<div class="form-group">
									<label for="txtEmailPara" class="col-xs-6">Email:</label>
									<div class="col-xs-6">
										<input type="email" class="form-control" id="txtEmailPara" name="txtEmailPara" required="true">
									</div>
								</div>
								<h3>De:</h3>
								<div class="form-group">
									<label for="txtNombreDe" class="col-xs-6">Nombre y apellidos:</label>
									<div class="col-xs-6">
										<input type="text" class="form-control" id="txtNombreDe" name="txtNombreDe" required="true">
									</div>
								</div>
								<div class="form-group">
									<label for="txtEmailDe" class="col-xs-6">Email:</label>
									<div class="col-xs-6">
										<input type="email" class="form-control" id="txtEmailDe" name="txtEmailDe" required="true">
									</div>
								</div>
								
							</div>
							<div class="col-xs-12 col-sm-6 text-left imprimir">
								<h3 class="text-left">Danos el correo a donde enviar la tarjeta para imprimir</h3>
								<div class="form-group">
									<label for="txtNombreParaImp" class="col-xs-6">Nombre y apellidos:</label>
									<div class="col-xs-6">
										<input type="text" class="form-control" id="txtNombreParaImp" name="txtNombreParaImp" required="true">
									</div>
								</div>
								<div class="form-group">
									<label for="txtEmailParaImp" class="col-xs-6">Email:</label>
									<div class="col-xs-6">
										<input type="email" class="form-control" id="txtEmailParaImp" name="txtEmailParaImp" required="true">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cambiar tarjeta</button>
					<button type="submit" class="add-to-cart">Enviar</button>
				</div>
			</div>
		</div>
	</div>
</form>