<?php
//Include database configuration file
include('include/db_connect.php');

if(isset($_POST["zone_id"]) && !empty($_POST["zone_id"])){
	echo $_POST['zone_id'];
    $query = $mysqli->query('SELECT * FROM circles WHERE wing_id = "'.$_POST['zone_id'].'" ORDER BY circle_name ASC');
    $rowCount = $query->num_rows;
    if($rowCount > 0){
        echo '<option value="" Selected hidden>Select Circle</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['id'].'">'.$row['circle_name'].'</option>';
        }
    }else{
        echo '<option value="">'.$_POST['zone_id'].'</option>';
    }
}



/*





if(isset($_POST["cir_id"]) && !empty($_POST["circle_id_id"])){
//if(!empty($_POST["cir_id"])){
  
 //Get all state data
	echo $_POST['circle_id'];
    $query = $mysqli->query('SELECT * FROM districts WHERE circle_id = "'.$_POST['circle_id'].'" ORDER BY district_name ASC');
	//$query = $mysqli->query("SELECT * FROM divisions ORDER BY division_name ASC");
   
   //Count total number of rows
    $rowCount = $query->num_rows;
    //Display states list
    if($rowCount > 0){
        echo '<option value="" Selected hidden>Select Division</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['id'].'">'.$row['district_name'].'</option>';
        }
    }else{
        echo '<option value="">'.$_POST['circle_id'].'</option>';
    }
}
if(isset($_POST["dist_id"]) && !empty($_POST["dist_id"])){
    //Get all city data
	//echo "asdasd";
    $query = $mysqli->query('SELECT * FROM blocks WHERE district_id = "'.$_POST['dist_id'].'"  ORDER BY block_name ASC');
    //$query = $mysqli->query("SELECT * FROM blocks  ORDER BY block_name ASC");
    
	//Count total number of rows
    $rowCount = $query->num_rows;
    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Select city</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['blcok_id'].'">'.$row['block_name'].'</option>';
        }
    }else{
        echo '<option value="">'.$_POST["dist_id"].'</option>';
    }
}





if(isset($_POST["district_id"]) && !empty($_POST["district_id"])){
    //Get all city data
	//echo "asdasd";
    $query = $mysqli->query('SELECT * FROM blocks WHERE district_id = "'.$_POST['district_id'].'" ORDER BY block_name ASC');

    //Count total number of rows
    $rowCount = $query->num_rows;

    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Select Block</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['block_id'].'">'.$row['block_name'].'</option>';
        }
    }else{
        echo '<option value="">'.$_POST['district_id'].'</option>';
    }
}









?>