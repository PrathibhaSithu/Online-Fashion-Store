<?php 
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['email'])) { ?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="css/login.css" media="screen">
</head>
<body>
		<?php include 'newheader.php'; ?>
		
		
    <div class="container" >
      	<form class="#" action="php/check-login.php" method="post" >

      	      <h1 class="#">LOGIN</h1>

      	      <?php if (isset($_GET['error'])) { ?>
      	      	<div class="alert" role="alert" style="background-color: rgb(171, 255, 192); padding:10px; text-align: center;">
				  	<?=$_GET['error']?>
			  	</div>

			  <?php } ?>

		  	<div class="#">
		    	<label for="username">User name</label>
		    	<input type="text" name="username"  id="username" placeholder="Username">
		  	</div>

		  	<div class="#">
		    	<label for="password">Password</label>
		    	<input type="password" name="password"  id="password" placeholder="Password">
		  	</div>

		  	<div class="#">
		    	<label >Select User Type:</label>
		  	</div>

		  	<select class="#" name="role" >
			  	<option selected value="user">User</option>
			  	<option value="admin">Admin</option>
		 	</select>

			<div class="button">
		  		<button type="submit" class="btn">LOGIN</button>
			</div>

			<div class="link">
               <p>Don't have an account? <a href="signup.php">Register</a></p>
			</div>
		  
		</form>
      </div>


	  <!-- footer -->

	  <link rel="stylesheet" type="text/css" href="./css/Footer-login.css">

	  <footer>
 
        <div class="f_bottom">
            <div class="col">
                <h2>Stay connect</h2>
                <div class="social">
                    <a href="#"><img src="image/facebook.png"></a>
                    <a href="#"><img src="image/twitter.png"></a>
                    <a href="#"><img src="image/instagram.png"></a>
                    <a href="#"><img src="image/whatsapp.png"></a>
                </div>
            </div>
            <br>
            <div class="col">
                <h2>Contact us</h2>
                <div class="social">
                    <a href="#"><img src="image/telephone.png"></a>
                    <a href="#"><img src="image/email.png"></a>
                    <a href="#"><img src="image/email (1).png"></a>
                    <a href="#"><img src="image/placeholder.png"></a>
                </div>
            </div>
            <br>
            <div class="col">
                <h2>We Accept:</h2>
                <div>
                    <img src="image/card.PNG">
                </div>
            </div>
            <div class="col">
                <div>
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7984671123477!2d79.97075044965278!3d6.914682820387544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256db1a6771c5%3A0x2c63e344ab9a7536!2sSri%20Lanka%20Institute%20of%20Information%20Technology!5e0!3m2!1sen!2slk!4v1652352033074!5m2!1sen!2slk" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p><br>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
<?php }else{
	  header("Location: home.php");
} ?>