<!DOCTYPE html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<base href="{$PAGE.url}index.php" target="_top">
	
		<!--Description-->
		<meta name="description" content="{$PAGE.objModulo["descripcion"]}">
	
		<!--Title-->
		<title>{$PAGE.objModulo.titulo}</title>
	
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{$PAGE.ruta}tarjetas/css/bootstrap.min.css">
	    
	    <!-- Style CSS -->
	    {if $PAGE.debug}
			<link rel="stylesheet/less" type="text/css" href="{$PAGE.ruta}tarjetas/css/style.less"/>
		{else}
			<link href="{$PAGE.ruta}tarjetas/css/style.css" rel="stylesheet" type="text/css">
		{/if}
		
		<!-- Style Animate CSS -->
		<link href="{$PAGE.ruta}tarjetas/css/animate.css" rel="stylesheet" type="text/css">
	
		<!-- Style CSS -->
		<link rel="stylesheet" href="{$PAGE.ruta}dist/css/font-awesome.min.css">
	</head>
	<body>
		<header>
			<nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-lg">
				<a class="navbar-brand" href="/beta">
					<img src="{$PAGE.ruta}tarjetas/images/logo.png" alt="Logo Alfarero">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="navbar-toggler-icon"></i>
				</button>
	
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-icon" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" 	aria-haspopup="true" aria-expanded="false">
								Nuestro Trabajo
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Historia</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Acerca de Nosotros</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Involucrate</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Dona</a>
						</li>
					</ul>
					<div class="cart my-2 my-lg-0">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i> carrito <a href="#" class="totalCarrito">({$totalProductosCarrito})</a>
					</div>
				</div>
			</nav>
		</header>
		
		{if $PAGE.vista neq ''}
			{include file=$PAGE.vista}
		{/if}
		
		<!--<script src="{$PAGE.ruta}tarjetas/js/jquery-3.2.1.slim.min.js"></script>-->
		<script src="{$PAGE.ruta}plugins/jQuery/jQuery-2.1.4.min.js"></script>
	    <script src="{$PAGE.ruta}tarjetas/js/popper.min.js"></script>
	    <script src="{$PAGE.ruta}tarjetas/js/bootstrap.min.js"></script>
	    <script src="{$PAGE.ruta}tarjetas/js/viewportchecker.js"></script>
	    
	    <script type="text/javascript" src="{$PAGE.ruta}plugins/validate/validate.es.js"></script>
	    <script type="text/javascript" src="{$PAGE.ruta}plugins/validate/validate.js"></script>
	    
	    {foreach from=$PAGE.scriptsJS item=script}
			<script type="text/javascript" src="{$script}?m={rand()}"></script>
		{/foreach}
		
	   	<script src="{$PAGE.ruta}plugins/less.min.js" type="text/javascript"></script>
	</body>
</html>