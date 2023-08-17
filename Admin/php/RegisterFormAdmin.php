<?php

$conn = mysqli_connect('localhost', 'root', '', 'online fashion store');


if(isset($_POST['submit'])){
	$First_Name = mysqli_real_escape_string($conn, $_POST['Name']);
	// $Last_Name = mysqli_real_escape_string($conn, $_POST['Last_Name']);
	$Email_Address = mysqli_real_escape_string($conn, $_POST['Email_Address']);
	$user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
	$Password = md5($_POST['Password']);
	$CPassword =md5($_POST['ConfPass']);
	
	$select = "	SELECT * FROM admin	WHERE email = '$Email_Address'";
				
	$result = mysqli_query($conn,$select);
	
	if(mysqli_num_rows($result)>0){
		$error[] = 'An account already exist in this User Name and Email Address';
		exit();
	}
	else{
		if($Password != $CPassword){
			$error[] = 'Password is not matching !';
		}
		else{
			$insert = "INSERT INTO admin(name, email, username, password) VALUES('$First_Name','$Email_Address', '$user_name', '$Password')";
			$result2 =mysqli_query($conn, $insert);
			header('location: dashboard.php'); 
		}
	}
};

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<!-- <link rel="stylesheet" type="text/css" href="./css/registerAdmin.css"> -->
	<link rel="stylesheet" type="text/css" href="../css/register.css">
</head>

<body>
	<?php
		//$path = $_SERVER["DOCUMENT_ROOT"]."MainPage.php";
		//include("MainPage.php");
	?>
	
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
					<h2>Welcome To ADMIN Registration</h2>
					<form action="" method="post">
						<h3>Register Now</h3>
						<?php
							if(isset($error)){
								foreach($error as $error){
									echo '<span class = "error-msg">' .$error. '</span>';
								};
							};
						?>
						<!-- <div class="inputBox">
						<input type="text" name="First_Name" required placeholder="Enter Your First Name">
						</div> -->
						
						<div class="inputBox">
						<input type="text" name="Name" required placeholder="Enter Your Name">
						</div>
						
						<div class="inputBox">
						<input type="Email" name="Email_Address" required placeholder="Enter Your Email Address">
						</div>
						
						<div class="inputBox">
						<input type="text" name="user_name" required placeholder="Enter Your User Name">
						</div>
						
						<div class="inputBox">
						<input type="password" name="Password" required placeholder="Enter Password">
						</div>
						
						<div class="inputBox">
						<input type="password" name="ConfPass" required placeholder="Confirm Password">
						</div>
						
						<div class="inputBox">
						<input type="submit" name="submit" value="Register" class="form-btn">
						</div>
						<p>Already An Admin ? <a href="login.php">Login now</a></p>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>