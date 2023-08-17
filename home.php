<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username'])&& isset($_SESSION['email'])) {   ?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
</head>
<body>
      <div class="#" >
		  
      	<?php if ($_SESSION['role'] == 'admin') {?>

      		<!-- For Admin -->
			  
			<!-- <form action="Admin/php/MainPage.php">
			  <button type="" name="" href="Admin/php/MainPage.php" class="button black" style="margin: 5% 20% 5% 20% ; padding: 100px;  background: linear-gradient(120deg,#2980b9,#8e44ad); font-size:40px;">
              <i class="fas fa-cart-plus" style="margin-right: 10px;"></i> Click For visit Admin page </button> 
		  </form> -->
			<?php
		  header('location: Admin/php/MainPage.php');
      		?>
			<!--               -->

			</div>
      	<?php }elseif ($_SESSION['role'] == 'user') { ?>
		
	

      		<!-- FOR USERS -->
			  
      		<?php include('header.php') ?>
			 
			  <?php include('index.php') ?>
			  
				
			  </div>
			</div>
			
      	<?php } ?>
			
      </div>

	    
</body>
</html>
<?php }else{
	header("Location: login.php");
} ?>


