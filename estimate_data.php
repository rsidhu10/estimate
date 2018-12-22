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
*/
if(isset($_POST["schemeid"]) && !empty($_POST["schemeid"])){


    $schemeID = '11900';
    $query = $mysqli->query('SELECT * FROM estimates WHERE scheme_id = "'.$_POST["schemeid"].'" ');
    $rowCount = $query->num_rows;
    $response = array();
    if($rowCount > 0){
        while($row = $query->fetch_assoc()){
			$response['estimate_id']  		=  $row["id"];
			$response['zone_id']  	=  $row["zone_id"];
			$response['circe_id']  	=  $row["circe_id"];
			$response['district_id']  =  $row["district_id"];
			$response['division_id']  =  $row["division_id"];
			$response['subdivision_id']  =  $row["subdivision_id"];
			$response['block_id']  =  $row["block_id"];
			$response['scheme_id']  =  $row["scheme_id"];
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
        echo json_encode($response);
    }else{
        echo "  0 results";
    }


}
/*

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