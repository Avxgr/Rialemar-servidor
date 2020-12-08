<?php
//Conexion con la BD
require_once('configuracion.php');
include("Clases/MySqli.php");
//Variables que toman el ID seleccionado a eliminar y toman la respuesta si o no de la alerta para confirmar la eliminacion del registro
$ID_Carro = $_GET["ID_Carro"];
$respuesta = (isset($_GET['respuesta'])) ? $_GET['accion'] : null;

//print_r($_REQUEST);
//ECHO $accion = $_POST["accion"];

require_once(HEADERADMIN);
//dependiendo de la respuesta el condicional toma una decision
if(!$respuesta){
?>	
<div id="mensaje">
    <center>
	<!--dependiendo de la respuesta el condicional toma una decision y los envia al archivo deleteCarro&ID_Carro o a la lista de registros-->
		<h2 class="title">Est&aacute;s seguro de eliminar el Registro de venta RIALEMAR?</h2>
			<br><input type=button value="SI" onclick=self.location="<?=ROOTURL?>?accion=deleteCarro&ID_Carro=<?=$ID_Carro?>&respuesta=si">
			<input type=button value="NO" onclick=self.location="<?=ROOTURL?>?accion=listCarros">
	</center>
</div>
<?php } ?>
<?php
	if($respuesta){
//Aqui se elimina todo dato de la tabla "carros" en donde el ID_Carro sea igual a la variable que ya contiene al ID seleccionado 
		$query = "DELETE FROM carros WHERE ID_Carro = $ID_Carro";
		//mensaje de fallo o error con la conexion de BD
		if (!$result = mysqli_query($con, $query)) {
		        echo '<div id="mensaje">
		        			<center>
							<h2 class="title">Error al intentar eliminar el Registro de Carro RIALEMAR</h2>'.
							mysqli_error($con)
							.'<br><input type=button value="Ir a la lista de Carros" onclick=self.location="'.ROOTURL.'?accion=listCarros">
							</center>
						</div>';
		}else{
			//Mensaje de concluido, eliminacion completada!
    	echo '<div id="mensaje"><center>
    			<h2>Registro de carro RIALEMAR eliminado</h2>
    			<br>
    			<input type=button value="Ir a la lista de Carros" onclick=self.location="'.ROOTURL.'?accion=listCarros" class="btn"> 
    			</center>
    		</div>';
    	}
    }
require_once(FOOTERADMIN);
?>