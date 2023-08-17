<?php
  include('db_conn.php');
  session_start();
  $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
  <title>
    profile
  </title>
  <link rel="stylesheet" type="text/css" href="./css/profile.css">
  <link rel="stylesheet" type="text/css" href="./css/signup.css">

<body>
   <?php include('header.php') ?>
   
</div>
  <?php

  if(empty($username))
  {
    include('profile.php'); 
  }
  else
  { 
  
    $sql = "SELECT * FROM customer WHERE username='$username' "; 
    $query_run = mysqli_query($conn,$sql);
    ?>
    
    <?php $user = mysqli_fetch_assoc($query_run) ?>
     
    
    <div class="container"> 
            <td>  <h1>Profile</h1>

        <table>
        <tr>
              <th>      </th>
              <th>      </th>
        </tr>
        <tr>
       
            <td> <h2> Name </h2></td>           
            <div>   <td> <?=$user['name']?> </td>  </div>
        </tr>       

        <tr>
            <td>    <h2>Username</h2>  </td>
            <div>   <td>   <?=$user['username']?> </td>   </div>
        </tr>   
            <td>    <h2>Email</h2> </td>  
        <div>  <td>   <?=$user['email']?> </td>      </div>
        </tr>       
      

        <tr>      
             <td>     <h2>Phone </h2>    </td>
            <div>  <td>     <?=$user['phone']?>  </td>    </div>
        </tr>  

        <tr>    
            <td>     <h2>Address </h2>    </td>
            <div>   <td>     <?=$user['address']?>  </td>  </div>
        </tr> 

        <tr>  
            <td>     <h2>Zip Code</h2>    </td>
            <div>   <td>     <?=$user['zip_code']?>   </td>   </div>
        </tr>  

      <table> 
  </div>

 <?php }?>
       
  </div>          

 
</body>
</html>




				      
				    
			