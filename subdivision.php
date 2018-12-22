<?php
//Include database configuration file
include('include/db_connect.php');

if(isset($_POST["division_id"]) && !empty($_POST["division_id"])){
    echo $_POST["division_id"];
	
	$query = $mysqli->query('SELECT * FROM subdivisions WHERE division_id = "'.$_POST['division_id'].'" ORDER BY subdivision_name ASC');
    $rowCount = $query->num_rows;
    echo $rowCount;
    if($rowCount > 0){
        echo '<option value="" Selected hidden>Select Sub Division</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['subdivision_id'].'">'.$row['subdivision_name'].'</option>';
        }
    }else{
        echo '<option value="">'.$_POST['division_id'].'</option>';
    }
}
?>