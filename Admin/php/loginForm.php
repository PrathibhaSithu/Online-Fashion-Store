<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
	$user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
	$password = md5($_POST['password']);
	
	$select = "	SELECT * FROM admin_details	WHERE user_name = '$user_name' && password = '$password'";
				
	$result = mysqli_query($conn,$select);
	
	if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_array($result);
		header('location:MainPage.php');
	}
	else{
		$error[] = 'You have entered incorrect email or password !';
	}
};

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Login Form</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>

<body>
	
	<section>
		<div class="color"></div>
		<div class="color"></div>
		<div class="color"></div>
		<div class="box">
			<div class="square" style="--i:0;"></div>
			<div class="square" style="--i:1;"></div>
			<div class="square" style="--i:2;"></div>
			<div class="square" style="--i:3;"></div>
			<div class="square" style="--i:4;"></div>
			<div class="square" style="--i:5;"></div>
			<div class="square" style="--i:6;"></div>
			<div class="square" style="--i:7;"></div>
			<div class="square" style="--i:8;"></div>
			<div class="square" style="--i:9;"></div>
			
			<div class="container">
				<div class="form">
					<h2>Welcome ADMIN</h2>
					<form action="" method="post">
						<h3>Login Now</h3>
						<?php
							if(isset($error)){
								foreach($error as $error){
									echo '<span class = "error-msg">' .$error. '</span>';
								};
							};
						?>
						<div class="inputBox">
						<input type="text" name="user_name" required placeholder="Enter Your User Name">
						</div>
						<div class="inputBox">
						<input type="password" name="password" required placeholder="Enter Password">
						</div>
						<div class="inputBox">
						<input type="submit" name="submit" value="login">
						</div>
						<p class="Register">don't have an account? <a href="RegisterForm.php">register now</a></p>
					</form>
				</div>
			</div>
		</div>
	</section>

</body>
</html>