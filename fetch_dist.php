<?php
include('include/db_connect.php');
if(isset($_POST["schemeid"]) && !empty($_POST["schemeid"])){
	    $result = $mysqli->query('SELECT * FROM scheme_new WHERE scheme_id = "'.$_POST['schemeid'].'" ORDER BY scheme_name ASC'); 
 		while($row = mysqli_fetch_array($result))
 		{
  			$data["districtid"]    = $row["district_id"];
  			$data["subdivisionid"] = $row["subdivision_id"];
 }
 echo json_encode($data);
}
?>