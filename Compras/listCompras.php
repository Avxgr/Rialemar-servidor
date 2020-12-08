<?php
//aqui se asigna el resultado de la funcion de obtener los registros del archivo Compras
$listaCompras=getListaCompras();
	//Aqui se verifica que existan registros para desplegar los datos
	if($listaCompras!=null)
	{
		//print_r($listaCompras);
?>	
	<h2><center>LISTA DE COMPRAS</center></h2>
	<table>
		<tr>
			<th>ID_Compra</th>
			<th>ID_Cliente</th>
			<th>ID_Producto</th> 
			<th>Producto</th> 
			<th>Fecha_Compra</th>
			<th>Monto</th>
			<th>Estado</th>
			<?php if($_SESSION['tipo_usuario'] == 2){ ?>
			<th>Aceptar</th>
			<th>Denegar</th>
			<?php } ?>
		</tr>
	
	<?php //se lee cada registro de y cada campo de la lista de Clientes
		foreach($listaCompras as $key=>$array)
	{
		?>
			<tr>
				<td><?=$array['ID_Compra']?></td>
				<td><?=$array['ID_Cliente']?></td>
				<td><?=$array['ID_Producto']?></td>
				<td><?=$array['Producto']?></td>
				<td><?=$array['Fecha_Compra']?></td>
				<td><?=$array['Monto']?></td>
				<td><?=$array['Estado']?></td><!--links a las funciones de modificar y eliminar registro-->
				<?php if($_SESSION['tipo_usuario'] == 2){ ?>
				<?php if($array['Estado'] == "Espera"){ ?>
				<td><a href="<?=ROOTURL?>?accion=addVenta&ID_Compra=<?=$array['ID_Compra']?>">Aceptar</a></td>
				<td><a href="<?=ROOTURL?>?accion=deleteCompra&ID_Compra=<?=$array['ID_Compra']?>">Denegar</a></td>
				<?php }else{ ?>
				<td></td>
				<td></td>
				<?php } ?>
				<?php } ?>
			</tr>
	<?php } ?>
	</table>
	<?php } ?>
		
			