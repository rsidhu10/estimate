<?php
include('include/db_connect.php');
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

if(isset($_POST["schemeid"]) && !empty($_POST["schemeid"])){
*/

    $schemeID = '11900';
    $query = $mysqli->query('SELECT districts.district_name as district ,divisions.division_name as division ,subdivisions.subdivision_name as subdivision,blocks.block_name as block,
							scheme_new.scheme_name as scheme,oldcomponents.prog_name as preprogram,estimates.pre_comm_date as predate,estimates.pre_lpcd_id as prelpcd,
							estimates.pre_swap_id as swap,estimates.pre_quality_id as quality,estimates.resolution_id as resolution,estimates.committee_id as committee,
							estimates.sufficient_water as sufficient, estimates.run_hour,estimates.machinery_id as machinery, 
							estimates.head as mhead, estimates.dicharge as discharge, 
							estimates.horsepower as hpower,estimates.control_panel_id as cpanel, 
							estimates.cpanel_cost as panelcost, estimates.pump_chamber_id as pchamber, 
							estimates.ohsr_id as rep_ohsr, estimates.other_component_id as ocomponent, 
							estimates.chlorinator_id as chlorinator, estimates.switch_id as switch, 
							estimates.minor_repair_id as mrepair, estimates.pvc_pipe_160 as p160, estimates.pvc_pipe_110 as p110, 
							estimates.pvc_pipe_90 as p90, estimates.pvc_pipe_75 as p75, estimates.pvc_pipe_63 as p63, 
							estimates.svalue_150 as s150, estimates.svalue_100 as s100, estimates.svalue_80 as s80, 
							estimates.haudi_60 as h60, estimates.haudi_90 as h90, estimates.brickedge as bedge, 
							estimates.ccflorring as cfloor, estimates.metalroad as mroad, 
							estimates.watermeter as meter, estimates.board_id as board, 
							estimates.machinery_cost as costmachine, estimates.pchamber_cost as chambercost, 
							estimates.ohsr_cost as ohsrcost, estimates.ocomponent_cost as workscost, 
							estimates.minor_repair_cost as minorcost, estimates.btbill_cost as btcost, 
							estimates.board_cost as bcost, estimates.component4 as comt4, 
							esti_habs.conn_component1 as comt1, esti_habs.conn_component2 as comt2,
							esti_habs.conn_component3 as comt3, sum(villages_c.gen_pop) as gpopulation, 
							sum(villages_c.sc_pop) as scpopulation, sum(villages_c.gen_hh) as ghholds, 
							sum(villages_c.sc_hh) as schholds, sum(villages_c.pconection) as pconn,
							count(villages_c.village_id) as numvill

							FROM esti_habs
							JOIN villages_c on esti_habs.village_id = villages_c.village_id
							JOIN estimates on esti_habs.scheme_id = estimates.scheme_id
							JOIN scheme_new on esti_habs.scheme_id = scheme_new.scheme_id
							JOIN districts on scheme_new.district_id = districts.district_id
							JOIN divisions on scheme_new.division_id = divisions.division_id
							JOIN subdivisions on scheme_new.subdivision_id = subdivisions.subdivision_id
							JOIN blocks on scheme_new.block_id = blocks.block_id
							JOIN oldcomponents on estimates.pre_program_id = oldcomponents.prog_id
							group by scheme_new.scheme_id'
							);
	
    $rowCount = $query->num_rows;
    $response = array();
    //$result 
    if($rowCount > 0){
        while($row = $query->fetch_assoc()){
 			 $mypro = $row['predate'] +$row['preprogram'];
 			 $result[]  = array(
            'district' 		=> $row['district'],
			'division' 		=> $row['division'],
            'subdivision' 	=> $row['subdivision'],
			'block' 		=> $row['block'],
			'scheme' 		=> $row['scheme'],
			'commdate' 		=> $row['predate'],
			'preprog'		=> $row['preprogram'],
			'prelpcd' 		=> $row['prelpcd'],
			'swap'			=> $row['swap'],
			'quality'		=> $row['quality'],
			'resolution'	=> $row['resolution'],
			'committee'		=> $row['committee'],
			'sufficient'	=> $row['sufficient'],
			'run_hour'		=> $row['run_hour'],
			'machinery'		=> $row['machinery'],
			'mhead'			=> $row['mhead'],
			'discharge'		=> $row['discharge'],	
			'hpower'		=> $row['hpower'],
			'cpanel'		=> $row['cpanel'],
			'panelcost'		=> $row['panelcost'],
			'pchamber'		=> $row['pchamber'],
			'rep_ohsr'		=> $row['rep_ohsr'],
			'ocomponent'	=> $row['ocomponent'],
			'chlorinator' 	=> $row['chlorinator'],
			'switch'		=> $row['switch'],
			'mrepair'		=> $row['mrepair'],
			'p160' 			=> $row['p160'],
			'p110' 			=> $row['p110'],
			'p90' 			=> $row['p90'],
			'p75' 			=> $row['p75'],
			'p63' 			=> $row['p63'],
			's150' 			=> $row['s150'],
			's100' 			=> $row['s100'],
			's80' 			=> $row['s80'],
			'h60' 			=> $row['h60'],
			'h90' 			=> $row['h90'],
			'bedge' 		=> $row['bedge'],
			'cfloor' 		=> $row['cfloor'],
			'mroad' 		=> $row['mroad'],
			'meter' 		=> $row['meter'],
			'board' 		=> $row['board'],
			'costmachine' 	=> $row['costmachine'],
			'chambercost'	=> $row['chambercost'],
			'ohsrcost' 		=> $row['ohsrcost'],
			'workscost'		=> $row['workscost'],
			'minorcost' 	=> $row['minorcost'],
			'btcost' 		=> $row['btcost'],
			'bcost' 		=> $row['bcost'],
			'comt4' 		=> $row['comt4'],
			'comt1' 		=> $row['comt1'],
			'comt2' 		=> $row['comt2'],
			'comt3' 		=> $row['comt3'],
			'gpopulation' 	=> $row['gpopulation'],
			'scpopulation' 	=> $row['scpopulation'],
			'ghholds' 		=> $row['ghholds'],
			'schholds' 		=> $row['schholds'],
			'pconn' 		=> $row['pconn'],
			'numvillage'	=> $row['numvill'],
			'myprog'		=> $mypro,
//			'' 			=> $row[''],





			);
		}
echo json_encode($result);		
        	//echo '<tr><td>'.$row["district"].'</td><td>'.$row["division"].'</td><td'.$row["subdivision"].'</td><td>'.$row["block"].'</td><td>'.$row["scheme"].'</td></tr>';

/*
echo '<option value="'.$row['block_id'].'">'.$row['block_name'].'</option>';
			$response['district']  		=  $row["district"];
			$response['division']  		=  $row["division"];
			$response['subdivision']  	=  $row["subdivision"];
			$response['block']  		=  $row["block"];
			$response['scheme']  		=  $row["scheme"];


			
			$response['pre_program_id']  =  $row["pre_program_id"];
			$response['pre_comm_date']  =  $row["pre_comm_date"];
			$response['pre_lpcd_id']  =  $row["pre_lpcd_id"];
			$response['pre_swap_id']  =  $row["pre_swap_id"];
			$response['pre_quality_id']  =  $row["pre_quality_id"];
			$response['program_id']  =  $row["program_id"];
			$response['schemetype_id']  =  $row["schemetype_id"];
			$response['resolution_id']  =  $row["resolution_id"];
			$response['committee_id']  =  $row["committee_id"];
			$response['sufficient_water']  =  $row["sufficient_water"];
			$response['run_hour']  =  $row["run_hour"];
			$response['machinery_id']  =  $row["machinery_id"];
			$response['dicharge']  =  $row["dicharge"];
			$response['head']  =  $row["head"];
			$response['horsepower']  =  $row["horsepower"];
			$response['machinery_cost']  =  $row["machinery_cost"];
			$response['control_panel_id']  =  $row["control_panel_id"];
			$response['cpanel_cost']  =  $row["cpanel_cost"];
			$response['pump_chamber_id']  =  $row["pump_chamber_id"];
			$response['pchamber_cost']  =  $row["pchamber_cost"];
			$response['ohsr_id']  =  $row["ohsr_id"];
			$response['ohsr_cost']  =  $row["ohsr_cost"];
			$response['other_component_id']  =  $row["other_component_id"];
			$response['ocomponent_cost']  =  $row["ocomponent_cost"];
			$response['chlorinator_id']  =  $row["chlorinator_id"];
			$response['switch_id']  =  $row["switch_id"];
			$response['minor_repair_id']  =  $row["minor_repair_id"];
			$response['minor_repair_cost']  =  $row["minor_repair_cost"];
			$response['pvc_pipe_160']  =  $row["pvc_pipe_160"];
			$response['pvc_pipe_110']  =  $row["pvc_pipe_110"];
			$response['pvc_pipe_90']  =  $row["pvc_pipe_90"];
			$response['pvc_pipe_75']  =  $row["pvc_pipe_75"];
			$response['pvc_pipe_63']  =  $row["pvc_pipe_63"];
			$response['svalue_150']  =  $row["svalue_150"];
			$response['svalue_100']  =  $row["svalue_100"];
			$response['svalue_80']  =  $row["svalue_80"];
			$response['haudi_60']  =  $row["haudi_60"];
			$response['haudi_90']  =  $row["haudi_90"];
			$response['brickedge']  =  $row["brickedge"];
			$response['ccflorring']  =  $row["ccflorring"];
			$response['metalroad']  =  $row["metalroad"];
			$response['btbill_cost']  =  $row["btbill_cost"];
			$response['watermeter']  =  $row["watermeter"];
			$response['board_id']  =  $row["board_id"];
			$response['board_cost']  =  $row["board_cost"];

			$response['component4']  =  $row["component4"];

        }
 */      
    }else{
        echo "  0 results";
    }

/*
}


echo "ZoneCode : " .$zonecode. "<br/>CircleCode :" .$circlecode."<br/>District Code :" .$districtcode. "<br/>Block Code :" .$blockcode. "<br/>Scheme Code :" .$schemecode ;

/*
 ."<br/>District Code :" .$districtcode. "<br/>Block Code :" .$blockcode. "<br/>Block Code :" .$schemecode
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phoneCode = $_POST['phoneCode'];
$phone = $_POST['phone'];


if (!empty($username) || !empty($password) || !empty($gender) || !empty($email) ||
!empty($phoneCode) || !empty($phone)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "dwss";
    $dbname = "dwsspb";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From register Where email = ? Limit 1";
     $INSERT = "INSERT Into register (username, password, gender, email, phoneCode, phone) values(?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssii", $username, $password, $gender, $email, $phoneCode, $phone);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
*/



?>