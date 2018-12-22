<?php 
//Include database configuration file
include('include/db_connect.php');

if(isset($_POST["scheme_id"]) && !empty($_POST["scheme_id"])){
    $query = $mysqli->query('SELECT * FROM scheme_new WHERE scheme_id = "'.$_POST['scheme_id'].'" ORDER BY scheme_name ASC');   
    $rowCount = $query->num_rows;
    if($rowCount > 0){
        //echo '<option value="" Selected hidden>Select Circle</option>';
        while($row = $query->fetch_assoc()){
           // echo '<option value="'.$row['division_id'].'">'.$row['subdivision_id'].'</option>';
        //$result[]  = array( '"division_id ":' .$row['division_id'] . ','. '"subdivision_id":' .$row['subdivision_id'] );
         $result[]  = array(
            'divisionid' => $row['division_id'],
            'subdivisionid' => $row['subdivision_id'] 
        );
        echo json_encode($result);
        }  
    }else{
        echo '<option value="">'.$_POST['zone_id'].'</option>';
    }
}

?>