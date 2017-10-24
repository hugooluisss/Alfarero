<?php /* Smarty version Smarty-3.1.11, created on 2017-10-23 22:20:31
         compiled from "templates/plantillas/modulos/front-end/carrito.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122368470159ed10805065c0-52236951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee9c3e919308fcdc12d97b686dd03820a15286ba' => 
    array (
      0 => 'templates/plantillas/modulos/front-end/carrito.tpl',
      1 => 1508815127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122368470159ed10805065c0-52236951',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59ed10805494b0_31211385',
  'variables' => 
  array (
    'PAGE' => 0,
    'carrito' => 0,
    'total' => 0,
    'row' => 0,
    'orden' => 0,
    'hash' => 0,
    'hora' => 0,
    'key_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ed10805494b0_31211385')) {function content_59ed10805494b0_31211385($_smarty_tpl) {?><div id="main">
	<section class="pasos-carrito">
		<div class="container">
			<div class="row">
				<div class="d-none d-md-block col-md-2"><img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
tarjetas/images/elements/rombo-category-left.png"/></div>
				<div class="col-md-8"><img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
tarjetas/images/elements/pasos001.jpg" alt="Carrito - Paso Uno" /></div>
				<div class="d-none d-md-block col-md-2"><img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
tarjetas/images/elements/rombo-category-right.png"/></div>
			</div>
		</div>
	</section>
	
	<section class="mi-carrito">
		<div class="container">
			<div class="row">
				<div class="col-md-12 title-wrap">
					<h3>Mi Carrito</h3>
				</div>
			</div>
			
			
			<div class="row detalle-head">
				<div class="col-md-7">
					Regalo
				</div>
				<div class="col-md-1 cantidad">
					Cantidad
				</div>
				<div class="col-md-2 precio">
					Contribución
				</div>
				<div class="col-md-2 subtotal">
					SubTotal
				</div>      
			</div>
			
			<?php $_smarty_tpl->tpl_vars["total"] = new Smarty_variable(0, true, 0);?>

			<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carrito']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
				<?php $_smarty_tpl->tpl_vars["total"] = new Smarty_variable($_smarty_tpl->tpl_vars['total']->value+($_smarty_tpl->tpl_vars['row']->value['cantidad']*$_smarty_tpl->tpl_vars['row']->value['precio']), true, 0);?>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['cantidad'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['descripcion'];?>
</td>
					<td class="text-right">Q.<?php echo $_smarty_tpl->tpl_vars['row']->value['precio'];?>
</td>
				<div class="row detalle-item">
					<div class="col-md-7">
						Tutoria para primaria
					</div>
					<div class="col-md-1 cantidad">
						<?php echo $_smarty_tpl->tpl_vars['row']->value['cantidad'];?>

					</div>
					<div class="col-md-2 precio">
						Q<?php echo $_smarty_tpl->tpl_vars['row']->value['precio'];?>

					</div>
					<div class="col-md-2 subtotal">
						Q<?php echo $_smarty_tpl->tpl_vars['row']->value['cantidad']*$_smarty_tpl->tpl_vars['row']->value['precio'];?>

					</div>  
				</div>
			<?php } ?>
			
			<div class="row detalle-total">
				<div class="col-md-8"></div>
				<div class="col-md-2 total">
					Total:
				</div>
				<div class="col-md-2">
					Q <?php echo $_smarty_tpl->tpl_vars['orden']->value->getMontoTotal();?>

				</div>
			</div>
		</div>   
	</section>
	
	
	<section class="form">
		<div class="container">
			<div class="col-md-6 form-wrap" id="frmTarjeta">
				<form action="confirmar.php" method="">
					<h2>Información de Contacto</h2>
    
					<div class="row wrap-input nombre">
						<div class="col-md-4">
							Nombre y Apellido
						</div>
						<div class="col-md-8">
							<input name="nombreapellido" type="text" required="true" value="Hugo Santiago"/>
						</div>
					</div>

					<div class="row wrap-input telefono">
						<div class="col-md-4">
							Teléfono
						</div>
						<div class="col-md-8">
							<input name="telefono" type="text" required="true" value="9515705278"/>
						</div>
					</div>

					<div class="row wrap-input email">
						<div class="col-md-4">
							Email
						</div>
						<div class="col-md-8">
							<input name="email" type="email" required="true" value="hugooluisss@gmail.com"/>
						</div>
					</div>

					<h2>Información de Pago</h2>

					<div class="row wrap-input numerotarjeta">
						<div class="col-md-4">
							Numero de Tarjeta
						</div>
						<div class="col-md-8">
							<input name="numerotarjeta" type="text" required="true" value="4111411141114111"/>
						</div>
					</div>

					<div class="row wrap-input fechaexpiracion">
						<div class="col-md-4">
							Fecha de Expiración
						</div>
						<div class="col-md-2">
							<select name="exmes" required="true">
								<option value="0">Mes</option>
								<option value="1">01</option>
								<option value="2">02</option>
								<option value="3">03</option>
								<option value="4">04</option>
								<option value="5">05</option>
								<option value="6">06</option>
								<option value="7">07</option>
								<option value="8">08</option>
								<option value="9">09</option>
								<option value="10" selected="selected">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
							</select>
						</div>
						<div class="col-md-2">
							<select name="exano" required="true">
								<option value="0">Año</option>
								<option value="2017" selected="selected">2017</option>
								<option value="2018">2018</option>
								<option value="2019">2019</option>
								<option value="2020">2020</option>
								<option value="2021">2021</option>
								<option value="2022">2022</option>
								<option value="2023">2023</option>
								<option value="2024">2024</option>
								<option value="2025">2025</option>
								<option value="2026">2026</option>
							</select>
						</div>
					</div>

					<div class="row wrap-input cvv">
						<div class="col-md-4">
							Codigo CVV
						</div>
						<div class="col-md-8">
							<input name="cvv" type="text" required="true" value="987"/>
						</div>
					</div>
					
					<?php if ($_smarty_tpl->tpl_vars['orden']->value->getId()!=''){?>
						<button type="submit" class="guardar">Guardar</button>
					<?php }?>
				</form>
			</div>
		</div>
	</section>
	
	
	<section class="confirmar" style="display: none">
		<div class="container">
			<div class="row">
				<div class="col-md-6 confirmar-wrap">
					<h2>Información Personal</h2>
					<div class="row wrap-input nombre">
						<div class="col-md-4 txt-input">
							Nombre y Apellido:
						</div>
						<div class="col-md-8" campo="nombreapellido">
							Luisa Rodriguez
						</div>
					</div>

					<div class="row wrap-input telefono">
						<div class="col-md-4 txt-input">
							Teléfono:
						</div>
						<div class="col-md-8" campo="telefono">
							5512 5580
						</div>
					</div>

					<div class="row wrap-input email">
						<div class="col-md-4 txt-input">
							Email:
						</div>
						<div class="col-md-8" campo="email">
							luisadinosaur@gmail.com
						</div>
					</div>
				</div>

				<div class="col-md-6 confirmar-wrap">
					<h2>Información de Pago</h2>
					<div class="row wrap-input numerotarjeta">
						<div class="col-md-4 txt-input">
							Numero de Tarjeta:
						</div>
						<div class="col-md-8" campo="numerotarjeta">
							xxxx xxxx xxxx 1111
						</div>
					</div>

					<div class="row wrap-input fechaexpiracion">
						<div class="col-md-4 txt-input">
							Fecha de Expiración:
						</div>
						<div class="col-md-8" campo="caducidad">
							11/2020
						</div>
					</div>

					<div class="row wrap-input cvv">
						<div class="col-md-4 txt-input">
							Codigo CVV:
						</div>
						<div class="col-md-8" campo="cvv">
						</div>
					</div>
				</div>
			</div>
			<div class="wrap-confirmar-total">
				Cantidad a Donar: Q <?php echo $_smarty_tpl->tpl_vars['orden']->value->getMontoTotal();?>

			</div>
			<div class="wrap-donar-button">
				<form id="payment-form" name="CredomaticPost" action="https://paycom.credomatic.com/PayComBackEndWeb/common/requestPaycomService.go" method="post" novalidate="novalidate">
					<input type="text" name="hash" value="<?php echo $_smarty_tpl->tpl_vars['hash']->value;?>
" id="hash">
					<input type="text" name="time" value="<?php echo $_smarty_tpl->tpl_vars['hora']->value;?>
" id="time">
					<input type="text" name="checkname" id="checkname" value="">
					<input type="text" name="ccnumber" id="ccnumber" value="">
					<input type="text" name="ccexp" id="ccexp" value="">
					<input type="text" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['orden']->value->getMontoTotal();?>
" id="amount">
					<input type="text" name="type" value="sale" id="type">
					<input type="text" name="orderid" value="<?php echo $_smarty_tpl->tpl_vars['orden']->value->getId();?>
" id="orderid">
					<input type="text" name="key_id" value="<?php echo $_smarty_tpl->tpl_vars['key_id']->value;?>
" id="key_id">
					<input type="text" name="cvv" id="cvv" value="">
					<input type="text" name="redirect" value="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['url'];?>
validarPago" id="redirect">
					
					<button type="submit" class="donar">Donar</button>
				</form>
			</div>
		</div>
	</section>
	
	
	
</div><?php }} ?>