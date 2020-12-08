<?php
//Conexion con la BD
require_once('configuracion.php');
include("Clases/MySqli.php");
//Variables que toman el ID seleccionado a eliminar y toman la respuesta si o no de la alerta para confirmar la eliminacion del registro
$ID_Codigo = $_GET["ID_Codigo"];
$respuesta = (isset($_GET['respuesta'])) ? $_GET['accion'] : null;

//print_r($_REQUEST);
//ECHO $accion = $_POST["accion"];

require_once(HEADERADMIN);
//dependiendo de la respuesta el condicional toma una decision
if(!$respuesta){
?>	
<div id="mensaje">
    <center>
	<!--dependiendo de la respuesta el condicional toma una decision y los envia al archivo deleteCDescuentos&ID_Codigo o a la lista de registros-->
		<h2 class="title">Est&aacute;s seguro de eliminar Descuento RIALEMAR?</h2>
			<br><input type=button value="SI" onclick=self.location="<?=ROOTURL?>?accion=deleteCDescuentos&ID_Codigo=<?=$ID_Codigo?>&respuesta=si">
			<input type=button value="NO" onclick=self.location="<?=ROOTURL?>?accion=listCDescuentos">
	</center>
</div>
<?php } ?>
<?php
	if($respuesta){
//Aqui se elimina todo dato de la tabla "codigos_descuentos" en donde el ID_Codigo sea igual a la variable que ya contiene al ID seleccionado 
		$query = "DELETE FROM codigos_descuentos WHERE ID_Codigo = $ID_Codigo";
		//mensaje de fallo o error con la conexion de BD
		if (!$result = mysqli_query($con, $query)) {
		        echo '<div id="mensaje">
		        			<center>
							<h2 class="title">Error al intentar eliminar el Descuento RIALEMAR</h2>'.
							mysqli_error($con)
							.'<br><input type=button value="Ir a la lista de Descuentos" onclick=self.location="'.ROOTURL.'?accion=listCDescuentos">
							</center>
						</div>';
		}else{
			//Mensaje de concluido, eliminacion completada!
    	echo '<div id="mensaje"><center>
    			<h2>Descuento RIALEMAR eliminado</h2>
    			<br>
    			<input type=button value="Ir a la lista de Descuentos" onclick=self.location="'.ROOTURL.'?accion=listCDescuentos" class="btn"> 
    			</center>
    		</div>';
    	}
    }
require_once(FOOTERADMIN);
?>