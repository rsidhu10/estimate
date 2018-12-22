<?php
//Include database configuration file


    include('include/db_connect.php');

 if(isset($_POST["scheme_id"]) && !empty($_POST["scheme_id"])){
    $query = $mysqli->query('SELECT * FROM scheme_new WHERE scheme_id = "'.$_POST['scheme_id'].'" ORDER BY scheme_name ASC');   
    $rowCount = $query->num_rows;
    $result = array();
    while ($row = mysqli_fetch_array($query)) {
        $result[]  = array(
            'divisionid' => $row['division_id'],
            'subdivisionid' => $row['subdivision_id'] 
        );
    }
    return json_encode($result);

   
}
/*
echo '<pre>';
print_r(getdata());
echo '</pre>';
*/
?>
