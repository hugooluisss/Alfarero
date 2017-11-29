<div id="main">
	<section class="hero-home">
		<div class="container">
			<div class="hero-home-img">
				<span><h1 class="postZoomInDown">Catálogo de Regalos</h1></span>
			</div>
		</div>
	</section>

	<section class="intro-home">
		<div class="container">
			<div class="row">
				<div class="postBounceInLeft col-md-8">
					{$secciones['home01']['codigo']}
				
					<!--
					<h1>Querida Familia de Casa del Alfarero</h1>
					<p>Cada año continuamos sirviendo en fé, realizando acciones para mostrar el amor de Dios a las comunidades más necesitadas del país, no hacemos este trabajo solos, sino con el poder de Cristo y el admirable compromiso de ustedes, nuestros aliados.</p>
					<p>Queremos compartir con ustedes el Catálogo de Regalos 2017-2018, el cual representa una oportunidad de honrar a familiares y amigos a través de bendecir a las personas en condiciones de pobreza.
					</p>
					<h2>Dar un regalo en honor a un ser querido en su cumpleaños, aniversario o cualquier ocasión especial es muy fácil:</h2>
					-->
				</div>
				<div class="col-md-4">
					<img class="postBounceInRight" src="{$PAGE.ruta}tarjetas/images/home/img-intro.jpg" />
				</div>
			</div>
		</div>
	</section>
</div>

{foreach from=$categorias item="categoria"}
	{include file=$PAGE.rutaModulos|cat:"modulos/front-end/categoria.tpl"}
{/foreach}



{include file=$PAGE.rutaModulos|cat:"modulos/front-end/winProducto.tpl"}