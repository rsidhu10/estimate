<?php
include('include/db_connect.php');
    $query = $mysqli->query("SELECT * FROM approvaltype ORDER BY type ASC");// select all  from database 
    $rowCount = $query->num_rows;
    if($rowCount > 0){
		echo '<option value="" selected hidden >Select Approval Type</option>';// initial message display{  
        while($row = $query->fetch_assoc()){
            if($row['id'] > 1){
                echo '<option value="'.$row['id'].'">'.$row['type'].'</option>';//
            }else{
                echo '<option selected value="'.$row['id'].'">'.$row['type'].'</option>';//
            }    

        }
    }
	else
	{
        echo '<option value="">Not Available</option>'; //display when no data!
	}
?>