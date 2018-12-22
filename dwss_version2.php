<?php


 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Water Supply & Sanitation Department Punjab</title>
	<script src="jquery.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
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
	                    $('#district-cbo').html('<option value="">Select Circle </option>'); 
	                }
                }); 
          	}else{
               	$('#circle-cbo').html('<option value="">Select Circle</option>');
               	$('#district-cbo').html('<option value="">Select District</option>'); 
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
          	$('#district-cbo').html('<option value="">Select District</option>'); 
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
                }
			}); 
        }else{
			$('#block-cbo').html('<option value="">Select Block</option>'); 
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
				<table>
					<tr>
						<td>
							<lable1>Zone</lable1>				
						</td>
						<td>
							<select name="zone-cbo" id="zone-cbo" required>
								<option value="">Select Zone</option>
							</select>
						</td>
						<td>
							<lable1>Circle</lable1>
						</td>
						<td>
							<select name="circle-cbo" id="circle-cbo"  autofocus="autofocus" required>
								<option value="">Select Circle</option>                            
							</select>
						</td>
						<td>
							<lable1>District</lable1>			
						</td>
						<td>
							<select name="district-cbo" id="district-cbo"  autofocus="autofocus" required>
								<option value="">Select District</option>
							</select>
						</td>
						<td>
							<lable1>Block</lable1>
						</td>
						<td>
							<select name="block-cbo" id="block-cbo"  autofocus="autofocus" required>
								<option value="">Select Block</option>
							</select>
						</td>
						<td>
							<lable1>Scheme</lable1>
						</td>
						<td>
							<select name="scheme-cbo" id="scheme-cbo"  autofocus="autofocus" required>
								<option value="">Select Scheme</option>
							</select>
						</td>

					</tr>


				</table>
			</div>
		</form>
	</div>
</body>

	<!--start 6 row-->
