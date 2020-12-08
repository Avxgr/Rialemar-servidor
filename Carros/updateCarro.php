<?php
//Estas dos lineas de codigo son instrucciones que realizan conexion con la BD
require_once('../configuracion.php');
include("../Clases/MySqli.php");
//Estas variables reciven el valor de cada una de las cajas de texto del formulario "editCarro"
$ID_Carro = $_POST["txtID_Carro"];
$Marca_Carro = $_POST["txtMarca_Carro"];
$Modelo_Carro = $_POST["txtModelo_Carro"];
$Color_Carro = $_POST["txtColor_Carro"];
$Tipo_Transmision = $_POST["txtTipo_Transmision"];
$Tipo_Traccion = $_POST["txtTipo_Traccion"];
$Fecha_Salida = $_POST["txtFecha_Salida"];
$Precio_Carro = $_POST["txtPrecio_Carro"];
$Descuento_Membresia = $_POST["txtPorcentaje_Descuento_Membresia"];

//print_r($_REQUEST);
//ECHO $accion = $_POST["accion"];

require_once(HEADERADMIN);
		//Aqui se realiza la sustitucion de cada uno de los datos del formulario, es decir, las variables, por 
		//cada uno de los campos de la BD donde indique el ID especificado a modificar
		$query = "UPDATE carros SET ID_Carro = '$ID_Carro', Marca_Carro = '$Marca_Carro', Modelo_Carro = '$Modelo_Carro', Color_Carro ='$Color_Carro', Tipo_Transmision ='$Tipo_Transmision', Tipo_Traccion ='$Tipo_Traccion', Fecha_Salida ='$Fecha_Salida', Precio_Carro ='$Precio_Carro', Porcentaje_Descuento_Membresia ='$Descuento_Membresia' WHERE ID_Carro = $ID_Carro";
		
		if (!$result = mysqli_query($con, $query)) {
			//en estas lineas echo se imprime un mensaje en caso de encontrar un error con la conexion de la BD al intentar modificarlos
		        echo '<div id="mensaje">
		        			<center>
							<h2 class="title">Error al intentar guardar los cambios del carro RIALEMAR</h2>'.
							mysqli_error($con)
							//este boton reenvia a la misma lista de los registros
							.'<br><input type=button value="Ir a la lista de Carros RIALEMAR" onclick=self.location="'.ROOTURL.'?accion=listCarros">
							</center>
						</div>';
		}else{
			//esta impresion indica que la modificacion ha sido exitosa! y tambien reenvia a la misma pagina de registros actualizados
    	echo '<div id="mensaje"><center>
		
    			<h2>¡Datos Actualidos!</h2>
    			<br>
    			<input type=button value="Ir a la lista de Carros RIALEMAR" onclick=self.location="'.ROOTURL.'?accion=listCarros" class="btn"> 
    			</center>
    		</div>';
    	}

require_once(FOOTERADMIN);
?>