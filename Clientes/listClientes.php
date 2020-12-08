<?php
//aqui se asigna el resultado de la funcion de obtener los registros del archivo Clientes
$listaClientes=getListaClientes();
	//Aqui se verifica que existan registros para desplegar los datos
	if($listaClientes!=null)
	{
		//print_r($listaClientes);
?>	
	<h2><center>LISTA DE CLIENTES</center></h2>
	<table>
		<tr>
			<th>ID_Cliente</th>
			<th>Nombre</th>
			<th>APaterno</th>
			<th>AMaterno</th>
			<th>Edad</th>
			<th>Telefono</th>
			<th>Correo</th>
		</tr>
	
	<?php //se lee cada registro de y cada campo de la lista de Clientes
		foreach($listaClientes as $key=>$array)
	{
		?>
			<tr>
				<td><?=$array['ID_Cliente']?></td>
				<td><?=$array['Nombre']?></td>
				<td><?=$array['APaterno']?></td>
				<td><?=$array['AMaterno']?></td>
				<td><?=$array['Edad']?></td>
				<td><?=$array['Telefono']?></td>
				<td><?=$array['Correo']?></td><!--links a las funciones de modificar y eliminar registro-->
			</tr>
	<?php } ?>
	</table>
	<?php } ?>
		
			