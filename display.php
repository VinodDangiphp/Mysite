<?php
include('navigation1.php');
include 'connection.php';
if(isset($_POST['done'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
 


	$q="select * from user";
	$query=mysqli_query($con,$q);
}
?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="widtd=device-widtd, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
</head>
<body>
	<div class="container">

		<div class="col-lg-12">
			<h2 class="text-warning text-center">Table display</h2>
			<table class="table table-striped table-hover table-bordered">
				<tr class="bg-dark text-white text-center">
					<td>Id</td>
					<td>Username</td>
					<td>Password</td>
					<td>Insert</td>
					<td>Delete</td>
					<td>Update</td>
				</tr>
			
	   <?php
		               include 'connection.php';
		            
	                    $q="select * from user";
		                $query=mysqli_query($con,$q);
		                while ($res=mysqli_fetch_array($query)) {


		                	# code...
		            

       ?>
			
				<tr class="text-center">
					<td><?php echo $res['id']; ?></td>
					<td><?php echo $res['username']; ?></td>
					<td><?php echo $res['password']; ?></td>
					<td><button class="btn-primary btn"><a href="insert.php?id=<?php echo $res['id']; ?>"class="text-white">Insert</a></button></td>
					<td><button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id']; ?>"class="text-white">Delete</a></button></td>
					<td><button class="btn-primary btn"><a href="update.php?id=<?php echo $res['id']; ?>"class="text-white">Update</a></button></td>
				
		         </tr>
		         <?php
			}
			?>
			</table>
			
		</div>
	</div>

</body>
</html>