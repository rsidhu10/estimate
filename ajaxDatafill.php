<?php
//Include database configuration file
include('include/db_connect.php');

if(isset($_POST["zone_id"]) && !empty($_POST["zone_id"])){
    //Get all state data
    //$query = $mysqli->query("SELECT * FROM circles WHERE zone_id = ".$_POST['zone_id']." AND status = 1 ORDER BY state_name ASC");
	$query = $mysqli->query('SELECT * FROM circles WHERE zone_id = "'.$_POST['zone_id'].'" ORDER BY circle_name ASC');

    //Count total number of rows
    $rowCount = $query->num_rows;

    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select Circle</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['circle_id'].'">'.$row['circle_name'].'</option>';
        }
    }else{
        echo '<option value="">'.$_POST['zone_id'].'</option>';
    }
}

if(isset($_POST["circle_id"]) && !empty($_POST["circle_id"])){
    //Get all city data

	echo "asdasd";
    $query = $mysqli->query('SELECT * FROM districts WHERE circle_id = "'.$_POST['circle_id'].'" ORDER BY district_name ASC');

    //Count total number of rows
    $rowCount = $query->num_rows;

    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Select District</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['district_id'].'">'.$row['district_name'].'</option>';
        }
    }else{
        echo '<option value="">'.$_POST['circle_id'].'</option>';
    }
}

if(isset($_POST["district_id"]) && !empty($_POST["district_id"])){
    //Get all city data
	echo "asdasd";
	$query = $mysqli->query('SELECT * FROM blocks WHERE district_id = "'.$_POST['district_id'].'" ORDER BY block_name ASC');
	//$query = $mysqli->query('SELECT * FROM blocks WHERE district_id = "'.$_POST['district_id'].'" ORDER BY block_name ASC');

    //Count total number of rows
    $rowCount = $query->num_rows;

    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Select city</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['block_id'].'">'.$row['block_name'].'</option>';
        }
    }else{
        echo '<option value="">'.$_POST['district_id'].'</option>';
    }
}



?>