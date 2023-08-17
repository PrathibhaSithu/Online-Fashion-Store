<?php
	include("config.php");
	$query = "SELECT * FROM admin";
	$result= mysqli_query($conn,$query);
	//$total = mysqli_num_rows($data);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
	 <link rel="stylesheet" href="../css/dash.css" />
	 <link rel="stylesheet" href="../others/icons/css/all.css"/>
</head>

<body>
	
	
	<div class = "side">
		<div class = "sidebar">
		<a href="MainPage.php">Back</a>
			
		</div>

	<div class= "main">
		<div class="head">
			<div class= "head-title">
				<h2>Miss Fashion Dashboard</h2>
				<span>Main Page</span>
			</div>
			<div>
			
			</div>			
		</div>
		<div class ="main-board">
			<div class ="card-board">
				<div class ="card">
					<div class ="card-icon">
						<img src = "../images/2.jpg" alt ="1" width = "200px" height ="100px"/>
					</div>
				</div>
				
				<div class ="card">
					<div class ="card-icon">
						<img src = "../images/3.jpg" alt ="1" width = "200px" height ="100px"/>
					</div>
				</div>
				
				<div class ="card">
					<div class ="card-icon">
						<img src = "../images/4.jpg" alt ="1" width = "200px" height ="100px"/>
					</div>
				</div>
				
				<div class ="card">
					<div class ="card-icon">
						<img src = "../images/5.jpg" alt ="1" width = "200px" height ="100px"/>
					</div>
				</div>
			</div>
		</div>
		
		<div class="head">
			<div class= "head-title">
				<h2>Miss Fashion Admins</h2>
				<span>Find Your beauty</span>
			</div>		
		</div>
		<div class="head">
			<div>
				<h2>Dress Types</h2>
	
				<table border =1px aign ="center" Style="width:1000px; line-height:50px;"> 
					<tr>
						<th>Admin ID</th>
						<th>Name</th>
						<th>User Name</th>
						<th>Email Address</th>
					</tr>
		
		<?php
			while($rows=mysqli_fetch_assoc($result)){
		?>
				<tr>
					<td><?php echo $rows['a_id']; ?></td>
					<td><?php echo $rows['name']; ?> </td>
					<td><?php echo $rows['username']; ?></td>
					<td><?php echo $rows['email']; ?></td>
				</tr>
		<?php
			}
		?>
	</table>
			</div>	
		</div>
	</div>
	
	</div>
</body>
</html>