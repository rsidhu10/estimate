<?php
//Include database configuration file
include('include/db_connect.php');
if(isset($_POST["id"]) && !empty($_POST["id"])){
//$id = '10001';
	//echo "asdasd";
	$query = $mysqli->query('SELECT village_id,village_name FROM villages_c WHERE scheme_id = "'.$_POST['id'].'" ORDER BY village_name ASC');
//$query = $mysqli->query('SELECT village_id,village_name FROM villages_c WHERE scheme_id = "'.$id.'" ORDER BY village_name ASC');

    $rowCount = $query->num_rows;
    if($rowCount > 0){
        echo '<option value="" Selected hidden>Select Habitation</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['village_id'].'">'.$row['village_name'].'</option>';
        }
    }else{
        echo '<option value="">'.$_POST['id'].'</option>';
    }
}
?>