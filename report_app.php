<?php
include('include/db_connect.php');
//if(isset($_POST["id"]) && !empty($_POST["id"])){

    $result = $mysqli->query('SELECT zone.zone_name,circles.circle_name,districts.district_name,divisions.division_name,
					scheme_new.scheme_name,components.component_name
					,adminapprovals.component,adminapprovals.aa_no,adminapprovals.aa_date,adminapprovals.aa_amt	
					FROM `adminapprovals`
					LEFT JOIN zone ON zone.zone_id = adminapprovals.zone_id 
					LEFT JOIN circles ON circles.circle_id = adminapprovals.circle_id 
					LEFT JOIN districts ON districts.district_id = adminapprovals.district_id 
					LEFT JOIN divisions ON divisions.division_id = adminapprovals.division_id 
					LEFT JOIN scheme_new ON scheme_new.scheme_id = adminapprovals.scheme_id 
					LEFT JOIN components ON components.id = adminapprovals.component
					ORDER BY ZONE.zone_name,Circles.circle_name,Divisions.division_name,components.component_name');

    //query('SELECT * FROM scheme_new WHERE scheme_id = "'.$_POST['id'].'" ORDER BY scheme_name ASC'); 
 	$obj = [];
 	$rowCount = $result->num_rows;
    if($rowCount > 0){

 		//while($row = mysqli_fetch_array($result))
 		while($row = $result->fetch_assoc()){	
 		
  			$data["circle"]   	= $row["circle_name"];
  			$data["division"] 	= $row["division_name"];
  			$data["scheme_name"] 	= $row["scheme_name"];
  			$data["component"] 	= $row["component_name"];
  			$data["aa_no"] 		= $row["aa_no"];
  			$data["aa_date"] 	= $row["aa_date"];
  			$data["aa_amt"]		= $row["aa_amt"];

  			array_push($obj, $data);
  			//echo json_encode($data);
 }
}
     //print_r($obj);
 echo json_encode($obj);

?>