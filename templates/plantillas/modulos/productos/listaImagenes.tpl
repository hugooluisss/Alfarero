{foreach from=$imagenes item="row"}
	<div class="col-xs-12 col-sm-6">
		<img src="{$row}" ruta="{$row}" style="width: 100%; cursor: pointer" title="Click/Tap para eliminar"/>
	</div>
{foreachelse}
	<div class="col-xs-12">
		No hay imágenes asociadas al producto
	</div>
{/foreach}