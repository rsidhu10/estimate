<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>DWSS Punjab (Central Zone)</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="/include/js/habitation_update.js"></script>-->
	<script src="/include/js/datafill_estimate2.js"></script>
	<script src="/include/js/habnew.js"></script>
 <!-- 	<script src="/include/js/estimate_edit_fill.js"></script>
  	<script src="/include/js/estimatenew.js"></script>
//  	<script src="/include/js/estimate_habs.js"></script>
--> 
 	<style type="text/css">
  		.cont{
  			font-size: 8px;
  			font-family: sans-serif; 
		}
		.myrow{	
			background-color: #B6D4DA;
			text-align: center; 
  		}
  		
  	</style>

</head>
<body>
	<!-- Nav Bar Section -->
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">DWSS Pb.</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href=".">Home</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Data Entry
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="index.php">Estimate</a></li>
						<li><a href="estimate_habs.php">Add Habitation</a></li>
						<li><a href="#">Add GI Pipe</a></li>
					</ul>
				</li>
				<li><a href="adapproval.php">Approvals</a></li>
				<li><a href="#">Reports</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Estimate
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="estimate_basic.php">Basic Report</a></li>
						<li><a href="estimate_tech.php">Technical Report</a></li>
						<li><a href="estimate_fin.php">Financial Report</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<!-- Master Data Dropdown Selection  -->
	<div class="container-fluid" id="combo_selection" >
		<h3 align="center">Estimate Preparation Form (Add Connections)</h3><br />   
	   	<div class="table-responsive" id="combo_details">
	   		<table class="table table-condensed">
	 			<tr style="background-color: #B6D4DA;">
	 				<th width="8%" align="left" style="padding-left: 10px;"><span>Zone</span></th>					
	 				<th width="12%" align="left"><span>Circle</span></th>
	 				<th width="12%" align="left"><span>Division</span></th>
	 				<th width="14%" align="left"><span>Sub Division</span></th>
	 				<th width="14%" align="left"><span>Block</span></th>
	 				<th width="14%" align="left"><span>Scheme</span></th>
	 				<th width="14%" align="left"><span>Habitation</span></th>
	 				<th width="8%" align="center">
	 					<input  type="text" name="district-txt" id="district-txt" style="width: 1px; visibility: hidden; height: 10px;" >
	 					<input  type="text" name="subdivision-txt" id="subdivision-txt" style="width: 1px; visibility: hidden; height: 10px;" >
	 					<input  type="text" name="estimate_id" id="estimate_id" style="width: 1px; visibility: hidden; height: 10px;" >
	 				</th>
	 			</tr>
	 			<tr>
	 				<td>
	 					<select name="zone-cbo" id="zone-cbo" class="form-control input-sm" autofocus="autofocus" required>
						    <option value="">Select Zone</option>
		     			</select>
		     		</td>					
	 				<td>
	 					<select name="circle-cbo" id="circle-cbo" class="form-control input-sm" autofocus="autofocus" required>
						    <option value="">Select Circle</option>
		     			</select>
	 				</td>
	 				<td>
	 					<select name="division-cbo" id="division-cbo"  class="form-control input-sm" autofocus="autofocus" required>
						<option value="">Select Division</option>
					</select>
	 				</td>
	 				<td>
	 					<select name="subdivision-cbo" id="subdivision-cbo" class="form-control input-sm" autofocus="autofocus" required>
						<option value="">Select Sub Division</option>
					</select>
	 				</td>
	 				<td>
	 					<select name="block-cbo" id="block-cbo" class="form-control input-sm" autofocus="autofocus" required>
						<option value="">Select Block</option>
					</select>
	 				</td>
	 				<td>
	 					<select name="scheme-cbo" id="scheme-cbo" class="form-control input-sm" autofocus="autofocus" required>
						<option value="">Select Scheme</option>
					</select>
	 				</td>
	 				<td>
	 					<select name="habitation-cbo" id="habitation-cbo" class="form-control input-sm" autofocus="autofocus" required>
						<option value="">Select Habitation</option>
					</select>
	 				</td>
	 				<td width="10%" align="center">
	 					<button type="button" name="search_btn" id="search_btn" class="btn btn-info input-sm">Search</button>
	 				</td>
	 			</tr>
			</table>
		</div>
	</div>
	<!-- Alert Section (Success / Error) -->
	<div class="alert alert-success input-sm" style="visibility: hidden;" id="message">
 		<p id="result" name="result" style="text-align: center;"></p>
 	</div>
	<!-- Entry Form Group -->
	<div class="container-fluid" id="entry_form" style="background-color: #fff; width: 75%;" >
		<table class="table table-condensed " >
			<div class="myrow">
			<tr style="background-color: #B6D4DA;" class="myrow">
 				<th colspan="3" width="23%" style="text-align: center;"><span>Population</span></th>
 				<th colspan="3" width="23%" style="text-align: center;"><span>House Holds</span></th>
 				
 			</tr>
			<tr style="background-color: #B6D4DA;">
 				<th width="15%" style="text-align: center;"><span>Gen</span></th>
 				<th width="15%" style="text-align: center;"><span>SC</span></th>
 				<th width="20%" style="text-align: center;"><span>Total</span></th>
 				<th width="15%" style="text-align: center;"><span>Gen</span></th>
 				<th width="15%" style="text-align: center;"><span>SC</span></th>
 				<th width="20%" style="text-align: center;"><span>Total</span></th>
 				
 				
 		<!--	<th><a href="#" data-toggle="tooltip" title="In Case of Multi Village Scheme SLC Formed"><span id="com_title">GPWSC Formed</span></a> </th> -->
			</tr>
			<tr style="background-color: #fff;">
				<td>
					<input type="text" name="gen_pop" id="gen_pop" class="form-control input-sm" >
					
		 		</td>
		 		<td><input type="text" name="sc_pop" id="sc_pop" class="form-control input-sm"></td>	
		 		<td><input type="text" name="total_pop" id="total_pop" class="form-control input-sm"></td>
		 		<td>
		 			<input type="text" name="gen_hh" id="gen_hh" class="form-control input-sm">
		 		</td>
				<td>
		 			<input type="text" name="sc_hh" id="sc_hh" class="form-control input-sm">
		 		</td>
				<td>
		 			<input type="text" name="total_hh" id="total_hh" class="form-control input-sm">
		 		</td>	
			<tr style="background-color: #B6D4DA;" class="myrow">
				<th rowspan="2"  style="text-align: center;"><span>Present Connections</span></th>
				<th colspan="3" rowspan="2"  style="text-align: center;"><span>Enter No. of  Existing Connections required on to be improved with union, washal arrangement  [Component I]</span></th>
 				<th colspan="2"  style="text-align: center;"><span>Enter New Connections required on</span></th>
			</tr>
			<tr style="background-color: #B6D4DA;" class="myrow">
				<th width="10%" style="text-align: center;"><span>Existing Pipe Line</span></th>
 				<th width="10%" style="text-align: center;"><span>New Pipe Line</span></th>
			</tr>
		</div>
				<td >
		 			<input type="text" name="present_connections" id="present_connections" class="form-control input-sm">
		 		</td>
		 		<td colspan="3">
		 			<input type="text" name="com1_connections" id="com1_connections" class="form-control input-sm">
		 		</td>
		 		<td>
		 			<input type="text" name="com2_connections" id="com2_connections" class="form-control input-sm">
		 		</td>
		 		<td>
		 			<input type="text" name="com3_connections" id="com3_connections" class="form-control input-sm">
		 		</td>
			</tr>
			<tr>
					<td colspan="8"  align="center">
						<div class="col-md-12" >
				    		<button type="button" name="delete-btn" id="delete-btn" class="btn btn-danger" >Delete</button>
				    		<button type="button" name="reset-btn" id="reset-btn" class="btn btn-primary"  >Reset</button>
				    		<button type="button" name="save-btn" id="save-btn" class="btn btn-primary"    >Add New</button>
				    		<button type="button" name="update-btn" id="update-btn" class="btn btn-primary">Update</button>
	    				</div>
					</td>
				</tr>				
		</table>

</body>				
</html>