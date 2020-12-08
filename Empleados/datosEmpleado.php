<div id="datosEmpleado">
<!-- Este formulario envia los datos por metodo POST de cada uno de sus cajas de texto a el archivo "addEmpleado.php"-->
		<form name="frmEmpleado" action="Empleados/addEmpleado.php" method="POST" class="formulario">
		<input type="hidden" name="accion" value="addEmpleado">
			<center> 
				<h1>Registrar Empleado</h1>
			
		<br><br>

				<label>Nombre: <span>*</span>
					<input type="text" name="txtNombre" placeholder="Nombre" required>
				</label>

				<label>APaterno: <span>*</span>
					<input type="text" name="txtAPaterno" placeholder="APaterno" required>
				</label>

				<label>AMaterno: <span>*</span>
					<input type="text" name="txtAMaterno" placeholder="AMaterno" required>
				</label>
				
				<label>Edad: <span>*</span>
					<input type="text" name="txtEdad" placeholder="Edad" required>
				</label>
				
				<label>Telefono: <span>*</span>
					<input type="text" name="txtTelefono" placeholder="Telefono" required>
				</label>
				
				<label>Correo: <span>*</span>
					<input type="text" name="txtCorreo" placeholder="Correo" required>
				</label>
				
				<label>Fecha_Inicio: <span>*</span>
					<input type="text" name="txtFecha_Inicio" placeholder="Fecha_Inicio" required>
				</label>
				
				<label>Domicilio: <span>*</span>
					<input type="text" name="txtDomicilio" placeholder="Domicilio" required>
				</label>
				
				<label>User: <span>*</span>
					<input type="text" name="txtUser" placeholder="User" required>
				</label>
				
				<label>Password: <span>*</span>
					<input type="text" name="txtPassword" placeholder="Password" required>
				</label>
				
				<label>TipoUsuario: <span>*</span>
					<input type="text" name="txtTipoUsuario" placeholder="(1-Recursos Humanos 2-Empleado 3-Gerente)" required>
				</label>
			
				<input type="submit" name="btnRegistrar" value="Registrar">
			</form>
	</div>
	<div style="clear: both;">&nbsp;</div>
	

