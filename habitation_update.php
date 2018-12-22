<?php
    include('include/db_connect.php');
    $save_type              = $_POST['save_type'];
    $zonecboID              = $_POST['zonecboID'];
    $circlecboID            = $_POST['circlecboID'];
    $districtID             = $_POST['districtID'];
    $divisioncboID          = $_POST['divisioncboID'];
    $subdivisioncboID       = $_POST['subdivisioncboID'];
    $blockcboID             = $_POST['blockcboID'];
    $schemecboID            = $_POST['schemecboID'];
    $habitationID           = $_POST['habitationID'];
    $component1             = $_POST['component1'];
    $component2             = $_POST['component2'];
    $component3             = $_POST['component3'];

    if(isset($_POST["habitationID"]) && !empty($_POST["habitationID"])){   
        
        
        if($query = $mysqli->query("Update `esti_habs` Set
        `conn_component1` = '$component1', 
        `conn_component2` = '$component2', 
        `conn_component3` = '$component3'
        WHERE `esti_habs`.`village_id` = $habitationID")){
            echo "Record Saved Successfully";
        }else
        {
            echo "Error Occured";
        }
    }else
    {
        echo "Something wrong";
    }
?>







/*

    $zonecode   = $_POST['zone_id'];
    $circlecode = $_POST['circle_id'];
    $districtcode = $_POST['district_id'];
    $blockcode  = $_POST['block_id'];
    $schemecode = $_POST['scheme_id'];
    //$adminatype = $_POST[''];
    $adminanum  = $_POST['admin_a_no'];
    $adminadate = $_POST['admin_a_dt'];
    $approveby  = $_POST['approvedby']; 
    $program  = $_POST["program"];
    $nrdwpamt = $_POST["nrdwp_amt"];
    $stateshare = $_POST["stateshare_amt"];
    $wbshareamt = $_POST["wbshare_amt"];

if(isset($_POST["scheme_id"]) && !empty($_POST["scheme_id"])){
    echo "asdasd";
    $query = $mysqli->query('SELECT * FROM scheme_new WHERE scheme_id = "'.$_POST['scheme_id'].'" ORDER BY scheme_name ASC');
    $rowCount = $query->num_rows;
    $response = array();
    if($rowCount > 0){
    	console.log($rowCount);
        while($row = $query->fetch_assoc()){
            $response['divnid'] = $row["division_id"];
            $response['sdivnid'] = $row["subdivision_id"];
        }
        echo json_encode($response);
    }else{
        echo "  0 results";
    }
}

*/

?>