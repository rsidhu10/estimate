<?php
/*


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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
*/ 
?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;   charset = utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name= "viewport" content="width= device-width,initial-scale=1.0"/ >
	<title>Water Supply & Sanitations Department</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


	<script>
       window.load=$( document ).ready(function() {
			$.ajax({
                type:'POST',
                url:'zone-cbo.php',
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
						url:'cbofill.php',
						data:'zone_id='+zoneID,
						success:function(html){
							$('#circle-cbo').html(html);
							$('#district-cbo').html('<option value="">Select District first</option>'); 
						}
					}); 
				}else{
					$('#circle-cbo').html('<option value="">Select Circle first</option>');
					$('#district-cbo').html('<option value="">Select District first</option>'); 
				}
			});
/*
		$( document ).ready(function() {
			$('#circle-cbo').on('change',function(){//change function on country to display all state 
				var circleID = $(this).val();
				if(circleID){
					$.ajax({
						type:'POST',
						url:'ajaxData.php',
						data:'circle_id='+circleID,
						success:function(html){
							$('#district-cbo').html(html);
							$('#division-cbo').html('<option value="">Select District first</option>'); 
						}
					}); 
				}else{
					$('#district-cbo').html('<option value="">Select Circle first</option>');
					$('#division-cbo').html('<option value="">Select District first</option>'); 
				}
			});
    
			$('#district').on('change',function(){//change state to display all city
				var districtID = $(this).val();
				if(districtID){
					$.ajax({
						type:'POST',
						url:'ajaxData.php',
						data:'dist_id='+districtID,
						success:function(html){
							$('#block').html(html);
						}
					}); 
				}else{
					$('#block').html('<option value="">Select state first</option>'); 
                }
			});
		});
		*/
	</script>
</head>
	<p id="profile1" style="color:red;margin-left:700px;margin-top:100px"><b>Department of Water Supply Punjab (Central Zone)</b></p><br>
	<section>
		<div class="scheme-form">
			<form>
			    <table style="border-collapse: collapse;">
			    	<tr>
			    		<td>
			    			<div>Zone</div>
			    		</td>
			    		<td>
			    			<select name="zone-cbo" id="zone-cbo" required>
							<option value="">Select Zone</option>
			            </select>
			    		</td>
			    		<td>
			    			<div>Circle</div>
			    		</td>
			    		<td>
			    			<select name="circle-cbo" id="circle-cbo" required>
							<option value="">Select Circle</option>
			            </select>
			    		</td>
			    		<td>
			    			<div>District</div>
			    		</td>
			    		<td>
			    			<select name="district-cbo" id="district-cbo" required>
							<option value="">Select District</option>
			            </select>
			    		</td>
			    	</tr>


			    </table>
			</form>    
		</div>	
	</section>
		    
		    	

</html>
	



<?php 

/*
	<div class="row">
		<div class="col-md-1 col-sm-12" id="lable1"></div>
		<div class="col-md-1 col-sm-12" id="lable1"><id="lable1">Circle</div>
        <div class="col-md-2">
			<select name="circle" id="circle" data-live-search="true" class="chosen selectpicker form-control" required>
				<option value="">Select Circle</option>
            </select>
        </div>
		<div class="col-md-1 col-sm-12" id="lable1"><id="lable1">District</div>
		<div class="col-md-2">
			<select class="selectpicker form-control" name="district" id="district"  autofocus="autofocus" required>
				<option value="">Select District</option>                            
			</select>
		</div>
		<div class="col-md-1 col-sm-12" id="lable1"><id="lable1">District</div>
		<div class="col-md-2">
			<select class="selectpicker form-control" name="district" id="district"  autofocus="autofocus" required>
				<option value="">Select District</option>                            
			</select>
		</div>
		<div class="col-md-1 col-sm-12" id="lable1"><id="lable1">Block</div>
		<div class="col-md-2">
			<select class="selectpicker form-control" name="block" id="block" standard title="Select an Option" autofocus="autofocus" required>
				<option value="">Select Block</option>
			</select>
		</div>
				<div class="col-md-1 col-sm-12" id="lable1"><id="lable1">Scheme</div>
		<div class="col-md-2">
			<select class="selectpicker form-control" name="scheme" id="scheme" standard title="Select an Option" autofocus="autofocus" required>
				<option value="">Select Scheme</option>
			</select>
		</div>

	</div>
                    <!--start 6 row-->

 ?>                   