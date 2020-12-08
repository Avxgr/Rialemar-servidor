$(document).ready(function(){
	$('#costo').text("$ " + $('#renta #1semana').val());
	$('#duracion').change(function(){
		var optionSelected = $('#duracion option:selected');
		if(optionSelected.val() == 7){
			$('#costo').text("$ " + $('#renta #1semana').val());
		}
		else if(optionSelected.val() == 14){
			$('#costo').text("$ " + $('#renta #2semanas').val());
		}
		else if(optionSelected.val() == 21){
			$('#costo').text("$ " + $('#renta #3semanas').val());
		}
	});
});    
