<?php
//Variable que toma los valores de la funcion getDatosPartes(), la cual a su vez 
//toma los valores del campo con un ID especifico
$datosCDescuentos=getDatosCDescuentos($_GET['ID_Codigo']);
//si los datos no son nulos procede con un arreglo
	if($datosCDescuentos!=null)
	{
		//por cada valor de datosPartes se representara como un arreglo dividido en $campos
		foreach($datosCDescuentos as $key=>$campo) { 
?>
		<!--este es un formulario html para colectar datos que seran modificados en la bd -->
		<div id="datosPartes">
		<!-- Esta linea direcciona al archivo updatePartes.php enviando los datos con el metodo POST-->
				<form name="frmPartes" action="CDescuentos/updateCDescuentos.php" method="POST" class="formulario">
				
					<input type="hidden" name="accion" value="editCDescuentos">
				
					<input type="hidden" name="txtID_Codigo" value="<?=$campo['ID_Codigo']?>" >

					<h2>Modificar datos de Código de descuentos</h2>
					
					<label>ID_Codigo: <?=$campo['ID_Codigo']?><br></label>

					<label>Codigo: <span>*</span>
						<input type="text" name="txtCodigo" value="<?=$campo['Codigo']?>" placeholder="Codigo" required>
					</label>

					<label>Porcentaje_Descuento: <span>*</span>
						<input type="text" name="txtPorcentaje_Descuento" value="<?=$campo['Porcentaje_Descuento']?>" placeholder="Porcentaje_Descuento" required>
					</label>

					<label>Estado: <span>*</span>
						<input type="text" name="txtEstado" value="<?=$campo['Estado']?>" placeholder="Estado" required>
					</label>
					<label>Categoria: <span>*</span>
						<input type="text" name="txtCategoria" value="<?=$campo['Categoria']?>" placeholder="Categoria" required>
					</label>

					<input type="submit" name="btnRegistrar" value="Registrar">
				</form>
		</div>
	<div style="clear: both;">&nbsp;</div>
<?php } ?>
		<?php } ?>