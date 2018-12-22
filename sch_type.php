<?php
include('include/db_connect.php');
    $query = $mysqli->query("SELECT * FROM sch_type ORDER BY id ASC");// select 
    $rowCount = $query->num_rows;
    if($rowCount > 0){
		echo '<option value=""  selected hidden >Select Scheme Type</option>';// initial 
        while($row = $query->fetch_assoc()){
            if($row['id'] > 1 ){
                echo '<option value="'.$row['id'].'">'.$row['scheme_type'].'</option>';//   
            }else{
                echo '<option selected value="'.$row['id'].'">'.$row['scheme_type'].'</option>';// 
            }
        }
    }
	else
	{
        echo '<option value="">Not Available</option>'; //display when no data!
	}
?>