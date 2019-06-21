<?php
	$host="localhost";
	$user="root";
	$password="";
	$db="inventory";

	mysql_connect($host,$user,$password);
	mysql_select_db($db);

	if(isset($_POST['username'])){
		$uname=$_POST['username'];
		$pwd=$_POST['password'];

		$sql="select * from loginform where Username='".$uname."' AND  Password='".$pwd."' limit 1";
		
		$result=mysql_query($sql);

		if(mysql_num_rows($result)==1){
			echo"You have successfully logged in";
			include 'Admin.html';
			exit();
		}
		else{
			echo "incorrect password";
			exit();
		}
	}
?>
<html>
<head>
	<title> Login Form in FRULEP SUPERMARKET</title>
	<link rel="stylesheet" a href="styles\logincss.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="navbar-collapse-main">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">FRULEP<br>SUPERMARKET</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse-main">
			<ul class="nav navbar-nav nabar-right">
				<li><a class="active" href="index.html">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#services">Services</a></li>
				<li><a href="#contact ">Contact Us</a></li>
				<li><a href="login.php">Login</a></li>
			</ul>
		</div>
	</div>
</nav>
<div id="Login">
	<div class="container">
	<img src="img/login.jpg"/>
		<form method="POST" action="#">
		<div class="form-input">
		<input type="text" name="username" placeholder="Enter the User Name" require/>	
		</div>
		<div class="form-input">
		<input type="password" name="password" placeholder="password" require/>
		</div>
		<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</div>
</body>
</html>