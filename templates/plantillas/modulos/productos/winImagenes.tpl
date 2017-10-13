<div id="winImagenes" class="modal fade" role="dialog" producto="">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Imágenes</h4>
			</div>
			<div class="modal-body">
				<form role="form" id="frmImagen" action="?mod=cproductos&action=uploadImagen" class="form-horizontal" onsubmit="javascript: return false;" enctype="multipart/form-data">
					<input type="file" name="upl" />
				</form>
				<hr />
				<div class="row lstImagenes">
				</div>
			</div>
		</div>
	</div>
</div>