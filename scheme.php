<?php
//Include database configuration file
include('include/db_connect.php');
if(isset($_POST["block_id"]) && !empty($_POST["block_id"])){
	print_r("in");
    $id = $_POST["block_id"];
    print_r($id);
	$query = $mysqli->query('SELECT * FROM scheme_new WHERE block_id = "'.$id.'" ORDER BY scheme_name ASC');
    $rowCount = $query->num_rows;
    if($rowCount > 0){
        echo '<option value="" Selected hidden>Select Schemee</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['scheme_id'].'">'.$row['scheme_name'].'</option>';
        }
    }else{
        echo '<option value="">'.$_POST['block_id'].'</option>';
    }
}
?>