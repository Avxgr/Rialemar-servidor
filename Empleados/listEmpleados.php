<?php
if($_SESSION['tipo_usuario'] != 2){
//aqui se asigna el resultado de la funcion de obtener los registros del archivo Empleados
$listaEmpleados=getListaEmpleados();
	//Aqui se verifica que existan registros para desplegar los datos
	if($listaEmpleados!=null){
		//print_r($listaVentas);
?>	
	<h2><center>LISTA DE EMPLEADOS</center></h2>
	<table>
		<tr>
			<th>ID_Empleado</th>
			<th>Nombre</th>
			<th>APaterno</th>
			<th>AMaterno</th>
			<th>Edad</th>
			<th>Telefono</th>
			<th>Correo</th>
			<th>Domicilio</th>
			<th>Fecha_Inicio</th>
			<th>User</th>
			<th>Password</th>
			<th>TipoUsuario</th>
			<?php if($_SESSION['tipo_usuario'] == 1){ ?>
			<th>Modificar</th>
			<th>Eliminar</th>
			<?php } ?>
		</tr>
	
	<?php //se lee cada registro de y cada campo de la lista de Empleados
		foreach($listaEmpleados as $key=>$array)
	{
		?>
			<tr>
				<td><?=$array['ID_Empleado']?></td>
				<td><?=$array['Nombre']?></td>
				<td><?=$array['APaterno']?></td>
				<td><?=$array['AMaterno']?></td>
				<td><?=$array['Edad']?></td>
				<td><?=$array['Telefono']?></td>
				<td><?=$array['Correo']?></td>
				<td><?=$array['Domicilio']?></td>
				<td><?=$array['Fecha_Inicio']?></td>
				<td><?=$array['User']?></td>
				<td><?=$array['Password']?></td>
				<td><?=$array['TipoUsuario']?></td><!--links a las funciones de modificar y eliminar registro-->
		<td><a href="<?=ROOTURL?>?accion=editEmpleado&ID_Empleado=<?=$array['ID_Empleado']?>">Modificar</a></td>
		<td><a href="<?=ROOTURL?>?accion=deleteEmpleado&ID_Empleado=<?=$array['ID_Empleado']?>">Eliminar</a></td>
			</tr>
	<?php } ?>
	</table>
<?php }} ?>