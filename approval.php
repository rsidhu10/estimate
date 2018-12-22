<?php
//Include database configuration file
include('include/db_connect.php');


$zoneID     = $_POST['zoneID'];
$circleID   = $_POST['circleID'];
$districtID = $_POST['districtID'];
$divisionID = $_POST['divisionID'];
$subdivisionID = $_POST['subdivisionID'];
$blockID    = $_POST['blockID'];
$schemeID   = $_POST['schemeID'];
$approvetype= $_POST['approvetype'];
$approvedBy = $_POST['approvedBy'];
$adminApproval  = $_POST['adminApproval'];
$adminApprovaldt= $_POST['adminApprovaldt'];
$component  = $_POST['component'];
$approvedAmt= $_POST['approvedAmt'];
$wbShare    = $_POST['wbShare'];
$stateShare = $_POST['stateShare'];
$nrdwpShare = $_POST['nrdwpShare'];


if(isset($_POST["schemeID"]) && !empty($_POST["schemeID"])){
    
    if($query = $mysqli->query("INSERT INTO `adminapprovals` (`ID`, `zone_id`, `circle_id`, `district_id`, `division_id`, `subdivisionid`, `block_id`, `scheme_id`, `atype`, `approvedby`, `aa_no`, `aa_date`, `component`, `aa_amt`, `wbshare`, `stateshare`, `nrdwp`) VALUES (NULL,'$zoneID','$circleID','$districtID','$divisionID','$subdivisionID','$blockID','$schemeID','$approvetype','$approvedBy','$adminApproval','$adminApprovaldt','$component','$approvedAmt','$wbShare','$stateShare','$nrdwpShare')")){
        echo "Record Saved Successfully";

    }else{
        echo "Error";
        
    }
   
}
?>
