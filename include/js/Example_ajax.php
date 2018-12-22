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
var data = [];
var zone = {};
var circle = {};
var division = {};

zone.id = 'Z01';
zone.name = 'North';

data.push(zone);
zone.id = 'Z02';
zone.name = 'South';
data.push(zone);
zone.id = 'Z03';
zone.name = 'Central';
data.push(zone);

console.log(data);
	
</script>
</head>
<body>
<h3>Example of Data tranfering from Javascript to PHP using ajax</h3>
</body>
</html>


