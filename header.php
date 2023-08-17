<?php
   // session_start();
   
   // $c_id = "{$_SESSION['c_id']}";
    //$_SESSION['c_id'] = $c_id;

   // $_SESSION['name'];
 ?>   

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./css/header.css">
</head>
    
<body>
    <header>
       
        <div class="header_logo">
            <a href="#"><img class="logo" src="image/logo.png" alt="logo"></a>
        </div>
        <div class="h_search">
            <form action="" method="post">
                <input type="search" placeholder="Quick Search...">
                <button type="submit"><img src="image/searching.png"></button>
            </form>
        </div>
        <div class="cart">
           <form action = "./Shopping cart/cart.php? <?$_SESSION['c_id'];?> " >
           <button type="submit"  href="./Shopping cart/cart.php"><img src="image/shopping-cart.png " class="cart_btn"></button>
            </form>
       </div>  
        

       <!-- profile drop -->
       
        <link rel="stylesheet" type="text/css" href="./css/Profiledrop.css">

        

<div class="prof">
<div class="dropdown-item">
        <div class="imgBox" onclick="myFunction()">
            <img src="image/p.png" alt="Pure Coding" width="40px">
        </div>
    <div class="dropdown-content">
        <div class="content">
            <div class="name"><?=$_SESSION['name']?></div>
        </div>
            <ul class="links">
                <li><a href="#"><img class="img" src="image/p.png"><a href="profile.php">Profile</a></li>
                <div class="divider"></div>
                <li><a href="#"><img class="img" src="image/edit.png"><a href="update.php">Edit Profile</a></li>
                <div class="divider"></div>
                <li><a href="#"><img class="img" src="image/helpe.png"><a href="hlp.php">Help</a></li>
                <div class="divider"></div>
                <li><a href="#"><img class="img" src="image/logout.png"><a href="logout.php"> Logout</a></li>
            </ul>
        </div>
    </div>
</div>
</div>    

<script>
function myFunction() {
    var dropdownContent = document.querySelector('.dropdown-content');
    dropdownContent.classList.toggle('dropdown-toggle');
}
</script>
    </header>

    <!--navi bar-->
    <div>
        <nav class="nav">
            <ul class="nav__links">
                <li><a href="home.php">Home</a></li>
                <li><a href="#">Hot Sale</a></li> 
                <li><a href="#">New Arrivsl</a></li>
                <li><a href="#">Women's</a></li>
                <li><a href="#">Men's</a></li>
                <li><a href="#">Cosmetics</a></li>
                <li><a href="#">View</a></li>
                <li><a href="hlp.php">help</a></li>
                <li><a href="payment_history.php">Payment History</a></li>
            </ul>
        </nav>
        
        </div>


</body>
</html>