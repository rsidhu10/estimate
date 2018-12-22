<?php
//Include database configuration file
include('include/db_connect.php');

if(isset($_POST["scheme_id"]) && !empty($_POST["scheme_id"])){
    $query = $mysqli->query('SELECT * FROM scheme_new WHERE scheme_id = "'.$_POST['scheme_id'].'" ORDER BY scheme_name ASC');
    $rowCount = $query->num_rows;
    if($rowCount > 0){
        while($row = $query->fetch_assoc()){
         echo $row['division_id'];
         echo $row['subdivision_id'];
        }
    }else{
        echo $_POST['scheme_id'];
    }    
}
?>
