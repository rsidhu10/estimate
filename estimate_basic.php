<?php
/*
<script src="/include/js/estimate_update.js"></script>
	<script src="/include/js/datafill_estimate.js"></script>
  	<script src="/include/js/estimate_edit_fill.js"></script>
  	<script src="/include/js/estimatenew.js"></script>
*/

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
	<script src="/include/js/insert_table_basic.js"></script>
	<script src="/include/js/mydate.js"></script>
	
  	
  	<style type="text/css">
  		.cont{
  			font-size: 8px;
  			font-family: sans-serif; 
		}
		.myrow{	
			background-color: #B6D4DA; 

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
				<li><a href="#">Approvals</a></li>
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
		<h3 align="center">Basic Report </h3><br />   
	   	<div class="table-responsive" id="combo_details">
	   		<table class="table table-condensed">
	 			<tr style="background-color: #B6D4DA;">
	 				<th width="12%" align="left"><span>Zone</span></th>
	 				<th width="15%" align="left"><span>Circle</span></th>
	 				<th width="15%" align="left"><span>Division</span></th>
	 				<th width="15%" align="left"><span>Sub Division</span></th>
	 				<th width="15%" align="left"><span>Block</span></th>
	 				<th width="20%" align="left"><span>Scheme</span></th>
	 				<th width="8%" align="center">





<!--
	 					Sr No	District	Division	Sub Division	Constituency	Block	Scheme Name	Villages Covered (No. of Villages with Name and Hadbast No)	Date of Previous Commissioning with program	Pop. 2011 (SC)	Pop. 2011 (GEN)	Pop. 2011 (Total)	Population 2018 (0.798*7)	Population 2033 (2018 pop *1.12)	Population 2048 (2018 pop *1.24)	Per Capita Cost at Present Population	Per Capita Cost at 15 year Prospective	Present HH (SC)	Present HH (GEN)	Total Present No. of House Holds	Existing No. of Connections	Previously Scheme Executed under SWAp	Scheme Quality Affected	Previous Service Level (lpcd)	Resolution Received ?	GPWSCs Formed ?	In Case of Multi Village Scheme SLC Formed ?													--->				
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
<!--	
	<div class="container-fluid col-sm-4 "  id="entry_form" style="background-color: #fff; width: 95%;" >
	<div class="cont">
		<table class="table table-condensed table-bordered" style="font-size-adjust: auto;" id="mytable">
			<thead>
			<tr style="background-color: #B6D4DA;">
	 				<th rowspan="2" align="left" style="padding-left: 10px;"><span>Sr</span></th>			
	 				<th rowspan="2"  align="left"><span>District</span></th>
	 				<th rowspan="2"  align="left"><span>Division</span></th>
	 				<th rowspan="2"  align="left"><span>Sub Division</span></th>
	 				<th rowspan="2"  align="left"><span>Block</span></th>
	 				<th rowspan="2"  align="left"><span>Scheme</span></th>
	 				<th rowspan="2"><span>Villages Covered Under</span></th>
	 				<th rowspan="2"><span>Pre. Comm. Dt. with Prog.</span></th>
	 				<th colspan="3"><span>Population 2011</span></th>
	 				<th colspan="3"><span>Population 2018</span></th>
	 				<th colspan="3"><span>Population 2033</span></th>
	 				<th colspan="3"><span>Population 2048</span></th>
	 				<th rowspan="2"><span>Per Capita Cost at Present Pop.</span></th>
	 				<th rowspan="2"><span>Per Capita Cost at 15 year Prospective</span></th>
	 				<th colspan="3"><span>Present House Holds</span></th>
	 				<th rowspan="2"><span>Existing No. of Conn.</span></th>
	 				<th rowspan="2"><span>Previously Scheme Executed under SWAp</span></th>
	 				<th rowspan="2"><span>Quality Status</span></th>
	 				<th rowspan="2"><span>Previous LPCD</span></th>
	 				<th rowspan="2"><span>Resolution Received</span></th>
	 				<th rowspan="2"><span>Committee Formd</span></th>
	 		</tr>
			<tr style="background-color: #B6D4DA;">	
	 				<th><span>SC</span></th>
	 				<th><span>GEN</span></th>
	 				<th><span>Total</span></th>
	 				<th><span>SC</span></th>
	 				<th><span>GEN</span></th>
	 				<th><span>Total</span></th>
	 				<th><span>SC</span></th>
	 				<th><span>GEN</span></th>
	 				<th><span>Total</span></th>
	 				<th><span>SC</span></th>
	 				<th><span>GEN</span></th>
	 				<th><span>Total</span></th>
	 				<th><span>SC</span></th>
	 				<th><span>GEN</span></th>
	 				<th><span>Total</span></th>
			</tr>
			</thead>
		

		</table>
	</div>
</div>
-->
	<div class="container-fluid col-sm-4 "  id="entry_form" style="background-color: #fff; width: 95%;" >
		<div class="cont">
			<div id = "showData" >
			</div>
		</div>
	</div>		

</body>				
</html>