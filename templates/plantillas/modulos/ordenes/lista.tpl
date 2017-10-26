<table id="tblDatos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Fecha</th>
			<th>Estado</th>
			<th>Cliente</th>
			<th>Teléfono</th>
			<th>Correo</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$lista item="row"}
			<tr title="{$row.estado}">
				<td style="border-left: 3px solid {$row.color}">{$row.idOrden}</td>
				<td>{$row.fecha}</td>
				<td>{$row.estado}</td>
				<td>{$row.cliente}</td>
				<td>{$row.telefono}</td>
				<td>{$row.correo}</td>
				<td style="text-align: right">
					<a href="?mod=cordenes&action=imprimir&id={$row.idOrden}" target="_blank" class="btn btn-primary btn-xs" action="detalle" title="Ver detalle"><i class="fa fa-file-pdf-o"></i></button>
				</td>
			</tr>
		{/foreach}
	</tbody>
</table>