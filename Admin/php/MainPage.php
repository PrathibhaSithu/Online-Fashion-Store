<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS Link-->
      <link rel="stylesheet" href="../css/main.css" />
	  <link rel="stylesheet" href="../others/icons/css/all.css"/>

    <title>Admin Dashboard</title>
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
			<img src = "../images/5.jpg" alt ="1"/>
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
