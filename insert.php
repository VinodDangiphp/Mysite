<?php
include('navigation1.php');
include ('connection.php');
if(isset($_POST['done']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
 


	$q="INSERT INTO `user`(`username`, `password`) VALUES ('$username','$password')";
	$query=mysqli_query($con,$q);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert The data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 
  
</head>
<body >
	<div class="col-lg-6 m-auto">
		<form method="post">
			<br><br> <div class="card"> <!--class=card refers to the data will be displayed in the tabular form-->
 				<div class="card-header bg-dark">
					<h1 class="text-white text-conter"> Insert operation</h1>
					</div>
				<label>Username:</label>
				<input type="text" name="username" class="form-contro" class="form-control"><br>
				<label>Password:</label>
				<input type="text" name="password"><br>
				<button class="btn btn-success" type="submit" name="done">submit</button>

			</div>
		</form>
		
	</div>

</body>
</html>