<?php

session_start();
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$comment = $_SESSION['comment'];
$gender = $_SESSION['gender'];


?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Input</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<style>


body{
	background-image: url('back.jpg');
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;

}
#bgopa{
	opacity: 0.9;
	width: 50%;
	padding: 20px;
	position: relative;
  	left: 25%;
  	

}
</style>

</head>
<body>
<div class="container text-light">
	<div class="text-center">
	<br><br><br><br><br>		
		<h1>Your inputs</h1>
	<br><br>
	</div>
	
</div>

<div class="container">
	<div class="jumbotron" id="bgopa">
		<div class="container">
			<div class="list-group">
				<ul class="list-group">
					<li class="list-group-item"><p><label><strong>Name:</strong></label><br><?php echo $name; ?></p></li>
				
					<li class="list-group-item"><p><label><strong>Email:</strong></label><br><?php echo $email; ?></p></li>
				
					<li class="list-group-item"><p><label><strong>Username:</strong></label><br><?php echo $username; ?></p></li>
				
					<li class="list-group-item"><p><label><strong>Password:</strong></label><br><?php echo sha1($password); ?></p></li>
			
					<li class="list-group-item"><p><label><strong>Gender:</strong></label><br><?php echo $gender; ?></p></li>
				
			
					<li class="list-group-item"><p><label><strong>Comment</strong></label><br><?php echo $comment; ?></p></li>
			</ul>
			</div>
			<br><br>
			<div class="container bg-success text-light text-center">
				
				<a href="Validation.php" class="nav-link text-light"><h3>Back</h3></a>
				
			</div>
			<br><br>

		</div>
	</div>
</div>
</body>
</html>