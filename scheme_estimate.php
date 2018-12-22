<?php
//Include database configuration file
include('include/db_connect.php');


if(isset($_POST["block_id"]) && !empty($_POST["block_id"])){
    echo "im in";
    $division       = $_POST['division_id'];
    $subdivision_id    = $_POST['subdivision_id'];
    $block_id       = $_POST['block_id'];
    // $subdivision_id = "SDIV101";
    // $block_id = "D16B01";
	$query = $mysqli->query('SELECT * from scheme_new 
                        WHERE block_id      = "'.$block_id.'"
                        AND subdivision_id  = "'.$subdivision_id.'" 
                        ORDER BY scheme_name ASC');
	
    $rowCount = $query->num_rows;
    if($rowCount > 0){
        echo '<option value="" Selected hidden>Select Scheme</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['scheme_id'].'">'.$row['scheme_name'].'</option>';
        }
    }else{
        echo '<option value="">'.$block_id.'</option>';
    }
}
?>