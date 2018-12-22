<?php
include('include/db_connect.php');

if(isset($_POST["ID"]) && !empty($_POST["ID"])){
	$ID = $_POST["ID"];
//$ID = '30001';
//  	$query = $mysqli->query('SELECT * FROM `villages_c` 
//							LEFT JOIN esti_habs 
//							on villages_c.village_Id = esti_habs.village_id
//							Where villages_c.village_Id = "'.$ID.'" ');
    $query = $mysqli->query('SELECT * FROM `villages_c` Where village_Id = "'.$ID.'" ');


 	$rowCount = $query->num_rows;
    $response = array();
    if($rowCount > 0){
        while($row = $query->fetch_assoc()){
			$response['gen_population']  	=  $row["gen_pop"];
			$response['sc_population']  	=  $row["sc_pop"];
			$response['gen_households']  	=  $row["gen_hh"];
			$response['sc_households']  	=  $row["sc_hh"];
			$response['private_connection'] =  $row["pconection"];
            $response['districtID']         =  $row["district_id"];
        }
        echo json_encode($response);
    }else
    {
        echo "  0 results";
    }
}
?>