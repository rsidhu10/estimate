<?php
include('include/db_connect.php');
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


/*

echo "ZoneCode : " .$zonecode. "<br/>CircleCode :" .$circlecode."<br/>District Code :" .$districtcode. "<br/>Block Code :" .$blockcode. "<br/>Scheme Code :" .$schemecode ;

/*
 ."<br/>District Code :" .$districtcode. "<br/>Block Code :" .$blockcode. "<br/>Block Code :" .$schemecode
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phoneCode = $_POST['phoneCode'];
$phone = $_POST['phone'];


if (!empty($username) || !empty($password) || !empty($gender) || !empty($email) ||
!empty($phoneCode) || !empty($phone)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "dwss";
    $dbname = "dwsspb";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From register Where email = ? Limit 1";
     $INSERT = "INSERT Into register (username, password, gender, email, phoneCode, phone) values(?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssii", $username, $password, $gender, $email, $phoneCode, $phone);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
*/



?>