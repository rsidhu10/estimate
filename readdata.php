<?php
	print_r($_POST['office']);
	$zone = json_decode($_POST['office']);
	print_r($zone);
	foreach ($zone as $data) {
	//	print_r($data->name);
	}

	// If we add true in json_decode it will return array of array not object
	$zone2 = json_decode($_POST['office'], true);
	if(json_last_error() == JSON_ERROR_NONE){
		ECHO "OK </br>";
		print_r($zone2);
	}else
	{
		echo json_last_error_msg();
	}
	//https://www.youtube.com/watch?v=q-li1Zdnwuo

	//Data Validation Example Youtube link 
	//https://www.youtube.com/watch?v=36z1EG0PYeE
	//foreach ($zone2 as $data2) {
	$mydata = "{'name' : 'Harish'}"; //This will return Error
	//because data should be like this in double quotes $mydata = '{"name" : "Harish"}';
	$zone2 = json_decode($mydata, true);
	if(json_last_error() == JSON_ERROR_NONE){
		ECHO "OK </br>";
		print_r($zone2);
	}else
	{
		echo json_last_error_msg();
	}


	//}

/*
Functions
PHP:
	json_encode
	json_decode
	json_last_error
	json_last_error_msg

JavaScript:
	JSON.parse
	JSON.stringify

Constants
encode
	JSON_NUMERIC_CHECK
	JSON_FORCE_OBJECT
	JSON_PRESERVE_ZERO_FRACTION
	JSON_UNESCAPED_SLASHES
	JSON_UNESCAPED_UNICODE
	JSON_PRETTY_PRINT

decode
	JSON_BIGINT_AS_STRING
	JSON_OBJECT_AS_ARRAY
Error
	JSON_ERROR_NONE			














*/


?>