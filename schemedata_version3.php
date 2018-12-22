<?php
//Include database configuration file

function getdata(){
    include('include/db_connect.php');
    $scheme_id = 10301;


    $query = $mysqli->query('SELECT * FROM scheme_new WHERE scheme_id = "'.$scheme_id.'" ORDER BY scheme_name ASC');   
    $rowCount = $query->num_rows;
    $result = array();
    while ($row = mysqli_fetch_array($query)) {
        $result[]  = array(
            'divisionid' => $row['division_id'],
            'subdivisionid' => $row['subdivision_id'] 
        );
    }
    return json_encode($result);
    //return json_pharse($result);
   
}

echo '<pre>';
print_r(getdata());
echo '</pre>';

?>
