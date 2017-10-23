<h6>Quiero donar:</h6>
<div class="panel">
	<table style="width: 100%;">
		<thead>
			<tr>
				<td colspan="2">Cátalogo de regalos</td>
			</tr>
			<tr>
				<td>Cant</td>
				<td>Descripción</td>
				<td>Total</td>
			</tr>
		</thead>
		<tbody>
			{assign var="total" value=0 nocache}

			{foreach from=$conceptos item="row"}
				{assign var="total" value=$total+($row.cantidad*$row.precio) nocache}
				<tr>
					<td>{$row.cantidad}</td>
					<td>{$row.descripcion}</td>
					<td class="text-right">Q.{$row.precio}</td>
				</tr>
			{/foreach}
		</tbody>
		<tfoot>
			<tr>
				<td colspan="2" class="text-right">Total</td>
				<td class="text-right">Q.{$total}</td>
			</tr>
		</tfoot>
	</table>
	<br />
	<div class="text-right">
		<a href="carrito" class="btn btn-yellow btn-xs">Donar</a>
	</div>
</div>