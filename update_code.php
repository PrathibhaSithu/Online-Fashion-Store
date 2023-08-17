<?php
session_start();
$con = mysqli_connect("localhost","root","","online fashion store");
    
    $email = $_POST['email'];

            //update

  //update address

    if(isset($_POST['update_address']))
    {
    
        $address = $_POST['address'];

        
            if(empty($address))
            {
                $_SESSION['status'] = "yout input is empty";
                header("Location: update.php");
            }
            else
            {
                $query = "UPDATE customer SET address='$address' WHERE email='$email' ";
                $query_run = mysqli_query($con, $query);

                if($query_run)
                {
                    $_SESSION['status'] = "address updated";
                    header("Location: update.php");
                }
            }
    }
            //update zip code

    if(isset($_POST['update_zip_code']))
    {

        $zip_code = $_POST['zip_code'];

        
            if(empty($zip_code))
            {
                $_SESSION['status'] = "yout input is empty";
                header("Location: update.php");
            }
            else
            {
                $query = "UPDATE customer SET zip_code='$zip_code' WHERE email='$email' ";
                $query_run = mysqli_query($con, $query);

                if($query_run)
                {
        
                    $_SESSION['status'] = "zip_code updated";
                    header("Location: update.php");
                }
        }
    
    }

            //update phone

    if(isset($_POST['update_Phone']))
    {

        $phone = $_POST['phone'];

            if(empty($phone))
            {
                $_SESSION['status'] = "yout input is empty";
                header("Location: update.php");
            }
            else
            {
                $query = "UPDATE customer SET phone='$phone' WHERE email='$email' ";
                $query_run = mysqli_query($con, $query);
                
                if($query_run)
                {
                    $_SESSION['status'] = "phone updated";
                    header("Location: update.php");
                }
            }
 
    }

    //delete account


    if(isset($_POST['delete_account']))
    {
    

        $queryd = "DELETE FROM customer WHERE email='$email'";
        $queryd_run = mysqli_query($con, $queryd);
  

        if($queryd_run)
        {
        
            $_SESSION['status'] = "your account is deleted";
            header("Location: update.php");
            header("Location: logout.php");
            
        }
    }




?>