<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de productos</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Lista</a></li>
  <li><a data-toggle="tab" href="#add">Agregar / Modificar</a></li>
</ul>

<div class="tab-content">
	<div id="listas" class="tab-pane fade in active">
		<div id="dvLista">
			
		</div>
	</div>
	
	<div id="add" class="tab-pane fade">
		<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
			<div class="box">
				<div class="box-body">
					<div class="form-group">
						<label for="txtNombre" class="col-sm-2">Nombre</label>
						<div class="col-sm-6">
							<input class="form-control" id="txtNombre" name="txtNombre">
						</div>
					</div>
					<div class="form-group">
						<label for="selCategoria" class="col-sm-2">Categoría</label>
						<div class="col-sm-6">
							<select id="selCategoria" name="selCategoria" class="form-control">
								{foreach from=$categorias item="row"}
									<option value="{$row.idCategoria}">{$row.nombre}</option>
								{/foreach}
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="txtDescripcion" class="col-sm-2">Descripción</label>
						<div class="col-sm-10">
							<textarea id="txtDescripcion" name="txtDescripcion" class="form-control" rows="10"></textarea>
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
				</div>
			</div>
		</form>
	</div>
</div>

{include file=$PAGE.rutaModulos|cat:"modulos/productos/winImagenes.tpl"}
{include file=$PAGE.rutaModulos|cat:"modulos/productos/conceptos/panel.tpl"}