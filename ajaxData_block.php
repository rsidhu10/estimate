<?php
//Include database configuration file
include('include/db_connect.php');


if(isset($_POST["district_id"]) && !empty($_POST["district_id"])){
    //Get all city data
	//echo "asdasd";
    $query = $mysqli->query('SELECT * FROM blocks WHERE district_id = "'.$_POST['district_id'].'" ORDER BY block_name ASC');

    //Count total number of rows
    $rowCount = $query->num_rows;

    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Select Blockjkjj</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['block_id'].'">'.$row['block_name'].'</option>';
        }
    }else{
        echo '<option value="">'.$_POST['district_id'].'</option>';
    }
}


*/
?>







