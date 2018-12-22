<?php
 //<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;   charset = utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name= "viewport" content="width= device-width,initial-scale=1.0"/ >
	<title>Water Supply & Sanitations Department</title>
	<link rel="stylesheet  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script>
       window.load=$( document ).ready(function() {
			$.ajax({
                type:'POST',
                url:'zone-cbo.php',
                success:function(html){
                    $('#cbo_wing').html(html);
                }
            }); 
		});  
		$( document ).ready(function() {
			$('#zone').on('change',function(){//change function on country to display all state 
				var zoneID = $(this).val();
				if(zoneID){
					$.ajax({
						type:'POST',
						url:'ajaxData.php',
						data:'zone_id='+zoneID,
						success:function(html){
							$('#circle').html(html);
							$('#district').html('<option value="">Select District </option>'); 
							$('#division').html('<option value="">Select Division </option>'); 
							$('#block').html('<option value="">Select Block </option>'); 
						}
					}); 
				}else{
					$('#district').html('<option value="">Select Circle first</option>');
					$('#division').html('<option value="">Select Division </option>'); 
					$('#block').html('<option value="">Select Block </option>');
				}
			});

		
		$( document ).ready(function() {
			$('#circle').on('change',function(){//change function on country to display all state 
				var circleID = $(this).val();
				if(circleID){
					$.ajax({
						type:'POST',
						url:'ajaxData.php',
						data:'cir_id='+circleID,
						success:function(html){
							$('#district').html(html);
							$('#block').html('<option value="">Select District first</option>'); 
						}
					}); 
				}else{
					$('#district').html('<option value="">Select Circle first</option>');
					$('#block').html('<option value="">Select District first</option>'); 
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

					<select name="cbo_wing" id="cbo_wing"  required >
						<option value="">Select Wing</option>
            		</select>

					<table style="border-collapse: collapse;" >
						<tr>
							<td >
								<label>Wing</label>
							</td>
							<td style="width: 150px;">
								
							</td>
							

						</tr>

					</table>




					

					<div id="loader">hi</div>
					<p id="re">there</p>

					<div>
						<input type="submit" onclick ="add_rec()"    value="Add" />
						<input type="submit" onclick ="update_rec()" value="Update"/>
						<input type="submit" onclick ="delete_rec()" value="Delete"/>
						<input type="submit" onclick ="find_rec"   value="Find"/>						

					</div>
					<div id="showData"></div>
					<div>
						<a href="#" style="text-decoration: none;position: relative;top: 10px;font-size: 12px;color: gray; ">Central Zone</a>
					</div>

				</form>

			</div>

		
</section>
</body>




