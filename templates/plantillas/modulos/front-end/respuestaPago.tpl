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
			
		{/if}
	</div>
</div>