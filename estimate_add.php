<?php
    include('include/db_connect.php');
    $save_type              = $_POST['save_type'];
    $zonecboID              = $_POST['zonecboID'];
    $circlecboID            = $_POST['circlecboID'];
    $districtID             = $_POST['districtID'];
    $divisioncboID          = $_POST['divisioncboID'];
    $subdivisioncboID       = $_POST['subdivisioncboID'];
    $blockcboID             = $_POST['blockcboID'];
    $schemecboID            = $_POST['schemecboID'];
    $pre_coverundercboID    = $_POST['pre_coverundercboID'];
    $precommdatetxtID       = $_POST['precommdatetxtID'];
    $servicelevelcboID      = $_POST['servicelevelcboID'];
    $swapcbocboID           = $_POST['swapcbocboID'];
    $qualitytypecboID       = $_POST['qualitytypecboID'];
    $componentcboID         = $_POST['componentcboID'];
    $schemetypecboID        = $_POST['schemetypecboID'];
    $resolutioncboID        = $_POST['resolutioncboID'];
    $gpwscformedcboID       = $_POST['gpwscformedcboID'];
    $sufficientcboID        = $_POST['sufficientcboID'];
    $runhourscboID          = $_POST['runhourscboID'];
    $machinerycboID         = $_POST['machinerycboID'];
    $dischargetxtID         = $_POST['dischargetxtID'];
    $headtxtID              = $_POST['headtxtID'];
    $hpowertxtID            = $_POST['hpowertxtID'];
    $machcosttxtID          = $_POST['machcosttxtID'];
    $controlpanelcboID      = $_POST['controlpanelcboID'];
    $controlpaneltxtID      = $_POST['controlpaneltxtID'];
    $pumpchambercboID       = $_POST['pumpchambercboID'];
    $pchambertxtID          = $_POST['pchambertxtID'];
    $ohsrcboID              = $_POST['ohsrcboID'];
    $ohsrtxtID              = $_POST['ohsrtxtID'];
    $othercomponentscboID   = $_POST['othercomponentscboID'];
    $othercomponentstxtID   = $_POST['othercomponentstxtID'];
    $chlorplantcboID        = $_POST['chlorplantcboID'];
    $autoswitchcboID        = $_POST['autoswitchcboID'];
    $minorrepaircboID       = $_POST['minorrepaircboID'];
    $minorrepairtxtID       = $_POST['minorrepairtxtID'];
    $p160pipetxtID          = $_POST['p160pipetxtID'];
    $p110pipetxtID          = $_POST['p110pipetxtID'];
    $p90pipetxtID           = $_POST['p90pipetxtID'];
    $p75pipetxtID           = $_POST['p75pipetxtID'];
    $p63pipetxtID           = $_POST['p63pipetxtID'];
    $s150svtxtID            = $_POST['s150svtxtID'];
    $s100svtxtID            = $_POST['s100svtxtID'];
    $s80svtxtID             = $_POST['s80svtxtID'];
    $h60hauditxtID          = $_POST['h60hauditxtID'];
    $h90hauditxtID          = $_POST['h90hauditxtID'];
    $brcikedgetxtID         = $_POST['brcikedgetxtID'];
    $ccfloortxtID           = $_POST['ccfloortxtID'];
    $metalroadtxtID         = $_POST['metalroadtxtID'];
    $btbilltxtID            = $_POST['btbilltxtID'];
    $metertxtID             = $_POST['metertxtID'];
    $paintcboID             = $_POST['paintcboID'];
    $boardcosttxtID         = $_POST['boardcosttxtID'];
    $electricbilltxtID      = $_POST['electricbilltxtID'];

  

if(isset($_POST["schemecboID"]) && !empty($_POST["schemecboID"])){   
    print_r("hi i m in");

//if($save_type == "insert"){
//    print_r($save_type);

    if($query = $mysqli->query("INSERT INTO `estimates` (`id`, `timestamp`, `zone_id`, `circe_id`, `district_id`, `division_id`, 
            `subdivision_id`, `block_id`, `scheme_id`, `pre_program_id`, `pre_comm_date`, `pre_lpcd_id`, 
            `pre_swap_id`, `pre_quality_id`, `program_id`, `schemetype_id`, `resolution_id`, `committee_id`, 
            `sufficient_water`, `run_hour`, `machinery_id`, `dicharge`, `head`, `horsepower`, `machinery_cost`, 
            `control_panel_id`, `cpanel_cost`, `pump_chamber_id`, `pchamber_cost`, `ohsr_id`, `ohsr_cost`, 
            `other_component_id`, `ocomponent_cost`, `chlorinator_id`, `switch_id`, `minor_repair_id`, 
            `minor_repair_cost`, `pvc_pipe_160`, `pvc_pipe_110`, `pvc_pipe_90`, `pvc_pipe_75`, `pvc_pipe_63`, 
            `svalue_150`, `svalue_100`, `svalue_80`, `haudi_60`, `haudi_90`, `brickedge`, `ccflorring`, 
            `metalroad`, `btbill_cost`, `watermeter`, `board_id`, `board_cost`, `component4`) 
            VALUES (NULL, CURRENT_TIMESTAMP, '$zonecboID', '$circlecboID', '$districtID', '$divisioncboID', '$subdivisioncboID', '$blockcboID', '$schemecboID', '$pre_coverundercboID', '$precommdatetxtID', '$servicelevelcboID', '$swapcbocboID', '$qualitytypecboID', '$componentcboID', '$schemetypecboID', '$resolutioncboID', '$gpwscformedcboID', '$sufficientcboID', '$runhourscboID', '$machinerycboID', '$dischargetxtID', '$headtxtID', '$hpowertxtID', '$machcosttxtID', '$controlpanelcboID', '$controlpaneltxtID', '$pumpchambercboID', '$pchambertxtID', '$ohsrcboID', '$ohsrtxtID', '$othercomponentscboID', '$othercomponentstxtID', '$chlorplantcboID', '$autoswitchcboID', '$minorrepaircboID', '$minorrepairtxtID', '$p160pipetxtID', '$p110pipetxtID', '$p90pipetxtID', '$p75pipetxtID', '$p63pipetxtID', '$s150svtxtID', '$s100svtxtID', '$s80svtxtID', '$h60hauditxtID', '$h90hauditxtID', '$brcikedgetxtID', '$ccfloortxtID', '$metalroadtxtID', '$btbilltxtID', '$metertxtID', '$paintcboID', '$boardcosttxtID', '$electricbilltxtID')")){
        echo "Record Saved Successfully";
    }else{
        echo "Error";
    }    

/*
}else{

    if($query = $mysqli->query("update `estimates` set ( `timestamp`, `zone_id`, `circe_id`, `district_id`, `division_id`, 
            `subdivision_id`, `block_id`, `scheme_id`, `pre_program_id`, `pre_comm_date`, `pre_lpcd_id`, 
            `pre_swap_id`, `pre_quality_id`, `program_id`, `schemetype_id`, `resolution_id`, `committee_id`, 
            `sufficient_water`, `run_hour`, `machinery_id`, `dicharge`, `head`, `horsepower`, `machinery_cost`, 
            `control_panel_id`, `cpanel_cost`, `pump_chamber_id`, `pchamber_cost`, `ohsr_id`, `ohsr_cost`, 
            `other_component_id`, `ocomponent_cost`, `chlorinator_id`, `switch_id`, `minor_repair_id`, 
            `minor_repair_cost`, `pvc_pipe_160`, `pvc_pipe_110`, `pvc_pipe_90`, `pvc_pipe_75`, `pvc_pipe_63`, 
            `svalue_150`, `svalue_100`, `svalue_80`, `haudi_60`, `haudi_90`, `brickedge`, `ccflorring`, 
            `metalroad`, `btbill_cost`, `watermeter`, `board_id`, `board_cost`, `component4`) 
            VALUES (CURRENT_TIMESTAMP, '$zonecboID', '$circlecboID', '$districtID', '$divisioncboID', '$subdivisioncboID', '$blockcboID', '$schemecboID', '$pre_coverundercboID', '$precommdatetxtID', '$servicelevelcboID', '$swapcbocboID', '$qualitytypecboID', '$componentcboID', '$schemetypecboID', '$resolutioncboID', '$gpwscformedcboID', '$sufficientcboID', '$runhourscboID', '$machinerycboID', '$dischargetxtID', '$headtxtID', '$hpowertxtID', '$machcosttxtID', '$controlpanelcboID', '$controlpaneltxtID', '$pumpchambercboID', '$pchambertxtID', '$ohsrcboID', '$ohsrtxtID', '$othercomponentscboID', '$othercomponentstxtID', '$chlorplantcboID', '$autoswitchcboID', '$minorrepaircboID', '$minorrepairtxtID', '$p160pipetxtID', '$p110pipetxtID', '$p90pipetxtID', '$p75pipetxtID', '$p63pipetxtID', '$s150svtxtID', '$s100svtxtID', '$s80svtxtID', '$h60hauditxtID', '$h90hauditxtID', '$brcikedgetxtID', '$ccfloortxtID', '$metalroadtxtID', '$btbilltxtID', '$metertxtID', '$paintcboID', '$boardcosttxtID', '$electricbilltxtID' WHERE `estimates`.`id` = $scheme_id)")){
        echo "Record Saved Successfully";
    }else{
        echo "Error";
        
    }


}
*/



}
?>







/*

    $zonecode   = $_POST['zone_id'];
    $circlecode = $_POST['circle_id'];
    $districtcode = $_POST['district_id'];
    $blockcode  = $_POST['block_id'];
    $schemecode = $_POST['scheme_id'];
    //$adminatype = $_POST[''];
    $adminanum  = $_POST['admin_a_no'];
    $adminadate = $_POST['admin_a_dt'];
    $approveby  = $_POST['approvedby']; 
    $program  = $_POST["program"];
    $nrdwpamt = $_POST["nrdwp_amt"];
    $stateshare = $_POST["stateshare_amt"];
    $wbshareamt = $_POST["wbshare_amt"];

if(isset($_POST["scheme_id"]) && !empty($_POST["scheme_id"])){
    echo "asdasd";
    $query = $mysqli->query('SELECT * FROM scheme_new WHERE scheme_id = "'.$_POST['scheme_id'].'" ORDER BY scheme_name ASC');
    $rowCount = $query->num_rows;
    $response = array();
    if($rowCount > 0){
    	console.log($rowCount);
        while($row = $query->fetch_assoc()){
            $response['divnid'] = $row["division_id"];
            $response['sdivnid'] = $row["subdivision_id"];
        }
        echo json_encode($response);
    }else{
        echo "  0 results";
    }
}

*/

?>