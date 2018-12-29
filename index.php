<?php
include('navigation.php');
session_start();
echo "Welcome   ".$_SESSION['username']




?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body style="background-color: MediumSeaGreen">
	<div style="text-align: right;top: 5; bottom: 500">
        <a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Loguot</a>
    </div>
	<div class="col-ms-3">
	<div align="left" class="l">
	<li type="circle"><a href="insert.php">Insert Info</a></li><br><br>
	<li><a href="delete.php">Delete Info</a></li><br><br>
	<li><a href="update.php">Update Info</a></li><br><br>
	<li><a href="display.php"> Display Data</a></li>

</div>
<div align="center" class="li">
	<ul><a href="collection.php">Collection</a></ul><br><br>
	<ul><a href="contactus.php">Contact Me</a></ul><br><br>
	<ul><a href="Images" target="back">Images</a></ul><br><br>
	<ul><a href="composition" target="back">Composition</a></ul><br>
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<ul><a href="pdf" target="back">Books</a></ul>
</div>
</div>
<style type="text/css">
	.l{

		float: left;
	}
	.li{
		float: middle;

	}
</style>

 

     

</body>
</html>