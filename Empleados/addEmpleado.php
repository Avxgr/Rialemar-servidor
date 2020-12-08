<?php
//Conexion con la BD
require_once('../configuracion.php');
include("../Clases/MySqli.php");
//Estas variables toman los valores post del formulario datosAlumno, por cada uno de sus campos
$Nombre = $_POST["txtNombre"];
$APaterno = $_POST["txtAPaterno"];
$AMaterno = $_POST["txtAMaterno"];
$Edad = $_POST["txtEdad"];
$Telefono = $_POST["txtTelefono"];
$Correo = $_POST["txtCorreo"];
$Fecha_Inicio = $_POST["txtFecha_Inicio"];
$Domicilio = $_POST["txtDomicilio"];
$User = $_POST["txtUser"];
$Password = $_POST["txtPassword"];
$TipoUsuario = $_POST["txtTipoUsuario"];



//print_r($_REQUEST);
//ECHO $accion = $_POST["accion"];

require_once(HEADERADMIN);
		//inserta las variables en los campos respectivos de la tabla "empleados" en la Base de Datos "RIALEMAR"
		$query = "INSERT INTO empleados 
		(Nombre,
		APaterno,
		AMaterno,
		Edad,
		Telefono,
		Correo,
		Fecha_Inicio,
		Domicilio,
		User,
		Password,
		TipoUsuario) 
		VALUES 
		('$Nombre',
		'$APaterno',
		'$AMaterno',
		'$Edad',
		'$Telefono',
		'$Correo',
		'$Fecha_Inicio',
		'$Domicilio',
		'$User',
		'$Password',
		'$TipoUsuario')";
		
		//mensaje que muestra que la conxion con la Base de Datos al intentar registrar un empleado es fallida
		if (!$result = mysqli_query($con, $query)) {
		        echo '<div id="mensaje">
		        			<center>
							<h2 class="title">Error al intentar Registrar el empleado</h2>'.
							mysqli_error($con)
							.'<br><input type=button value="Ir a la lista de empleados" onclick=self.location="'.ROOTURL.'?accion=listEmpleados">
							</center>
						</div>';
		}else{
			//mensaje que muestra que el registro y actualizacion han sido un éxito!, despues redirecciona a la misma pagina pero actualizada!
    	echo '<div id="mensaje"><center>
    			<h2>Empleado de RIALEMAR Registrado</h2>
    			<br>
				
    			<input type=button value="Ir a la lista de Empleados" onclick=self.location="'.ROOTURL.'?accion=listEmpleados" class="btn"> 
    			</center>
    		</div>';
    	}

require_once(FOOTERADMIN);
?>