<?php 
include('navigation.php');
session_start();
include('connection.php');



?>
<br><br><br>
<div align="left">
<form action="" method="post">

	Username:<input type="text" name="username" value=""><br><br>
	Password:<input type="text" name="password"><br><br>
	<input type="submit" name="submit" value="login">

</form>
</div>
<?php
if(isset($_POST['submit']))
{

	$user=$_POST['username'];
	$pwd=$_POST['password'];
	$query="SELECT * FROM user WHERE username='$user '&& password=$pwd";
	$data=mysqli_query($con,$query);
	$total=mysqli_num_rows($data);
	if($total==1)
	{
		$_SESSION['username']=$user;
		header('location:index.php');
	}
	else{
		echo "Please enter the correct user and password";
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="tomato">
	
	<h1>
	<p align="center" style="padding:0">
		Only for admin
	</P>
</h1>

</body>
</html>
