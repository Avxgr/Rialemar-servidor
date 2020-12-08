<?php
//Estas dos lineas de codigo son instrucciones que realizan conexion con la BD
require_once('../configuracion.php');
include("../Clases/MySqli.php");
//Estas variables reciven el valor de cada una de las cajas de texto del formulario "editAlumno"
$ID_Empleado = $_POST["txtID_Empleado"];
$Nombre = $_POST["txtNombre"];
$APaterno = $_POST["txtAPaterno"];
$AMaterno = $_POST["txtAMaterno"];
$Edad = $_POST["txtEdad"];
$Telefono= $_POST["txtTelefono"];
$Correo= $_POST["txtCorreo"];
$Fecha_Inicio= $_POST["txtFecha_Inicio"];
$Domicilio= $_POST["txtDomicilio"];
$User= $_POST["txtUser"];
$Password= $_POST["txtPassword"];
$TipoUsuario= $_POST["txtTipoUsuario"];

//print_r($_REQUEST);
//ECHO $accion = $_POST["accion"];

require_once(HEADERADMIN);
		//Aqui se realiza la sustitucion de cada uno de los datos del formulario, es decir, las variables, por 
		//cada uno de los campos de la BD donde indique el ID especificado a modificar
		$query = "UPDATE empleados SET ID_Empleado = '$ID_Empleado',
		Nombre = '$Nombre',
		APaterno = '$APaterno',
		AMaterno ='$AMaterno',
		Edad ='$Edad',
		Telefono ='$Telefono',
		Correo ='$Correo',
		Fecha_Inicio ='$Fecha_Inicio',
		Domicilio ='$Domicilio' ,
		User ='$User' ,
		Password ='$Password' ,
		TipoUsuario ='$TipoUsuario'
		WHERE ID_Empleado = $ID_Empleado";
		
		if (!$result = mysqli_query($con, $query)) {
			//en estas lineas echo se imprime un mensaje en caso de encontrar un error con la conexion de la BD al intentar modificarlos
		        echo '<div id="mensaje">
		        			<center>
							<h2 class="title">Error al intentar guardar los cambios del empleado RIALEMAR</h2>'.
							mysqli_error($con)
							//este boton reenvia a la misma lista de los registros
							.'<br><input type=button value="Ir a la lista de Empleados RIALEMAR" onclick=self.location="'.ROOTURL.'?accion=listEmpleados">
							</center>
						</div>';
		}else{
			//esta impresion indica que la modificacion ha sido exitosa! y tambien reenvia a la misma pagina de registros actualizados
    	echo '<div id="mensaje"><center>
		
    			<h2>Datos Actualizados !!!</h2>
    			<br>
    			<input type=button value="Ir a la lista de Empleados RIALEMAR" onclick=self.location="'.ROOTURL.'?accion=listEmpleados" class="btn"> 
    			</center>
    		</div>';
    	}
require_once(FOOTERADMIN);
?>