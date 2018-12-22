<?php
include('include/db_connect.php');

$zone     = $_POST["zone_id"];
$circle   = $_POST["circle_id"];
$dist     = $_POST["district_id"];
$divn     = $_POST["division_id"];
$sdivn    = $_POST["subdivision_id"];
$block    = $_POST["block_id"];
$scheme   = $_POST["scheme_id"];

if(empty($zone)){
  $zone ='*';
  echo "$zone";
}elseif (empty($circle)) {
  $circle = "*";
}elseif (empty($dist)) {
  $dist ="*";
}elseif (empty($divn)) {
  $divn ="*";
}elseif (empty($sdivn)) {
  $sdivn ="*";
}elseif (empty($block)) {
  $block ="*";
}elseif (empty($scheme_id)) {
  $scheme ="*";
}

echo "$zone";
echo "$circle";
echo "$dist";
echo "$divn";
echo "$sdivn";
echo "$block";
echo "$scheme";




/*
if(isset($zone) && !empty($zone)){


    $result = $mysqli->query('SELECT zone.zone_name,circles.circle_name,districts.district_name,divisions.division_name,
        subdivisions.subdivision_name,blocks.block_name
        ,scheme_new.scheme_name FROM scheme_new 
        LEFT JOIN zone ON zone.zone_id = Scheme_new.zone_id 
        LEFT JOIN circles ON circles.circle_id = Scheme_new.circle_id
        LEFT JOIN districts ON districts.district_id = Scheme_new.district_id
        LEFT JOIN divisions ON divisions.division_id = Scheme_new.division_id
        LEFT JOIN subdivisions ON subdivisions.subdivision_id  = Scheme_new.subdivision_id 
        LEFT JOIN blocks ON blocks.block_id = Scheme_new.block_id       
        ORDER BY ZONE.zone_name,Circles.circle_name,Divisions.division_name,subdivisions.subdivision_name');

    //query('SELECT * FROM scheme_new WHERE scheme_id = "'.$_POST['id'].'" ORDER BY scheme_name ASC'); 
 	$obj = [];
 	$rowCount = $result->num_rows;
    if($rowCount > 0){

 		//while($row = mysqli_fetch_array($result))
 		while($row = $result->fetch_assoc()){	
 		
  			$data["circle"]   	= $row["circle_name"];
  			$data["district"]   = $row["district_name"];
        $data["division"] 	= $row["division_name"];
  			$data["subdivision"]= $row["subdivision_name"];
        $data["block"]      = $row["block_name"];
        $data["scheme_name"] 	= $row["scheme_name"];
  			array_push($obj, $data);
  			//echo json_encode($data);
 }
});
     //print_r($obj);
 echo json_encode($obj);
*/


 ?>