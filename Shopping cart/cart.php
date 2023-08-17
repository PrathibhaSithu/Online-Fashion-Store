

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">

    <script src="https://kit.fontawesome.com/cc46dcc2f2.js" crossorigin="anonymous"></script>
    <title>Shopping Cart</title>
</head>
<body>
<?php
include("header.php");
?>
<main class="container">

    <div class="heading">
        <img src="./IMG/shopping-cart-452-1163339.png" alt="">
        <h1>Sales Shopping Cart</h1>

    </div>
</main>
<div class="content">
   
    <h3>Sale end in May</h3>
    <div class="countdown-container">
        <div class="days-c">
            <p id="Days">0</p>
            <span>Days</span>
        </div>
        <div class="days-c">
            <p class="Big-text countdown-el" id="Hours">0</p>
            <span class="per">Hours</span>
        </div>
        <div class="days-c">
            <p class="Big-text countdown-el" id="Minutes">0</p>
            <span class="per">Minutes</span>
        </div>
        <div class="days-c">
            <p class="Big-text countdown-el" id="Seconds">0</p>
            <span class="per">Seconds</span>
        </div>
    </div>
    <div class="gallery">
        <?php
        include("product.php");
        ?>
    </div>
    <form action="checkout.php" method="POST">
        <section class="cart">
            <div class="cart-item-box">
                <h1 class="section-heading">Order Summery</h1>
                <div class="product-card">

                </div>
            </div>
            <div class="wrapper">
                <div class="discount-token">
                    <div class="wrapper-flex">
                        
                    </div>
                </div>
                <div class="amount">
                    <div class="subtotal">
                        <span>Subtotal</span><span>$ <span id="subtotal">0.00</span></span>
                    </div>
                    <div class="shipping">
                        <span>Shipping</span ><span>$ <span id="shipping">0.00</span></span>
                    </div>
                    <div class="total">
                        <span>Total</span><span>$<span id="total" name="total">0.00</span></span>
                    </div>
                    <label class="Lable-default">Paid amaount</label>
                    <div class="wrapper-flex">
                        <input type="text" name="paidamount" id="paidamount" class="input-default">
                    </div>
                </div>
            </div>

            <input type="submit" class="btn btn-primary" name="checkoutbtn" value="Checkout">

        </section>
    </form>
    <?php
    include("Footer.php");
    ?>


    <script src="./JS/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    
</body>
</html>
