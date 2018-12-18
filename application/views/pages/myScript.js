$(document).ready(function() {
	$("#suggest").keyup(function(){
		$.get("suggest.php", {kontraktor: $("this").val()}, function(data){
			$("datalist").empty();
			$("datalist").html(data);
		});
	})
});