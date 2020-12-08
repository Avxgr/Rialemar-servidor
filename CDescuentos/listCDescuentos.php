<?php
//aqui se asigna el resultado de la funcion de obtener los registros del archivo Partes
$listaCDescuentos=getListaCDescuentos();
	//Aqui se verifica que existan registros para desplegar los datos
	if($listaCDescuentos!=null)
	{
		//print_r($listaPartes);
?>	
	<h2><center>LISTA DE CÓDIGOS DE DESCUENTO</center></h2>
	<table>
		<tr>
			<th>ID_Codigo</th>
			<th>Codigo</th>
			<th>Porcentaje_Descuento</th>
			<th>Estado</th>
			<th>Categoria</th>
			<?php if($_SESSION['tipo_usuario'] == 3){ ?>
			<th>Modificar</th>
			<th>Eliminar</th>
			<?php } ?>
		</tr>
	
	<?php //se lee cada registro de y cada campo de la lista de Partes
		foreach($listaCDescuentos as $key=>$campo)
	{
		?>
			<tr>
				<td><?=$campo['ID_Codigo']?></td>
				<td><?=$campo['Codigo']?></td>
				<td><?=$campo['Porcentaje_Descuento']?></td>
				<td><?=$campo['Estado']?></td>
				<td><?=$campo['Categoria']?></td>
				<?php if($_SESSION['tipo_usuario'] == 3){ ?>
				<td><a href="<?=ROOTURL?>?accion=editCDescuentos&ID_Codigo=<?=$campo['ID_Codigo']?>">Modificar</a></td>
				<td><a href="<?=ROOTURL?>?accion=deleteCDescuentos&ID_Codigo=<?=$campo['ID_Codigo']?>">Eliminar</a></td>
				<?php } ?>
			</tr>
	<?php } ?>
	</table>
	<?php } ?>			