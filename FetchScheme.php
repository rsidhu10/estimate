<?php 
include('include/db_connect.php');
if(isset($_POST["scheme_id"]) && !empty($_POST["scheme_id"])){
    $query = $mysqli->query('SELECT * FROM scheme_new WHERE scheme_id = "'.$_POST['scheme_id'].'" ORDER BY scheme_name ASC');   
    $rowCount = $query->num_rows;
    if($rowCount > 0){
        while ($row = mysqli_fetch_array($query)) 
        {
            $data["divisionid"] = $row["division_id"];
            $data["subdivisionid"] = $row["subdivision_id"];
        }
        echo json_encode($data);
}

?>