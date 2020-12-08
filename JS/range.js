$(document).ready(function(){
	$('#rango').change(function(){
		$('#valor').val($(this).val());
	});
	$('#valor').change(function(){
		$('#rango').val($(this).val());
	});
});    
