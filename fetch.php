<?php
include('include/db_connect.php');
if(isset($_POST["id"]) && !empty($_POST["id"])){
	    $result = $mysqli->query('SELECT * FROM scheme_new WHERE scheme_id = "'.$_POST['id'].'" ORDER BY scheme_name ASC'); 
 		while($row = mysqli_fetch_array($result))
 		{
  			$data["divisionid"]    = $row["division_id"];
  			$data["subdivisionid"] = $row["subdivision_id"];
 }
 echo json_encode($data);
}
?>