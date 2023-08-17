<?php
// Start the session
$conn = new mysqli('localhost','root','','online fashion store');
session_start();
    $username = "{$_SESSION['username']}";

    $sql = "SELECT * FROM customer WHERE username='$username'" ;
	$result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
			
        $_SESSION['c_id'] = $row['c_id'];

        $c_id = $row['c_id'];
       
     
        echo $c_id;

       
?>





<?php


   
    // $c_id = "{$_SESSION['c_id']}";
    

    // echo $c_id;
 

require_once('./Config.php');

$sql = "SELECT * from item WHERE itemID = '" . $_POST['itemID'] . "'";
$result = $conn->query($sql);


if (isset($_POST['btnAddCart'])) { 
    echo $c_id;   
    if ($_POST['color'] == "default") {
        $alert_message = "Please select a color !";
        echo '<style type="text/css">
        #DangerModal {
            display: block;
        }
        </style>';
    } else if ($_POST['size'] == "default") {
        $alert_message = "Please select a size !";
        echo '<style type="text/css">
        #DangerModal {
            display: block;
        }
        </style>';
    } else {
        $itemID = $_POST['itemID'];
        $category = $_POST['category'];
        $image = explode("-", $_POST['image'])[0]."-".$_POST['color'].".jpg";
        $color = $_POST['color'];
        $size = $_POST['size'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];



        $sqlGet = "SELECT * FROM cart WHERE itemID = '" . $itemID . "' AND c_id = '" . $c_id . "' ";
        $resultGet = $conn->query($sqlGet);
        if ($resultGet->num_rows > 0) {
            $alert_message = "This item has already been added to the cart !";
            echo '<style type="text/css">
            #DangerModal {
                display: block;
            }
            </style>';
           //  echo "<script type='text/javascript'>alert('This item has already been added to the cart !');</script>";
        } else {
            $sqlSave = "INSERT INTO `cart`(`cartID`, `itemID`, `category`, `image`, `color`, `size`, `price`, `discount` , `c_id`) VALUES (null,'$itemID','$category','$image','$color', '$size', '$price', '$discount', '$c_id')";
            $resultSave = $conn->query($sqlSave);

            if ($resultSave == TRUE) {
          //       echo "<script type='text/javascript'>alert('Item has been added to your cart.');</script>";
                $alert_message = "Item has been added to your cart.";
                echo '<style type="text/css">
                #SuccessModal {
                    display: block;
                }
                </style>';
            } else {
                $alert_message = "Error:" . $sqlSave . "<br>" . $conn->error;
                echo '<style type="text/css">
                #DangerModal {
                    display: block;
                }
                </style>';
            }
        }
    }

}
else if(isset($_POST['buyNow'])){
    $itemID = $_POST['itemID'];
    $price =   $_POST['price'] - $_POST['discount']; 
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./css/ItemOrder.css">
    <?php include './Head.php'; ?>
</head>

<body>

<!-- header -->
    <!-- session -->

    

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
           <form action = "./Shopping cart/index.php">
           <button type="submit"  href=""><img src="image/shopping-cart.png" class="cart_btn"></button>
            </form>
       </div>  
       
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
               <li><a href="#"><img class="img" src="image/helpe.png"><a href="#">Help</a></li>
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
               <li><a href="#">help</a></li>
               <li><a href="Payment.php">Payment</a></li>
           </ul>
       </nav>
       
       </div>










       







    <div class="container" style="margin: 3% 5% 20% 8%">
        <div class="row">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="col-12">


                    <form action="Payment.php">
                    </form>


                        <form name="f1" method="POST">
                            <div class="row">
                                <fieldset>
                                    <div class="col-6">
                                        <img id="item-img" class="item-img" src="./fashion store/<?php echo $row['image']; ?>" alt="item">
                                    </div>
                                    <div class="col-6" style="margin-left: 10px;">
                                        <h2><span class="item-name"><?php echo $row['itemName']; ?></span></h2>
                                        <div class="row">
                                            <span class="item-price">LKR <?php echo ($row['price'] - $row['discount']) ?>.00/=</span>
                                        </div>
                                        <div class="row">
                                            <span class="item-desc"><?php echo $row['itemDesc']; ?></span>
                                        </div>

                                        <div class="row" style="margin-top: 20px; display: flex; justify-content: center;">
                                            <div class="col-4">
                                                <select name="color" id="color" onchange="colorOnChange(this)">
                                                    <option value="default">Select Color</option>
                                                    <?php
                                                    $colors = explode(",", $row['availableColors']);
                                                    foreach ($colors as $value) {
                                                    ?>
                                                        <option value="<?php echo $value ?>"><?php echo "$value"; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-4" style="margin-left: 10px;">
                                                <select name="size" id="size">
                                                    <option value="default">Select Size</option>
                                                    <?php
                                                    $size = explode(",", $row['availableSize']);
                                                    foreach ($size as $value) {
                                                    ?>
                                                        <option value="<?php echo $value ?>"><?php echo "$value"; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                       
                                        </div>
                                        <div class="row" style="margin-top: 20px; display: flex; justify-content: center;">
                                            <div class="col-8">
                                            
                                           

                                                <button type="submit" name="btnAddCart" class="button black" style="margin: -4px 0px 10px 0px">
                                                    <i class="fas fa-cart-plus" style="margin-right: 10px;"></i>
                                                    ADD TO CART
                                                </button>

                                                <button type="submit" onclick="f1.action='Payment.php'; return true;" name="buyNow" class="button black" style="margin: -4px 0px 10px 0px"> Buy Now </button> 

                                                
             
                                            </div>
                                            
                                        </div>
                                        <input type="hidden" name="itemID" value="<?php echo $row['itemID']; ?>">
                                        <input type="hidden" name="category" value="<?php echo $row['category']; ?>">
                                        <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
                                        <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                                        <input type="hidden" name="discount" value="<?php echo $row['discount']; ?>">


                                        <?
					
					                            // session_start();
					
					                            // $_SESSION['price'] = $row['price'];
					                            // $_SESSION['itemID'] = $row['itemID'];
					
					                    ?>

                                    </div>
                                </fieldset>

                            </div>
                            
                      
                       
                    </div>
                                                    
            <?php
                }
            }
            ?>
                    
        </div>

        <div id="DangerModal" class="modal">
            <div class="modal-content">
                <div class="alert-danger">
                    <span class="close-danger">&times;</span>
                    <strong><span id="errMsg" name="errMsg"> <?php print $alert_message; ?></span></strong>
                </div>
            </div>
        </div>

        <div id="SuccessModal" class="modal">
            <div class="modal-content">
                <div class="alert-success">
                    <span class="close-success">&times;</span>
                    <strong><span> <?php print $alert_message; ?></span></strong>
                </div>
            </div>
        </div>

    </div>
    </div>
   

    <script src="./js/ItemOrder.js"></script>

    <?php   include('Footer.php'); ?>
</body>

</html>