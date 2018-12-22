<?php
?>
<!DOCTYPE html>
<html>
<head>
  		<title>DWSS Punjab (Central Zone)</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  		<script src="/include/js/datafill_estimate.js"></script>
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


	<style type="text/css">
/*	table {border-collapse: collapse;}
	table, th, td {border: 1px solid black;}
	th{	background-color: #eee;}
	td{	height: 15px;}
</style>

</head>
<body>
<div class="table-responsive" id="Combo_details">
	<table align="center" width="85%" class="table table-striped">
		<thead>
			<tr>
				<th rowspan="2">Component</th>
				<th rowspan="2">Whether Scheme is Quality Affected</th>
				<th colspan="4">Scheme's Previous Data</th>
				<th rowspan="2">Resoluation Recieved</th>
				<th rowspan="2">GPWSC/SLC Formed</th>
			</tr>
			<tr>
				<th>Program</th>
				<th>Commissioning Date</th>
				<th>LPCD</th>
				<th>Covered under Swap</th>
			</tr>
			<tr>
				<td>
					<select name="component-cbo" id="component-cbo" class="form-control" autofocus="autofocus" required style="width: 98%;" >
						<option value="">Select Component</option>
			     	</select>
				</td>
				<td>
					<select name="qualitytype-cbo" id="qualitytype-cbo" class="form-control" autofocus="autofocus" required style="width: 98%;" >
						<option value="" selected=hidden>Select QA Type</option>	   
			     	</select>
				</td>
				<td>
					<select name="program-cbo" id="program-cbo" class="form-control" autofocus="autofocus" required style="width: 98%;" >
						<option value="" selected=hidden >Select Scheme Type</option> 
			     	</select>
				</td>
				<td>
					<input  type="date" name="tech-approval-dt-txt" id="tech-approval-dt-txt" placeholder="Tech. Approval Date" required style="width: 98%;" > 
				</td>
					<td>
					<select name="lpcd-cbo" id="lpcd-cbo" class="form-control" 
							style="width: 98%;" autofocus="autofocus" required  >
					</select>	
				</td>
				<td>
					<select name="swap-cbo" id="swap-cbo" class="form-control" 
							style="width: 98%;" autofocus="autofocus" required  >
							<option value="No"  >No</option>
							<option value="Yes" >Yes</option>
					</select>	
				</td>
				<td>
					<select name="resolution-cbo" id="resolution-cbo" class="form-control" 
							style="width: 98%;" autofocus="autofocus" required  >
							<option value="No"  >No</option>
							<option value="Yes" >Yes</option>
					</select>	
				</td>
				<td>
					<select name="committee-cbo" id="committee-cbo" class="form-control" 
							style="width: 98%;" autofocus="autofocus" required  >
							<option value="No"  >No</option>
							<option value="Yes" >Yes</option>
					</select>	
				</td>
			</tr>
			<tr>
				<th colspan="8"><label>test</label></th>
			</tr>	
			<tr>
				<th rowspan="2"><span>Proposed running Hours</span></th>
				<th rowspan="2"><span>Sufficient to deliver continues 10 hours water supply at 70 lpcd</span></th>
				<th colspan="5">Pumping Machinery Required</th>
				<th rowspan="2"><span>Automatic Switch Required</span></th>
			</tr>	
			<tr>
				<th><span>Repair / Replacement</span></th>
				<th><span>HP (In BHP)</span></th>
				<th><span>Head (In Mtr.)</span></th>
				<th><span>Discharge (In lph)</span></th>
				<th><span>Cost</span></th>
			</tr>
			<tr>
				<td>
					<input  type="text" name="txt" id="txt" placeholder="0" required style="text-align: right;">
				</td>	
				<td>
					<select name="tenhourwater-cbo" id="tenhourwater-cbo" class="form-control" 
							style="width: 98%;" autofocus="autofocus" required  >
							<option value="No" selected=hidden >No</option>
							<option value="Yes" selected=hidden >Yes</option>
					</select>	
				</td>
				<td>
					<select name="pumping_mach_repair-cbo" id="pumping_mach_repair-cbo" class="form-control" 
							style="width: 98%;" autofocus="autofocus" required  >
							<option value="No" selected=hidden >NA</option>
							<option value="Repair" selected=hidden >Repair</option>
							<option value="Replacement" selected=hidden >Replacement</option>
					</select>	
				</td>
				<td><input  type="text" name="txt" id="txt" placeholder="0.0" required style="text-align: right;">
				<td><input  type="text" name="txt" id="txt" placeholder="0.0" required style="text-align: right;">
				<td><input  type="text" name="txt" id="txt" placeholder="0.0" required style="text-align: right;">
				<td><input  type="text" name="txt" id="txt" placeholder="0.0" required style="text-align: right;">	
				</td>
				<td>
					<select name="signboard-cbo" id="signboard-cbo" class="form-control" 
							style="width: 98%;" autofocus="autofocus" required  >
							<option value="No" selected=hidden >No</option>
							<option value="Yes" selected=hidden >Yes</option>
					</select>	
				</td>
			</tr>
			<tr>
				<th colspan="2"><span>Control Panel Repair / Replacement</span></th>
				<th colspan="2"><span>Other Exiting Components W.W. / Head Works</span></th>
				<th colspan="2"><span>Repair of Pump Chamber</span></th>
				<th colspan="2"><span>Repair nof OHSR</span></th>
			</tr>
			<tr>
				<th><span>Repair/Replacement</span></th>
				<th><span>Cost</span></th>
				<th><span>Repair/Replacement</span></th>
				<th><span>Cost</span></th>
				<th><span>Required</span></th>
				<th><span>Cost</span></th>
				<th><span>Required</span></th>
				<th><span>Cost</span></th>
			</tr>
			<tr>
				<td>
					<select name="signboard-cbo" id="signboard-cbo" class="form-control" 
							style="width: 98%;" autofocus="autofocus" required  >
							<option value="No" selected>No</option>
							<option value="Repair" >Repair</option>
							<option value="Replacement" >Replacement</option>
					</select>	
				</td>
				<td><input  type="text" name="txt" id="txt" placeholder="0.0" required style="text-align: right;">
				</td>
				<td>
					<select name="signboard-cbo" id="signboard-cbo" class="form-control" 
							style="width: 98%;" autofocus="autofocus" required  >
							<option value="No" selected>No</option>
							<option value="Repair" >Repair</option>
							<option value="Replacement" >Replacement</option>
					</select>	
				</td>
				<td><input  type="text" name="txt" id="txt" placeholder="0.0" required style="text-align: right;">
				</td>
				<td>
					<select name="signboard-cbo" id="signboard-cbo" class="form-control" 
							style="width: 98%;" autofocus="autofocus" required  >
							<option value="No" selected=hidden >No</option>
							<option value="Yes" selected=hidden >Yes</option>
					</select>	
				</td>
				<td><input  type="text" name="txt" id="txt" placeholder="0.0" required style="text-align: right;">
				<td>
					<select name="signboard-cbo" id="signboard-cbo" class="form-control" 
							style="width: 98%;" autofocus="autofocus" required  >
							<option value="No" selected=hidden >No</option>
							<option value="Yes" selected=hidden >Yes</option>
					</select>	
				</td>
				<td><input  type="text" name="txt" id="txt" placeholder="0.0" required style="text-align: right;">	
			</tr>


			<tr>
				<th colspan="5"><span>Additional New Pipe Length Required  (In mtr. )</span></th>
				<th colspan="3"><span>Sluice Valve Required [ In No.]</span></th>
				
			</tr>
			<tr>
				<th width="4%">160mm</th>
				<th width="4%">110mm</th>
				<th width="4%">90mm</th>
				<th width="4%">75mm</th>
				<th width="4%">63mm</th>
				<th width="3%"><span>150mm</span></th>
				<th width="3%"><span>75mm</span></th>
				<th width="3%"><span>63mm</span></th>
			</tr>
			<tr>
				
				<td><input  type="text" name="txt" id="txt" placeholder="0.0" required style="text-align: right;">
				</td>
				<td><input  type="text" name="txt" id="txt" placeholder="0.0" required style="text-align: right;">
				</span></td>
				<td><input  type="text" name="txt" id="txt" placeholder="0.0" required style="text-align: right;">
				</td>
				<td><input  type="text" name="txt" id="txt" placeholder="0.0" required style="text-align: right;">
				</td>
				<td><input  type="text" name="txt" id="txt" placeholder="0.0" required style="text-align: right;">
				</td>
				<td><input  type="text" name="txt" id="txt" placeholder="0.0" required style="text-align: right;">
				</td>
				<td><input  type="text" name="txt" id="txt" placeholder="0.0" required style="text-align: right;">
				</td>
				<td><input  type="text" name="txt" id="txt" placeholder="0.0" required style="text-align: right;">
				</td>
				
			</tr>	
			<tr>
				
				<th colspan="2"><span>Haudi for S.V [ Size in mtr]</span></th>
				<th colspan="2"><span>Dismentling & restoration of Road cut in Mtr.</span></th>
				<th colspan="2"><span>Dismentling & Restoration of Metalled Road</span></th>
				<th colspan="2"><span>Repair and minor Replacement of existing pipeline</span></th>
				
			</tr>
			<tr>
				<th width="6%"><span>0.60 X 0.60</span></th>
				<th width="6%"><span>0.90 X 0.90</span></th>
				<th width="5%"><span>Brick on Edge</span></th>
				<th width="5%"><span>CC Flooring</span></th>
				<th width="6%"><span>Dismentling in Mtr.</span></th>
				<th width="7%"><span>Restoration BT Bill</span></th>
				<th width="6%"><span>Required</span></th>
				<th width="6%"><span>Cost</span></th>	
			</tr>
			<tr>
				
				<td><input  type="text" name="txt" id="txt" placeholder="0.0" required style="text-align: right;">
				</td>
				<td><input  type="text" name="txt" id="txt" placeholder="0.0" required style="text-align: right;">
				</span></td>
				<td><input  type="text" name="txt" id="txt" placeholder="0.0" required style="text-align: right;">
				</td>
				<td><input  type="text" name="txt" id="txt" placeholder="0.0" required style="text-align: right;">
				</td>
				<td><input  type="text" name="txt" id="txt" placeholder="0.0" required style="text-align: right;">
				</td>
				<td><input  type="text" name="txt" id="txt" placeholder="0.0" required style="text-align: right;">
				</td>
				
				<td>
					<select name="signboard-cbo" id="signboard-cbo" class="form-control" 
							style="width: 98%;" autofocus="autofocus" required  >
							<option value="No" selected=hidden >No</option>
							<option value="Yes" selected=hidden >Yes</option>
					</select>	
				</td>
				<td><input  type="text" name="txt" id="txt" placeholder="0.0" required style="text-align: right;">
				</td>
				
			</tr>
			<tr>
				<th rowspan="2"><span>No. of Water Meters Required</span></th>
				
				<th rowspan="2"><span>Chlorination Plant Required</span></th>
				<th colspan="2"><span>Cost of Sign Board</span></th>
				<th rowspan="2"><span>Compnent -IV </span></th>
			</tr>
			<tr>
				<th width="6%"><span>Paint / New</span></th>
				<th width="6%"><span>Cost</span></th>
			</tr>
			<tr>
				<td><input  type="text" name="txt" id="txt" placeholder="0.0" required style="text-align: right;">
				</td>
				<td>
					<select name="signboard-cbo" id="signboard-cbo" class="form-control" 
							style="width: 98%;" autofocus="autofocus" required  >
							<option value="No" selected=hidden >No</option>
							<option value="Yes" selected=hidden >Yes</option>
					</select>	
				</td>
				
				<td>
					<select name="signboard-cbo" id="signboard-cbo" class="form-control" 
							style="width: 98%;" autofocus="autofocus" required>
							<option value="Paint" selected=hidden >Paint</option>
							<option value="New Board" selected=hidden >New Board</option>
					</select>
				</td>
				<td><input  type="text" name="txt" id="txt" placeholder="0.0" required style="text-align: right;">
				</td>
				<td><input  type="text" name="txt" id="txt" placeholder="0.0" required style="padding-right: 20px;" style="text-align: right;">
				</td>
			</tr>	
</body>
</html>