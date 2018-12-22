<?php
//Include database configuration file
include('include/db_connect.php');

	$query = $mysqli->query('SELECT * FROM oldcomponents  ORDER BY prog_name ASC');
    $rowCount = $query->num_rows;
    if($rowCount > 0){
        echo '<option value="" Selected hidden>Select Block</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['prog_id'].'">'.$row['prog_name'].'</option>';
        }
    }else{
        echo '<option value="">'thehe'</option>';
    }
}
?>