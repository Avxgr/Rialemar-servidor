<div id="datosCDescuentos" >
<!-- Este formulario envia los datos por metodo POST de cada uno de sus cajas de texto a el archivo "addCDescuentos.php"-->
		<form name="frmCDescuentos" action="CDescuentos/addCDescuentos.php" method="POST" class="formulario">
		
		<input type="hidden" name="accion" value="addCDescuentos">
			<center> 
				<h1>Registrar Descuento</h1>
			
		<br><br>

				<label>Codigo: <span>*</span>
					<input type="text" name="txtCodigo" placeholder="Codigo" required>
				</label>

				<label>Porcentaje_Descuento: <span>*</span>
					<input type="text" name="txtPorcentaje_Descuento" placeholder="Porcentaje_Descuento" required>
				</label>
				
				<label>Estado: <span>*</span>
					<input type="text" name="txtEstado" placeholder="Estado" required>
				</label>
				
				<label>Categoria: <span>*</span>
					<input type="text" name="txtCategoria" placeholder="Categoria" required>
				</label>
				
				<input type="submit" name="btnRegistrar" value="Registrar">
    
           </center> 
			</form>
	</div>
	<div style="clear: both;">&nbsp;</div>
	

