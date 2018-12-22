<?php
include('include/db_connect.php');
    $query = $mysqli->query("SELECT * FROM zone ORDER BY zone_name ASC");

    //Count total number of rows
    $rowCount = $query->num_rows;

    if($rowCount > 0){
		echo '<option value="" selected hidden >Select Zone</option>';//   
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['zone_id'].'">'.$row['zone_name'].'</option>';
        }
    }
	else
	{
        echo '<option value="">Not Available</option>'; 
	}
?>