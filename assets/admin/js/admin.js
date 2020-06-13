$(document).ready(function(){
	// Suppression utilisateur
	$("button[name=delete]").click(function(){
		var el = this;
		var userid = $(this).attr("id");		

		if(confirm("Etes vous sur de vouloir supprimer cet utilisateur ?")) {
   			// AJAX Request
   			$.ajax({
	   			url: "/assets/admin/php/delete.php",
	   			type: "POST",
	   			data: { userid:userid },
   				success: function(data){
	   				if(data == "YES"){
		 				// Supression de la ligne dans le tableau
		 				alert('Le compte a correctement été supprimé !');
		 				$(el).closest('tr').css('background','lemonchiffon');
		 				$(el).closest('tr').fadeOut(1000,function(){
		 					$(this).remove();
		 				});
					}else{
						alert('Une Erreur est survenue !');
					}
				}
			});
		} else {
			return false;
		}
	});
});

$(document).ready(function(){
	// Enregistrer utilisateur
	$("button[name=enreg]").click(function(){
		var el = this;
		var userid = $(this).attr("id");		

		if(confirm("Etes vous sur de vouloir enregistrer cet utilisateur ?")) {
   			// AJAX Request
   			$.ajax({
	   			url: "/assets/admin/php/enreg.php",
	   			type: "POST",
	   			data: { userid:userid },
   				success: function(data){
	   				if(data == "YES"){
		 				// Supression de la ligne dans le tableau
		 				alert('Le compte a correctement été enregistré !');
		 				$(el).closest('button').css('background-color','skyblue !important');
		 				$(el).closest('button').fadeOut(500,function(){
		 					$(this).remove();
		 				});		 					
		 				$(el).closest('tr').find("td:eq(3)").html('ENREGISTRÉ');
					}else{
						alert('Une Erreur est survenue !');
					}
				}
			});
		} else {
			return false;
		}
	});
});
