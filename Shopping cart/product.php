<?php
error_reporting(E_ALL);

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'online fashion store';

//create connection
$conn = mysqli_connect($servername, $username, $password, $database);

//check connecion
if ($conn->connect_error){
    echo "MySQL Connection Error";
}
$sql = "SELECT * FROM order1";
$result = $conn->query($sql);
$count = mysqli_num_rows($result); // output boolean
if($count == TRUE){
     while($row = $result->fetch_assoc()){
         ?>
         <div class="content1">
       <img src="./IMG/<?php echo $row["Img"] ?>" class="product-img">
       <h4 class="title"><?php echo $row["Title"] ?></h4>
       <h6 class="cart-price"><?php echo $row["Price"] ?></h6>
       <ul>
                    <li><i class="fa fa-star checked"></i></li>
                    <li><i class="fa fa-star checked"></i></li>
                    <li><i class="fa fa-star checked"></i></li>
                    <li><i class="fa fa-star checked"></i></li>
                    <li><i class="fa fa-star checked"></i></li>
                </ul>
                <button class="buy-1 add-cart">Buy Now</button>
         </div>
       <?php
    }
}
    

else{
    echo "No Data in the database";
}
$conn->close();
?>

