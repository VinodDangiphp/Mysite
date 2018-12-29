<?php
include('navigation1.php');
include 'connection.php';
 //Redirect to the login page
if(isset($_POST['done'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$Dob=$_POST['Dob'];
	$gender=$_POST['gender'];
 


	$q="INSERT INTO `user`(`fname`, `lname`, `username`, `password`, `Dob`, `gender`)  VALUES ('$fname','$lname','$username','$password','$Dob','$gender')";
	$query=mysqli_query($con,$q);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert The data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  
</head>
	<body background="Images/download.jpg">
	<div class="col-lg-6 m-auto">
		<form method="post">
			<br><br> <div class="card">
				<div class="card-header bg-dark">  <!--class="text-white text-center"  Text color white-->
					<h1 class="text-white text-center">Create a New Account</h1>
                         <p class="text-white text-center">It’s free and always will be.</p>
					<h1 class="text-white text-center"> SignUp</h1>
					</div>
					<label>Fname</label>
					<input type="text" name="fname">
					<label>lname</label>
					<input type="text" name="lname">
				<label>Username</label>
				<input type="text" name="username"  class="form-control"><br>
				<label>Password</label>
				<input type="text" name="password" class="form-control"><br>
				<label>Birth Day</label>
				<input type="date" name="Dob" class="form-control">
				<label>Gender</label>
					<input type="radio"  name="gender" value="male" >Male
			<input type="radio"  name="gender" value="female" >Female
				<button class="btn btn-success" type="submit" name="done">submit</button>


			</div>
		</form>
		
</body>
</html>
