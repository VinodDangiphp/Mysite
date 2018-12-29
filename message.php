<?php
include'connection.php';
if(isset($_POST['done']))
{
	$email=$_POST['email'];
	$comment=$_POST['comment'];
 


	$q="INSERT INTO `feedback`(`email`, `comment`) VALUES  ('$email','$comment')";
	$query=mysqli_query($con,$q);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
</body>
<div id="div">
	<form method="post">
    Email:<input type="text" name="email"><br>

	<h5>Feedback</h5>
	<textarea class="div" rows="4" cols="50" name="comment" type="text"placeholder="Comment Me here" style="boarder:px">
</textarea><br>
<button type="submit" name="done">submit</button>
</form>
</div>
<style>
	#div{
text-align: center;	}
</style>

</body>
</html>