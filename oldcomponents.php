<?php
include('include/db_connect.php');
    $query = $mysqli->query("SELECT * FROM oldcomponents ORDER BY prog_name ASC");// select all  from database 
    //Count total number of rows
    $rowCount = $query->num_rows;
    if($rowCount > 0){
		echo '<option value="" selected hidden >Select Component</option>';// initial message display{  
		//echo '<input type="text" >';// initial message display
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['prog_id'].'">'.$row['prog_name'].'</option>';// select country id & name from country table
        }
    }
	else
	{
        echo '<option value="">Not Available</option>'; //display when no data!
	}
?>