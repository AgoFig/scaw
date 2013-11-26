
<!-- Cominezo de  cuerpo -->
<div class="col-xs-12 col-sm-9">
	<table class='lista'>
		<tr>
			<th>
				Producto
			</th>
			<th>
				Prec. M&iacute;nimo
			</th>
			<th>
				Prec. M&aacute;ximo
			</th>
			<th>
				Prec. Promedio
			</th>
			<th>
				Acciones
			</th>
		</tr>
		<tr>
			<td>
				
			</td>
			<td>
				
			</td>
			<td>
				
			</td>
			<td>
				
			</td>
			<td>
				<a href='index2.php?cont=det'>Detalle</a>
			</td>
		</tr>
	</table>
	<p class="pull-right visible-xs">
		<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">xLogin</button>
	</p>
</div><!--/span-->
<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
	<div class="list-group">
		<div class="well">
			<form class="bs-example form-horizontal">
				<fieldset>
					<legend>Login</legend>
					<div class="form-group">
						<label for="inputEmail" class="col-lg-4 control-label">Email</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="inputEmail" placeholder="Email">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword" class="col-lg-4 control-label">Password</label>
						<div class="col-lg-8">
							<input type="password" class="form-control" id="inputPassword" placeholder="Password">            
						</div>
					</div>                  
					<div class="form-group">
						<div class="col-lg-10 col-lg-offset-2">
							<button class="btn btn-default">Cancel</button> 
							<button type="submit" class="btn btn-primary">Submit</button> 
						</div>
					</div>
				</fieldset>
			</form>
			<div class="col-sm-12">
				<legend>Bienvenido, [User]</legend>
				<?php
				echo "<p class='text-muted'><a href=''>Cambiar contrase&ntilde;a</a></p>";
				?>
				<p class="text-muted"><a href=''>Cerrar sesi&oacute;n</a></p>  
			</div>
		</div>
	</div>
</div><!--/span-->
<hr>
		