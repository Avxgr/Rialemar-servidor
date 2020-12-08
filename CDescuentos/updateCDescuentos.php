<?php
//Estas dos lineas de codigo son instrucciones que realizan conexion con la BD
require_once('../configuracion.php');
include("../Clases/MySqli.php");
//Estas variables reciven el valor de cada una de las cajas de texto del formulario "editCDescuentos"
$ID_Codigo = $_POST["txtID_Codigo"];
$Codigo = $_POST["txtCodigo"];
$Porcentaje_Descuento = $_POST["txtPorcentaje_Descuento"];
$Estado = $_POST["txtEstado"];
$Categoria = $_POST["txtCategoria"];

//print_r($_REQUEST);
//ECHO $accion = $_POST["accion"];

require_once(HEADERADMIN);
		//Aqui se realiza la sustitucion de cada uno de los datos del formulario, es decir, las variables, por 
		//cada uno de los campos de la BD donde indique el ID especificado a modificar
		$query = "UPDATE codigos_descuentos SET ID_Codigo = '$ID_Codigo', Codigo = '$Codigo', Porcentaje_Descuento = '$Porcentaje_Descuento', Estado ='$Estado', Categoria ='$Categoria' WHERE ID_Codigo = $ID_Codigo";
		
		if (!$result = mysqli_query($con, $query)) {
			//en estas lineas echo se imprime un mensaje en caso de encontrar un error con la conexion de la BD al intentar modificarlos
		        echo '<div id="mensaje">
		        			<center>
							<h2 class="title">Error al intentar guardar los cambios del código de descuento RIALEMAR</h2>'.
							mysqli_error($con)
							//este boton reenvia a la misma lista de los registros
							.'<br><input type=button value="Ir a la lista de Códigos de descuento RIALEMAR" onclick=self.location="'.ROOTURL.'?accion=listPartes">
							</center>
						</div>';
		}else{
			//esta impresion indica que la modificacion ha sido exitosa! y tambien reenvia a la misma pagina de registros actualizados
    	echo '<div id="mensaje"><center>
		
    			<h2>¡Datos Actualizados!</h2>
    			<br>
    			<input type=button value="Ir a la lista de Códigos de descuento RIALEMAR" onclick=self.location="'.ROOTURL.'?accion=listCDescuentos" class="btn"> 
    			</center>
    		</div>';
    	}

require_once(FOOTERADMIN);
?>