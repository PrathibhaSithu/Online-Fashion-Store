<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
     <link rel="stylesheet" type="text/css" href="./css/signup.css">
</head>
<body>
     
  <div class="container">
  
     <form action="signupadmin-check.php" method="post">
     	<h1>SIGN UP Admin</h1>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" name="name" placeholder="Name"><br>
          <?php }?>


          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" name="uname" placeholder="User Name" value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text"  name="uname" placeholder="User Name"><br>
          <?php }?>

          <label>Email</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="email" name="email" placeholder="email" value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="text"  name="email" placeholder="email"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password"  name="password"   placeholder="Password"><br>

          <label>Confirm Password</label>
          <input type="password" name="re_password" placeholder="Re_Password"><br>

          <p>Alrady a user? <a href="login.php">Log in</a></p>

     	<button type="submit">Sign Up</button>
     </form>

     </div> 
</body>
</html>