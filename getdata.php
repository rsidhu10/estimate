<?php
//Include database configuration file
include('include/db_connect.php');

if(isset($_POST["scheme_id"]) && !empty($_POST["scheme_id"])){
    $query = $mysqli->query('SELECT * FROM scheme_new WHERE scheme_id = "'.$_POST['scheme_id'].'" ORDER BY scheme_name ASC');
    $rowCount = $query->num_rows;
    $result = array();
    if($rowCount > 0){
        while($row = mysql_fetch_array($query)){
            array_push($result, array('divisionid' => $row[0],
                                      'subdivisionid' =>$row[1]
                                      ));

        }

        echo  json_pharse(array('result' => $result));
        //echo json_pharse  json_pharse()

    }    
}
?>
