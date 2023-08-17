
<?php 
    include('db_conn.php');
session_start(); 
 $username = $_SESSION['username'];  
 
 
$sql = "SELECT * FROM customer WHERE username ='$username' "; 
$query_run = mysqli_query($conn,$sql);
$column = mysqli_fetch_assoc($query_run);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edite</title>
    <link rel="stylesheet" type="text/css" href="./css/update.css">
       
</head>
<body>

    <?php include('header.php');?>


    <div class="container">
        
            <h1 style="padding-top:10px;">Edite</h1>
                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div role="alert" style="background-color: rgb(171, 255, 192); padding:10px; text-align: center;">
                             <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }

                ?>  

    <form action="update_code.php" method="POST">

        <div>
             <label for="">Enter your loged email</label>
             <br>
            <input type="text" name="email" class="email" value="<?=$column['email']?>" readonly>   
         </div>
<br>                       
            <div>
             <label for="">address</label>
             <br>
            
             <input type="text" name="address" class="update_data" value="<?=$column['address']?>">
         
            <button type="submit" name="update_address" class="butt" >Update</button>
         </div>
         
         <div>
             <label for="">ZIP code</label>
             <br>
             <input type="text" name="zip_code" class="update_data" value="<?=$column['zip_code']?>">
        
            <button type="submit" name="update_zip_code" class="butt">Update</button>
         </div>
         

        <div>
            <label for="">Phone No</label>
            <br>
            <input type="text" name="phone"  class="update_data" value="<?=$column['phone']?>">
       
            <button type="submit" name="update_Phone" class="butt" value>Update</button>
         </div>

         <div class="delete_btn">
            <button type="submit" name="delete_account" class="delet_btnin" value>Delete account</button>
         </div>
         
                    
    </form>

                </div>
                <?php   include('Footer.php')  ?>                  
    
</body>
</html> 