<?php
include('include/db_connect.php');
 ?>
<!DOCTYPE html>
<html>
	<head>
  		<title>DWSS Punjab (Central Zone)</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  		<script src="/include/js/datafill.js"></script>
  		<script src="/include/js/addnew.js"></script>
  		<style>
  		
		/*  #result {
		   position: absolute;
		   width: 100%;
		   max-width:870px;
		   cursor: pointer;
		   overflow-y: auto;
		   max-height: 400px;
		   box-sizing: border-box;
		   z-index: 1001;
		  }
		  .link-class:hover{
		   background-color:#f1f1f1;
		  }
  		</style>
 	</head>
 	<body>
	  	<div class="container" style="width: 100%;">
		<!--<h2 align="center">How to return JSON Data from PHP Script using Ajax Jquery</h2> -->
		   	<h3 align="center">Technical Approval Entry</h3><br />   
		   	<div class="table-responsive" id="Combo_details">
		   		<table class="table table-striped">
		 			<tr>
		 				<td width="12%" align="left" style="padding-left: 10px;"><span>Zone</span></td>					
		 				<td width="17%" align="left"><span>Circle</span></td>
		 				<td width="17%" align="left"><span>District</span></td>
		 				<td width="17%" align="left"><span>Block</span></td>
		 				<td width="27%" align="left"><span>Scheme</span></td>
		 				<td width="10%" align="center">
		 					<input  type="text" name="division-txt" id="division-txt" style="width: 1px; visibility: hidden; height: 10px;" >
		 					<input  type="text" name="subdivision-txt" id="subdivision-txt" style="width: 1px; visibility: hidden; height: 10px;" >
		 				</td>
		 			</tr>
		 			<tr>
		 				<td>
		 					<select name="zone-cbo" id="zone-cbo" class="form-control" autofocus="autofocus" required>
							    <option value="">Select Zone</option>
			     			</select>
			     		</td>					
		 				<td>
		 					<select name="circle-cbo" id="circle-cbo" class="form-control" autofocus="autofocus" required>
							    <option value="">Select Circle</option>
			     			</select>
		 				</td>
		 				<td>
		 					<select name="district-cbo" id="district-cbo"  class="form-control" autofocus="autofocus" required>
							<option value="">Select District</option>
						</select>
		 				</td>
		 				<td>
		 					<select name="block_cbo" id="block-cbo" class="form-control" autofocus="autofocus" required>
							<option value="">Select Block</option>
						</select>
		 				</td>
		 				<td>
		 					<select name="scheme_cbo" id="scheme-cbo" class="form-control" autofocus="autofocus" required>
							<option value="">Select Scheme</option>
						</select>
		 				</td>
		 				<td width="10%" align="center">
		 					<button type="button" name="search" id="search" class="btn btn-info">Search</button>
		 				</td>
		 			</tr>
 				</table>
 			</div>
 			<div class="alert alert-success" style="visibility: hidden;" id="message">
 				<p id="result" name="result" style="text-align: center;">
 				</p>
 			</div>
 			<div  class="table-responsive" id="Combo_details" >
 				<table class="table table-striped" style="width: 60%; margin-left: 250px">
		 			<tr>
		 				<td>
		 					<span>Approval Type</span>
		 				</td>
		 				<td>
		 					<span>Approved By</span>
		 				</td>
		 				<td>
		 					<span></span>
		 				</td>
		 			</tr>
		 			<tr>	
		 				<td>
		 					<select name="approvaltype-cbo" id="approvaltype-cbo" class="form-control" autofocus="autofocus" required>
							    <option value="" selected=hidden>Select Approval Type</option>
							   
			     			</select>
		 				</td>
		 				<td>
		 					<select name="approvedby-cbo" id="approvedby-cbo" class="form-control" autofocus="autofocus" required>
							    <option value="" selected=hidden >Select Approved By</option>
							   
			     			</select>
		 				</td>
		 				<td>
		 					<select name="component-cbo" id="component-cbo" class="form-control" autofocus="autofocus" required>
							    <option value="">Select Component</option>
			     			</select>
		 				</td>
		 			</tr>
		 			<tr>
		 				<td>
		 				 	<span>Tech. Approval No.</span>				
		 				</td>
		 				<td>
		 				 	<span>Tech. Approval Date</span>				
		 				</td>
		 				<td>
		 				 	<span>Tech. Approval Amount</span>				
		 				</td>
		 			</tr>
		 			<tr>	
						<td>
		 					<input  type="text" name="tech-approval-no-txt" id="tech-approval-no-txt" placeholder="Tech. Approval No." required>
		 				</td>
		 				<td>
		 					<input  type="date" name="tech-approval-dt-txt" id="tech-approval-dt-txt" placeholder="Tech. Approval Date" required 
		 				</td>
		 				<td>
		 					<input  type="text" name="tech-approval-amt-txt" id="tech-approval-amt-txt" placeholder="Tech. Approval Amt."  required >
		 				</td>
		 			</tr>
 					
					<tr>
						
						<td colspan="4"  align="center">
							<div class="col-md-12" >
			     				<button type="button" name="delete-btn" id="delete-btn" class="btn btn-danger">Delete</button>
			     				<button type="button" name="reset-btn" id="reset-btn" class="btn btn-primary">Reset</button>
			     				<button type="button" name="save-btn" id="save-btn" class="btn btn-primary">Add New</button>
			     				<button type="button" name="update-btn" id="update-btn" class="btn btn-success">Update</button>
    						</div>
						</td>
					</tr>
   				</div>
   			<br />
   		</div>
   	</body>
</html>   			
