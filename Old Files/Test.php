<?php


 

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Country City State Demo</title>



 
  <script src="jquery.min.js"></script>
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script>
       window.load=$( document ).ready(function() {
	
	 $.ajax({
                type:'POST',
                url:'countryAjaxData.php',
                success:function(html){
                    $('#zone-cbo').html(html);
                
                                      }
                   }); 
				   
				    });  
					
					
				   $( document ).ready(function() {
					   
					   $('#zone-cbo').on('change',function(){//change function on country to display all state 
        var zoneID = $(this).val();
        if(zoneID){
            $.ajax({
                type:'POST',
                url:'ajaxDatafill.php',
                data:'zone_id='+zoneID,
                success:function(html){
                    $('#circle-cbo').html(html);
                    $('#district-cbo').html('<option value="">Select state first</option>'); 
                                      }
                   }); 
                      }else{
                           $('#circle-cbo').html('<option value="">Select country first</option>');
                           $('#district-cbo').html('<option value="">Select state first</option>'); 
                           }
    });
    
    $('#circle-cbo').on('change',function(){//change state to display all city
        var circleID = $(this).val();
        if(circleID){
            $.ajax({
                type:'POST',
                url:'ajaxDatafill.php',
                data:'circle_id='+circleID,
                success:function(html){
                    $('#district-cbo').html(html);
                                      }
                   }); 
                    }else{
                          $('#district-cbo').html('<option value="">Select state first</option>'); 
                         }
    });
	
	
    $('#district-cbo').on('change',function(){//change state to display all city
        var districtID = $(this).val();
        if(districtID){
            $.ajax({
                type:'POST',
                url:'ajaxDatafill.php',
                data:'district_id='+districtID,
                success:function(html){
                    $('#division-cbo').html(html);
                }
			}); 
        }else{
			$('#division-cbo').html('<option value="">Select state first</option>'); 
        }
    });

    $('#division-cbo').on('change',function(){//change state to display all city
        var divisionID = $(this).val();
        if(divisionID){
            $.ajax({
                type:'POST',
                url:'ajaxDatafill.php',
                data:'division_id='+divisionID,
                success:function(html){
                    $('#subdivision-cbo').html(html);
                }
			}); 
        }else{
			$('#subdivision-cbo').html('<option value="">Select state first</option>'); 
        }
    });


	
}); 
	 
	 
	 
				   </script>

</head>
	   <p id="profile1" style="color:red;margin-left:700px;margin-top:100px"><b>Drop Down Combo boxes Examples</b></p><br>

                         	 <div class="row">
					 
		
		  <div class="col-md-1 col-sm-12" id="lable1"></div>
                    
					 <div class="col-md-1 col-sm-12" id="lable1"><id="lable1">Zone</div>
                    <div class="col-md-2">
                     
					<select name="zone-cbo" id="zone-cbo"   
 data-live-search="true" class="chosen selectpicker form-control" required>
					<option value="">Select Zone</option>
					
                    </select>

                    </div>

		  
					   
					
					
                    <div class="col-md-1 col-sm-12" id="lable1"><id="lable1">Circle</div>
                    <div class="col-md-2">
                    <select class="selectpicker form-control" name="circle-cbo" id="circle-cbo"  autofocus="autofocus" required>
                        <option value="">Select an Option</option>                            
                    </select>

                    </div>

                 <div class="col-md-1 col-sm-12" id="lable1"><id="lable1">District</div>
                    <div class="col-md-2">
                    <select class="selectpicker form-control" name="district-cbo" id="district-cbo"  autofocus="autofocus" required>
                    
                    <option value="">Select an Option</option>
                    </select></div>
				<div class="col-md-1 col-sm-12" id="lable1"><id="lable1">Division</div>
                <div class="col-md-2">
					<select class="selectpicker form-control" name="division-cbo" id="division-cbo"  autofocus="autofocus" required>
					<option value="">Select an Option</option>
					</select>
				</div>	
				<div class="col-md-1 col-sm-12" id="lable1"><id="lable1">Sub Division</div>
                <div class="col-md-2">
					<select class="selectpicker form-control" name="subdivision-cbo" id="subdivision-cbo"  autofocus="autofocus" required>
					<option value="">Select an Option</option>
					</select>
				</div>	
					
					
                  </div>
                    </br>
					</div>
					</div>
                    <!--start 6 row-->
