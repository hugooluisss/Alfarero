<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Tarjetas de regalo</h1>
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
		<form role="form" id="frmImagen" action="?mod=ctarjetas&action=add" class="form-horizontal" onsubmit="javascript: return false;" enctype="multipart/form-data">
			<div class="box">
				<div class="box-body">
					<input type="file" name="upl" />
				</div>
			</div>
		</form>
	</div>
</div>