<?php
include('include/db_connect.php');

if(isset($_POST["ID"]) && !empty($_POST["ID"])){
	$ID = $_POST["ID"];
//$ID = '30001';
  	$query = $mysqli->query('SELECT * FROM `esti_habs` 
							Where village_Id = "'.$ID.'" ');
 	$rowCount = $query->num_rows;
    $response = array();
    if($rowCount > 0){
        while($row = $query->fetch_assoc()){
			$response['component_1']  	=  $row["conn_component1"];
			$response['component_2']  	=  $row["conn_component2"];
			$response['component_3']  	=  $row["conn_component3"];
			
        }
        echo json_encode($response);
    }else
    {
        echo "  0 results";
    }
}
?>