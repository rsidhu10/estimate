<?php 
//Include database configuration file
include('include/db_connect.php');

if(isset($_POST["circle_id"]) && !empty($_POST["circle_id"])){
    //echo $_POST['zone_id'];
    $query = $mysqli->query('SELECT * FROM districts WHERE circle_id = "'.$_POST['circle_id'].'" ORDER BY district_name ASC');
    $rowCount = $query->num_rows;
    if($rowCount > 0){
        echo '<option value="" Selected hidden>Select District</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['district_id'].'">'.$row['district_name'].'</option>';
        }
    }else{
        echo '<option value="">'.$_POST['circle_id'].'</option>';
    }
}

?>