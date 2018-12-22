<?php
include('include/db_connect.php');
    $query = $mysqli->query("SELECT * FROM approvedby ORDER BY approvedby ASC");// select 
    $rowCount = $query->num_rows;
    if($rowCount > 0){
		echo '<option value=""  selected hidden >Select Approved By</option>';// initial 
        while($row = $query->fetch_assoc()){
            if($row['id'] > 1 ){
                echo '<option value="'.$row['id'].'">'.$row['approvedby'].'</option>';//   
            }else{
                echo '<option selected value="'.$row['id'].'">'.$row['approvedby'].'</option>';// 
            }
        }
    }
	else
	{
        echo '<option value="">Not Available</option>'; //display when no data!
	}
?>