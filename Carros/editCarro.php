<?php
//Variable que toma los valores de la funcion getDatosCarro(), la cual a su vez 
//toma los valores del campo con un ID especifico
$datosCarros=getDatosCarro($_GET['ID_Carro']);
//si los datos no son nulos procede con un arreglo
	if($datosCarros!=null)
	{
		//por cada valor de datosCarro se representara como un arreglo dividido en $campos
		foreach($datosCarros as $key=>$campo) { 
?>
		<!--este es un formulario html para colectar datos que seran modificados en la bd -->
		<div id="datosCarro">
		<!-- Esta linea direcciona al archivo updateCliente.php enviando los datos con el metodo POST-->
				<form name="frmCarro" action="Carros/updateCarro.php" method="POST" class="formulario">
				
					<input type="hidden" name="accion" value="editCarro">
				
					<input type="hidden" name="txtID_Carro" value="<?=$campo['ID_Carro']?>" >

					<h2>Modificar datos de Carro</h2>
					
					<label>ID_Carro: <?=$campo['ID_Carro']?><br></label>

					<label>Marca: <span>*</span>
						<input type="text" name="txtMarca_Carro" value="<?=$campo['Marca_Carro']?>" placeholder="Marca_Carro" required>
					</label>

					<label>Modelo: <span>*</span>
						<input type="text" name="txtModelo_Carro" value="<?=$campo['Modelo_Carro']?>" placeholder="Modelo_Carro" required>
					</label>

					<label>Color: <span>*</span>
						<input type="text" name="txtColor_Carro" value="<?=$campo['Color_Carro']?>" placeholder="Color_Carro" required>
					</label>
					<label>Tipo de transmision: <span>*</span>
						<input type="text" name="txtTipo_Transmision" value="<?=$campo['Tipo_Transmision']?>" placeholder="Tipo_Transmision" required>
					</label>

					<label>Tipo de traccion: <span>*</span>
						<input type="text" name="txtTipo_Traccion" value="<?=$campo['Tipo_Traccion']?>" placeholder="Tipo_Traccion" required>
					</label>
					
					<label>Fecha de salida: <span>*</span>
						<input type="text" name="txtFecha_Salida" value="<?=$campo['Fecha_Salida']?>" placeholder="Fecha_Salida" required>
					</label>
					
					<label>Precio: <span>*</span>
						<input type="text" name="txtPrecio_Carro" value="<?=$campo['Precio_Carro']?>" placeholder="Precio_Carro" required>
					</label>
					
					<label>Porcentaje de descuento para miembros: <span>*</span>
						<input type="text" name="txtPorcentaje_Descuento_Membresia" value="<?=$campo['Porcentaje_Descuento_Membresia']?>" placeholder="Porcentaje_Descuento_Membresia" required>
					</label>
					
					<input type="submit" name="btnRegistrar" value="Registrar">
				</form>
		</div>
	<div style="clear: both;">&nbsp;</div>
<?php } ?>
		<?php } ?>