<div id="datosCarro" >
<!-- Este formulario envia los datos por metodo POST de cada uno de sus cajas de texto a el archivo "addCarro.php"-->
		<form name="frmCarro" action="Carros/addCarro.php" method="POST" class="formulario">
		
		<input type="hidden" name="accion" value="addCarro">
			<center> 
				<h1>Registrar Carro</h1>
			
		<br><br>
				<label>Marca: <span>*</span>
					<input type="text" name="txtMarca_Carro" placeholder="Marca_Carro" required>
				</label>

				<label>Modelo: <span>*</span>
					<input type="text" name="txtModelo_Carro" placeholder="Modelo_Carro" required>
				</label>

				<label>Color: <span>*</span>
					<input type="text" name="txtColor_Carro" placeholder="Color_Carro" required>
				</label>

				<label>Tipo de transmision: <span>*</span>
					<input type="text" name="txtTipo_Transmision" placeholder="Tipo_Transmision" required>
				</label>
				
				<label>Tipo de traccion: <span>*</span>
					<input type="text" name="txtTipo_Traccion" placeholder="Tipo_Traccion" required>
				</label>
				
				<label>Fecha de salida: <span>*</span>
					<input type="text" name="txtFecha_Salida" placeholder="Fecha_Salida" required>
				</label>
				
				<label>Precio: <span>*</span>
					<input type="text" name="txtPrecio_Carro" placeholder="Precio_Carro" required>
				</label>
				
				<label>Porcentaje de descuento para miembros: <span>*</span>
					<input type="text" name="txtPorcentaje_Descuento_Membresia" placeholder="Porcentaje_Descuento_Membresia" required>
				</label>
				
				<input type="submit" name="btnRegistrar" value="Registrar">
    
           </center> 
			</form>
	</div>
	<div style="clear: both;">&nbsp;</div>
	

