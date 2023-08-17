<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="css/payhistory.css">
    </head>
    <body>
            <!-------Header-------->
        <?php include 'Header.php';?>

        <!----paymemt History---->
    <h1>Payment History</h1>
    <div class="table">
    <?php

    $conn = new mysqli('localhost','root','','online fashion store');


                
                
                if($conn->connect_error)
                {
                    die('Connection Faild : '.$conn->connect_error);
                }
                
                else{

                            $sql = "SELECT * FROM payment ";   

                    $result = $conn->query($sql);
                    
                    if($result->num_rows > 0)
                    {
                        echo"<table border=1>";
                            echo"<tr>";
                                 echo"<th>Payment ID</th>";
                                 echo"<th>Customer ID</th>";
                                 echo"<th>Item ID</th>";
                                 
                                 echo"<th>Qty</th>";
                                 
                                 echo"<th>Total</th>";
                                 echo"<th>Payment date</th>";
                                 echo"<th>Item remove</th>";
                             echo"</tr>";
                        while($row = $result->fetch_assoc())
                        {              $id=$row['Payment_ID'];

                                         echo"<tr>";           
                                         echo    "<td>".$row['Payment_ID']."</td>";        
                                         echo    "<td>".$row['c_id']."</td>";
                                         echo    "<td>".$row['Item_ID']."</td>";
                                         
                                         echo    "<td>".$row['Qty']."</td>";
                                         
                                         echo    "<td>".$row['Total']."</td>";
                                         echo    "<td>".$row['Payment_date']."</td>";
                                         echo"<form action='./php/delete.php' method='post' class='delete'>";
                                                echo"<input type='hidden' name='Payment_ID' value='".$id."'>";
                                                echo"<td> <input type='submit' name='delete' class='btn' value='DELETE'></td>";
                                         echo"</form>";
                                         
                                         echo"</tr>";

                                         
                                        $_SESSION['Payment_ID'] = $id;
                                        
                        }           
                        echo"</table>";
                        
                }
            }
        ?>
    </div>
    <!-------Footer----------->
    <?php include 'Footer.php';?>

    </body>
</html>