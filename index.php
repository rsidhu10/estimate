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
	<script src="/include/js/estimate_update.js"></script>
	<script src="/include/js/mydate.js"></script>
	<script src="/include/js/datafill_estimate.js"></script>
  	<script src="/include/js/estimate_edit_fill.js"></script>
  	<script src="/include/js/estimatenew.js"></script>
  	
</head>
<body>
	<!-- Nav Bar Section -->
	<nav class="navbar navbar-inverse  ">
		<div class="container-fluid">
			<div class="navbar-header ">
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
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Approvals
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="adapproval.php">Admin Approval</a></li>
						<li><a href="tech_app.php">Tech. Approval</a></li>
						<li><a href="#">Contract Awarded</a></li>
						<li><a href="#">NOC Received</a></li>
					</ul>
				</li>
				<li><a href="#">Blank</a></li>
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
		<h3 align="center">Estimate Preparation Form</h3><br />   
	   	<div class="table-responsive" id="combo_details">
	   		<table class="table table-condensed">
	 			<tr style="background-color: #B6D4DA;">
	 				<th width="12%" align="left" style="padding-left: 10px;"><span>Zone</span></th>					
	 				<th width="15%" align="left"><span>Circle</span></th>
	 				<th width="15%" align="left"><span>Division</span></th>
	 				<th width="15%" align="left"><span>Sub Division</span></th>
	 				<th width="15%" align="left"><span>Block</span></th>
	 				<th width="20%" align="left"><span>Scheme</span></th>
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
	<div class="container-fluid" id="entry_form" style="background-color: #fff; width: 95%;" >
		<table class="table table-condensed bordered" >
			<tr style="background-color: #B6D4DA;">
 				<th width="13%"><span>Previous Program</span></th>
 				<th width="10%"><span>Commissioning Date (Previous)</span></th>
 				<th width="10%"><span>Previous LPCD</span></th>
 				<th width="12%"><span>Previously covered Under sWAP</span></th>
 				<th width="9%"><span>Quality Affected</span> </th>
 				<th width="13%"><span>New Component</span> </th>
 				<th width="12%"><span>Scheme Type</span> </th>
 				<th width="10%"><span>Resolution Received</span> </th>
 				<th><span id="com_title">GPWSC Formed</span> </th>
 		<!--	<th><a href="#" data-toggle="tooltip" title="In Case of Multi Village Scheme SLC Formed"><span id="com_title">GPWSC Formed</span></a> </th> -->
			</tr>
			<tr style="background-color: #fff;">
				<td>
					<select class="form-control input-sm" name="pre_coverunder-cbo" id="pre_coverunder-cbo" class="form-control" autofocus="autofocus" required>
						<option value="" selected=hidden >Select Previous Program</option> 
			     	</select>
		 		</td>
		 		<td><input class="form-control input-sm" type="date" name="pre-comm-date-txt" id="pre-comm-date-txt" " required></td>	
		 		<td><select class="form-control input-sm" name="service_level_cbo" id="service_level_cbo" class="form-control" autofocus="autofocus" required>
						<option value="" selected=hidden >Select LPCD</option> 
			     	</select></td>
		 		<td>
		 			<select class="form-control input-sm" name="swap-cbo" id="swap-cbo" class="form-control" autofocus="autofocus" required>
					    <option value="" selected=hidden >Select Scheme Type</option> 
			    	</select>
		 		</td>
				<td>
		 			<select name="qualitytype-cbo" id="qualitytype-cbo" class="form-control input-sm" autofocus="autofocus" required>
					    <option value="" selected=hidden>Select QA Type</option>
					</select>
		 		</td>
				<td>
		 			<select name="component-cbo" id="component-cbo" class="form-control input-sm" autofocus="autofocus" required>
					    <option value="">Select Component</option>
			     	</select>
		 		</td>	
		 		<td>
		 			<select name="schemetype-cbo" id="schemetype-cbo" class="form-control input-sm" autofocus="autofocus" required>
				    	<option value="" selected=hidden >Select Scheme Type</option> 
			    	</select>
		 		</td>
		 		<td>
		 			<select name="resolution-cbo" id="resolution-cbo" class="form-control input-sm" autofocus="autofocus" required>
					    <option value="0" >No</option>
						<option value="1" selected="selected" >Yes</option>
			     	</select>
		 		</td>
		 		<td>
		 			<select name="gpwsc-formed-cbo" id="gpwsc-formed-cbo" class="form-control input-sm" autofocus="autofocus" required>
					    <option value="0" >No</option>
						<option value="1" selected="selected" >Yes</option>
			     	</select>
		 		</td>
			</tr>				
		</table>
		<!-- Component-I Tubewel Repair / Replacement Requirements -->
		<h4 align="center">Component I -> Minor upgradation of existing Tube Well Schemes></h4>
		<table class="table table-condensed bordered" >
			<tr>
				<th width="50%">Whether existing Scheme is sufficient to deliver continues 10 hours water supply at 70 lpcd?</th>
				<td width="10%" >
					<select name="sufficient-cbo" id="sufficient-cbo" class="form-control input-sm" autofocus="autofocus" required>
					    <option value="Yes" selected="selected" >Yes</option>
					    <option value="No">No</option>
					</select>
				</td>
				<th width="28%">Proposed Running hours of Pumping Machinery</th>
				<td width="10%">
					<select name="runhours-cbo" id="runhours-cbo" class="form-control input-sm" autofocus="autofocus" required>
						<option value="" selected=hidden>Select Hours</option>
						<?php 
						for( $j = 4; $j <25; $j++){
							echo '<option value="' . $j . '">' . $j . ' Hours</option>' ;	
						} ?> 					
					</select>
				</td>	
			</tr>
		</table>
		<table class="table table-condensed bordered" >	
			<tr style="background-color: #B6D4DA;">
 				<th width="4%"><span>Machinery</span></th>
 				<td width="6%">
					<select name="machinery-cbo" id="machinery-cbo" class="form-control input-sm" autofocus="autofocus" required>
						<option value="0" selected=hidden>NA</option>
						<option value="1" >Repair</option>
						<option value="2" >Replacement</option>
					</select>
				</td>
 				<th width="10%"><span id="edicharge">Existing Discharge</span></th>
 				<td width="7%"><input type="text" class="form-control input-sm" name="discharge-txt" id="discharge-txt" required placeholder="In lph." disabled="disabled" value="0"> </td>
 				<th width="10%"><span id="ehead">Existing Head</span></th>
 				<td width="5%"><input type="text" class="form-control input-sm" name="head-txt" id="head-txt" required placeholder="In Mtr." disabled="disabled" value="0">  </td>
 				<th width="10%"><span id="ehorsepower">Existing Horse Power</span></th>
 				<td width="5%"><input type="text" class="form-control input-sm" name="hpower-txt" id="hpower-txt" required placeholder="In BHP" disabled="disabled" value="0"> </td>
 				<th width="8%"><span id = "mcost">Repair Cost</span> </th>
 				<td width="5%"><input type="text" class="form-control input-sm" name="machcost-txt" id="machcost-txt" required placeholder="In Rupees" disabled="disabled" value="0"> </td>
			</tr>
		</table>	
		<!-- Control Panel, OHSR , Pump Chamber and OHSR Repair / Replacement Required -->

<!--		<div class="container-fluid"> -->
			<table class="table table-condensed bordered" >
				<tr style="background-color: #B6D4DA;">
	 				<th width="12%"><span>Control Panel</span></th>
	 				<th width="13%"><span id="control-panel-lbl">Cost</span></th>
	 				<th width="12%"><span>Pump Chamber</span></th>
	 				<th width="13%"><span id="pump-chamber-lbl">Cost</span></th>
	 				<th width="12%"><span>OHSR</span> </th>
	 				<th width="13%"><span id="ohsr-lbl">Cost</span> </th>
	 				<th width="12%"><span>Other Components</span> </th>
	 				<th width="13%"><span id="other-components-lbl">Cost</span> </th>
	 			</tr>
	 			<tr>
	 				<td>
	 					<select name="control-panel-cbo" id="control-panel-cbo" class="form-control input-sm" autofocus="autofocus" required>
							<option value="0" selected=hidden>NA</option>
							<option value="1" >Repair</option>
							<option value="2" >Replacement</option>
						</select>
	 				</td>
	 				<td width="10%"><input type="text" class="form-control input-sm" name="control-panel-txt" id="control-panel-txt" required placeholder="0.00" disabled="disabled" value="0"> </td>
	 				<td>
	 					<select name="pump-chamber-cbo" id="pump-chamber-cbo" class="form-control input-sm" autofocus="autofocus" required>
							<option value="0" selected=hidden>NA</option>
							<option value="1" >Repair</option>
							<option value="2" >Replacement</option>
						</select>
	 				</td>
 					<td width="5%"><input type="text" class="form-control input-sm" name="pump-chamber-txt" id="pchamber-txt" required placeholder="0.00"  disabled="disabled" value="0">  </td>
 					<td>
	 					<select name="ohsr-cbo" id="ohsr-cbo" class="form-control input-sm" autofocus="autofocus" required>
							<option value="0" selected=hidden>NA</option>
							<option value="1" >Repair</option>
							<option value="2" >Replacement</option>
						</select>
	 				</td>
 					<td width="5%"><input type="text" class="form-control input-sm" name="ohsr-txt" id="ohsr-txt" required placeholder="0.00" disabled="disabled" value="0"> </td>
 					<td>
	 					<select name="other-components-cbo" id="other-components-cbo" class="form-control input-sm" autofocus="autofocus" required>
							<option value="0" selected=hidden>NA</option>
							<option value="1" >Repair</option>
							<option value="2" >Replacement</option>
						</select>
	 				</td>
 					<td width="5%"><input type="text" class="form-control input-sm" name="other-components-txt" id="other-components-txt" required placeholder="0.00" disabled="disabled" value="0"> </td>
	 			</tr>
	 		</table>

	 		<!-- Chlorinator , Automatic Switch and Minor Repairs -->
	 		
	 		<table class="table table-condensed bordered" >
	 			<tr style="background-color: #B6D4DA;">
	 				<th width="18%"><span>Chlorination Plant Required</span></th>
	 				<th width="25%"><span>Automated water controller switch Required</span></th>
	 				<th width="43%"><span id="control-panel-lbl">Repair and minor Replacement associated with repair of existing pipe line</span></th>
	 				<th width="10%"><span id="minor-repair-lbl">Cost</span></th>
	 			</tr>
	 			<tr>
	 				<td>
	 					<select name="chlorplant-cbo" id="chlorplant-cbo" class="form-control input-sm" autofocus="autofocus" required>
							<option value="0" selected="selected" >No</option>
							<option value="1" >Yes</option>
						</select>
	 				</td>
	 				<td>
	 					<select name="autoswitch-cbo" id="autoswitch-cbo" class="form-control input-sm" autofocus="autofocus" required>
							<option value="0" selected="selected" >No</option>
							<option value="1" >Yes</option>
						</select>
	 				</td>
	 				<td>
	 					<select name="minor-repair-cbo" id="minor-repair-cbo" class="form-control input-sm" autofocus="autofocus" required>
							<option value="0" selected="selected" >No</option>
							<option value="1" >Yes</option>
						</select>
	 				</td>
	 				<td>
	 					<input type="text" class="form-control input-sm" name="minor-repair-txt" id="minor-repair-txt" required placeholder="0.00" disabled="disabled" value="0"> 
	 				</td>
	 			</tr>
	 		</table>
	 		<!-- Additional Distribution lines and connections  -->
	 		<h4 align="center">Component III-> Providing additional distribution lines and connections in not covered areas</h4>
			<table class="table table-condensed bordered" >	
				<tr style="background-color: #B6D4DA;" > 
					<th colspan="5" style="text-align: center"><span>Additional New Pipe Length Required (In mtr.)</span></th>
					<th colspan="3" style="text-align: center;"><span>Sluice Valve Required (In Nos.)</span></th>
					<th colspan="2" style="text-align: center;"><span>S.Valve Haudi Required (In Nos.)</span></th>
				</tr>
				<tr style="background-color: #B6D4DA;">
					<th width="8%"><span>160mm</span></th>
					<th width="8%"><span>110mm</span></th>
					<th width="8%"><span>90mm</span></th>
					<th width="8%"><span>75mm</span></th>
					<th width="8%"><span>63mm</span></th>
					<th width="8%"><span>150mm</span></th>
					<th width="8%"><span>100mm</span></th>
					<th width="8%"><span>80mm</span></th>
					<th width="18%"><span>0.60 X 0.60 mtr</span></th>
					<th width="18%"><span>0.90 X 0.90 mtr</span></th>
				</tr>
				<tr>
					<td><input type="text" class="form-control input-sm" name="160pipe-txt" id="160pipe-txt" required placeholder="In Mtrs" value="0"> </td>
					<td><input type="text" class="form-control input-sm" name="110pipe-txt" id="110pipe-txt" required placeholder="In Mtrs" value="0"> </td>
					<td><input type="text" class="form-control input-sm" name="90pipe-txt" id="90pipe-txt" required placeholder="In Mtrs" value="0"> </td>
					<td><input type="text" class="form-control input-sm" name="75pipe-txt" id="75pipe-txt" required placeholder="In Mtrs" value="0"> </td>
					<td><input type="text" class="form-control input-sm" name="63pipe-txt" id="63pipe-txt" required placeholder="In Mtrs" value="0"> </td>
					<td><input type="text" class="form-control input-sm" name="150sv-txt" id="150sv-txt" required placeholder="In Nos." value="0"> </td>
					<td><input type="text" class="form-control input-sm" name="100sv-txt" id="100sv-txt" required placeholder="In Nos." value="0"> </td>
					<td><input type="text" class="form-control input-sm" name="80sv-txt" id="80sv-txt" required placeholder="In Nos." value="0"> </td>
					<td><input type="text" class="form-control input-sm" name="60haudi-txt" id="60haudi-txt" required placeholder="In Nos." value="0"> </td>
					<td><input type="text" class="form-control input-sm" name="90haudi-txt" id="90haudi-txt" required placeholder="In Nos." value="0"> </td>
				</tr>
			</table>
			<table class="table table-condensed bordered" >	
				<tr style="background-color: #B6D4DA;">
					<th colspan="2" width="25%"><span>Dismentling & restoration of Road cut in Mtr</span></th>
					<th rowspan="2" width="15%"><span>Dismentling of Metalled Road in Mtr.</span></th>
					<th rowspan="2" width="15%"><span>Cost of BT Bill for restoration of Metal Road</span></th>
					<th rowspan="2"><span>No. of Water Meter Required</span></th>
					<th colspan="2" style="text-align: center;" width="20%"><span>Sign Board</span></th>
					<th rowspan="2" width="10%">Component-IV</th>
				</tr>
				<tr style="background-color: #B6D4DA;">
					<th><span>Brick Edge</span></th>
					<th><span>CC Flooring</span></th>
					<th width="10%"><span>Required</span></th>
					<th width="10%"><span>Cost</span></th>
					
				</tr>
				<tr>
					<td><input type="text" class="form-control input-sm" name="brcikedge-txt" id="brcikedge-txt" required placeholder="In Mtrs" value="0"> </td>
					<td><input type="text" class="form-control input-sm" name="ccfloor-txt" id="ccfloor-txt" required placeholder="In Mtrs" value="0"> </td>
					<td><input type="text" class="form-control input-sm" name="metalroad-txt" id="metalroad-txt" required placeholder="In Mtrs" value="0"> </td>
					<td><input type="text" class="form-control input-sm" name="btbill-txt" id="btbill-txt" required placeholder="In Rupees" value="0"> </td>
					<td><input type="text" class="form-control input-sm" name="meter-txt" id="meter-txt" required placeholder="In Nos" value="0"> </td>
					<td>
	 					<select name="paint-cbo" id="paint-cbo" class="form-control input-sm" autofocus="autofocus" required>
							<option value="Paint" selected="selected" >Paint</option>
							<option value="New" >New Board</option>
						</select>
	 				</td>
					<td><input type="text" class="form-control input-sm" name="boardcost-txt" id="boardcost-txt" required placeholder="In Rupees" value="0"> </td>
					<td><input type="text" class="form-control input-sm" name="electricbill-txt" id="electricbill-txt" required placeholder="In Rupees" value="0" > </td>
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
		</div>	

	<!-- -->
	<!-- -->
	<!-- -->
</body>
</html>