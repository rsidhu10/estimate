<?php 
//Include database configuration file
include('include/db_connect.php');

if(isset($_POST["zone_id"]) && !empty($_POST["zone_id"])){
	//echo $_POST['zone_id'];
    $query = $mysqli->query('SELECT * FROM circles WHERE wing_id = "'.$_POST['zone_id'].'" ORDER BY circle_name ASC');
    $rowCount = $query->num_rows;
    if($rowCount > 0){
        echo '<option value="" Selected hidden>Select Circle</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['id'].'">'.$row['circl_name'].'</option>';
        }
    }else{
        echo '<option value="">'.$_POST['zone_id'].'</option>';
    }
}

?>