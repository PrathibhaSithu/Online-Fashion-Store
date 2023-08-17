<?php
// Start the session
$conn = new mysqli('localhost','root','','online fashion store');
session_start();
    $username = "{$_SESSION['username']}";
    $itemID = $_POST['itemID'];
    $price = $_POST['price']- $_POST['discount'];


   // $amount = "{$_SESSION['cartpayamount']}";

   // echo  $amount;

    $sql = "SELECT * FROM customer WHERE username='$username'" ;
	$result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
			
        $_SESSION['name'] = $row['name'];
        $_SESSION['zip_code'] = $row['zip_code'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['c_id'] = $row['c_id'];

        
       $Full_name =  $_SESSION['name'];
       $zip_code = $_SESSION['zip_code'];
       $address = $_SESSION['address'];
        $c_id = $row['c_id'];
       
       // echo $price;


       
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/Header.css">
    <link rel="stylesheet" href="css/payment.css">
    <link rel="stylesheet" href="css/Footer.css">
</head>
<body>
<?php include 'header.php';?>
    <!----------payment--------->
    <div class="bg_image"></div>
    <div class="payment">
  
        <form action="php/pay.php" method="post">
        <?php
    //    $order_id=$_POST['P_ID'];
        
     //   $price=$_POST['Price'];
        
            ?>
                <div class="p_col">
    
                    <h3 class="p_title">payment</h3>
                   <h1>Total =Rs.<?php echo $price;?></h1> 
                    <div class="inputBox">
                        <span>Full name :</span>
                        <input type="text" name="Full_name" value="<?php  echo $Full_name ?>">
                    </div>
                    <div class="inputBox">
                        <span>Address :</span>
                        <input type="text" name="zip_code" value="<?php  echo $address ?>">
                    </div>
                    <div class="inputBox">
                        <span>Zip code :</span>
                        <input type="text" name="address" value="<?php  echo $zip_code ?>">
                    </div>
                    <div class="inputBox">
                        <span>cards accepted :</span>
                        <img src="image/card.jpeg" alt="">
                    </div>
                    <div class="inputBox">
                        <span>name on card :</span>
                        <input type="text" name="p_ncard" placeholder="<?php  echo $Full_name ?>">
                    </div>
                    <div class="inputBox">
                        <span>credit card number :</span>
                        <input type="number" name="p_card" placeholder="1111-2222-3333-4444">
                    </div>
                    <div class="inputBox">
                        <span>exp month :</span>
                        <input type="text" name="p_em" placeholder="january">
                    </div>
    
                    <div class="flex">
                        <div class="inputBox">
                            <span>exp year :</span>
                            <input type="number" name="p_ey" placeholder="2022">
                        </div>
                        <div class="inputBox">
                            <span>CVV :</span>
                            <input type="text" name="p_cw" placeholder="1234">
                        </div>
                    </div>
    
                </div>

                <input type='hidden' name='o_id' value='<?php echo "$itemID";?>'/> 
               
                 
                <input type='hidden' name='price' value='<?php echo "$price";?>'/> 
                <input type="submit" name="submit" value="submit" class="submit-btn "href="pay.php?f_id=<?= $itemID, $price;?>">
                
            </div>
        </form> 
    </div>

    <!-------Footer----------->
    <?php include 'Footer.php';?>

</body>
</html>