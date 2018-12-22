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
        print_r("hi i m in");

        if($query = $mysqli->query("INSERT INTO `esti_habs` (`id`, `zone_id`, `circle_id`, `district_id`, `division_id`, `subdivision_id`, `block_id`, `scheme_id`, `village_id`, `conn_component1`, `conn_component2`, `conn_component3`) VALUES (NULL, '$zonecboID', '$circlecboID', '$districtID', '$divisioncboID', '$subdivisioncboID','$blockcboID','$schemecboID','$habitationID','$component1', '$component2', '$component3')")){
                echo "Record Saved Successfully";
        }else{
                echo "Error";
        }    
    }
?>

