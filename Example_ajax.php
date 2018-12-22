<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Ajax Example</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
var mdata = [];
var zone1 = {};
var zone2 = {};
var zone3 = {};

zone1.id = 'Z01';
zone1.name = 'North';

mdata.push(zone1);

zone2.id = 'Z02';
zone2.name = 'South';
mdata.push(zone2);
zone3.id = 'Z03';
zone3.name = 'Central';
mdata.push(zone3);
console.log(mdata);

$.ajax({
	url: "readdata.php",
	method: "POST",
	data: { office : JSON.stringify(mdata) },
	success: function(result){
		console.log(result);
	}
});
	
</script>
</head>
<body>
<h3>Example of Data tranfering from Javascript to PHP using ajax</h3>
</body>
</html>


