<?php
require_once('./Config.php');

$sql = "SELECT * FROM item";
$result = $conn->query($sql);

if (isset($_POST['btnSelect'])) {

	$itemID = $_POST['itemID'];

}
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="./css/Home.css">
	<?php include './Head.php'; ?>
</head>

 <!-- header -->
 <link rel="stylesheet" href="./css/header.css">
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
	   
	   


</script>
   </header>

   <!--navi bar-->
   <div>
	   <nav>
		   <ul class="nav__links">
			   <li><a href="#">Home</a></li>
			   <li><a href="#">Hot Sale</a></li> 
			   <li><a href="#">New Arrivsl</a></li>
			   <li><a href="#">Women's</a></li>
			   <li><a href="#">Men's</a></li>
			   <li><a href="#">Cosmetics</a></li>
			   <li><a href="#">View</a></li>
			   <li><a href="#">help</a></li>
			   <a class="cta" href="login.php"><button>Login</button></a>
			   <a class="cta" href="signup.php"><button>Sign up</button></a>
		   </ul>
	   </nav>
	   
	   </div>




 <!--  -->

	<div class="container" style="text-align: center; margin-top: 3%; margin-bottom: 20%;">
		<div class="row">
			<?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
			?>
					<div class="col-4" style="margin-bottom: 20px; display: flex; justify-content: center;">
						<div class="card">
							<form action="login.php" method="POST">
								<div class="card-header">
									<img src="./image/<?php echo $row['image']; ?>" alt="item">
								</div>
								<div class="card-body">
									<input type="submit" value="SELECT"  class="button blue" style="margin: -4px 0px 10px 0px">
									<input type="hidden" name="itemID" value="<?php echo $row['itemID']; ?>">
									<span class="card-desc"><?php echo $row['itemName']; ?></span>
									<div class="row" style="margin-top: 10px; text-align: center;">
										<div class="col-6">
											<span class="card-net-price">LKR <?php echo ($row['price'] - $row['discount']) ?>.00/=</span>
										</div>
										<div class="col-6">
											<?php if ($row['discount'] != 0) { ?> <span class="card-price"> LKR <?php echo $row['price']; ?>.00/=</span> <?php } ?>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					
			<?php
				}
			}
			?>

		</div>

	</div>
				<?php  include('Footer.php')   ?>
</body>

</html>