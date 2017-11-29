<form role="form" id="frmConceptos" class="form-horizontal" onsubmit="javascript: return false;">
	<div id="winConceptos" class="modal fade" role="dialog" producto="">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Agregar/Modificar concepto</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="txtNombre" class="col-sm-2">Descripción</label>
						<div class="col-sm-6">
							<input class="form-control" id="txtDescripcion" name="txtDescripcion">
						</div>
					</div>
					<div class="form-group">
						<label for="selCategoria" class="col-sm-2">Precio</label>
						<div class="col-sm-3">
							<input class="form-control text-right" id="txtPrecio" name="txtPrecio" value="0">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<input type="hidden" id="id"/>
					<input type="hidden" id="producto"/>
					<button type="reset" id="btnResetConcepto" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
				</div>
			</div>
		</div>
	</div>
</form>


<div id="winListaConceptos" class="modal fade" role="dialog" producto="">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Lista de conceptos</h4>
			</div>
			<div class="modal-body">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary pull-right" data-toggle="modal" id="btnAddNewConcepto">Agregar producto</button>
			</div>
		</div>
	</div>
</div>