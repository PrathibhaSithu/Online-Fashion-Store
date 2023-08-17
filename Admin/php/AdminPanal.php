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
	<title>Admin Panal</title>
	<style>
		body{
			overflow : hidden;
			display : flex;
			justify-content : center;
			min-height: 100vh;
			background-image: url('../images/1.jpg');
		}
	</style>
	 <link rel="stylesheet" href="../css/main.css" />
	  <link rel="stylesheet" href="../others/icons/css/all.css"/>
</head>

<body>
	<nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../images/logo.png" alt="LOGO">
                </span>

                <div class="text logo-text">
                    <span class="name">Miss Fashion</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="dashboard.php">
                            <i class="fa-brands fa-sketch"></i>
							<i></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

					 <li class="nav-link">
                        <a href="AdminPanal.php">
                            <i class="fa-solid fa-user"> </i>
                            <span class="text nav-text"> Admin Panal</span>
                        </a>
                    </li>
					
                    <li class="nav-link">
                        <a href="RegisterFormAdmin.php">
							<i class="fa-solid fa-registered"></i>
                            <span class="text nav-text">Register</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="UploadIMG&Dets.php">
                            <i class="fa-solid fa-images"></i>
                            <span class="text nav-text">Update Images</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="viewIMG.php">
                            <i class="fa-solid fa-image"></i>
                            <span class="text nav-text">Display Images</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
						<i class="fa-solid fa-right-from-bracket"></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                
                
            </div>
        </div>

    </nav>

	<section class="home">
        <div class="text">
	<center>
	<h2>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	Admin Panal Details</h2>
	
	<table border =1px aign ="center" Style="width:1000px; line-height:50px;"> 
		<tr>
			<th>Admin ID</th>
			<th>Email Address</th>
			<th>Name</th>
			<th>Role</th>
		</tr>
		
		<?php
			while($rows=mysqli_fetch_assoc($result)){
		?>
				<tr>
					<td><?php echo $rows['a_id']; ?></td>
					<td><?php echo $rows['email']; ?> </td>
					<td><?php echo $rows['name']; ?></td>
					<td><?php echo $rows['role']; ?></td>
				</tr>
		<?php
			}
		?>
	</table>
	</center>
	</div>
    </section>
	
	<script>
        const body = document.querySelector('body'),
		sidebar = body.querySelector('nav'),
		toggle = body.querySelector(".toggle"),
		searchBtn = body.querySelector(".search-box"),
		modeSwitch = body.querySelector(".toggle-switch"),
		modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

</script>
</body>
</html>