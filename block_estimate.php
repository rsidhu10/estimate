<?php
//Include database configuration file
include('include/db_connect.php');
if(isset($_POST["subdivision_id"]) && !empty($_POST["subdivision_id"])){
	
    $query = $mysqli->query('SELECT DISTINCT blocks.block_name as b_name ,blocks.block_id as b_id FROM scheme_new LEFT JOIN blocks on blocks.block_id = scheme_new.block_id Where scheme_new.subdivision_id = "'.$_POST['subdivision_id'].'" ORDER BY block_name ASC');

	//$query = $mysqli->query('SELECT * FROM blocks WHERE district_id = "'.$_POST['district_id'].'" ORDER BY block_name ASC');
    $rowCount = $query->num_rows;
    if($rowCount > 0){
        echo '<option value="" Selected hidden>Select Block</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['b_id'].'">'.$row['b_name'].'</option>';
        }
    }else{
        echo '<option value="">'.$_POST['subdivision_id'].'</option>';
    }
}
?>