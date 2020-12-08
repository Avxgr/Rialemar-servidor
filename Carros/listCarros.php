<?php
//aqui se asigna el resultado de la funcion de obtener los registros del archivo Carros
$listaCarros=getListaCarros();
	//Aqui se verifica que existan registros para desplegar los datos
	if($listaCarros!=null)
	{
		//print_r($listaCarros);
?>	
	<h2><center>LISTA DE CARROS</center></h2>
	<table>
		<tr>
			<th>ID_Carro</th>
			<th>Marca_Carro</th>
			<th>Modelo_Carro</th>
			<th>Color_Carro</th>
			<th>Tipo_Transmision</th>
			<th>Tipo_Traccion</th>
			<th>Fecha_Salida</th>
			<th>Precio_Carro</th>
			<th>Porcentaje_Descuento_Membresia</th>
			<th>Imagen</th>
			<?php if($_SESSION['tipo_usuario'] == 3){ ?>
			<th>Modificar</th>
			<th>Eliminar</th>
			<th>Agregar Imagen</th>
			<?php } ?>
		</tr>
	
	<?php //se lee cada registro de y cada campo de la lista de Carros
		foreach($listaCarros as $key=>$campo)
	{
		?>
			<tr>
				<td><?=$campo['ID_Carro']?></td>
				<td><?=$campo['Marca_Carro']?></td>
				<td><?=$campo['Modelo_Carro']?></td>
				<td><?=$campo['Color_Carro']?></td>
				<td><?=$campo['Tipo_Transmision']?></td>
				<td><?=$campo['Tipo_Traccion']?></td>
				<td><?=$campo['Fecha_Salida']?></td>
				<td><?=$campo['Precio_Carro']?></td>
				<td><?=$campo['Porcentaje_Descuento_Membresia']?></td><!--links a las funciones de modificar y eliminar registro-->
				<td><center><img class="foto" src="<?=ROOTURL.$campo['Imagen']?>"/></center></td>
				<?php if($_SESSION['tipo_usuario'] == 3){ ?>
				<td><a href="<?=ROOTURL?>?accion=editCarro&ID_Carro=<?=$campo['ID_Carro']?>">Modificar</a></td>
				<td><a href="<?=ROOTURL?>?accion=deleteCarro&ID_Carro=<?=$campo['ID_Carro']?>">Eliminar</a></td>
				<td><a href="<?=ROOTURL?>?accion=imgCarro&ID_Carro=<?=$campo['ID_Carro']?>">Agregar Imagen</a></td>
				<?php } ?>
			</tr>
	<?php } ?>
	</table>
	<?php } ?>
		
			