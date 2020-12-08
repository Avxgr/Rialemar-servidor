<?php
//Conexion con la BD
require_once('../configuracion.php');
include("../Clases/MySqli.php");
//Estas variables toman los valores post del formulario datosCarro, por cada uno de sus campos
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
		//inserta las variables en los campos respectivos de la tabla "carros" en la Base de Datos "RIALEMAR"
		$query = "INSERT INTO carros (Marca_Carro, Modelo_Carro, Color_Carro, Tipo_Transmision, Tipo_Traccion, Fecha_Salida, Precio_Carro, Porcentaje_Descuento_Membresia) VALUES ('$Marca_Carro','$Modelo_Carro','$Color_Carro','$Tipo_Transmision','$Tipo_Traccion','$Fecha_Salida','$Precio_Carro', '$Descuento_Membresia')";
		//mensaje que muestra que la conxion con la Base de Datos al intentar registrar un carro es fallida
		if (!$result = mysqli_query($con, $query)) {
		        echo '<div id="mensaje">
		        			<center>
							<h2 class="title">Error al intentar Registrar Carro</h2>'.
							mysqli_error($con)
							.'<br><input type=button value="Ir a la lista de Carros" onclick=self.location="'.ROOTURL.'?accion=listCarros">
							</center>
						</div>';
		}else{
			//mensaje que muestra que el registro y actualizacion han sido un éxito!, despues redirecciona a la misma pagina pero actualizada!
    	echo '<div id="mensaje"><center>
    			<h2>Carro de RIALEMAR Registrado</h2>
    			<br>
				
    			<input type=button value="Ir a la lista de Carros" onclick=self.location="'.ROOTURL.'?accion=listCarros" class="btn"> 
    			</center>
    		</div>';
    	}

require_once(FOOTERADMIN);
?>