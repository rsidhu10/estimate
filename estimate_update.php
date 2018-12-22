<?php
    include('include/db_connect.php');
    $save_type              = $_POST['save_type'];
    $estimateID             = $_POST['estimateID'];
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
        
        
        if($query = $mysqli->query("Update `estimates` Set
        `pre_program_id`    =   '$pre_coverundercboID',
        `pre_comm_date`     =   '$precommdatetxtID',
        `pre_lpcd_id`       =   '$servicelevelcboID',
        `pre_swap_id`       =   '$swapcbocboID',
        `pre_quality_id`    =   '$qualitytypecboID',
        `program_id`        =   '$componentcboID',
        `schemetype_id`     =   '$schemetypecboID',
        `resolution_id`     =   '$resolutioncboID',
        `committee_id`      =   '$gpwscformedcboID',   
        `sufficient_water`  =   '$sufficientcboID',
        `run_hour`          =   '$runhourscboID',
        `machinery_id`      =   '$machinerycboID',
        `dicharge`          =   '$dischargetxtID',
        `head`              =   '$headtxtID',
        `horsepower`        =   '$hpowertxtID',
        `machinery_cost`    =   '$machcosttxtID',
        `control_panel_id`  =   '$controlpanelcboID',
        `cpanel_cost`       =   '$controlpaneltxtID',
        `pump_chamber_id`   =   '$pumpchambercboID',
        `pchamber_cost`     =   '$pchambertxtID',
        `ohsr_id`           =   '$ohsrcboID',
        `ohsr_cost`         =   '$ohsrtxtID',
        `other_component_id`=   '$othercomponentscboID',
        `ocomponent_cost`   =   '$othercomponentstxtID',
        `chlorinator_id`    =   '$chlorplantcboID',
        `switch_id`         =   '$autoswitchcboID',
        `minor_repair_id`   =   '$minorrepaircboID',
        `minor_repair_cost` =   '$minorrepairtxtID',
        `pvc_pipe_160`      =   '$p160pipetxtID', 
        `pvc_pipe_110`      =   '$p110pipetxtID', 
        `pvc_pipe_90`       =   '$p90pipetxtID', 
        `pvc_pipe_75`       =   '$p75pipetxtID', 
        `pvc_pipe_63`       =   '$p63pipetxtID', 
        `svalue_150`        =   '$s150svtxtID', 
        `svalue_100`        =   '$s100svtxtID', 
        `svalue_80`         =   '$s80svtxtID', 
        `haudi_60`          =   '$h60hauditxtID', 
        `haudi_90`          =   '$h90hauditxtID', 
        `brickedge`         =   '$brcikedgetxtID', 
        `ccflorring`        =   '$ccfloortxtID', 
        `metalroad`         =   '$metalroadtxtID', 
        `btbill_cost`       =   '$btbilltxtID', 
        `watermeter`        =   '$metertxtID', 
        `board_id`          =   '$paintcboID', 
        `board_cost`        =   '$boardcosttxtID', 
        `component4`        =   '$electricbilltxtID'
        WHERE `estimates`.`id` = $estimateID")){
            echo "Record Saved Successfully";
        }else
        {
            echo "Error Occured";
        }
    }else
    {
        echo "Something wrong";
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