<?php 
require_once 'funciones.php';

$ID_Carro= (isset($_GET['ID_Carro'])) ? $_GET['ID_Carro'] : null;
	
$DatosCarro=getDatosCarro($ID_Carro);

	if($DatosCarro!=null)
	{	
		foreach($DatosCarro as $campo) {
			$ID_Carro = $campo['ID_Carro'];
			$Imagen = ROOTURL.$campo['Imagen'];
			$Marca_Carro = $campo['Marca_Carro'];
			$Modelo_Carro = $campo['Modelo_Carro'];			
			$Precio_Carro =$campo['Precio_Carro'];
		}
	}
 ?>	
	<div id="datosCarro">
			
			<form name="frmCarro" action="Carros/carros_SubirFoto.php" method="POST" class="formulario" enctype="multipart/form-data">
				<input type="hidden" id="IDCarroFoto" name="IDCarroFoto" value="<?=$ID_Carro?>"/>
				<h2>Subir imagen del Bal&oacute;n</h2>
				<center><img  src="<?=ROOTURL.$campo['Imagen']?>"/></center>
				<label>ID_Carro: <span>*</span>
					<input type="text" id="ID_Carro" name="txtID_Carro" value="<?=$ID_Carro?>" disabled />
				</label>
				
				<label>Marca_Carro: <span>*</span>
					<input type="text" name="txtMarca_Carro" placeholder="Marca_Carro" value="<?=$Marca_Carro?>" disabled />
				</label>

				<label>Precio_Carro: <span>*</span>
					<input type="text" name="txtPrecio_Carro" placeholder="Precio_Carro" value="<?=$Precio_Carro?>" disabled />
				</label>	
				
				<input type="file" id="uploadImage" name="uploadImage" />
				<input type="submit" name="btnRegistrar" value="subirImagen">
			</form>
	</div>
	<div style="clear: both;">&nbsp;</div>