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

<body>
	

	<div class="container" style="text-align: center; margin-top: 3%; margin-bottom: 20%;">
		<div class="row">
			<?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {

								
					$_SESSION['price'] = $row['price'];
					$_SESSION['itemID'] = $row['itemID'];
					
				
			?>
					<div class="col-4" style="margin-bottom: 20px; display: flex; justify-content: center;">
						<div class="card">
							<form action="ItemOrder.php" method="POST">
								<div class="card-header">
									<img src="./image/<?php echo $row['image']; ?>" alt="item">
								</div>
								<div class="card-body">
									<input type="submit" value="SELECT" name="btnSelect" class="button blue" style="margin: -4px 0px 10px 0px">
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