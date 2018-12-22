<?php
include('include/db_connect.php');
 ?>
<!DOCTYPE html>
<html>
	<head>
  		<title>DWSS Punjab (Central Zone)</title>
  		 <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  		<script src="/include/js/datafill.js"></script>
  		<script src="/include/js/addnew.js"></script>
  		<script src="/include/js/insert_table.js"></script>
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
<!-- 		
 		<nav class="navbar navbar-expand-sm bg-primary navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Active</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>
  </ul>
</nav>
--!>
	  	<div class="container" style="width: 100%;">
		<!--<h2 align="center">How to return JSON Data from PHP Script using Ajax Jquery</h2> -->
<nav class="navbar navbar-expand-sm bg-primary navbar-light">	
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link active" href="#">Active</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>
  </ul>
 </nav> 
</div>


		   	<h4 align="center">List of Scheme Admin Approved</h4><br />   
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
							    <option value="*">All</option>
			     			</select>
			     		</td>					
		 				<td>
		 					<select name="circle-cbo" id="circle-cbo" class="form-control" autofocus="autofocus" required>
							    <option value="">Select Circle</option>
							    <option value="*">All Circle</option>
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
 			<div class="table-responsive" id="showData"></div>
 		</div>

 	</body>
 	</html>