$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 

$(".lang").click(function() {
	var lg=$(this).attr("id");
	$.post("lang/change.php", {lang:lg}, function(hola){
		location.reload();
    	});
		});
});