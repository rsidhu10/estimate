window.load=$( document ).ready(function() {
	//  Fill zone Combo box when page loads
    $.ajax({
        type:'POST',
        url:'zone.php',
        success:function(html){
            $('#zone-cbo').html(html);
        }
	});
    // Fill Circle Combo box when page loads
    $.ajax({
        type:'POST',
        url:'circle.php',
        data:'zone_id='+ 'Z03',
        success:function(html){
        	$('#circle-cbo').html(html);
        }
	});    
    //  Fill Component Combo box when page loads
	$.ajax({
        type:'POST',
        url:'component.php',
        success:function(data){
            $('#component-cbo').html(data);
        }
	}); 
    //Fill Quality Combo box when page loads
	$.ajax({
        type:'POST',
        url:'quality.php',
        success:function(data){
            console.log
            $('#qualitytype-cbo').html(data);
        }
	}); 

    $.ajax({
        type:'POST',
        url:'get_lpcd.php',
        success:function(data){
            $('#service_level_cbo').html(data);
           // document.getElementById('swap-cbo').value=0; 
        }
    }); 

    //Fill Previous Programe Combo box when page loads
    $.ajax({
        type:'POST',
        url:'oldcomponents.php',
        success:function(data){
            $('#pre_coverunder-cbo').html(data);
        }
    }); 
    //Fill Previous Swap status Combo box when page loads
    $.ajax({
        type:'POST',
        url:'quality.php',
        success:function(data){
            $('#swap-cbo').html(data);
            document.getElementById('swap-cbo').value=0; 

        }
    }); 
    //Fill Scheme type (Single Village / Multi Village) Combo box when page loads
	$.ajax({
        type:'POST',
        url:'sch_type.php',
        success:function(data){
            $('#schemetype-cbo').html(data);
        }
	});




    //Fill Circle Combo box on change in Zone
	$('#zone-cbo').on('change',function(){ 
        var zoneID = $(this).val();
        console.log(zoneID);

        if(zoneID){
            $.ajax({
                type:'POST',
                url:'circle.php',
                data:'zone_id='+zoneID,
                success:function(html){
                    $('#circle-cbo').html(html);
             		$('#division-cbo').html('<option value="">Select Division</option>');
                    $('#subdivision-cbo').html('<option value="">Select Sub Divn.</option>');
      				$('#block-cbo').html('<option value="">Select Block</option>'); 
					$('#scheme-cbo').html('<option value="">Select Scheme</option>'); 
                }
            }); 
      	}else{
           	$('#circle-cbo').html('<option value="">Select Circle</option>');
			$('#division-cbo').html('<option value="">Select Division</option>');
            $('#subdivision-cbo').html('<option value="">Select Sub Divn.</option>');
            $('#block-cbo').html('<option value="">Select Block</option>'); 
            $('#scheme-cbo').html('<option value="">Select Scheme</option>');
        }
	});
    //Fill Divivision Combo box on change in Circle
	$('#circle-cbo').on('change',function(){
        var circleID = $(this).val();
        console.log(circleID);
        if(circleID){
            $.ajax({
                type:'POST',
                url:'division_estimate.php',
                data:'circle_id='+circleID,
                success:function(html){
                    console.log(html);
                    $('#division-cbo').html(html);
                    $('#subdivision-cbo').html('<option value="">Select Sub Divn.</option>');
                    $('#block-cbo').html('<option value="">Select Block</option>'); 
                    $('#scheme-cbo').html('<option value="">Select Scheme</option>');
                    $('#habitation-cbo').html('<option value="">Select hab</option>');
                }
            }); 
        }else{
          	$('#division-cbo').html('<option value="">Select Division</option>');
          	$('#subdivision-cbo').html('<option value="">Select Sub Divn.</option>');
            $('#block-cbo').html('<option value="">Select Block</option>'); 
            $('#scheme-cbo').html('<option value="">Select Scheme</option>');
        }
    });
    //Fill Sub Division Combo box on change in Division
    $('#division-cbo').on('change',function(){
        var divisionID = $(this).val();
        console.log(divisionID); 
         if(divisionID){
            $.ajax({
                type:'POST',
                url:'subdivision.php',
                data:'division_id='+divisionID,
                success:function(html){
                    console.log(html);
                    $('#subdivision-cbo').html(html);
                    $('#block-cbo').html('<option value="">Select Block</option>'); 
                    $('#scheme-cbo').html('<option value="">Select Scheme</option>');
                    $('#habitation-cbo').html('<option value="">Select habi</option>');
                }
			}); 
        }else{
			$('#subdivision-cbo').html('<option value="">Select Sub Divn.</option>');
            $('#block-cbo').html('<option value="">Select Block</option>'); 
            $('#scheme-cbo').html('<option value="">Select Scheme</option>');
        }
    });
    //Fill Block Combo box on change in Sub Division
   $('#subdivision-cbo').on('change',function(){
        var subdivisionID = $(this).val();
        console.log(subdivisionID); 
         if(subdivisionID){
            $.ajax({
                type:'POST',
                url:'block_estimate.php',
                data:'subdivision_id='+subdivisionID,
                success:function(html){
                    $('#block-cbo').html(html);
                    $('#scheme-cbo').html('<option value="">Select Scheme</option>');
                    $('#habitation-cbo').html('<option value="">Select habit</option>');
                }
            }); 
        }else{
            $('#block-cbo').html('<option value="">Select Block</option>'); 
            $('#scheme-cbo').html('<option value="">Select Scheme</option>');
        }
    });
   //Fill Scheme Combo box on change in Block
    $('#block-cbo').on('change',function(){//change state to display all city
        var blockID = $(this).val();
        console.log(blockID);
        var mydivision      = document.getElementById('division-cbo').value;
        var mysubdivision   = document.getElementById('subdivision-cbo').value;
        console.log(mydivision);
        console.log(mysubdivision);
        console.log(blockID);
        if(blockID){
            $.ajax({
                type:'POST',
                url:'scheme_estimate.php',
                data:'block_id=' + blockID +'&division_id=' +mydivision + '&subdivision_id=' +mysubdivision,
                success:function(html){
                    $('#scheme-cbo').html(html);
                }
			}); 
        }else{
			$('#scheme-cbo').html('<option value="">Select Scheme</option>'); 
        }
    });

   //Not Required here
    //Fill Value in district text box on change in Scheme ------ Not required in Estimate Module
    $('#scheme-cbo').on('change',function(){//change state to display all city
        var schemeID = $(this).val();
        console.log(schemeID);
        $('#update-btn').attr('disabled', 'disabled');
        $('#save-btn').removeAttr('disabled');
        $('#reset-btn').removeAttr('disabled');
        if(schemeID != ''){
          $.ajax({
            url:"estimate_data.php", //fetch_dist.php
            method:"POST",
            data:{schemeid:schemeID},
            dataType:"JSON",
            success:function(data){
                document.getElementById("estimate_id").value = data.estimate_id;
                document.getElementById("pre_coverunder-cbo").value = data.pre_program_id;
                document.getElementById("pre-comm-date-txt").value  = data.pre_comm_date;
                document.getElementById("service_level_cbo").value  = data.pre_lpcd_id;
                document.getElementById("swap-cbo").value  = data.pre_swap_id;
                document.getElementById("qualitytype-cbo").value  = data.pre_quality_id;
                document.getElementById("component-cbo").value  = data.program_id ;
                document.getElementById("schemetype-cbo").value  = data.schemetype_id;
                document.getElementById("resolution-cbo").value  = data.resolution_id;
                document.getElementById("gpwsc-formed-cbo").value  = data.committee_id ;
                document.getElementById("sufficient-cbo").value  = data.sufficient_water;
                document.getElementById("runhours-cbo").value  = data.run_hour;
                document.getElementById("machinery-cbo").value  = data.machinery_id ;
                document.getElementById("discharge-txt").value  = data.dicharge;
                document.getElementById("head-txt").value  = data.head;
                document.getElementById("hpower-txt").value  = data.horsepower;
                document.getElementById("machcost-txt").value  = data.machinery_cost;
                document.getElementById("control-panel-cbo").value  = data.control_panel_id;
                document.getElementById("control-panel-txt").value  = data.cpanel_cost;
                document.getElementById("pump-chamber-cbo").value  = data.pump_chamber_id;
                document.getElementById("pchamber-txt").value  = data.pchamber_cost;
                document.getElementById("ohsr-cbo").value  = data.ohsr_id;
                document.getElementById("ohsr-txt").value  = data.ohsr_cost;
                document.getElementById("other-components-cbo").value  = data.other_component_id;
                document.getElementById("other-components-txt").value  = data.ocomponent_cost;
                document.getElementById("chlorplant-cbo").value  = data.chlorinator_id;
                document.getElementById("autoswitch-cbo").value  = data.switch_id;
                document.getElementById("minor-repair-cbo").value  = data.minor_repair_id;
                document.getElementById("minor-repair-txt").value  = data.minor_repair_cost;
                document.getElementById("160pipe-txt").value  = data.pvc_pipe_160 ;
                document.getElementById("110pipe-txt").value  = data.pvc_pipe_110 ;
                document.getElementById("90pipe-txt").value  = data.pvc_pipe_90;
                document.getElementById("75pipe-txt").value  = data.pvc_pipe_75;
                document.getElementById("63pipe-txt").value  = data.pvc_pipe_63;
                document.getElementById("150sv-txt").value  = data.svalue_150;
                document.getElementById("100sv-txt").value  = data.svalue_100;
                document.getElementById("80sv-txt").value  = data.svalue_80;
                document.getElementById("60haudi-txt").value  = data.haudi_60;
                document.getElementById("90haudi-txt").value  = data.haudi_90;
                document.getElementById("brcikedge-txt").value  = data.brickedge;
                document.getElementById("ccfloor-txt").value  = data.ccflorring;
                document.getElementById("metalroad-txt").value  = data.metalroad;
                document.getElementById("btbill-txt").value  = data.btbill_cost;
                document.getElementById("meter-txt").value  = data.watermeter;
                document.getElementById("paint-cbo").value  = data.board_id;
                document.getElementById("boardcost-txt").value  = data.board_cost;
                document.getElementById("electricbill-txt").value  = data.component4;
                console.log(data.pre_program_id);
                
                $('#update-btn').removeAttr('disabled');
                $('#save-btn').attr('disabled', 'disabled');
                $('#reset-btn').attr('disabled', 'disabled');

             //   document.getElementById("subdivision-txt").value = data.subdivisionid;
             //   console.log(data.districtid);
             //   console.log(data.subdivisionid);
            }
          })
        }
    });

    $('#admin-approval-amt-txt').on('change',function(){
            document.getElementById("admin-approval-amt-txt").value = parseFloat($(this).val()).toFixed(2);
 	}); 
 	$('#wb-share-txt').on('change',function(){
        	document.getElementById("wb-share-txt").value = parseFloat($(this).val()).toFixed(2);
 	}); 
 	$('#state-share-txt').on('change',function(){
            document.getElementById("state-share-txt").value = parseFloat($(this).val()).toFixed(2);
 	}); 
 	$('#nrdwp-share-txt').on('change',function(){
            document.getElementById("nrdwp-share-txt").value = parseFloat($(this).val()).toFixed(2);
 	});
    
//  Function for Multi Village Scheme
    $('#schemetype-cbo').on('change',function(){
            var temp_code = $(this).val();
            if(temp_code =="2"){
                document.getElementById('com_title').innerHTML = "SLC Formed" ;
            }
    });     
    // Function for Machinery ----------
    $('#machinery-cbo').on('change',function(){
        var mech_code = $(this).val();
        if(mech_code =="2"){
            document.getElementById('edicharge').innerHTML = "New Motor Discharge" ;
            document.getElementById('ehead').innerHTML = "New Motor Head" ;
            document.getElementById('ehorsepower').innerHTML = "New Motor Horse Power" ;
            document.getElementById('mcost').innerHTML = "Replacement Cost" ;
            $('#discharge-txt').removeAttr('disabled');
            $('#head-txt').removeAttr('disabled');
            $('#hpower-txt').removeAttr('disabled');
            $('#machcost-txt').removeAttr('disabled');
        }else if(mech_code == "1"){
            document.getElementById('edicharge').innerHTML = "Existing Discharge" ;
            document.getElementById('ehead').innerHTML = "Existing Head" ;
            document.getElementById('ehorsepower').innerHTML = "Existing Horse Power" ;
            document.getElementById('mcost').innerHTML = "Repair Cost" ;
            $('#discharge-txt').removeAttr('disabled');
            $('#head-txt').removeAttr('disabled');
            $('#hpower-txt').removeAttr('disabled');
            $('#machcost-txt').removeAttr('disabled');
        }else if(mech_code == "0"){
            $('#discharge-txt').attr('disabled', 'disabled');
            $('#head-txt').attr('disabled', 'disabled');
            $('#hpower-txt').attr('disabled', true);
            $('#machcost-txt').attr('disabled', true);
            document.getElementById('discharge-txt').value = '0';
            document.getElementById('head-txt').value ='0';
            document.getElementById('hpower-txt').value ='0';
            document.getElementById('machcost-txt').value = '0';
            
        }
    }); // aeyps9433b
    // Function for Contral Panel 
    $('#control-panel-cbo').on('change',function(){
        var panel_code = $(this).val();
        console.log("Status Changed : " + panel_code);
        if(panel_code =="0"){
            $('#control-panel-txt').attr('disabled', 'disabled');
            //$('#control-panel-txt').value = '0.00';
            document.getElementById('control-panel-txt').value = '0';
            document.getElementById('control-panel-lbl').innerHTML = "Cost" ;
        }else if(panel_code == "1"){
            document.getElementById('control-panel-lbl').innerHTML = "Repair Cost" ;
            $('#control-panel-txt').removeAttr('disabled');
            $(this)
        }else if(panel_code == "2"){    
            document.getElementById('control-panel-lbl').innerHTML = "Replacement Cost" ;
            $('#control-panel-txt').removeAttr('disabled');
        }
    });     

    
    // Function for Pump Chamber
    $('#pump-chamber-cbo').on('change',function(){
        var chamber_code = $(this).val();
        console.log("Status Changed : " + chamber_code);
        if(chamber_code =="0"){
            $('#pchamber-txt').attr('disabled', 'disabled');
            document.getElementById('pchamber-txt').value = '0';
            document.getElementById('pump-chamber-lbl').innerHTML = "Cost" ;
        }else if(chamber_code == "1"){
            document.getElementById('pump-chamber-lbl').innerHTML = "Repair Cost" ;
            $('#pchamber-txt').removeAttr('disabled');
        }else if(chamber_code == "2"){    
            document.getElementById('pump-chamber-lbl').innerHTML = "Replacement Cost" ;
            $('#pchamber-txt').removeAttr('disabled');
        }
    });     

    // Function for OHSR
    $('#ohsr-cbo').on('change',function(){
        var ohsr_code = $(this).val();
        console.log("Status Changed : " + ohsr_code);
        if(ohsr_code =="0"){
            $('#ohsr-txt').attr('disabled', 'disabled');
            document.getElementById('ohsr-txt').value = '0';
            document.getElementById('ohsr-lbl').innerHTML = "Cost" ;
        }else if(ohsr_code == "1"){
            document.getElementById('ohsr-lbl').innerHTML = "Repair Cost" ;
            $('#ohsr-txt').removeAttr('disabled');
        }else if(ohsr_code == "2"){    
            document.getElementById('ohsr-lbl').innerHTML = "Replacement Cost" ;
            $('#ohsr-txt').removeAttr('disabled');
        }
    });     

    // Function for Other Components
    $('#other-components-cbo').on('change',function(){
        var other_code = $(this).val();
        console.log("Status Changed : " + other_code);
        if(other_code =="0"){
            console.log("i m in other component repair");
            document.getElementById('other-components-txt').value = "0";
            $('#other-components-txt').attr('disabled', 'disabled');
            $('#other-components-txt').value = '0.00';
            document.getElementById('other-components-lbl').innerHTML = "Cost" ;
        }else if(other_code == "1"){
            document.getElementById('other-components-lbl').innerHTML = "Repair Cost" ;
            $('#other-components-txt').removeAttr('disabled');
        }else if(other_code == "2"){    
            document.getElementById('other-components-lbl').innerHTML = "Replacement Cost" ;
            $('#other-components-txt').removeAttr('disabled');
        }
    });     

    // Function for Repair and Minor Replacement
    $('#minor-repair-cbo').on('change',function(){
        var minor_code = $(this).val();
        console.log("Status Changed : " + minor_code);
        if(minor_code =="0"){
            document.getElementById('minor-repair-txt').value ="0";
            console.log("i m in minor repair");
            $('#minor-repair-txt').attr('disabled', 'disabled');
        }else if(minor_code == "1"){
            $('#minor-repair-txt').removeAttr('disabled');
        }else if(minor_code == "2"){    
            $('#minor-repair-txt').removeAttr('disabled');
        }
    });   
    // Rest Button
    $('#reset-btn').click(function(){
        document.location.reload();
    });  

});  

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
$(document).ready(function(){
    $('#delete-btn').attr('disabled', 'disabled');
    $('#update-btn').attr('disabled', 'disabled');
    $('#control-panel-cbo').on('change',function(){
        var panel_code = $(this).val();
        console.log("Status Changed");
        console.log(panel_code);
});  
});
