<?php
//Include database configuration file
include('include/db_connect.php');
if(isset($_POST["district_id"]) && !empty($_POST["district_id"])){
	echo "asdasd";
	$query = $mysqli->query('SELECT * FROM blocks WHERE district_id = "'.$_POST['district_id'].'" ORDER BY block_name ASC');
    $rowCount = $query->num_rows;
    if($rowCount > 0){
        echo '<option value="" Selected hidden>Select Block</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['block_id'].'">'.$row['block_name'].'</option>';
        }
    }else{
        echo '<option value="">'.$_POST['district_id'].'</option>';
    }
}
?>