<?php
//Variable que toma los valores de la funcion getDatosAlumno(), la cual a su vez 
//toma los valores del campo con un ID especifico
$datosEmpleados=getDatosEmpleado($_GET['ID_Empleado']);
//si los datos no son nulos procede con un arreglo
	if($datosEmpleados!=null)
	{
		//por cada valor de datosAlumno se representara como un arreglo dividido en $campos
		foreach($datosEmpleados as $key=>$campo) { 
?>
		<!--este es un formulario html para colectar datos que seranmodificados en la bd -->
		<div id="datosEmpleado">
		<!-- Esta linea direcciona al archivo updateEmpleado.php enviando los datos con el metodo POST-->
				<form name="frmEmpleado" action="Empleados/updateEmpleado.php" method="POST" class="formulario">
				
					<input type="hidden" name="accion" value="editEmpleado">
				
					<input type="hidden" name="txtID_Empleado" value="<?=$campo['ID_Empleado']?>" >

					<h2>Modificar datos de Empleado</h2>
					
					<label>ID_Empleado: <?=$campo['ID_Empleado']?><br></label>
					
					<label>Nombre: <span>*</span>
						<input type="text" name="txtNombre" value="<?=$campo['Nombre']?>" placeholder="Nombre" required>
					</label>

					<label>APaterno: <span>*</span>
						<input type="text" name="txtAPaterno" value="<?=$campo['APaterno']?>" placeholder="APaterno" required>
					</label>

					<label>AMaterno: <span>*</span>
						<input type="text" name="txtAMaterno" value="<?=$campo['AMaterno']?>" placeholder="AMaterno" required>
					</label>
				
					<label>Edad: <span>*</span>
						<input type="text" name="txtEdad" value="<?=$campo['Edad']?>" placeholder="Edad" required>
					</label>
				
					<label>Telefono: <span>*</span>
						<input type="text" name="txtTelefono" value="<?=$campo['Telefono']?>" placeholder="Telefono" required>
					</label>
				
					<label>Correo: <span>*</span>
						<input type="text" name="txtCorreo" value="<?=$campo['Correo']?>" placeholder="Correo" required>
					</label>
				
					<label>Fecha_Inicio: <span>*</span>
						<input type="text" name="txtFecha_Inicio" value="<?=$campo['Fecha_Inicio']?>" placeholder="Fecha_Inicio" required>
					</label>
				
					<label>Domicilio: <span>*</span>
						<input type="text" name="txtDomicilio" value="<?=$campo['Domicilio']?>" placeholder="Domicilio" required>
					</label>
					
					<label>User: <span>*</span>
						<input type="text" name="txtUser" value="<?=$campo['User']?>" placeholder="User" required>
					</label>
					
					<label>Password: <span>*</span>
						<input type="text" name="txtPassword" value="<?=$campo['Password']?>" placeholder="Password" required>
					</label>
					
					<label>TipoUsuario: <span>*</span>
						<input type="text" name="txtTipoUsuario" value="<?=$campo['TipoUsuario']?>" placeholder="(1-Admin 2-Empleado)" required>
					</label>
					
					<input type="submit" name="btnRegistrar" value="Registrar">
				</form>
		</div>
	<div style="clear: both;">&nbsp;</div>
<?php } ?>
		<?php } ?>