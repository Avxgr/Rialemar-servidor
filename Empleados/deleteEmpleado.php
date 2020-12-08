<?php
//Conexion con la BD
require_once('configuracion.php');
include("Clases/MySqli.php");
//Variables que toman el ID seleccionado a eliminar y toman la respuesta si o no de la alerta para confirmar la eliminacion del registro
$ID_Empleado = $_GET["ID_Empleado"];
$respuesta = (isset($_GET['respuesta'])) ? $_GET['accion'] : null;

//print_r($_REQUEST);
//ECHO $accion = $_POST["accion"];

require_once(HEADERADMIN);
//dependiendo de la respuesta el condicional toma una decision
if(!$respuesta){
?>	
<div id="mensaje">
    <center>
	<!--dependiendo de la respuesta el condicional toma una decision y los envia al archivo deleteAlumno&IDAlumno o a la lista de registros-->
		<h2 class="title">Est&aacute;s seguro de eliminar el Registro de empleado RIALEMAR?</h2>
			<br><input type=button value="SI" onclick=self.location="<?=ROOTURL?>?accion=deleteEmpleado&ID_Empleado=<?=$ID_Empleado?>&respuesta=si">
			<input type=button value="NO" onclick=self.location="<?=ROOTURL?>?accion=listEmpleados">
	</center>
</div>
<?php } ?>
<?php
	if($respuesta){
//Aqui se elimina todo dato de la tabla "Empleados" en donde el ID_Empleado sea igual a la variable que ya contiene al ID seleccionado 
		$query = "DELETE FROM empleados WHERE ID_Empleado = $ID_Empleado";
		//mensaje de fallo o error con la conexion de BD
		if (!$result = mysqli_query($con, $query)) {
		        echo '<div id="mensaje">
		        			<center>
							<h2 class="title">Error al intentar eliminar el Registro de Empleado RIALEMAR</h2>'.
							mysqli_error($con)
							.'<br><input type=button value="Ir a la lista de Empleados" onclick=self.location="'.ROOTURL.'?accion=listEmpleados">
							</center>
						</div>';
		}else{
			//Mensaje de concluido, eliminacion completada!
    	echo '<div id="mensaje"><center>
    			<h2>Registro de Empleado RIALEMAR eliminado</h2>
    			<br>
    			<input type=button value="Ir a la lista de Empleados" onclick=self.location="'.ROOTURL.'?accion=listEmpleados" class="btn"> 
    			</center>
    		</div>';
    	}
    }
require_once(FOOTERADMIN);
?>