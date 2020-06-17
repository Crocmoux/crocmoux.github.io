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
		 				//alert('Le compte a correctement été supprimé !');
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
		 				//alert('Le compte a correctement été enregistré !');
		 				$(el).closest('button').css('background-color','skyblue !important');
		 				$(el).closest('button').fadeOut(10,function(){
		 					$(this).remove();
		 				});		 					
		 				$(el).closest('tr').find("td:eq(3)").html('<span style=\"background-color:lime;\">ENREGISTRÉ</span>');
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
	// Ajoute le compte admin
	$("button[name=add_admin]").click(function(){
		var el = this;
		var userid = $(this).attr("id");		

		if(confirm("Etes vous sur de vouloir ajouter les droits administrateur à cet utilisateur ?")) {
   			// AJAX Request
   			$.ajax({
	   			url: "/assets/admin/php/add_admin.php",
	   			type: "POST",
	   			data: { userid:userid },
   				success: function(data){
	   				if(data == "YES"){
		 				//alert('Le compte a correctement été modifié !');	
		 				$(el).closest('button').fadeOut(10,function(){
		 					$(this).remove();
		 				});
		 				$(el).closest('tr').find("td:eq(3)").append('&nbsp;-&nbsp;<span style=\"background-color:yellow;\">ADMIN</span>');	 					
		 				$(el).closest('tr').find("td:eq(4)").append('<button type="button" name="del_admin" id="'+userid+'" class="btn btn-danger btn-xs del_admin" style="padding:0.1rem 0.1rem !important; margin: 0rem !important; background-color: navy !important;border-color: black !important; !important">DEL ADMIN</button>');
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
	// Ajoute le compte admin
	$("button[name=del_admin]").click(function(){
		var el = this;
		var userid = $(this).attr("id");	
		var currentStatus = $(el).closest('tr').find("td:eq(3)").text();
		//var newStatus = currentStatus.replace(/ /g,'');
		//var ArrStatus = currentStatus.split(" ", 1);
        //var newStatus = ArrStatus[0];
        // Si la première lettre vaut 'E' pour ENREGISTRE
        if (currentStatus.substring(0, 1) == 'E'){
        	var newStatus = "<span style=\"background-color:lime;\">ENREGISTRÉ</span>";
        } else { // Sinon on est pas enregistré (NON ENRERISTRE)
        	var newStatus = "<span style=\"background-color:coral;\">NON ENREGISTRÉ</span>";
        }

		if(confirm("Etes vous sur de vouloir supprimer les droits administrateur à cet utilisateur ?")) {
   			// AJAX Request
   			$.ajax({
	   			url: "/assets/admin/php/del_admin.php",
	   			type: "POST",
	   			data: { userid:userid },
   				success: function(data){
	   				if(data == "YES"){
		 				//alert('Le compte a correctement été modifié !');	
		 				$(el).closest('button').fadeOut(10,function(){
		 					$(this).remove();
		 				});
		 				//$(el).closest('tr').find("td:eq(3)").append('&nbsp;-&nbsp;<span style=\"background-color:yellow;\">ADMIN</span>');
		 				$(el).closest('tr').find("td:eq(3)").html(newStatus);	 					
		 				$(el).closest('tr').find("td:eq(4)").append('<button type="button" name="add_admin" id="'+userid+'" class="btn btn-danger btn-xs add_admin" style="padding:0.1rem 0.1rem !important; margin: 0rem !important; background-color: navy !important;border-color: black !important; !important">ADD ADMIN</button>');
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
