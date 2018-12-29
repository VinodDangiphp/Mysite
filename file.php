<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0" >
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Document</title>
</head>
<body>
<?php
include('navigation.php');
move_uploaded_file($_FILES["myfile"]["tmp_name"], "Images/".$_FILES["myfile"]["name"]);

?>
</body>
</html>