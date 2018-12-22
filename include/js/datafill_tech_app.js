window.load=$( document ).ready(function() {
	$.ajax({
        type:'POST',
        url: "zone.php",
        success:function(html){
            $('#zone-cbo').html(html);
        }
	});

    $.ajax({
        type:'POST',
        url:'circle.php',
        data:'zone_id='+ 'Z03',
        success:function(html){
        	$('#circle-cbo').html(html);
        }
	});    
	$.ajax({
        type:'POST',
        url:'component.php',
        success:function(html){
            $('#component-cbo').html(html);
        }
	}); 

	$.ajax({
        type:'POST',
        url:'appby.php',
        success:function(html){
            $('#approvedby_cbo').html(html);
        }
	}); 
	$.ajax({
        type:'POST',
        url:'apptype.php',
        success:function(html){
            $('#approvaltype_cbo').html(html);
        }
	});





	$('#zone-cbo').on('change',function(){//change function on country to display all state 
        var zoneID = $(this).val();
        console.log(zoneID);

        if(zoneID){
            $.ajax({
                type:'POST',
                url:'circle.php',
                data:'zone_id='+zoneID,
                success:function(html){
                    $('#circle-cbo').html(html);
             		$('#district-cbo').html('<option value="">Select District</option>');
      				$('#block-cbo').html('<option value="">Select Block</option>'); 
					$('#scheme-cbo').html('<option value="">Select Scheme</option>'); 
                }
            }); 
      	}else{
           	$('#circle-cbo').html('<option value="">Select Circle</option>');
			$('#district-cbo').html('<option value="">Select District</option>');
      		$('#block-cbo').html('<option value="">Select Block</option>'); 
			$('#scheme-cbo').html('<option value="">Select Scheme</option>'); 
        }
	});

	$('#circle-cbo').on('change',function(){//change state to display all city
        var circleID = $(this).val();
        console.log(circleID);
        if(circleID){
            $.ajax({
                type:'POST',
                url:'district.php',
                data:'circle_id='+circleID,
                success:function(html){
                    $('#district-cbo').html(html);
                    $('#block-cbo').html('<option value="">Select Block</option>'); 
					$('#scheme-cbo').html('<option value="">Select Scheme</option>');
                }
            }); 
        }else{
          	$('#district-cbo').html('<option value="">Select District</option>');
          	$('#block-cbo').html('<option value="">Select Block</option>'); 
			$('#scheme-cbo').html('<option value="">Select Scheme</option>'); 
        }
    });

    $('#district-cbo').on('change',function(){//change state to display all city
        var districtID = $(this).val();
        console.log(districtID); 
         if(districtID){
            $.ajax({
                type:'POST',
                url:'block.php',
                data:'district_id='+districtID,
                success:function(html){
                    $('#block-cbo').html(html);
                    $('#scheme-cbo').html('<option value="">Select Scheme</option>');
                }
			}); 
        }else{
			$('#block-cbo').html('<option value="">Select Block</option>'); 
			$('#scheme-cbo').html('<option value="">Select Scheme</option>');
        }
    });

    $('#block-cbo').on('change',function(){//change state to display all city
        var blockID = $(this).val();
        console.log(blockID);
        if(blockID){
            $.ajax({
                type:'POST',
                url:'scheme.php',
                data:'block_id='+blockID,
                success:function(html){
                    console.log(html);
                    $('#scheme-cbo').html(html);
                }
			}); 
        }else{
			$('#scheme-cbo').html('<option value="">Select Scheme</option>'); 
        }
    });


    $('#scheme-cbo').on('change',function(){//change state to display all city
    	var schemeID = $(this).val();
        console.log(schemeID);
	    if(schemeID != ''){
	      $.ajax({
	        url:"fetch.php",
	        method:"POST",
	        data:{id:schemeID},
	        dataType:"JSON",
	        success:function(data){
	            document.getElementById("division-txt").value = data.divisionid;
	          	document.getElementById("subdivision-txt").value = data.subdivisionid;
	          	console.log(data.divisionid);
	          	console.log(data.subdivisionid);
	        }
	      })
	    }
	});


    $('#admin-approval-amt-txt').on('change',function(){
            document.getElementById("admin-approval-amt-txt").value = parseFloat($(this).val()).toFixed(2);
 	}); 
 	$('#wb-share-txt').on('change',function(){
        	document.getElementById("wb-share-txt").value = parseFloat($(this).val()).toFixed(2);
 	}); 
 	$('#state-share-txt').on('change',function(){//change state to display all city
            document.getElementById("state-share-txt").value = parseFloat($(this).val()).toFixed(2);
 	}); 
 	$('#nrdwp-share-txt').on('change',function(){//change state to display all city
            document.getElementById("nrdwp-share-txt").value = parseFloat($(this).val()).toFixed(2);
 	});    


});  
