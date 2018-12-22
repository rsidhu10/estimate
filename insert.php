<?php
	$circle = $_POST['circle'];
	$division = $_POST['division'];
	$block = $_POST['block'];
	$scheme = $_POST['scheme'];
	//$village = $_POST['village'];

	if(!empty($circle) || !empty($division) || empty($block)){
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "dwss";
		$dbname = "dwsspb";

		//Create Connection
		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
		if(mysqli_connect_error()){
			die('Connect Error(' .mysqli_connect_errno().')'.mysqli_connect_error());
			$SELECT = "SELECT scheme_id  from adminapprovals Where scheme_id = ? Limit 1";
			$INSERT = "INSERT into adminapprovals (circle_id,division_id,block_id,scheme_id) values(?,?,?,?)";
			//Prepare Statement
			$stmt = $conn->Prepare($SELECT);
			$stmt->bind_param("s", $scheme_id);
			$stmt->execute();
			$stmt->bind_result($scheme_id);
			$stmt->store_result();
			$rnum = $stmt->num_rows;

			if($rnum ==0){
				$stmt->close();
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("ssss",$circle, $division, $block, $scheme);
				$stmt->execute();
				echo "Record Saved";
			} else {
				echo "Record Already Exists";
			}
			$stmt->close();
			$conn->close();

		}

	}else {
		echo "All feids are required";
		die();
	}

?>