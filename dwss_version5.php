<?php

//<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 //<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
//$('#district-cbo').html('<option value="">Select Circle </option>'); 

/*

var districtID = document.getElementById("district-cbo").value;
     	var blockID = document.getElementById("block-cbo").value;
     	var nrdwpAmt = document.getElementById("nrdwp_amt").value;
     	var sshareAmt = document.getElementById("stateshare_amt").value;
     	var wbshareAmt = document.getElementById("wbshare_amt").value;
     	var aApprovalno = document.getElementById("admin_a_no").value;
     	var aApprovaldt = document.getElementById("admin_a_dt").value;
     	var component  = document.getElementById("component-cbo").value;
     	var approvedBy = document.getElementById("approvedby-cbo").value;
     	$.POST('addrec.php',{zone_id:zoneID,circle_id:circleID,district_id:districtID,block_id:blockID,nrdwp_amt:nrdwpAmt,stateshare_amt:sshareAmt,wbshare_amt:wbshareAmt,admin_a_no:aApprovalno,admin_a_dt:aApprovaldt,program:component,aaby:approvedBy},
https://www.youtube.com/watch?v=UNtqhnhD-wo
*/


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Water Supply & Sanitation Department Punjab</title>
	<script src="jquery-2.2.2.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
	        console.log(zoneID);
	        var test = document.getElementById('approval').value;
	        console.log(test);

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
                    //console.log(html);
                    $('#scheme-cbo').html(html);

                }
			}); 
        }else{
			$('#scheme-cbo').html('<option value="">Select Scheme</option>'); 
        }
    });

    $('#scheme-cbo').on('change',function(){//change state to display all city
        
        //getschData();
       // fill();
        var schemeID = $(this).val();
        console.log(schemeID);
      //  ajax_post();
        if(schemeID){
            $.ajax({
                type:'POST',
                url:'FetchScheme.php',
                data:'scheme_id='+schemeID,
                dataType: "JSON",
                success:function(data){
                	console.log(data.divisionid);
                	console.log(data.subdivisionid);
                	                }
			}); 
        }else{
			$('#scheme-cbo').html('<option value="">Select Scheme</option>'); 
        }
    });

/*
		var mdivid = html.divnid;
            var msdivnid = html.sdivnid;
            console.log('Retreived data: ', mdivid, msdivnid);
           // $('#result').html(html);
        }, 'json'
*/

    $('#admin_a_amt').on('change',function(){//change state to display all city
            document.getElementById("admin_a_amt").value = parseFloat($(this).val()).toFixed(2);
 	}); 
 	$('#wbshare_amt').on('change',function(){//change state to display all city
            document.getElementById("wbshare_amt").value = parseFloat($(this).val()).toFixed(2);
 	}); 
 	$('#stateshare_amt').on('change',function(){//change state to display all city
            document.getElementById("stateshare_amt").value = parseFloat($(this).val()).toFixed(2);
 	}); 
 	$('#nrdwp_amt').on('change',function(){//change state to display all city
            document.getElementById("nrdwp_amt").value = parseFloat($(this).val()).toFixed(2);
 	});    
	

});
</script>
<script>
function test(){//change state to display all city
 	var zoneID =  document.getElementById("zone-cbo").value;
 	var circleID = document.getElementById("circle-cbo").value;
	var districtID = document.getElementById("district-cbo").value;
	var divisionID = document.getElementById("division-cbo").value;
 	var blockID = document.getElementById("block-cbo").value;
 	var schemeID = document.getElementById("scheme-cbo").value;
 	var nrdwpAmt = document.getElementById("nrdwp_amt").value;
 	var sshareAmt = document.getElementById("stateshare_amt").value;
 	var wbshareAmt = document.getElementById("wbshare_amt").value;
 	var aApprovalno = document.getElementById("admin_a_no").value;
 	var aApprovaldt = document.getElementById("admin_a_dt").value;
 	var component  = document.getElementById("component-cbo").value;
 	var approvedBy = document.getElementById("approvedby-cbo").value;

 	var dataString = 'zone_id='+zoneID + '&circle_id='+circleID + '&district_id=' +districtID + '&block_id=' +blockID + '&nrdwp_amt=' + nrdwpAmt+ '&stateshare_amt=' + sshareAmt + '&wbshare_amt=' + wbshareAmt + '&admin_a_no='+ aApprovalno + '&admin_a_dt=' + aApprovaldt + '&program=' +component + '&approvedby=' + approvedBy+ '&scheme_id=' + schemeID + '&Division=' +districtID; 	
     alert(dataString);
    $.ajax({
        type:'POST',
        url:'addrec.php',
        data: dataString,
        success:function(html){
        	$mtemp = html;
            var mdivid = $mtemp.divnid;
            var msdivnid = $mtemp.sdivnid;
            console.log('Retreived data: ', mdivid, msdivnid);
           // $('#result').html(html);
        }
   	}); 	

}
</script>
<script type="text/javascript">
	function ajax_post(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "temp.php";
    var fn = document.getElementById("scheme-cbo").value;
    var ln = document.getElementById("block-cbo").value;
    var vars = "scheme_id="+fn+"&block_id="+ln;
    var vars = "scheme_id="+fn;
    console.log(vars);
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			console.log(return_data);
			console.log(return_data.divisionid);
			console.log((document.getElementById('id').value));
			<?php 
			//$handle  = JSON.decode(return_data);
			//console.log($handle);
			?>
			//var javaobj =  JSON.parse(handle);
			var javaobj = JSON.parse(return_data);
    		console.log(javaobj);

			//document.getElementById("msg").innerHTML = return_data.divisionid;
             // document.getElementById("divID").innerHTML = return_data;
              //alert(document.getElementById("divID").value);

	    }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("msg").innerHTML = "processing...";
}
</script>


<script type="text/javascript">
	
function getschData(){
	var xhttp = new XMLHttpRequest();
	var url = "schemedata_version2.php";
    var sdata = document.getElementById("scheme-cbo").value;
    var bdata = document.getElementById("block-cbo").value;
    var vars = "scheme_id="+sdata+"&block_id="+bdata;
    console.log(vars);
    xhttp.onreadystatechange = function(){
    	if(xhttp.readyState==4 && xhttp.status==200){
    		//var javaobj = JSON.stringify(xhttp.response);
    		var javaobj = JSON.parse(xhttp.response);
    		console.log(javaobj.divisionid);
    		document.getElementById('admin_a_no').value = javaobj.divisionid;
    		alert(document.getElementById('admin_a_no').value);
    		alert("hi hi");
    	}
    };
    xhttp.open("GET","schemedata_version2.php",true);
    xhttp.send(vars);
    document.getElementById("msg").innerHTML = "processing...";
}

</script>
<script type="text/javascript">
	function fill(){
		var temp = 'Division code';
		document.getElementById("msg").innerHTML = temp;
		document.getElementById("admin_a_no").value = "processing...";
	}
</script>

<script type="text/javascript">
	$('#approval').on('change',function(){
		var approve = $(this).val();
        console.log(approve);
        alert(approve);
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
				<form id = "myform" name="myform" action="" method="POST">
					<label>Username</label>
					<div>
						<input type="text" placeholder="Username" name="divID" id="divID" required/>
					</div>
					<label>Password</label>
					<div>
						<input type="text" placeholder="Password" name="sdivID" id="sdivID" required/>
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
		<form id="myform2" name="myform2" action="." method="POST"> 
			
			<div>
				<label>Zone</label>
				<select class ="cbo-zone" name="zone-cbo" id="zone-cbo"  autofocus="autofocus" required >
					<option value="Z03">Select Zone</option>
				</select>
				<label style="margin-left: 10px">Circle</label>
				<select class ="cbo-circle" name="circle-cbo" id="circle-cbo"  autofocus="autofocus" required>
					<option  value="">Select Circle</option>
				</select>
				<label style="margin-left: 10px">District</label>
				<select class ="cbo-district" name="district-cbo" id="district-cbo"  autofocus="autofocus" required>
					<option value="">Select District</option>
				</select>
				<label style="margin-left: 10px">Block</label>
				<select class ="cbo-block" name="block_cbo" id="block-cbo"  autofocus="autofocus" required>
					<option value="">Select Block</option>
				</select>
				<label style="margin-left: 10px">Scheme</label>
				<select class ="cbo-scheme" name="scheme_cbo" id="scheme-cbo"  autofocus="autofocus" required>
					<option value="">Select Scheme</option>
				</select>

<div>
	<input type="hidden" name="id" value="<?php echo $result->division_id; ?>" ></input>

</div>

			</div>
			<div class="data-form">
				<p id = "msg"></p>
				<div id="result">  </div>
				<table class="data-table" style="margin-top: 50px;">
					<tr style="margin-top: 50px;">
						<td colspan="2">
							<input type="radio" name="approval" id="approval" value="0" checked> Admin Approval
  							<input type="radio" name="approval" id="approval" value="1"> Revised Admin Approval
						</td>
					</tr>
					<tr style="height: 30px;">
						<td>
							<label>Admin App. No.</label>
						</td>
						<td class="data-table-row-col">
							<input  type="text" name="admin_a_no" id="admin_a_no" placeholder="Admin Approval No." required> 
						</td>
					</tr>	
					<tr style="height: 50px;">
						<td>
							<label>Admin App. Dt.</label>
						</td>
						<td class="data-table-row-col">
							<input  type="date" name="admin_a_dt" id="admin_a_dt" placeholder="Admin Approval Date" required>
							
						</td>
					</tr>
					<tr class="data-table-row">
						<td>
							<label>Component</label>
						</td>
						<td class="data-table-row-col">
							<select  class="cbo-component" name="component-cbo" id="component-cbo"  autofocus="autofocus" required>
								<option value="" Selected hidden>Select Component</option>
								<option value="101">1A</option>
								<option value="102">1A(i)</option>
								<option value="103">1A(iii)</option>
								<option value="104">1A(WL)</option>
								<option value="105">2A</option>
								<option value="106">2B</option>
							</select>
						</td>
					</tr>
					<tr class="data-table-row">
						<td>
							<label>Approved By</label>
						</td>
						<td class="data-table-row-col">
							<select  class="cbo-approvedby" name="approvedby-cbo" id="approvedby-cbo"  autofocus="autofocus" required>
								<option value="" Selected hidden>Approved By</option>
								<option value="11">Govt</option>
								<option value="12">DC</option>
								<option value="13">CE</option>
								<option value="14">SE</option>
								<option value="15">EE</option>
							</select>
						</td>
					</tr>	
	
					<tr class="data-table-row">
						<td>
							<label>Admin App. Amt.</label>
						</td>
						<td class="data-table-row-col">
							<input type="number" name="admin_a_amt" id="admin_a_amt" placeholder="Admin Approval Amount" required>
						</td>
					</tr>	
					
					<tr class="data-table-row">
						<td>
							<label>WB Share</label>
						</td>
						<td class="data-table-row-col">
							<input  type="number" name="wbshare_amt" id="wbshare_amt" placeholder="World Bank Share">
						</td>
					</tr>	
					<tr class="data-table-row">
						<td>
							<label>State Share</label>
						</td>
						<td class="data-table-row-col">
							<input  type="number" name="stateshare_amt" id="stateshare_amt" placeholder="State Govt Share">

						</td>
					</tr>	
					
					<tr class="data-table-row">
						<td>
							<label>NRDWP</label>
						</td>
						<td class="data-table-row-col">
							<input  type="number" name="nrdwp_amt" id="nrdwp_amt" placeholder="Central Govt Share" onchange="setTwoNumberDecimal">
						</td>
					</tr>	
					<tr>
						<td></td>
						<td>
							<input class="mybutton" type="submit" name="submit" id="submit" onclick="return test()">
						</td>
					</tr>
				</table>
			</div>
		</form>
	</div>
</body>

	<!--start 6 row-->
