<?php
//Include database configuration file
include('include/db_connect.php');

	$query = $mysqli->query('SELECT * FROM oldcomponents  ORDER BY prog_name ASC');

    $rowCount = $query->num_rows;
    $response = array();
    if($rowCount > 0){
        //console.log($rowCount);
        while($row = $query->fetch_assoc()){
            $response['prog_id'] = $row["prog_id"];
            $response['prog_name'] = $row["prog_name"];
        }
        echo json_encode($response);
    }else{
        echo "  0 results";
    }




?>