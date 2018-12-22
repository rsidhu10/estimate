window.load=$( document ).ready(function() {
 //	$('#scheme-cbo').on('change',function(){
 	//change state to display all city
    	var schemeID = $(this).val();
        console.log("Scheme code for habitations");
        console.log(schemeID);
	    if(schemeID != ''){
	    	console.log("zzz");
	      $.ajax({
	        url:"habitations.php",
	        method:"POST",
	        data:{id:schemeID},
	        dataType:"JSON",
	        success:function(res){
	        	$('#habitation-cbo').html(res);
	        	console.log("hi");
	           	console.log(data.village_id);
	        }
	      });
	    }
	});
//});	
