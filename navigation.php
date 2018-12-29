<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vinod</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
   /* footer {
      background-color: Tomato;
      padding: 25px;
    }*/
   
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">  <!--class="active " kame thref Visible that means bold -->
     
      <ul class="nav navbar-nav">
        <li><img src="Images/logo.png" height="50" width="50" style="background-color: rgb(12,12,12);"></li>
        <li class="active"><a href="home.php">Home</a></li>
        <li ><a  href="about.php">About</a></li>
        <li><a href="collection.php">Collection</a></li>
        <li><a href="login.php">Admin</a></li>
        <li><a href="contactus.php">Contact</a></li>
        <li ><a href="composition" target="back">Compocition</a></li>
      
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php"><span class="glyphicon glyphicon-log-in"></span>Sign Up</a></li>
      </ul>
    </div>
  </div>  </div>
</nav>
</body>
</html>
