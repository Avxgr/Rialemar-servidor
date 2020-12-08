<?php
//Conexion con la BD
require_once('../configuracion.php');
include("../Clases/MySqli.php");
//Estas variables toman los valores post del formulario datosPartes, por cada uno de sus campos
$Codigo = $_POST["txtCodigo"];
$Porcentaje_Descuento = $_POST["txtPorcentaje_Descuento"];
$Estado = $_POST["txtEstado"];
$Categoria = $_POST["txtCategoria"];

//print_r($_REQUEST);
//ECHO $accion = $_POST["accion"];

require_once(HEADERADMIN);
		//inserta las variables en los campos respectivos de la tabla "codigos_descuentos" en la Base de Datos "RIALEMAR"
		$query = "INSERT INTO codigos_descuentos (Codigo,Porcentaje_Descuento,Estado,Categoria) VALUES ('$Codigo','$Porcentaje_Descuento','$Estado','$Categoria')";
		//mensaje que muestra que la conxion con la Base de Datos al intentar registrar un descuento es fallida
		if (!$result = mysqli_query($con, $query)) {
		        echo '<div id="mensaje">
		        			<center>
							<h2 class="title">Error al intentar Registrar Descuento</h2>'.
							mysqli_error($con)
							.'<br><input type=button value="Ir a la lista de Descuentos" onclick=self.location="'.ROOTURL.'?accion=listCDescuentos">
							</center>
						</div>';
		}else{
			//mensaje que muestra que el registro y actualizacion han sido un éxito!, despues redirecciona a la misma pagina pero actualizada!
    	echo '<div id="mensaje"><center>
    			<h2>Descuento de RIALEMAR Registrado</h2>
    			<br>
				
    			<input type=button value="Ir a la lista de Descuentos" onclick=self.location="'.ROOTURL.'?accion=listCDescuentos" class="btn"> 
    			</center>
    		</div>';
    	}

require_once(FOOTERADMIN);
?>