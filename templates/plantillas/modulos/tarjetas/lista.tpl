<div class="box">
	<div class="box-body">
		<div class="row">
		{foreach from=$archivos item="row"}
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 text-center">
				<img src="{$directorio}{$row}" class="img-responsive" style="cursor: pointer" title="Click para eliminar" action="eliminar">
			</div>
		{/foreach}
	</div>
</div>