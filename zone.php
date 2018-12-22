<?php
include('include/db_connect.php');
    $query = $mysqli->query("SELECT * FROM zone ORDER BY zone_name ASC");// select all  
    $rowCount = $query->num_rows;
    if($rowCount > 0){
		echo '<option value="" selected hidden >Select Zone</option>';// initial 
        while($row = $query->fetch_assoc()){
            if($row['zone_id']== 'Z03'){
				echo '<option selected value="'.$row['zone_id'].'">'.$row['zone_name'].'</option>';    
			}else{
				echo '<option value="'.$row['zone_id'].'">'.$row['zone_name'].'</option>';// 
			}
        }
    }
	else
	{
        echo '<option value="">Not Available</option>'; //display when no data!
	}
?>