$(document).ready(function(){
	$('#txt-codigo').keyup(function(){
		$('#txt-codigo').val($(this).val().toUpperCase());
	});
});    
