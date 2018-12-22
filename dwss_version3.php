<?php

//<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 //<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
//$('#district-cbo').html('<option value="">Select Circle </option>'); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Water Supply & Sanitation Department Punjab</title>
	<script src="jquery.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script>
		

    window.load=$( document ).ready(function() {
		$.ajax({
	        type:'POST',
	        url:'zone.php',
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
        if(blockID){
            $.ajax({
                type:'POST',
                url:'scheme.php',
                data:'block_id='+blockID,
                success:function(html){
                    $('#scheme-cbo').html(html);
                }
			}); 
        }else{
			$('#scheme-cbo').html('<option value="">Select Scheme</option>'); 
        }
    });

}); 
	 
</script>

</head>
<body>
	<nav>
		<section class="nav-container">
			<aside class="logo"><img src= "" alt="hlogo"></aside>
			<aside class="menu">
				<div class="menu-content">
					<i class="fa fa-unlock-alt"></i><a href="#" id ="login" >Login</a> | <i class="fa fa-user"></i><a href="#">Register</a>
				</div>
				<div class="arrow-up"></div>
			</aside>
			<div class="login-form">
				<form>
					<label>Username</label>
					<div>
						<input type="text" placeholder="Username" required/>
					</div>
					<label>Password</label>
					<div>
						<input type="password" placeholder="Password" required/>
					</div>
					<div>
						<input type="text" value="Log In" />
					</div>
					<div>
						<a href="#" style="text-decoration: none;position: relative;top: 20px;font-size: 16px;color: gray; ">Lost Your Password</a>
					</div>

				</form>

			</div>	
		</section>
	</nav>
<section>
	<div class="scheme-form">
		<form> 
			
			<div>
				<label>Zone</label>
				<select style="margin-left: 10px" name="zone-cbo" id="zone-cbo"  autofocus="autofocus" required style="border: 1px solid #777; width: 80px;">
					<option value="Z03">Select Zone</option>
				</select>
				<label style="margin-left: 10px">Circle</label>
				<select style="margin-left: 10px " name="circle-cbo" id="circle-cbo"  autofocus="autofocus" required>
					<option  value="">Select Circle</option>
				</select>
				<label style="margin-left: 10px">District</label>
				<select style="margin-left: 10px" name="district-cbo" id="district-cbo"  autofocus="autofocus" required>
					<option value="">Select District</option>
				</select>
				<label style="margin-left: 10px">Block</label>
				<select style="margin-left: 10px" name="block_cbo" id="block-cbo"  autofocus="autofocus" required>
					<option value="">Select Block</option>
				</select>
				<label style="margin-left: 10px">Scheme</label>
				<select style="margin-left: 10px" name="scheme_cbo" id="scheme-cbo"  autofocus="autofocus" required>
					<option value="">Select Scheme</option>
				</select>



			</div>
			<div class="data-form">
				<label>Admin App. No.</label>
				<input  type="text" name="admin_a_no" id="admin_a_no" placeholder="Admin Approval No.">
				<br/>
				<label>Admin App. Dt.</label>
				<input  type="date" name="admin_a_dt" id="admin_a_dt" placeholder="Admin Approval Date">
				
				<br/>
				<br/>
				<label style="margin-top: 15px">Component</label>
				<select  font-size: 12px;  " name="component-cbo" id="component-cbo"  autofocus="autofocus" required>
					<option value="" Selected hidden>Select Component</option>
					<option value="101">1A</option>
					<option value="102">1A(i)</option>
					<option value="103">1A(iii)</option>
					<option value="104">1A(WL)</option>
					<option value="105">2A</option>
					<option value="106">2B</option>
				</select>
				<br/>
				<label>Admin App. Amt.</label>
				<input type="text" name="admin_a_amt" id="admin_a_amt" placeholder="Admin Approval Amount">
				<br/>
				<label>WB Share</label>
				<input  type="text" name="wbshare_amt" id="wbshare_amt" placeholder="World Bank Share">
				<br/>
				<label>State Share</label>
				<input  type="text" name="stateshare_amt" id="stateshare_amt" placeholder="State Govt Share">
				<br/>
				<label>NRDWP</label>
				<input  type="text" name="nrdwp_amt" id="nrdwp_amt" placeholder="Central Govt Share">




			</div>
		</form>
	</div>
</body>

	<!--start 6 row-->
